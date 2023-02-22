<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'created_by',
        'created_user_id',
        'status',
        'type'
    ];
    /** 
      * ******** type ********
      * 0 => games
      * 1 => manga
      * 2 => anime
      * 3 => writer's pen
      */

    // public function contributors()
    // {
    //     return $this->hasMany(QuestionsContributers::class,'question_id','id');
    // }
}
