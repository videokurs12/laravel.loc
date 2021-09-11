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

<div>
    <p><b>Имя:</b> {{ $body->name }}</p>
    <p><b>Сообщение:</b><br> {{ nl2br($body->text) }} </p>
</div>


<img src="{{ $message->embed(url('img/2.jpg')) }}" alt="">

</body>
</html>
