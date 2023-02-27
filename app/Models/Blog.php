<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','user_id','admin_id','status','type','featured'];

    /**
     * ********* status **********
     * 0 => active
     * 1 => closed
     */

     /**
      * ******** type ********
      * 0 => games
      * 1 => manga
      * 2 => anime
      * 3 => write's pen
      */

    protected $appends = [
        'is_liked'
    ];
    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }
    protected function isLiked(): Attribute
    {
        $liked = false;
        try {
            if(BlogLike::where([['blog_id',$this->id],['user_id',auth()->user()->id]])->exists()){
                $liked = true;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return Attribute::make(
            get: fn ($value) => $liked,
        );
    }

    public function images()
    {
        return $this->hasMany(BlogImages::class,'blog_id','id');
    }
    public function admin()
    {
        return $this->hasOne(Admin::class,'id','admin_id');
    }
    public function scopeFeatureGame($qry, $type)
    {
        return $qry->where([['featured','yes'],['type',$type]]);
    }
    public function scopeNotFeatureGame($qry, $type)
    {
        return $qry->where('type',$type);
        // return $this->where([['featured',0],['type',0]]);
    }
    public function likes()
    {
        return $this->hasMany(BlogLike::class,'blog_id','id');
    }
    public function count_user_like($user_id)
    {
        return BlogLike::where('user_id',$user_id)->where('blog_id',$this->attributes['id'])->count();
    }
}
