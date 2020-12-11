<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/app.css" rel="stylesheet" >

    <title>@yield('title', 'Employees')</title>
  </head>
  <body>
    @include('inc.nav')
    <div class="container">

      @if (Session::has('msg'))
        <div class="alert alert-success mb-1">{{ Session::get('msg') }}</div>
      @endif
      @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>