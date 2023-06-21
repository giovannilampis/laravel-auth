@extends('layouts.dashboard')

@section('content')

<div class="container">

    <div class="row justify-content-center flex-wrap text-center">

        <div class="col-6 mt-5">

            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $project->title }}</h5>
                  <p class="card-text">{{ $project->description }}</p>
                  <a href="{{ route('admin.projects.edit', ['project'=>$project]) }}" class="btn btn-primary">EDIT</a>

                  <a href="#" class="btn btn-primary">DELETE</a>
                  <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">INDEX</a>
                </div>
              </div>

        </div>

    </div>
</div>

@endsection