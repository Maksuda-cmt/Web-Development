<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is token page</h1>
<form method="POST" action="/profile">
    @csrf
 
    <!-- Equivalent to... -->
    <lebel> Enter your name </lebel>
    <input type="text" name="name">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>
</body>
</html>