<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('css/bootstrap.min.js')}}"></script>
</head>
<body>
    <div class="text-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/profile')}}">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <br>
        <h1>This is my Prelim Project</h1>
    </div>
</body>
</html>