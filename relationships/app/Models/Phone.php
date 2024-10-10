<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;  //Importar
use Illuminate\Database\Eloquent\Relations\HashOne;    //Importar
use Illuminate\Database\Eloquent\Relations\HashMany; 

class Phone extends Model
{
    use HasFactory;

    protected $guard = [];

    public function user(): BelongsTo    //relaciones pertene a
    {
        return $this->belongsTo(User::class);
    }
 
    public function sim(): HasMany    // relacion tiene una
    {
        return $this->hasMany(Sim::class);
    }
}
