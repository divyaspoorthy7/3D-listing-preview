<x-app-layout>



    <x-slot name="header">

        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                {{ __('Property Details') }}
            </h2>

        </div>
    </x-slot>


    <div class="py-12">
        <p class="ml-5 text-3xl">360 overview</p>
        <div class="mx-w-full mx-auto sm:px-6 lg:px-8">

            <div class="mx-w-full bg-white overflow-hidden shadow-sm sm:rounded-lg m-2 cursor-pointer">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-start">
                        <script src="https://aframe.io/releases/0.7.1/aframe.min.js"></script>


                        <div id="myEmbeddedScene">
                            <a-scene>

                                <a-camera></a-camera>
                                <a-sky src="{{ asset('uploads/name.jpeg') }}"></a-sky>
                            </a-scene>
                        </div>



                        <div class="m-10">

                            <!-- Name -->
                                <div>
                                   <p class="text-5xl">Villa property</p>

                                </div>

                                <!-- Location -->
                                <div class="mt-4">
                                    <x-label for="location" :value="__('Location')" />

                                </div>

                                <!-- Max Guests -->
                                <div class="mt-4">
                                    <x-label for="max_guests" :value="__('Max Guests')" />

                                </div>
                                <div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


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
