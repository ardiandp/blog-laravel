@extends('frontend.layout')

@section('title', 'Contact Us')

@section('content')
    <style>
        .animate__animated {
            animation-duration: 1.5s;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <div class="container wow fadeInDown">
        <div class="row justify-content-center">
            <div class="col-md-8 wow fadeInUp">
                <h1>Contact Us</h1>
                <p>Feel free to reach out via the form below. We will get back to you as soon as possible.</p>

                <form action="" method="POST">
                    @csrf
                    <div class="form-group wow fadeInLeft">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group wow fadeInRight">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary wow bounce">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection

