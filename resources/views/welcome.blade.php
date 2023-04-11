@extends('layouts.app')

@section('main-content')
    <div class="container">

        <div class="row">

            @forelse ($movies as $movie)
                <div class="col-2">
                    <h2>{{ $movie->title}}</h2>
                    <span>{{ $movie->language}}</span>
                    <span>{{ $movie->director}}</span>
                </div>

            @empty
                
            @endforelse

        </div>
    </div>
@endsection

@section('page-title', 'Welcome')