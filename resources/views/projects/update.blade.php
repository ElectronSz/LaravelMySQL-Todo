@extends('layout')

@section('content')

<div class="row mt-4">
        <div class="col-md-6  m-auto text-centered">
            <div class="h4 mb-3">
             Update Project
            </div>
        <form class="form" action="/projects/{{ $project->id }}" method="post">
             @method('patch')
             @csrf
            <input class="form-control" value="{{ $project->title }}" placeholder="Title" type="text" name="title" id="">
             <textarea class="form-control mt-4" placeholder="Type description here..." name="description" id="" cols="10" rows="3">{{ $project->description }}</textarea>
             <button type="submit" class="btn btn-success mt-4">Update Project</button>
         </form>
        </div>
    </div>

@endsection