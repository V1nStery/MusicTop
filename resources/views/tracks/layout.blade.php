<!DOCTYPE html>
<html>
<head>
    <title>Музыкальный каталог</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Загрузка музыки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark border-bottom border-success" aria-label="Основная навигация">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><ya-tr-span data-index="1-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Offcanvas navbar" data-translation="MusicTop" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">MusicTop</ya-tr-span></a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Переключение навигации">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 container-fluid">
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
                <a 
                    class="nav-link dropdown-toggle" 
                    href="#" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false"
                >
                    <ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Settings" data-translation="Настройки" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">
                    Жанры
                    </ya-tr-span>
                </a>
                <ul class="dropdown-menu">
                    @foreach ($genres as $genre)
                    <li>
                        <a class="dropdown-item text-warning" href="{{ route('home', ['genre' => $genre ]) }}">{{ $genre }}</a>
                    </li>
                    @endforeach
                </ul>
</li>
            <form class="d-flex" role="search" method="GET" action="{{ route('home') }}">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск" name="search" 
                placeholder="Поиск по треку или артисту" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
            <a href="{{ route('addTracks') }}"><button class="add btn btn-outline-warning" type="submit">Добавить</button></a>
        </ul>
        </div>
    </div>
</nav>
<div class="container-fluid my-carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="{{ route('home', ['genre' => 'Электроника']) }}"> 
            <img src="{{ asset('img/electro.jpeg') }}" class="d-block w-100" alt="Электроника"> 
            </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('home', ['genre' => 'Реп']) }}"> 
            <img src="{{ asset('img/rock.jpeg') }}" class="d-block w-100" alt="Реп"> 
            </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('home', ['genre' => 'Рок']) }}"> 
            <img src="{{ asset('img/rap.jpeg') }}" class="d-block w-100" alt="Рок"> 
            </a>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
        </button>
    </div>
</div>


    @yield('main_content')

<footer class="my-5 pt-5 text-body-secondary text-center text-small border-top border-success">
    <p class="mb-1 text-white "><ya-tr-span data-index="36-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="© 2017–2024 Company Name" data-translation="© 2017-2024 Название компании" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">© 2024 MusicTop</ya-tr-span></p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><ya-tr-span data-index="37-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Privacy" data-translation="Конфиденциальность" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Конфиденциальность</ya-tr-span></a></li>
        <li class="list-inline-item"><a href="#"><ya-tr-span data-index="38-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Terms" data-translation="Условия" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Условия</ya-tr-span></a></li>
        <li class="list-inline-item"><a href="#"><ya-tr-span data-index="39-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Support" data-translation="Поддержка" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Поддержка</ya-tr-span></a></li>
        </ul>
        <a class="text-secondary text-xs" href="https://github.com/V1nStery">Github by V1nStery</a>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


