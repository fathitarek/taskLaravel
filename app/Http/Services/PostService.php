<?php

namespace App\Http\Services;

use App\Models\Post;

class PostService
{

    private  $baseModel;
    public function __construct()
    {
        $this->baseModel = new Post();
    }

    public function store($request)
    {
        try {
            $data =  $this->baseModel->create([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return $data;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
