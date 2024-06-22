
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
        <a class="navbar-brand" href="index.html">Notification</a>
        <div class="ml-auto">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="profile.html">Profile</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container search-section">
    <div class="row justify-content-center px-2">
        <div class="col-md-8">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-md-4">
            <select class="form-control">
                <option selected>Choose filter...</option>
                <option>Filter 1</option>
                <option>Filter 2</option>
                <option>Filter 3</option>
            </select>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- Posts start here -->
        <div class="col-md-6">
            <div class="post-card card mb-4">
<!--                <img src="path/to/image.jpg" class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h3 class="card-title text-center"><a href="show.html" class="text-decoration-none paper"> Post Title 1 </a></h3>
                    <p class="card-text paper">This is the description of the first post. It's designed to be visually appealing and user-friendly.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="post-card card mb-4">
                <!--                <img src="path/to/image.jpg" class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h3 class="card-title text-center"><a href="show.html" class="text-decoration-none paper"> Post Title 1 </a></h3>
                    <p class="card-text paper">This is the description of the first post. It's designed to be visually appealing and user-friendly.</p>
                </div>
            </div>
        </div>
        <!-- Add more posts here -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
