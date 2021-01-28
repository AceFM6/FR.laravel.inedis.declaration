<x-app-layout>
    <div class="py-4 sm:py-6 lg:py-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            <h2 class="uppercase font text-inedis-gray font-medium">{{ $contrat->name }}</h2>

            <livewire:fournisseur-declaration :contrat="$contrat"/> 
        </div>
    </div>
</x-app-layout>
