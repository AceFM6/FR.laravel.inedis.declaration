<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegleContrat extends Model
{
    use HasFactory;

    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }
}
