<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Upload File </h1>
    <form method="GET" action="" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" ><br>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>