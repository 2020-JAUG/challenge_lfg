<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'idUser', 'idGame'];

    //UNA PARTY PUEDE TENER MUCHOS POSTS
    public function post (){
        return $this -> hasMany(Post::class);
    }

    //UNA PARTY SOLO PUEDE TENER UN JUEGO
    public function game(){
        return $this -> belongsTo(Game::class);
    }
    //RELACION DE MUCHOS A MUCHOS ENTRE USERS Y PARTIES
    public function party_user(){
        return $this -> hasMany(Party_User::class);
    }
}
