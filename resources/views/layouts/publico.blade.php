<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <title>BOOTSTRAP BLOG</title>
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.css') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Bootstrap blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/categorias">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/post">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/preguntas">Preguntas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/quienessomos">Quienes somos</a>
              </li>
          </ul>
        </div>
      </nav>
      @yield('contenido')
</body>
</html>