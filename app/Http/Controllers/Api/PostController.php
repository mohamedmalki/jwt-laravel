<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    	return new PostResource(Post::paginate());
    }

    public function slef()
    {

    	$user = $this->authUser();

    	return $user->posts;
    }

    public function store(Request $request)
    {
    	$post = $request->only(['title','description']);

    	$user = $this->authUser();

    	$user->posts()->create($post);

    	return response()->json(['post'=>$post],200);

    }
}
