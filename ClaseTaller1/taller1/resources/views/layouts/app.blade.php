<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

<title>@yield('title', 'Taller 1')</title>

</head>

<body>

<!-- header -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">

<div class="container">

<a class="navbar-brand" href="{{ route('home.index') }}">Taller 1</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"

aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

<div class="navbar-nav ms-auto">

<a class="nav-link active" href="{{ route('user.create') }}">Creacion Usuario</a>

<a class="nav-link active" href="{{ route('user.index') }}">Usuarios</a>

</div>

</div>

</div>

</nav>

<header class="masthead bg-primary text-white text-center py-4">

<div class="container d-flex align-items-center flex-column">

<h2>@yield('subtitle', 'Aplicacion Clase Usuario')</h2>

</div>

</header>

<!-- header -->

<div class="container my-4">

@yield('content')

</div>

<!-- footer -->

<<div class="copyright py-4 text-center text-white">

<div class="container">

<small>

asda

</a>

</small>

</div>

</div>

<!-- footer -->


</script>

</body>

</html>