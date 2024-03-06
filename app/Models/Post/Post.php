<?php

namespace App\Models\Post;

use App\Models\Category;
use App\Models\Software;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','short_description','project_description','description','thumbnail','category_id','user_id','meta_title','meta_description','meta_keyword','status'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }
    public function softwares()
    {
        return $this->belongsToMany(Software::class, 'post_software');
    }
}
