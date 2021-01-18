<x-app-layout>
    <div class="py-4 sm:py-6 lg:py-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            
            @if (count(Auth::user()->contrats) > 1)
                @foreach (Auth::user()->contrats as $contrat)
                    <a href="{{ route('declaration-detail', ['id' => $contrat->id ]) }}">{{ $contrat->name }}</a>
                    <br>
                @endforeach
            @else
                Pas de contrat à déclarer
            @endif
        </div>
    </div>
</x-app-layout>
