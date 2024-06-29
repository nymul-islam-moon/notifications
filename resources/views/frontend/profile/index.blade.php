@extends('frontend.main')

@section('frontend_container')
<ul class="nav nav-tabs" id="profileTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="show-tab" data-toggle="tab" data-target="#show" type="button" role="tab" aria-controls="show" aria-selected="true">Show Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="update-tab" data-toggle="tab" data-target="#update" type="button" role="tab" aria-controls="update" aria-selected="false">Update Profile</button>
    </li>
</ul>
<div class="tab-content" id="profileTabContent">
    <div class="tab-pane fade show active" id="show" role="tabpanel" aria-labelledby="show-tab">
        <!-- Show Profile Content -->
        <div class="text-center mt-3">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Profile Image">
            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>
    <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
        <!-- Update Profile Form -->
        <form class="mt-3" action="{{ route('frontend.profile.update', $user->id) }}" method="PUT">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" value="{{ $user->first_name }}" placeholder="Enter first name">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="last_neme" value="{{ $user->last_name }}" placeholder="Enter last name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Enter Phone Number">
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" placeholder="Enter Address">
                </div>
            </div>
            <div class="form-group">
                <label for="profilePicture">Profile Picture</label>
                <input type="file" class="form-control-file" id="profilePicture">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</div>
@endsection
