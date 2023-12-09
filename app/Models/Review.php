<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['name','rating','date','thumbnail','review','review_type_id','revie_url','user_id'];

    protected $casts = [
        'date' => 'datetime'
    ];

    public function type()
    {
        return $this->hasOne(ReviewType::class,'id', 'review_type_id');
    }


}
