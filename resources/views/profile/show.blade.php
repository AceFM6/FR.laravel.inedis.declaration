<x-app-layout>
    <div>
        <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-10">
 
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
