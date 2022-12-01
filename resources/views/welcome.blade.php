<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Upload Image</title>
</head>

<body>
    <div class="container p-5">
        <img src="{{asset('/storage/images/6TqF8dwEHlrAIMmlcnosD6jl08IGgZDck4tHHmBZ.jpg')}}" height="200px"
            width="100px">
        <form action="{{route('uploadImage')}}" enctype="multipart/form-data" method="post">
            @csrf
            <input type="file" name="imageUpload" id="image"><br>
            <button type="submit">Upload Image</button>
        </form>
    </div>
</body>

</html>