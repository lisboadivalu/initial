<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    function user(){
        return $this->belongsTo(User::class);
    }

    function admin(){
        return $this->belongsTo(Admin::class);
    }

    protected $table = "posts";

    protected $fillable = [
        'titulo',
        'img',
        'img_size', 
        'texto',
        'genero',
        'user_id'
    ];
}
