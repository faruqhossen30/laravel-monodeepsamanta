<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = ['portfolio_id','category_id'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
