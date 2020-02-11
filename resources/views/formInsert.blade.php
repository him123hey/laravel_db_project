<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Form Student</h2>
                    </div>
                    <div class="card-body">
                            <form action="Student" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Student name">
                                    </div>
                                    <div class="form-group">
                                        <label for="sex">Gender</label>
                                        <select name="sex" id="sex" class="form-control">
                                            <option disabled selected>Choose gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" class="form-control" placeholder="Student age">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Student Email">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>