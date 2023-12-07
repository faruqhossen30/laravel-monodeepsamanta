<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'category_id', 'user_id', 'meta_title', 'meta_description','meta_keyword'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
