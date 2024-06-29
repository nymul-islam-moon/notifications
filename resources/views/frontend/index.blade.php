@extends('frontend.main')

@section('frontend_container')
<div class="row">

    <div class="col-md-6">
        <div class="post-card card mb-4">
        <!-- <img src="path/to/image.jpg" class="card-img-top" alt="...">-->
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
@endsection
