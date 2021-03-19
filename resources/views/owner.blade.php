<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                {{ __('Homeowner Area') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <p class="ml-5 text-2xl">Hey ! You can now upload your 360 images here for guests to view</p>
    </div>


    <body>
    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading"><h2>360 video upload</h2></div>
            <div class="panel-body">

                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="uploads/{{ \Illuminate\Support\Facades\Session::get('file') }}">
                @endif



                <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    </body>

    <div class="py-12">
        <p class="ml-5 text-2xl">Upload your 2D floor plan here for guests to view </p>
    </div>
</x-app-layout>


