
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Notification</a>
        <div class="ml-auto">
            <div class="dropdown">
                <a href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('frontend/img/profile.avif') }}" alt="Profile" class="rounded-circle" width="40" height="40">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="container search-section">
    <div class="row justify-content-center px-2">
        <div class="col-md-6 mb-2 mb-md-0">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-md-4 mb-2 mb-md-0">
            <select class="form-control">
                <option selected>Choose filter...</option>
                <option>Filter 1</option>
                <option>Filter 2</option>
                <option>Filter 3</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Search</button>
        </div>
    </div>
</div>

<div class="container mt-4">
    @yield('frontend_container')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
