<x-app-layout>
    <div class="py-4 sm:py-6 lg:py-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            <h2 class="uppercase font text-inedis-gray font-medium">{{ $contrat->name }}</h2>
            
            <!--
            <p>Magasins déclarés {{ count($contrat->magasins) }}</p>
            <p>C.A. Non-Ristournable HT total {{ $canr }}</p>
            <p>C.A. Ristournable HT total {{ $car }}</p>

            <form action="">
                <select name="" id="">
                    @foreach ($magasins as $magasin)
                        <option value="{{ $magasin->id }}">{{ $magasin->name }}</option>
                    @endforeach
                </select>
                
                <input type="number" name="" id="">
                <input type="number">
                <input type="number" name="" id="">
                <input type="number" name="" id="">
            </form>

        -->

            <livewire:fournisseur-declaration :contrat="$contrat"/> 
        </div>
    </div>
</x-app-layout>
