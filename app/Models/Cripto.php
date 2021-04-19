<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cripto extends Model
{
    use HasFactory;

    function post(){
        return $this->belongsTo(Post::class);
    }
}
