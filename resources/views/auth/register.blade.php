
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
</head>
<body>
<div class="registration-container">
    <img src="{{ asset('frontend/img/images.jpeg') }}" alt="University Logo">
    <h2 class="text-center">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="Enter First Name" autofocus>
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Enter Last Name" autofocus>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter E-mail Address" autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required placeholder="Enter Student ID" autocomplete="student_id">
            @error('student_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Enter Phone Number" autocomplete="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter Address" required autocomplete="address">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Enter Confirm Password" autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="login-link mt-3">
        <p>Already registered? <a href="{{ route('login') }}">Login here</a></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
