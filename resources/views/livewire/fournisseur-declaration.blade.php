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
        {{ $pivot }}
    </div>
    
</div>
