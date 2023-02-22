<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

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
        echo "<pre>";
        print_r($id);
        die();
    }
}
