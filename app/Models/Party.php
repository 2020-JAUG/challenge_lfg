<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'idUser', 'idGame'];

    //Una fiesta puede tener muchos post
    public function post (){
        return $this -> hasMany(Post::class);
    }

    public function comment(){
        return $this -> hasMany(Comment::class);
    }

    public function game(){
        return $this -> belongsTo(Game::class);
    }

    public function party_user(){
        return $this -> hasMany(Party_User::class);
    }
}
