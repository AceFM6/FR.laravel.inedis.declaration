<x-app-layout>
    <div class="py-4 sm:py-6 lg:py-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            @foreach (Auth::user()->contrats as $contrat)
                {{ $contrat->name }}
                <br>
            @endforeach

        </div>
    </div>
</x-app-layout>
