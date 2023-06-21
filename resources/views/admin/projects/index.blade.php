@extends('layouts.dashboard')

@section('content')
    <h1 class="text-uppercase text-center">Projects Page</h1>
    <div class="container">
        <div class="row">

            @foreach($projects as $project)

            <div class="col-3">
                <div class="card" style=>
                    <img src="{{ $projects->img_url }}" class="card-img-top" alt=""{{ $projects->title }}"">
                    <div class="card-body">
                      <h5 class="card-title">"{{ $projects->title }}"</h5>
                      <h5 class="card-title">"{{ $projects->subtitle }}"</h5>
                      <p class="card-text">"{{ $projects->description }}"</p>
                      <a href="{{ $project->url }}" class="btn btn-primary">VISIT WEBSITE</a>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
@endsection