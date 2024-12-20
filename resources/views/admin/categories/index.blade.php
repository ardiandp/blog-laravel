@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategori</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Tambah Kategori</a>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

