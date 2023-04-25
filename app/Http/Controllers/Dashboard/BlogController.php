<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Base5Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Traits\uploadFile;
use App\Http\Requests\BlogRequest;
use App\Models\Author;
use App\Models\Tag;

class BlogController extends Base5Controller
{
    use uploadFile;

    public $route_view_name = 'dashboard.blog';



    public function createEditAdditionalData()
    {
        $tags = Tag::get();
        $authors = Author::get();
        return [
            'authors' => $authors,
            'tags' => $tags,
        ];
    }

    public function setCreateResource($request)
    {
        return [
            'slug' => $this->quickRandomString() . '-' . Str::slug($request->title),
            'image' => $this->uploadFile(request: $request, path: 'uploads/blogs'),
            'author_data' => json_encode(Author::find($request->author_id)),
            'read_time' => 2,
            // $this->estimateReadingTime($request->body_text_snippet)
        ];
    }
    public function setUpdateResource($request, $old_image)
    {
        return [
            'slug' => $this->quickRandomString() . '-' . Str::slug($request->title),
            'image' => $this->uploadFile(request: $request, old_image: $old_image, path: 'uploads/blogs'),
            'author_data' => json_encode(Author::find($request->author_id)),
            'read_time' => 2,
            // $this->estimateReadingTime($request->body_text_snippet)
        ];
    }


    public function afterCreate($request, $model)
    {
        $model->tags()->sync($request->tags);
    }
    public function afterUpdate($request, $model)
    {
        $model->tags()->sync($request->tags);
    }


    // function estimateReadingTime($text, $wpm = 200) {
    //     $totalWords = str_word_count(strip_tags($text));
    //     $minutes = floor($totalWords / $wpm);
    //     $seconds = floor($totalWords % $wpm / ($wpm / 60));

    //     return $seconds;
    //     // return array(
    //     //     'minutes' => $minutes,
    //     //     'seconds' => $seconds
    //     // );
    // }
    public static function quickRandomString($length = 4)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
