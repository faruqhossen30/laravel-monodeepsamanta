<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSoftware extends Model
{
    use HasFactory;
    protected $fillable = ['post_id','software_id'];
}
