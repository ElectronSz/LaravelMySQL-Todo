@extends('layout')

@section('content')
<div class="row mt-2">
        <div class="col-md-4">
            <a class="btn btn-primary" href="/products/create">Add New Product</a>
        </div>
        <div class="col-md-12 mt-2">
            {{-- <table class="table striped">
             <th>Id</th>
             <th>Title</th>
             <th>Description</th>
             <th>Created At</th>
             <th>Update</th>
             <th>Destroy</th>
             <tbody>
                 @foreach ($projects as $project)
                     <tr>
                         <td>{{ $project->id }}</td>
                         <td>{{ $project->title }}</td>
                         <td>{{ $project->description }}</td>
                         <td>{{ $project->created_at }}</td>
                         <td> 
                             <a class="btn btn-success pull-left" href="/products/{{ $project->id }}/edit">Edit</a>
                             
                          </td>
                          <td>
                                 <form action="/products/{{ $project->id }}" method="post">
                                     @method('delete')
                                     @csrf
                                     <button type="submit" class="btn btn-danger">Delete</button>
                             </form>
                          </td>
                     </tr>
                 @endforeach
             </tbody>
            </table> --}}
        </div>
    </div>

@endsection
       