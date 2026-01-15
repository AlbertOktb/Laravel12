<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.posts.index', compact('posts'));

    }

    public function show(Post $post){
        $post=PostResource::make($post)->resolve();
        return view('admin.posts.show', compact('post'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreRequest $request)
    {
        $data= $request->validated();
        $data['user_id'] = auth()->user()->id;
        $post=PostService::create($data);
        return view('admin.posts.create', compact('post'));
    }


}
