<div>
    <div class="max-w-full mx-auto py-2 px-4 sm:px-6 lg:px-10 bg-white shadow-xl">
        <h2 class="text-sm font-medium uppercase text-inedis-blue">Déclaration {{ $contrat->name }}</h2>
    </div>

    <div class="bg-gradient-to-r from-gray-400 to-inedis-blue  p-8 mx-auto sm:px-6 lg:px-10">        
        <div class="text-white sm:flex justify-around align-middle">
            <div class="pb-6 text-center sm:pb-0">
                <p class="sm:text-3xl text-xl">{{ number_format($CAnonRistournable, 2, ',', ' ').' €' }}</p>
                <p class="text-xs uppercase">CA non-ristournable HT</p>
            </div>

            <div class="pb-6 text-center sm:pb-0">
                <p class="sm:text-3xl text-xl">{{ number_format($CARistournable, 2, ',', ' ').' €' }}</p>
                <p class="text-xs uppercase">CA ristournable HT</p>
            </div>
            
            <div class="pb-6 text-center sm:pb-0">
                <p class="sm:text-3xl text-xl">{{ count($contrat->magasins) }}</p>
                <p class="text-xs uppercase">magasins déclarés</p>
            </div>      
        </div>
    </div>

    <div class="md:grid md:grid-cols-2 pt-10 md:gap-6 mx-auto sm:px-6 lg:px-10">    
        <div class="md:col-span-1">
            <input class="text-inedis-gray border-b-2 p-4 border-inedis-blue w-full" placeholder="Rechercher magasin" type="text" wire:model="search">
            <div>
                @if (count($search_magasins) != 0)
                    @foreach ($search_magasins as $magasin)
                        @if ($magasin->id == $magasin_id)
                            <div class="bg-gradient-to-r from-gray-400 to-inedis-blue border-gray-200 p-4 flex justify-between items-center" wire:click="viewDeclaration({{ $magasin->id }})">
                                <p class="text-white uppercase text-xs">{{ $magasin->id }} - {{ $magasin->name }}</p><p class="text-white uppercase text-xs"><i class="fas fa-arrow-right transform sm:rotate-0 rotate-90"></i></p>
                            </div>
                        @else
                            <div class="text-inedis-gray bg-white border-b border-gray-100 p-4 hover:bg-gray-100 " wire:click="viewDeclaration({{ $magasin->id }})">
                                <p class="uppercase text-xs">{{ $magasin->id }} - {{ $magasin->name }}</p>
                            </div>
                        @endif  
                    @endforeach
                @else
                    <div class="text-inedis-gray bg-white border-b border-gray-100 p-4 hover:bg-gray-100 " wire:click="viewDeclaration({{ 0 }})">
                        <p class="uppercase text-sm font-medium">Pas de magasins de ce nom</p>
                    </div>
                @endif

               
            </div>
        </div>
            
        <div class="md:col-span-1">
            <div class="bg-white p-4">
                @if (isset($magasin_id))
                    <div class="text-inedis-gray">
                        <div class="mb-4 uppercase">
                            <h1 class="text-sm font-medium text-inedis-blue mb-4"><i class="fas fa-store"> </i> {{ $select_magasin->name }}</h1>
                            <p class="text-xs text-gray-400">{{ $select_magasin->adr_ville }}</p>
                            <p class="text-xs text-gray-400">Siret {{ $select_magasin->mag_siret }}</p>
                            <p class="text-xs text-gray-400">Siren {{ $select_magasin->mag_siren }}</p>
                        </div>

                        <label for="cm_ca_reel" class="text-xs uppercase">CA non ristournable HT</label>
                        <br>
                        <input type="text" id="cm_ca_reel" name="cm_ca_reel" wire:model="cm_ca_reel" class="bg-gray-100 w-full p-2 mb-4  text-xs" />
                        <br>

                        <label for="cm_ca_remonte" class="text-xs uppercase">CA ristournable HT</label>
                        <br>
                        <input type="text" id="cm_ca_remonte" name="cm_ca_remonte" wire:model="cm_ca_remonte" class="bg-gray-100 w-full p-2 mb-4  text-xs"/>
                        <br>

                        @for ($i = 1; $i <= 8; $i++) 
                            @if ($contrat->regleContrat['rce_libelle_'.$i] != '') 
                                <label for="cm_ca_{{ $i }}" class="text-xs uppercase">{{ $contrat->regleContrat['rce_libelle_'.$i] }}</label>
                                <br>
                                <input type="text" id="cm_ca_{{ $i }}" name="cm_ca_{{ $i }}" wire:model="cm_ca_{{ $i }}" class="bg-gray-100 w-full p-2 mb-4 text-xs"/>
                                <br>
                            @endif                
                        @endfor
                        
                    </div>    
                @else
                    <div class=" h-6 sm:flex flex-col items-center justify-center hidden">
                        <p class="text-inedis-gray text-xs uppercase"><i class="fas fa-arrow-left mr-10"></i>selectionnez un magasin</p>
                    </div>
                    
                @endif
            </div>
            
                
        </div>
        
    </div>

</div>



