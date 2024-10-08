<!DOCTYPE html>
<html>
<head>
    <title>Трэки</title>
</head>
<body>
    <h1>Загрузить трек</h1>

    <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Название:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="artist">Исполнитель:</label>
            <input type="text" name="artist" id="artist">
        </div>
        <div>
            <label for="track">Файл:</label>
            <input type="file" name="track" id="track" accept=".mp3, .ogg" required> 
        </div>
        <button type="submit">Загрузить</button>
    </form>

    <h1>Список треков</h1>

    <ul>
    @foreach ($music as $track)  
        <li>
            <audio controls>
            <source src="{{$track}}" type="audio/mpeg" />
                {{ $track->title }} - {{ $track->artist }}
            </audio> 
            <a href="{{ route('music.download', $track) }}">Скачать</a> 
        </li>
    @endforeach
</ul>

</body>
</html>