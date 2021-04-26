<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    function admin(){
        return $this->belongsTo(Admin::class);
    }

    function genero(){
        return $this->belongsTo(Genero::class);
    }

    protected $table = "posts";

    protected $fillable = [
        'titulo',
        'texto',
        'img',
        'img_size', 
        'genero',
        'user_id'
    ];
}
