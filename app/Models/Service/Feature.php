<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'value', 'user_id'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
