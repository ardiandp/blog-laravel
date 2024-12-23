@extends('frontend.layout')

@section('title', 'Home')

@section('content')
 <!-- Hero Section -->
 <div class="bg-light p-5 text-center">
        <h1>Welcome to the Portal</h1>
        <p class="lead">Discover the latest articles, news, and updates.</p>
        <a href="#" class="btn btn-primary">Get Started</a>
    </div>

    <!-- Featured Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/400/200" alt="Card image cap">
                    <div class="card-body">
                        <h5>Featured Article</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/401/200" alt="Card image cap">
                    <div class="card-body">
                        <h5>Featured Article</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/402/200" alt="Card image cap">
                    <div class="card-body">
                        <h5>Featured Article</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
