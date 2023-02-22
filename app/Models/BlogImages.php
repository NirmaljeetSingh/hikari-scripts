<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id','image'];
    public function blog()
    {
        return $this->hasOne(Blog::class,'id','blog_id');
    }
}
