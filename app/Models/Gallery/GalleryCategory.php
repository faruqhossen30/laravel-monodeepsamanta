<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','author_id'];
}
