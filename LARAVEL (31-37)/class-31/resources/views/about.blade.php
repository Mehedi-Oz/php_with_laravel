<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>ABOUT</h1>

    @foreach($infos as $info)
        <h1>{{$info['id']}}</h1>
        <h1>{{$info['name']}}</h1>
    @endforeach
</body>
</html>
