<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //using fillable to prevent mass assign
//    protected $fillable = ['title', 'excerpt', 'body', 'id'];


    //using guarded to prevent mass assignment
    // Except id all field is fillable
    protected $guarded = ['id'];


}
