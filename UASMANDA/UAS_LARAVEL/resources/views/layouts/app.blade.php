<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Data Pasien</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('pasien.index') }}"> Rumah Sakit Laravel  </a>
        </div>
      </nav>
      <div class="container">
        <div class="m-3">
            @yield('content')
        </div>
      </div>
    <script src="/js/bootstrap.js"></script>
</body>
</html>