<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('css/bootstrap.min.js')}}"></script>

    <style type="text/css">

        .container-box {
            width: 620px;
            border:1px solid #ccc;
            margin: auto;
        }
        .form-group {
            width:600px;
            margin: auto;
            

        }
        .header {
            height: 100px;
            width: 620px;
            margin: auto;
            border:1px solid #ccc;
            padding: 50px 0;
            background-color: #0c5ec2;
            color: white;
            text-align:center;
        }

    </style>
</head>
<body>
    <br />
    <div class="container-box">
        
        <form method="post">
            <div class="header">
                <h3>Welcome To My Prelim Project</h3>
            </div>
            <div class="form-group"> 
                <label>Enter username</label>
                <input type="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login"/>
            </div>
            <div class="form-group">
                <a href="{{url('/home')}}">
                    <button>Login</button>
                </a>
            </div>
        </form>
            <br>
    </div>
</body>
</html>