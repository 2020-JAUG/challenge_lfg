<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    //ENCAPSULAMOS LOS ATRIBUTOS
    protected $fillable = ['title', 'thumbnail_url', 'user_id'];

    public function party ()
    {
        return $this ->hasMany(Party::class);
    }
}
