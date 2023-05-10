<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Http\Resources\PostsResource;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        return PostsResource::collection(Posts::all());
    }

    public function store(PostsRequest $request)
    {
        return new PostsResource(Posts::create($request->validated()));
    }

    public function show(Posts $posts)
    {
        return new PostsResource($posts);
    }

    public function update(PostsRequest $request, Posts $posts)
    {
        $posts->update($request->validated());

        return new PostsResource($posts);
    }

    public function destroy(Posts $posts)
    {
        $posts->delete();

        return response()->json();
    }
}
