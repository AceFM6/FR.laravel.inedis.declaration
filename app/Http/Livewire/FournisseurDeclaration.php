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
    public $magasin_id;
    public $cm_ca_reel;
    public $cm_ca_remonte;
    public $cm_ca_1;
    public $cm_ca_2;
    public $cm_ca_3;
    public $cm_ca_4;
    public $cm_ca_5;
    public $cm_ca_6;
    public $cm_ca_7;
    public $cm_ca_8;

    public function viewDeclaration($magasin_id)
    {
        $this->magasin_id = $magasin_id;
        foreach($this->contrat->magasins as $magasin)
        {
            if($magasin->id == $this->magasin_id)
            {   
                $pivot = $magasin->pivot;          
            }
        }

        if(isset($pivot))
        {
            $this->cm_ca_reel = $pivot['cm_ca_reel'];
            $this->cm_ca_remonte = $pivot['cm_ca_remonte'];
            $this->cm_ca_1 = $pivot['cm_ca_1'];
            $this->cm_ca_2 = $pivot['cm_ca_2'];
            $this->cm_ca_3 = $pivot['cm_ca_3'];
            $this->cm_ca_4 = $pivot['cm_ca_4'];
            $this->cm_ca_5 = $pivot['cm_ca_5'];
            $this->cm_ca_6 = $pivot['cm_ca_6'];
            $this->cm_ca_7 = $pivot['cm_ca_7'];
            $this->cm_ca_8 = $pivot['cm_ca_8'];
        } 
        else {
            $this->cm_ca_reel = NULL;
            $this->cm_ca_remonte = NULL;
            $this->cm_ca_1 = NULL;
            $this->cm_ca_2 = NULL;
            $this->cm_ca_3 = NULL;
            $this->cm_ca_4 = NULL;
            $this->cm_ca_5 = NULL;
            $this->cm_ca_6 = NULL;
            $this->cm_ca_7 = NULL;
            $this->cm_ca_8 = NULL;
        }
    }

    public function render()
    {

        $CAnonRistournable = 0;
        $CARistournable = 0;
        foreach($this->contrat->magasins as $magasin)
        {
            $CARistournable += $magasin->pivot->cm_ca_remonte;
            $CAnonRistournable += $magasin->pivot->cm_ca_reel;
        }

        $select_magasin = Magasin::where('id', '=', $this->magasin_id)->first();

        $search = '%' . $this->search . '%';
        $search_magasins = Magasin::where('name', 'LIKE', $search)
            ->orWhere('id', 'LIKE', $search)
            ->take(10)
            ->get();

        return view('livewire.fournisseur-declaration')
            ->with('search_magasins', $search_magasins)
            ->with('select_magasin', $select_magasin)
            ->with('CARistournable', $CARistournable)
            ->with('CAnonRistournable', $CAnonRistournable);  
    }
}
