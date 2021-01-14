<x-app-layout>
    <div class="py-4 sm:py-6 lg:py-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            
            <!-- affichage des contrats de l'utilisateur connecté -->
            @if (count(Auth::user()->contrats) == 1)
                1 contrat
            @elseif (count(Auth::user()->contrats) > 1)
                plusieurs contrat
            @else
                Pas de contrat à déclarer
            @endif
            <ul>
                @foreach (Auth::user()->contrats as $contrat)
                    <li>
                        {{ $contrat->id }}
                        {{ $contrat->name }}
                    </li>
                @endforeach
            </ul>

            <!-- affichage des magasins disponible -->

            

            <!-- affichage des contrats magasins déjà existant -->

        </div>
    </div>
</x-app-layout>
