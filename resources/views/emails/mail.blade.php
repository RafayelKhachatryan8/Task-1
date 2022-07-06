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

    <h1> New post on web site: {{$mailData["webSite"]}}</h1>
    <h3> with title: {{$mailData["postTitle"]}}</h3>
    <p>  User email: {{$mailData["email"]}}</p>

</body>
</html>
