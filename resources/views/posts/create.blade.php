<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title"><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
