@extends('tracks.layout')

@section('main_content')

<div class="container text-white">
        <h2>Форма добавления трека</h2>

        <form method="POST" action="{{ route('tracks.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="artist">Исполнитель:</label>
                <input type="text" class="form-control" id="artist" name="artist" required>
            </div>
            <div class="form-group">
                <label for="name">Название трека:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="genre">Жанр:</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
                <label for="track">Файл трека:</label>
                <input type="file" class="form-control-file" id="track" name="track" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить трек</button>
        </form>

@endsection