<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::get();
     
    }
    public function ById($IdPost){
        return Post::find($IdPost);
      
       
    }
    public function Save(Request $req){
$posts = Post::create($req->all());
return response()-> json(  $posts,201);

    }
}
