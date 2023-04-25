<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Base5Controller;
use App\Http\Traits\uploadFile;
use Illuminate\Http\Request;

class AuthorController extends Base5Controller
{
    use uploadFile;

    public $route_view_name = 'dashboard.author';


    public function setCreateResource($request)
    {
        $socials = $request->only('linkedin','twitter', 'github');
        return [
            'avatar' => $this->uploadFile(request: $request, filename: 'avatar', path: 'uploads/authors'),
            'socials' => json_encode($socials),
        ];
    }
    public function setUpdateResource($request, $old_image)
    {
        $socials = $request->only('linkedin','twitter', 'github');
        return [
            'avatar' => $this->uploadFile(request: $request, old_image: $old_image, filename: 'avatar', path: 'uploads/authors'),
            'socials' => json_encode($socials),
        ];
    }
}
