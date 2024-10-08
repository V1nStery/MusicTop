@extends('tracks.layout')

@section('main_content')

<div class="title__content">
    <div class="container">  
        <div class="title__inner">
            <h2 class="title">
                @if ($searchTerm)
                    Результат поиска (вот что найдено по вашему запросу: {{ $searchTerm }})
                @elseif ($selectedGenre)
                    Музыка жанра: {{ $selectedGenre }} 
                @else
                    Музыка (все жанры)
                @endif
            </h2>
        </div>
    </div>
</div>
<div class="tracks__content">
    <div class="container">
        <div class="tracks__inner text-white">
            <ul class="tracks__list">
                @foreach($tracks as $track)
                    <li class="list__item">
                        <div class="item__inner">
                            <h3> {{ $track->artist }} - {{ $track->name }}</h3>
                            <span class="tracks__menu">
                                <audio controls>
                                    <source src="{{ asset('storage/' . $track->file_path) }}" type="audio/mpeg"> 
                                    Your browser does not support the audio element.
                                </audio>
                                <span>Жанр: {{$track->genre}}</span>
                            </span>
                            <div class="accordeon__content">
                                <a href="{{ route('tracks.download', $track) }}"><button class="btn btn-outline-warning">Скачать</button></a>
                                <button class="btn btn-outline-info show-comments">Комментарии</button>
                                <div class="accordion__item" style="display: none;">
                                    <div class="comment_control">
                                        <ul class="comment__list">
                                            @foreach($track->comments as $comment)
                                                <li class="accordion_comment bg-success"><span>{{ $comment->username }}: -</span> <span><p>{{ $comment->body }}</p></span></li>
                                            @endforeach
                                        </ul>
                                        <div class="form-group col col-lg-3">
                                            <form class="tracks_form form-control" action="{{ route('comments.store', $track) }}" method="POST">
                                                @csrf
                                                <label for="username"> Имя:
                                                    <input class="form-control" type="text" name="username" id="username">
                                                </label>
                                                <label for="body">Комментарий:
                                                    <textarea class="form-control" name="body"></textarea>
                                                </label>
                                                <button class="btn btn-primary" type="submit">Добавить Комментарий</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

    <script>

const showCommentsButtons = document.querySelectorAll('.show-comments');
    showCommentsButtons.forEach(button => {
        button.addEventListener('click', () => {
            const commentsDiv = button.nextElementSibling;
            commentsDiv.style.display = commentsDiv.style.display === 'none' ? 'block' : 'none';
        });
    });
    const genreDropdown = document.querySelector('.nav-item.dropdown');

    genreDropdown.addEventListener('click', function(event) {
        if (event.target.tagName !== 'A' || !event.target.classList.contains('dropdown-item')) return;

        event.preventDefault(); 

        const selectedGenre = event.target.textContent; 

        window.location.href = '?genre=' + encodeURIComponent(selectedGenre); 
    });
    </script>
</body>
</html>



@endsection