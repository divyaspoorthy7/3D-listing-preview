<!DOCTYPE html>
<html>
<head>
    <title>laravel 6 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
</head>

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

</html>
