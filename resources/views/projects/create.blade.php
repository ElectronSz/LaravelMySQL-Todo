@extends('layout')

@section('content')

<div class="row mt-4">
        <div class="col-md-6  m-auto text-centered">
            <div class="h4 mb-3">
             Add New Project
            </div>
            <form class="form" action="/projects" method="post">
                {{ csrf_field() }}
             <input class="form-control" placeholder="Title" type="text" name="title" id="">
             <textarea class="form-control mt-4" placeholder="Type description here..." name="description" id="" cols="10" rows="3"></textarea>
             <button type="submit" class="btn btn-success mt-4">Save Project</button>
         </form>
        </div>
    </div> 
    
@endsection
       
   