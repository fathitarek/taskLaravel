<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PostService;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    private  $post_service;

    public function __construct(PostService $post_service)
    {
        $this->post_service = $post_service;
    }
   
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $post = $this->post_service->store($request);

        return response()->json([
            'data' => $post,
            'status' => 200,
            'message' => 'success',
        ]);
    }


}
