<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
   <div class="container">
       <div class="row mt-2">
           <div class="col-md-4">
               <a class="btn btn-primary" href="/projects/create">Add New project</a>
           </div>
           <div class="col-md-12 mt-2">
               <table class="table striped">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Action</th>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td> 
                                <a class="btn btn-success" href="/projects/update?id={{ $project->id }}">Edit</a>
                                <a class="btn btn-danger" href="/projects/delete?id={{ $project->id }}">Delete</a>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
               </table>
           </div>
       </div>
   </div>
</body>
</html>