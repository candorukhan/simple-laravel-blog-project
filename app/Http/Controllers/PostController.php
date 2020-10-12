<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Foundation;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
      $posts=\App\Models\Post::paginate(4);
     
     
      
        return view('post.index',compact('posts'));
    }
     public function show($id)
     {
        $post=\App\Models\Post::where('id',$id)->first();
        $post1=$post->body;
        $eski="<p>";
        $eski1="</p>";
        $yeni=" ";
       

       
      //   $post2=stristr($post1,"<strong>");
        $post2=explode("<strong>",$post1); // cümlemiz boşluklardan bölünecek
        
        $post3=explode("</strong>", $post2[1]);
        $post4=explode("*",$post3[0]);
        $post2[0] = str_replace($eski, $yeni, $post2[0]);
        $post3[1] = str_replace($eski1, $yeni, $post3[1]);
        $post5=array(
           $post2[0],
           $post4[0],
           $post4[1],
           $post3[1]
        );
        
        
     
        
      
        return view('post.show',compact('post5'));
     }
    // public function show(Post $post)
    // {
        
    //     return view('post.show',compact('post'));
    // }
    public function create()
     {
        
        return view('post.create');
     }
     public function store()
     {
        request()->validate([
           'title'=>'required',
           'body'=>'min:3'

        ]);
         \App\Models\Post::create([
           'title'=>request()->title,
           'body'=>request()->body,
           'user_id'=>auth()->id()


        ]);
        return view('post.store');
     }
}