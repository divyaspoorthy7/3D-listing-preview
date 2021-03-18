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

                        <img class="w-1/2 p-10" src="https://images.traum-ferienwohnungen.de/114/9057608/46/bungalow-steinhuder-meer-ausstattung-2.jpg" alt="Sunset in the mountains">

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
                            <div class="flex justify-start">

                                <img class="w-1/2 p-10" src="https://images.traum-ferienwohnungen.de/114/9057608/46/bungalow-steinhuder-meer-ausstattung-2.jpg" alt="Sunset in the mountains">

                            </div>
                        </div>

                    </div>

                </div>




</x-app-layout>
