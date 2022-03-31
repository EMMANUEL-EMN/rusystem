<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/students.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css') }}">
    <link rel="icon" href="{{ url('storage/images/logo.png') }}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <nav id="studentsNav">
                    <div class="tnav">
                        <h5>CONTROL PANEL</h5>
                        <hr>
                        <p>
                            <i class="fa fa-tachometer"></i>
                            <a href="">DASHBOARD</a>
                        </p>
                        <hr>
                    </div>
                    <ul>
                        <li>

                            <h5>
                                <i class="fa fa-user-graduate"></i>
                                STUDENTS APPLICATIONS
                            </h5>
                        </li>
                        <li>
                            <i class="fa fa-file-alt"></i>
                            <a href="/students/deferment/application">DEFERMENT</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf"></i>
                            <a href="/students/transcript/application">TRANSCRIPT</a>
                        </li>
                        <li>

                            <h5>
                                <i class="fa fa-clock"></i>
                                APPLICATION HISTORY
                            </h5>
                        </li>
                        <li>
                            <i class="fa fa-file-alt"></i>
                            <a href="">DEFERMENT</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf"></i>
                            <a href="">TRANSCRIPT</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
