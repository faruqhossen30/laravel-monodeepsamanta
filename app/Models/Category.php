<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'thumbnail', 'user_id','edit_user_id'];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class, 'portfolio_categories');
    }

}
