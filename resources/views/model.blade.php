<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                {{ __('Homeowner Area') }}
            </h2>

            <div>
                <a href="/" >
                    <x-button >Guest</x-button>
                </a>
                <a>
                    <x-button>3d Overview</x-button>
                </a>

            </div>
        </div>
    </x-slot>

<div class="py-12">
    <p class="ml-5 text-3xl">3d model</p>
    <div class="mx-w-full mx-auto sm:px-6 lg:px-8">

        <div class="mx-w-full bg-white overflow-hidden shadow-sm sm:rounded-lg m-2 cursor-pointer">
            <div class="p-6 bg-white border-b border-gray-200">

                <model-viewer src="{{ asset('3d/appartamento3.gltf') }}" camera-controls auto-rotate></model-viewer>

            </div>

        </div>

    </div>

</div>


</x-app-layout>
