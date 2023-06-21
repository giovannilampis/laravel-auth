@extends('layouts.dashboard')

@section('content')
    <h1 class="text-uppercase text-center">Projects Page</h1>
    <div class="container">
        <div class="row">

            @foreach($projects as $project)

            <div class="col-3">
                <div class="card" style=>
                    <img src="..." class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
@endsection