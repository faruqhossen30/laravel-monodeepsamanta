<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','short_description','project_description','description','thumbnail','category_id','user_id','meta_title','meta_description','meta_keyword'];
}
