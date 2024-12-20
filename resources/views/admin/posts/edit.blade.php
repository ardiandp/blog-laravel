@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                        <div class="col-md-8">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                                        <div class="col-md-8">
                                            <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content">{{ $post->content }}</textarea>

                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>

                                        <div class="col-md-8">
                                            <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                                        <div class="col-md-8">
                                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                                <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                                            </select>

                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-warning">
                                        Update
                                    </button>
                                </div>
                            </div>


                                </div>
                            </div>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

