<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Base5Controller;
use App\Http\Traits\uploadFile;
use App\Models\BackendProject;
use Illuminate\Http\Request;

class ProjectController extends Base5Controller
{
    use uploadFile;

    public $route_view_name = 'dashboard.project';



    public function setCreateResource($request)
    {
        return [
            'project_image' => $this->uploadFile(request: $request, filename: 'project_image', path: 'uploads/projects'),
        ];
    }
    public function setUpdateResource($request, $old_image)
    {
        return [
            'project_image' => $this->uploadFile(request: $request, old_image: $old_image, filename: 'project_image', path: 'uploads/projects'),
        ];
    }


    public function afterCreate($request, $model)
    {

        // create mockups json after save images
        if ($request->hasfile('mockups')) {
            foreach ($request->file('mockups') as $file) {
                // $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
                // $path = public_path() . '/uploads/mockups';
                $path = $file->store('uploads/mockups', 'public');
                // $file->move($path, $name);
                $mockups[] = $path;
            }
        } else {
            $mockups = NULL;
        }


        // create
        if($model->project_type == 'backend') {
            // validate inputs here
            $this->validate_backend_inputs($request);

            BackendProject::updateOrCreate([
                'project_id' => $model->id
            ], [
                'project_id' => $model->id,
                'description' => $request->description,
                'characteristics_list' => json_encode($request->characteristics_list),
                'tools_list' => json_encode($request->tools_list),
                'mockups' =>  $mockups == null ? null : json_encode($mockups),
                'github_repo_link' => $request->github_repo_link
            ]);
        }

    }


    public function afterUpdate($request, $model)
    {
        // update mockups json after save images
        if ($request->hasfile('mockups')) {
            foreach ($request->file('mockups') as $file) {
                // $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
                // $path = public_path() . '/uploads/mockups';
                $path = $file->store('uploads/mockups', 'public');
                // $file->move($path, $name);
                $mockups[] = $path;
            }
        } else {
            $mockups = NULL;
        }


        // update
        if($model->project_type == 'backend') {
            // validate inputs here
            $this->validate_backend_inputs($request);

            BackendProject::updateOrCreate([
                'project_id' => $model->id
            ], [
                'project_id' => $model->id,
                'description' => $request->description,
                'features_list' => json_encode($request->features_list),
                'characteristics_list' => json_encode($request->characteristics_list),
                'tools_list' => json_encode($request->tools_list),
                'mockups' => $mockups == null ? null : json_encode($mockups),
                'github_repo_link' => $request->github_repo_link
            ]);
        } else {
            $model->backendProject ? $model->backendProject()->delete() : '';
        }
    }


    public function validate_backend_inputs($request){
        $request->validate([
            'project_id' => 'exists:projects,id',
            'description' => 'nullable',
            'characteristics_list' => 'required',
            'tools_list' => 'required',
            'mockups' => 'nullable',
            'github_repo_link' => 'nullable|url'
        ]);
    }
}
