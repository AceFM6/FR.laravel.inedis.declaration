<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Magasin;
use App\Models\Contrat;
use Illuminate\Http\Request;

class FournisseurDeclaration extends Component
{
    public $search;
    public $contrat;
    public $idMagasin;

    public function viewDeclaration($idMagasin)
    {
        $this->idMagasin = $idMagasin;
    }

    public function render()
    {
        $pivot = null;
 
        foreach($this->contrat->magasins as $magasin)
        {
            if($magasin->id == $this->idMagasin)
            {   
                $pivot = $magasin->pivot;          
            }
        }

        $search = '%' . $this->search . '%';
        $magasins = Magasin::where('name', 'LIKE', $search)
            ->orWhere('id', 'LIKE', $search)
            ->get();

        return view('livewire.fournisseur-declaration')
            ->with('magasins', $magasins)
            ->with('pivot', $pivot);
    
    }
}
