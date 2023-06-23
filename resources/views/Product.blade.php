@extends('master')

@section("content")
<style>
    .carousel-container {
        height: 500px; /* Adjust the height as per your requirement */
        overflow: hidden; /* Hide any overflowing content */
        position: relative; /* Position the container */
    }

    .carousel-item img {
        width: 100%; /* Ensure the image fills the carousel item width */
        height: 500px; /* Adjust the height of the carousel images as per your requirement */
        object-fit: fill; /* Maintain the aspect ratio without cropping */
    }

    .card-img-top {
        height: 100%; /* Set the height of the product images to 100% */
        object-fit: cover; /* Cover the entire card with the image */
    }

    .carousel-inner {
        border-radius: 10px; /* Add border radius to the carousel container */
    }

    .card {
        border-radius: 10px; /* Add border radius to the product card */
    }
  
    @media (max-width: 576px) {
        .card-img-top {
            height: 150px; /* Adjust the height of the product images for mobile view */
        }
        
        /* Custom styling for the carousel caption in mobile view */
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.75); /* Set the background color to black */
            color: #ffff; /* Set the font color to white */
            padding: 10px; /* Add some padding for spacing */
            border-radius: 5px; /* Add border radius to the caption */
            position: absolute; /* Position the caption */
            bottom: 10px; /* Set the distance from the bottom */
            left: 0; /* Align the caption to the left */
            right: 0; /* Align the caption to the right */
            text-align: center; /* Center the caption text */
            margin: 0 10px; /* Add margin for spacing */
            display: block !important; /* Ensure the caption is displayed */
        }
    }

    /* Custom styling for the carousel caption in desktop view */
    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.75); /* Set the background color to black */
        color: #ffff; /* Set the font color to white */
        padding: 10px; /* Add some padding for spacing */
        border-radius: 5px; /* Add border radius to the caption */
        display: block !important; /* Ensure the caption is displayed */
    }
</style>

<div class="container mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel-container">
            @foreach ($products as $key => $item)
            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="d-block" alt="...">
                    <div class="carousel-caption">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="text-center mt-4">
        <h3>Trending Products</h3>
    </div>

    <div class="row justify-content-center">
        @foreach ($products as $key => $item)
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-truncate">{{$item['name']}}</h5>
                    <p class="card-text">{{$item['description']}}</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
