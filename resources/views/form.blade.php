<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">MyProject</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer')}}">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <form action="{{url('/')}}/register" method="post">
        @csrf
      
        <div class="container">
            <x-input type="text" name="name" label="Please enter your name"/>
            <br>
            <x-input type="email" name="email" label="Please enter your email"/>
            <br>
            <x-input type="password" name="password" label="password"/>
            <br>
            <x-input type="password" name="confirm_password" label="confirm password"/>
            <br>
            <button class="btn btn-primary">
                Submit
            </button>


        </div>
    </form>

</body>

</html>
