<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //ENCAPSULAMOS LOS ATRIBUTOS
    protected $fillable = ['title', 'description', 'user_id'];

    //UN COMMENTARIO, PERTENECE A UN POST
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
