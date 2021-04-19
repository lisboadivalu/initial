<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    function user(){
        return $this->hasMany(User::class);
    }

    function admin(){
        return $this->hasMany(Admin::class);
    }

    function tecnologia(){
        return $this->hasMany(Tecnologia::class);
    }

    function esport(){
        return $this->hasMany(Esport::class);
    }

    function cripto(){
        return $this->hasMany(Cripto::class);
    }
}
