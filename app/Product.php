<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'name','image','category_id','description','short_description','price','weight'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
