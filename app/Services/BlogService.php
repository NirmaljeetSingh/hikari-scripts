<?php
namespace App\Services;
use App\Models\Blog;

class BlogService 
{
    protected $blog;
    public function __construct($blog = new Blog()){
        $this->blog = $blog;
    }
    public function getBlog($id){
        return $this->blog->find($id);
    }

    public function getBlogs(){
        return $this->blog->get();
    }

    public function getBlogLike($id){
        return Blog::find($id)->likes->where('user_id',auth()->user()->id);
    }
}