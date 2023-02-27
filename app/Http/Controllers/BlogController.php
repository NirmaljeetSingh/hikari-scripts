<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog,BlogLike};
use App\Services\BlogService;

class BlogController extends Controller
{
    public function show($id,$name)
    {
        // return $name;
        $id = base64_decode($id);
        $blog = Blog::findOrFail($id);
        return view('pages.blog.details',['blog' => $blog]);
    }
    public function like(Blog $id)
    {
        // return 
        // $service = new BlogService();
        // return $service->getBlogLike($id);
        // $blog = Blog::with('likes')->find($id);
        $like = BlogLike::where([
            ['blog_id',$id->id],
            ['user_id',auth()->user()->id]
        ])->first();
        $message = 'like !';
        // echo "<pre>";
        // print_r($id->toArray());
        // die();
        if(!$like){
            BlogLike::create([
                'blog_id' => $id->id,
                'user_id'=> auth()->user()->id
            ]);
        }
        else{
            $like->delete();
            $message = 'unlike !';
        }
        return redirect()->back()->with('success','Blog '.$message);
    }
}
