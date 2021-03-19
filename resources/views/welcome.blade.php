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
                        <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
                        <body class="antialiased">

                        <a-scene >
                            <a-sky src="{{ asset('uploads/name.jpeg') }}"></a-sky>
                            <a-plane button-interaction-handler position="3 3 -9" height="2" width="5" color="#E21D2D" position="0 0 -4">
                                <a-text value="Trip to China" scale="2 2 2" align="center" ></a-text>
                            </a-plane>
                        </a-scene>


                        </body>
{{--                        <img src="{{ asset('uploads/name.jpeg') }}" alt="Image not found">--}}
{{--                        <iframe width="600px" height="600px" frameborder="0"--}}
{{--                                src="{{ asset('uploads/name.jpeg') }}">--}}

{{--                        </iframe>--}}

{{--                        @php--}}
{{--                            $slides = ["https://momento360.com/e/u/78b7d03522054964ad3f02f201a37d1e?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium",--}}
{{--                                            "https://momento360.com/e/u/78b7d03522054964ad3f02f201a37d1e?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium"];--}}
{{--                        @endphp--}}

{{--                        <amp-carousel  height="320" layout="fixed-height" type="carousel">--}}
{{--                            @foreach ($slides as $key)--}}

{{--                                <iframe width="600px" height="600px" frameborder="0"--}}
{{--                                        src={{ $key }}>--}}

{{--                                </iframe>--}}

{{--                            @endforeach--}}
{{--                        </amp-carousel>--}}






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
