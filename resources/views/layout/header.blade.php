<header id="headertop" class="cefcom-top-bar__inner " style="position:fixed; top: 0;width: 100%;z-index: 10000">
    <nav class="container navbar navbar-expand-lg navbar-light ">
		        <a class="navbar-brand" href="/"><img class="site-logo" src="{{asset('logo.png')}}" alt=""></a>

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav" style="flex-direction: row-reverse">
            <ul class="navbar-nav nav-ul" style="color: #fff">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>

                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Программы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($programs as $p)
                        <a class="dropdown-item" href="{{ route('categories', ['id' => $p->id]) }}"> {{$p->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Страны
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($countries as $country)
                            <a class="dropdown-item" href="{{ route('bachelors', ['id' => $country->id]) }}"> {{$country->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
                </li>
                <li class="nav-item header-btn-right ">
                    <a id="freeconsulting2" type="button" class="nav-link button-consult freeconsulting" href="#">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<style>
    .nav-link{
        font-family: 'Roboto', 'sans-serif';
        font-weight: 500;
    }
    .nav-link.button-consult{
        border-radius: 4px;
    }
</style>
