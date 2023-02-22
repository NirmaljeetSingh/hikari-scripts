<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bio',
        'image',
        'image_setting',
        'cover_image',
        'cover_setting',
        'quora',
        'youtube',
        'instagram',
        'discord',
        'reddit',
        'twitter',
        'my_anime_list'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
