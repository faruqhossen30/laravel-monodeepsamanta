<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','thumbnail','video','user_id','category_id', 'edit_user_id'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getNextAttribute(){
        return static::where('id', '>', $this->id)->orderBy('id','asc')->first();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public  function getPreviousAttribute(){
        return static::where('id', '<', $this->id)->orderBy('id','desc')->first();
    }


    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}
