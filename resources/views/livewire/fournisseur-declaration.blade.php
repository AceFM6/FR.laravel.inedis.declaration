<div class="md:grid md:grid-cols-2 md:gap-6">
    <div class="md:col-span-1">
        <input type="text" wire:model="search">
        <div class="mt-4">
            @foreach ($magasins as $magasin)
                <div class="bg-white border-b border-gray-200 p-4" wire:click="viewDeclaration({{ $magasin->id }})">
                    <p class="text-inedis-gray">{{ $magasin->id }} - {{ $magasin->name }}</p>
                    <p></p>
                </div>
            @endforeach
        </div>
    </div>
        
    <div class="md:col-span-1 bg-inedis-blue p-4">

        @if (isset($magasin_id))
            <form action="">
                <h1>{{ $magasin_id }}</h1>

                <label for="cm_ca_reel">CA non ristournable HT</label>
                <input type="text" id="cm_ca_reel" name="cm_ca_reel" wire:model="cm_ca_reel" />
                <br>

                <label for="cm_ca_remonte">CA ristournable HT</label>
                <input type="text" id="cm_ca_remonte" name="cm_ca_remonte" wire:model="cm_ca_remonte" />
                <br>

                @for ($i = 1; $i <= 8; $i++) 
                    @if ($contrat->regleContrat['rce_libelle_'.$i] != '') 
                        <label for="cm_ca_{{ $i }}">{{ $contrat->regleContrat['rce_libelle_'.$i] }}</label>
                        <input type="text" id="cm_ca_{{ $i }}" name="cm_ca_{{ $i }}" wire:model="cm_ca_{{ $i }}" />
                    @endif
                    <br>
                @endfor
                
                
            </form>        
        @else
            <p>choisir un magasin</p>
        @endif
            
    </div>
    
</div>

