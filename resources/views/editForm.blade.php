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
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Update Post</h2>
                    </div>
                    <div class="card-body">
                    <form action="{{route('postEdit', $post->id)}}" method="POST">
                        @method('PATCH')
                                @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Your description</label> <br>
                                        <input type="text" name="description" value="{{$post->body}}" class="form-control">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Post</button>
                                </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>