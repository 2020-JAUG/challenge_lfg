<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//TABLA PIVOTE ENTRE MUCHOS A MUCHOS
class PartyUser extends Model
{
    use HasFactory;
    protected $fillable = ['idUser', 'idParty'];
    //LA TABLA PARTY_USER, PERTENECE A UN USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
