<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['color','fuel','price','plate','doors','transmission','fuel'];

    public function scopeFilter($query){
        if(request('colour')){
            $query
               ->where('color',request('colour'));
        }
        if(request('price')){
            $query
               ->where('price',request('price'));
        }
        if(request('plate')){
            $query
               ->where('plate',request('plate'));
        }
        if(request('transmission')){
            $query
               ->where('transmission', request('transmission'));
        }
        if(request('fuel')){
            $query
               ->where('fuel', request('fuel'));
        }

    }
}
