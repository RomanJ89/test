
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .menu {
              background-color: skyblue;
            }

            .menu a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 12px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
            }

            .links {
              padding: 2em;
              margin: 1em;
              background-color: lightblue;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover {
              background-color: skyblue;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <header class="top-right menu">
                @auth
                    <a href="{{ url('/test') }}">Test</a>
                    <a href="{{ url('/autre') }}">Autre</a>
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/show') }}">Offre</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </header>
        @endif

        <div class="content">
          <table border="1" cellpadding="15">
             <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Auteur</th>
             </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
             </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
             </tr>
          </table>
        </div>
    </div>

    <footer class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
    </footer>

</body>
</html>
