<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Magasin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeclarationController extends Controller
{
    public function show()
    {
        if (count(Auth::user()->contrats) == 1) 
        {
            foreach (Auth::user()->contrats as $contrat) 
            {
                $contrat_id = $contrat->id;
            }
            return redirect('declaration/'.$contrat_id);
        } 
        return view('declaration');
    }

    public function showDetails($id)
    {
        $contrat = Contrat::findorFail($id);

        $car = 0;
        $canr = 0;
        foreach($contrat->magasins as $magasin)
        {
            $car += $magasin->pivot->cm_ca_remonte;
            $canr += $magasin->pivot->cm_ca_reel;
        }

        $magasins = Magasin::all();
        $idContrat = $id;
        return view('declaration-detail')
            ->with('contrat', $contrat)
            ->with('canr', $canr)
            ->with('car', $car)
            ->with('magasins', $magasins);
    }


}
