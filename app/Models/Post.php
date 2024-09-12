<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;   

class Post extends Model
{
    protected $fillable = ['titulo', 'contenido'];
    use HasFactory;
    protected $table = "post";
    
    function titulo() : Attribute {
        return Attribute::make(
            set: function($value){
                 return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
                
            }
        );
        
    }
}
