<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relagtions\BelongsTo;

class Sim extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function phone():BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
}
