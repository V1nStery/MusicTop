<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{--@method('PUT')--}}
    <input type="text" name="name" id="search" required placeholder="Name">
    <input type="email" name="email" id="email" required placeholder="Email" class="@error('email') is-invalid @else is-valid @enderror">
    <br>Avatar:
    <input type="file" name="avatar" id="avatar">
    <br>
    <input type="submit" value="Отправить">
    </form>
</body>
</html>