@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Selamat datang, :name!', ['name' => Auth::user()->name]) }}
                    <p>Level Anda: {{ ucfirst(Auth::user()->level) }}</p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Artikel</h5>
                                    <p class="card-text">10</p>
                                    <a href="#" class="btn btn-primary">Lihat Artikel</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Kategori</h5>
                                    <p class="card-text">5</p>
                                    <a href="#" class="btn btn-primary">Lihat Kategori</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Komentar</h5>
                                    <p class="card-text">15</p>
                                    <a href="#" class="btn btn-primary">Lihat Komentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-wrapper">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
