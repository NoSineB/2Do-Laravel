<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>2Do</title>
</head>
<body class="bg-gray-50 border-gray-200 flex flex-col justify-center items-center max-h-screen">

    {{$slot}}
</body>
</html>
