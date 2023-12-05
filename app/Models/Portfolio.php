<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','thumbnail','user_id', 'edit_user_id'];

    public function categories()
    {
        return $this->hasMany(PortfolioCategory::class);
    }
    public function categoryIds()
    {
        $data = $this->hasMany(PortfolioCategory::class);
    }
}
