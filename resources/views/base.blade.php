<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/lien1">Lien 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/lien2">Lien 2</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>