<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function magasins()
    {
        return $this->belongsToMany(Magasin::class)
            ->withPivot('cm_ca_reel', 'cm_ca_remonte', 'cm_ca_1', 'cm_ca_2', 'cm_ca_3', 'cm_ca_4', 'cm_ca_5', 'cm_ca_6', 'cm_ca_7', 'cm_ca_8' )
            ->withTimestamps();
    }
}
