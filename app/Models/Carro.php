<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carro extends Model
{
    protected $fillable = [
        'modelo', 
        'ano', 
        'pessoa_id'
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}

