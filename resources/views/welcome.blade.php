<x-app-layout>



    <x-slot name="header">

        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                {{ __('Property Overview Demo') }}
            </h2>

            <div>
                <a href="/api/owner" >
                    <x-button >Home owner</x-button>
                </a>
                <a href="/guest">
                    <x-button>Guest</x-button>
                </a>

            </div>

        </div>
    </x-slot>


    <div class="flex justify-center mt-40">
        <h1>Welcome to Property Preview Demo</h1>
    </div>

</x-app-layout>
