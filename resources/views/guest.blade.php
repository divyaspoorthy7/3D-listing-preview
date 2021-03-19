<x-app-layout>



    <x-slot name="header">

        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                {{ __('Property Details') }}
            </h2>

            <a href="/api/owner" >
                <x-button >Home owner</x-button>
            </a>



        </div>
    </x-slot>


    <div class="py-12">
        <p class="ml-5 text-3xl">360 overview</p>
        <div class="mx-w-full mx-auto sm:px-6 lg:px-8">

            <div class="mx-w-full bg-white overflow-hidden shadow-sm sm:rounded-lg m-2 cursor-pointer">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-start">
                        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
                        <script src="https://unpkg.com/aframe-template-component@3.x.x/dist/aframe-template-component.min.js"></script>
                        <script src="https://unpkg.com/aframe-layout-component@4.x.x/dist/aframe-layout-component.min.js"></script>
                        <script src="https://unpkg.com/aframe-event-set-component@5.x.x/dist/aframe-event-set-component.min.js"></script>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                        <script src="libraries/embed360.js"></script>



                        {{--                        <div id="myEmbeddedScene">--}}
                        {{--                            <a-scene>--}}

                        {{--                                <a-camera></a-camera>--}}
                        {{--                                <a-sky src="{{ asset('uploads/name.jpeg') }}"></a-sky>--}}
                        {{--                            </a-scene>--}}
                        {{--                        </div>--}}
                        @php
                            $path = public_path('uploads');
                            $files = File::allFiles($path);



                        @endphp

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            </ol>

                            <div class="carousel-item active">
                                <div class="embed360">
                                    <img src="{{ asset('uploads/name.jpeg') }}">
                                </div>

                                <script>
                                    embed360('.embed360');
                                </script>

                            </div>

                            <div class="carousel-inner">
                                @foreach ($files as $key)
                                    <div class="carousel-item">
                                        <div class="embed360">
                                            <img src="{{ asset('uploads/'.$key->getRelativePathname()) }}">
                                        </div>

                                        <script>
                                            embed360('.embed360');
                                        </script>

                                    </div>

                                @endforeach

                            </div>

                            <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">   </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

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
                <p class="ml-5 text-3xl">3D Floor Plan</p>
                <div class="mx-w-full mx-auto sm:px-6 lg:px-8">

                    <div class="mx-w-full bg-white overflow-hidden shadow-sm sm:rounded-lg m-2 cursor-pointer">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <model-viewer src="{{ asset('3d/appartamento3.gltf') }}" camera-controls auto-rotate></model-viewer>

                        </div>

                    </div>

                </div>

            </div>


</x-app-layout>
