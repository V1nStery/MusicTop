<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Поиск по GitHub</h1>
    <form action="{{ route('github.search')}}" method="GET">
        <input type="text" name="q" placeholder="Введите запрос...">
        <button type="submit">Найти</button>
    </form>

    @if(!empty($results))
    <h2>Результаты</h2>
    <ul>
        @foreach($results as $result)
        <li>
            <a href="{{$result['html_url']}}" target="_blank">{{$result['full_name']}}</a>
        </li>
        @endforeach
    </ul>
    @endif
</body>
</html>