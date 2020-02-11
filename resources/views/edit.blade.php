<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Edit Student</h2>
                    </div>
                    <div class="card-body">
                    <form action="{{route('update', $student->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$student->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" class="form-control" value="{{$student->age}}">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Data</button>
                                </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>