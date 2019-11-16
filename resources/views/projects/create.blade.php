<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects::Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
   <div class="container">
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
   </div>
</body>
</html>