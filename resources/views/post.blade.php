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
    <h2 class="text-success text-center">This is post</h2>
    <hr>
    <div class="container">
        <a href="formPost" class="btn btn-outline-primary">Add New Post</a>
        <a href="/" class="btn btn-outline-success float-right">Go back</a>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-4">
                <div class="card m-4">
                    <div class="card-header">
                    <h5>{{$post->title}}
                    <a href="{{route('editPost', $post->id)}}" class="float-right text-warning">Edit</a>
                    </h5>
                    </div>
                    <div class="card-body">
                    <p>{{$post->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>