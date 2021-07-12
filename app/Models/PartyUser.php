<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Esta es la tabla pivote para ER muchos a muchos
class PartyUser extends Model
{
    use HasFactory;
    protected $fillable = ['idUser', 'idParty'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
