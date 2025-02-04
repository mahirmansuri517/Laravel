<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
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
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-primary">Customer Registration</div>

                    <div class="card-body">
                        <form method="post" action="{{ url('/') }}/customer">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">Name*</label>
                                <input type="text" class="form-control" name="name" required>
                                <span class="text-danger">
                                    @error('name')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email*</label>
                                <input type="email" class="form-control" name="email" required>
                                <span class="text-danger">
                                    @error('email')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password*</label>
                                <input type="password" class="form-control" name="password" required>
                                <span class="text-danger">
                                    @error('password')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label class="form-label">Confirm Password*</label>
                                <input type="password" class="form-control" name="confirm_password" required>
                                <span class="text-danger">
                                    @error('confirm_password')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Country -->
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country">
                                <span class="text-danger">
                                    @error('country')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- State -->
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state">
                                <span class="text-danger">
                                    @error('state')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address"></textarea>
                                <span class="text-danger">
                                    @error('address')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>
{{-- 
                            <!-- Gender -->
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                    <option value="O">O</option>
                                </select>
                                <span class="text-danger">
                                    @error('gender')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div> --}}

                            <!-- Date of Birth -->
                            <div class="mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                                <span class="text-danger">
                                    @error('dob')
                                        {{ message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}


    </body>
</html>

