<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <h2 class="text-center text-success">Hello student</h2>
    <hr>
    <div class="container">
        <a href="showForm" class="btn btn-outline-primary">Add new student</a>
        <a href="/" class="btn btn-outline-success float-right">Go back</a>
        <div class="row">
            <div class="col-12 mt-3">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    
                        @foreach ($students as $student)
                        <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="#" class="text-success">View</a>
                            <a href="{{route('edit', $student->id)}}" class="text-warning">Edit</a>
                            <a href="" type="button" data-toggle="modal" data-target="#myModal">Delete</a>
                            <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                  
                                        <!-- Modal Header -->
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title text-danger">Are you sure to delete.</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                  
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                          Click on delete button if you want to delete.
                                        </div>
                                  
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a href="{{route('destroy', $student->id)}}" class="btn btn-danger delete">Delete</a>
                                        </div>
                                  
                                      </div>
                                    </div>
                                  </div>
                        </td>
                    </tr>
                        @endforeach
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>
