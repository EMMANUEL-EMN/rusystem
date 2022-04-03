<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rongo university students applications</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css') }}">
    <link rel="icon" href="{{ url('storage/images/logo.png') }}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="">
            <div class="userForm">
                <div class="f">
                    <center>
                        <div class="uf">
                            <h5 class="bg-primary text-white">LOGIN TO SYSTEM</h5>
                            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data"
                                style="width: 300px;" class="m-3">
                                @csrf
                                @method('post')
                                <div class="uname">
                                    <p><i class="fa fa-user"></i> IDENTITY </p>
                                    <p>
                                        <input type="text" name="email" id="identity">
                                    </p>
                                    <p><i class="fa fa-key"></i> PASSWORD</p>
                                    <p>
                                        <input type="password" name="password" id="password">
                                    </p>
                                </div>
                                <div class="bt">
                                    <button class="btn btn-primary">SIGN IN</button>
                                </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
