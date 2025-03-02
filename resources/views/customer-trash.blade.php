<!doctype html>
<html lang="en">

<head>
    <title>Customer Trash</title>
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
            <a class="navbar-brand fw-bold" href="#">
                @if (session()->has('user_name'))
                {{session()->get('user_name')}}
                    
                @else
                    Guest
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customer') }}">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="table-responsive">
            <a href="{{ route('customer.create') }}">
                <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
            </a>
            <a href="{{ url('customer') }}">
                <button class="btn btn-primary d-inline-block m-2 float-right">Customer View</button>
            </a>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->dob}}</td>
                            <td>{{$customer->state}}</td>
                            <td>{{$customer->country}}</td>
                            <td>
                                @if ($customer->status == '1')
                                    <a href="">
                                        <span class="badge badge-success">Active</span>
                                    </a>
                                @else
                                    <a href="">
                                        <span class="badge badge-danger">Inactive</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('customer.force-delete', ['id' => $customer->id])}}"><button class="btn btn-danger">Delete</button></a>
                                <a href="{{route('customer.restore',$customer->id)}}"><button class="btn btn-primary">Restore</button></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
