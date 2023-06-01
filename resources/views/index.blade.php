<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=PT+Sans&family=Poiret+One&family=Roboto:wght@400;500;900&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
</head>
<body>
    <header> 
        <div class="avtor"> 
            <a class="avtor-p auth_btn" href="#" onclick = "HideLogPopup()"> Войти</a>
            <a class="avtor-p" href="/#" onclick ="HideRegPopup()">Регистрация</a>
        </div>
        <div class="header_contain">
            <div class="header_div">  Кафе и рестораны города Владикавказ </div>
        </div>
    </header>
<div class="popup_login_container hide_log_popup">
        <div class="login_popup">
            <div class="exit_btn_container">
                <span class = "popup_log_exit_btn popup_exit_btn" onclick = "ExitLogPopup()">	&#215;</span>
            </div>
            <h1>Личный кабинет</h1>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="popup_input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder = "Почта" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="popup_input form-control @error('password') is-invalid @enderror" name="password" required placeholder = "Пароль"autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary popup_btn">
                                    {{ __('') }}
                                    <p>Войти</p>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    <div class="popup_register_container hide_reg_popup">
        <div class="register_popup">
        <div class="exit_btn_container">
                <span class = "popup__reg_exit_btn popup_exit_btn" onclick = "ExitRegPopup()">	&#215;</span>
            </div>
            <h1>Регистрация</h1>
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="popup_input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder= "Имя" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="popup_input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder= "Почта" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="popup_input form-control @error('password') is-invalid @enderror" name="password" placeholder= "Пароль" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="popup_input form-control" name="password_confirmation" placeholder= "Подтвердите пароль" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary popup_btn">
                                    {{ __('') }}
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    <div class="rest_contain">
        <div>
           <p> Дендрариум </p> 
            <div class="dendrarium">
                <a class="name_restaurant" href="about_restaurant"> Дендрариум </a> 
            </div>
        </div>

        <div>
            <p> Винчендзо </p> 
            <div class="vincenzo">
                <a class="name_restaurant" href="about_restaurant" > Винчендзо </a>
            </div>
        </div>

         <div>
            <p> Лукум </p> 
            <div class="lukum">
                <a class="name_restaurant" href="about_restaurant"> Лукум </a>
            </div>
        </div>

        <div>
            <p> Ласкала </p> 
            <div class="lascala">
                <a class="name_restaurant" href="about_restaurant"> Ласкала </a>
            </div>
        </div>

        <div>
            <p> Ман&Гал </p> 
            <div class="mangal">
                <a class="name_restaurant" href="about_restaurant"> Ман&Гал </a>
            </div>
        </div>

        <div>
            <p> Октябрь </p> 
            <div class="octorber">
                <a class="name_restaurant" href="about_restaurant"> Октябрь </a>
            </div>
        </div>

        <div>
            <p> Куырой </p> 
            <div class="kuroi">
                <a class="name_restaurant" href="about_restaurant"> Куырой </a>
            </div>
        </div>

        <div>
            <p> Papilon </p> 
            <div class="papilon">
                <a class="name_restaurant" href="about_restaurant"> Papilon </a>
            </div>
        </div>

        <div>
            <p> Berdinberg </p> 
            <div class="berdinberg">
                <a class="name_restaurant" href="about_restaurant"> Berdinberg </a>
            </div>
        </div>

        <div>
            <p> Купрум </p> 
            <div class="cuprum">
                <a class="name_restaurant" href="about_restaurant"> Купрум </a>
            </div>
        </div>

        <div>
            <p> Syndicate </p> 
            <div class="syndicate">
                <a class="name_restaurant" href="about_restaurant"> Syndicate </a>
            </div>
        </div>

        <div>
            <p> Лимончелло </p> 
            <div class="limonchello">
                <a class="name_restaurant" href="about_restaurant"> Лимончелло </a>
            </div>
        </div>

        <div>
            <p> Jazz Code </p> 
            <div class="jazzcode">
                <a class="name_restaurant" href="about_restaurant"> Jazz Code </a>
            </div>
        </div>

        <div>
            <p> Saffron </p> 
            <div class="saffron">
                <a class="name_restaurant" href="about_restaurant"> Saffron </a>
            </div>
        </div>

        <div>
            <p> AromaDrops </p> 
            <div class="aromadrops">
                <a class="name_restaurant" href="about_restaurant"> AromaDrops </a>
            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
</body>
</html>