<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','thumbnail','user_id'];
}
