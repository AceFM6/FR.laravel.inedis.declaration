<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Magasin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeclarationController extends Controller
{
    public function show()
    {
        if (count(Auth::user()->contrats) == 1) {
            foreach (Auth::user()->contrats as $contrat) {
                $contrat_id = $contrat->id;
            }
            return redirect('declaration/'.$contrat_id);
        } 
        return view('declaration');
    }

    public function showDetails($id)
    {
        return view('declaration-detail')->with('id', $id);
    }
}
