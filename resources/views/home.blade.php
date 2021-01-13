<x-app-layout>
    <div class="max-w-full py-4 lg:py-10 mx-auto sm:px-6 lg:px-10 mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-2 md:gap-6">
            
            <x-jet-section-title>
                <x-slot name="title">{{ __('Bienvenue sur le portail de déclaration') }}</x-slot>
                <x-slot name="description">{{  __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 
                sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
                reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.') }}</x-slot>
            </x-jet-section-title>

            <div class="mt-5 md:mt-0 md:col-span-1 bg-white py-5 px-4 min-h-full">
                <div class="text-inedis-gray text-center">
                    <div>
                        <h3 class="text-lg font text-inedis-gray font-medium">
                            {{ __('Commencer vos déclarations') }}
                        </h3>
                        <x-jet-button class="ml-4">
                            {{ __('Declarer') }}
                        </x-jet-button>
                    </div>

                    <div class="min-h-full">
                        <h3 class="text-lg font text-inedis-gray font-medium">
                            {{ __('Importer vos déclarations') }}
                        </h3>
                        <x-jet-button class="ml-4">
                            {{ __('Importer') }}
                        </x-jet-button>
                    </div> 
                </div>
            </div>

        </div>   

    </div>
</x-app-layout>
