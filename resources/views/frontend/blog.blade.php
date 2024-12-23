@extends('frontend.layout')

@section('title', 'Blog')

@section('content')
    <h1 class="px-4">Blog</h1>
    <div class="blog-section px-4">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="blog-post">
                        <img src="https://picsum.photos/400/200?random={{ $post->id }}" alt="{{ $post->title }}" class="img-fluid mb-2">
                        <h2><a href="{{ route('blog.show',$post->slug, $post->slug) }}">{{ $post->title }}</a></h2>
                        <p class="text-muted">{{ $post->created_at->format('d F Y') }} | {{ $post->category->name }} | {{ $post->user->name }}</p>
                        <p>{{ Str::limit($post->content, 200) }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                @if(($loop->index + 1) % 3 == 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4">
            <ul class="pagination">
                {{ $posts->links('pagination::bootstrap-4') }}
            </ul>
        </nav>
    </div>
@endsection
