<?php

namespace App\Http\Controllers;

use App\Exports\BaseExport;
use App\Http\Requests\BaseRequest\BaseRequest;
use App\Http\Resources\BaseResource\BaseResource;
use App\Imports\BaseImport;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Traits\uploadFile;
use App\Models\BaseModel\BaseModel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base5Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, uploadFile;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $model;    // public $model = "App\Models\Category";
    public $resource;
    protected $request;    // public $request = "App\Http\Requests\CategoryRequest";
    public $model_text;    // the model name to show in Alert messages // نادر الإستخدام
    public $paginate = 5;

    public $route_view_name = null;
    public $route_name = null;
    public $view_name = null;



    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        if (!isset($this->model) && class_exists($this->getDefaultModel()))
            $this->model = $this->getDefaultModel();

        if (!isset($this->resource) && class_exists($this->getDefaultResource()))
            $this->resource = $this->getDefaultResource();
    }





    public function index()
    {
        $model = $this->indexQuery();
        $models = $this->resource::collection($model)->resolve();
        $additionalData = $this->indexAdditionalData();
        return view($this->route_view_name.'.index', compact('model', 'models', 'additionalData'));
    }
    public function indexQuery() {
        return $this->getModel()::search(request()->query())->paginate($this->paginate);
    }


    public function create()
    {
        $model = new $this->model;
        $additionalData = $this->createAdditionalData();
        return view($this->route_view_name.'.create', compact('model', 'additionalData'));
    }
    public function store(Request $request)
    {
        $request->validate($this->getRequest()->rules(), $this->getRequest()->messages());
        $model = $this->getModel()::create($this->setCreateAttributes($request));
        if($model)
            $this->afterCreate($request, $model);

        // PRG => Post Redirect Get
        if (!$model) {
            return redirect()->route($this->route_view_name.'.index')->with('fail', 'Something Went Wrong !!');
        }
        return redirect()->route($this->route_view_name.'.index')->with('success', $this->printModelText() . ' Created Successfully');
    }


    public function show($id)
    {
        $object = $this->getModel()::find($id);
        $objectResource = $this->getResource($object);
        // $objectResource = new ($this->resource)($object);
        $model = $objectResource->resolve();
        $additionalData = $this->showAdditionalData($id);
        if (!$model) {
            return redirect()->route($this->route_view_name.'.index')->with('fail', $this->printModelText() . ' Doesn`t Exist');
        }
        return view($this->route_view_name.'.show', compact('model', 'additionalData'));
    }




    public function edit($id)
    {
        // $model = $this->getModel()::find($id);

        $object = $this->getModel()::find($id);
        $objectResource = $this->getResource($object);
        $model = $objectResource->resolve();

        if (!$model) {
            return redirect()->route($this->route_view_name.'.index')->with('fail', $this->printModelText() . ' Doesn`t Exist');
        }
        $additionalData = $this->editAdditionalData($id);
        return view($this->route_view_name.'.edit', compact('model', 'additionalData'));
    }

    public function update(Request $request, $id)
    {
        $model = $this->getModel()::find($id);
        if (!$model) {
            return redirect()->route($this->route_view_name.'.index')->with('fail', $this->printModelText() . ' Doesn`t Exist');
        }


        // get just one and the first one image in images array from model
        // $old_image = $model->getImages()[0];
        // $old_image = $model[app($this->getModel())->getImages()[0]];
        $old_image = count($model->getImages()) == 1 ? $model[$model->getImages()[0]] : $model->image;

        $request->validate($this->getRequest()->rules($id), $this->getRequest()->messages());
        $newModel = $model->update($this->setUpdateAttributes($request, $old_image));

        if($newModel)
            $this->afterUpdate($request, $model);

        if ($newModel) {
            return redirect()->route($this->route_view_name.'.index')->with('success', $this->printModelText() . ' Updated Successfully');
        }
    }






    public function destroy($id)
    {
        $model = $this->getModel()::find($id);
        if (!$model) {
            return redirect()->route($this->route_view_name.'.index')->with('fail', $this->printModelText() . ' Doesn`t Exist');
        }
        $deleted = $model->delete();

        if ($deleted) // DO NOT check if the image was deleted, it will case an error
            return redirect()->route($this->route_view_name.'.index')->with('success', $this->printModelText() . ' Deleted Successfully');
    }
    public function deleteRelations($model)
    {
        $images = app($this->getModel())->getImages();
        foreach ($images as $image) {
            $deleted = $this->deleteFile($model[$image]);
        }
        // $deleted = $model->parts()->delete();
        return $deleted ?? null;
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // define the attributes as key => value to send it to database in Create & Update
    // same as Resource
    public function setCreateAttributes($request)
    {
        return array_merge($this->setResource($request), $this->setCreateResource($request));
    }
    public function setUpdateAttributes($request, $old_image)
    {
        return array_merge($this->setResource($request), $this->setUpdateResource($request, $old_image));
    }
    // use it when Update has new different data than normal [e.g. 'image' => uploadFile(request, path)]
    public function setCreateResource($request)
    {
        return $this->setCreateUpdateResource($request);
    }
    // use it when Update has new different data than normal [e.g. 'image' => uploadFile(request, oldimage, path)]
    public function setUpdateResource($request, $old_image)
    {
        return $this->setCreateUpdateResource($request, $old_image);
    }
    // use it when Update & Create has new different data than normal [e.g. 'parts' => $model->parts->name]
    public function setCreateUpdateResource($request, $old_image = null)
    {
        // return null;
        return [];
    }
    // use it when create & update has the same data, [default = $request->all()]
    public function setResource($request)
    {
        return $request->all();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // return some variabels in functions [ GETTERS ]
    public function getModel()
    {
        return $this->getDefaultModel();
    }
    public function getRequest()
    {
        return $this->getDefaultRequest();
    }
    public function getResource($object)
    {
        return new ($this->resource)($object);
    }

    public function getDefaultModel()
    {
        $custom_model = "App\\Models\\" . str_replace(["Controllers", "Controller"], ["", ""], get_class_name($this));
        return class_exists($custom_model) ? $custom_model : BaseModel::class;
    }
    public function getDefaultRequest()
    {
        $custom_request = "App\\Http\\Requests\\" . str_replace(["Controllers", "Controller"], ["Requests", "Request"], get_class_name($this));
        $request = class_exists($custom_request) ? $custom_request : BaseRequest::class;
        return new $request;
    }
    public function getDefaultResource()
    {
        $custom_resource = "App\\Http\\Resources\\" . str_replace(["Controllers", "Controller"], ["Resources", "Resource"], get_class_name($this));
        return class_exists($custom_resource) ? $custom_resource : BaseResource::class;
    }


    public function printModelText()
    {
        $model = str_replace(["Controllers", "Controller"], ["", ""], get_class_name($this));
        $basename = basename($model);
        $model_name = preg_replace('/(?<!\ )[A-Z]/', ' $0', $basename);
        return isset($this->model_text) && $this->model_text != null ? $this->model_text : $model_name;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Send Additional Data To View

    public function indexAdditionalData()
    {
        return null;
    }
    public function createAdditionalData()
    {
        return $this->createEditAdditionalData();
    }
    public function editAdditionalData($id)
    {
        return $this->createEditAdditionalData();
    }
    public function createEditAdditionalData(){
        return null;
    }
    public function showAdditionalData($id)
    {
        return null;
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Operation befor saving the new model

    public function afterCreate($request, $model)
    {
        return $this->saving($request, $model);
    }
    public function afterUpdate($request, $model)
    {
        return $this->saving($request, $model);
    }
    public function saving($request, $model)
    {
        // dd($request);
        return null;
    }

}
