<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Summa Solution Test')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]); !!}
    </script>
    @stack('head-scripts')
  </head>
  <body>
      <header>
      </header>
      <main>
          @yield('content')
      </main>
      <footer>
      </footer>
      @stack('body-scripts')
  </body>
</html>