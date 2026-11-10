<!DOCTYPE HTML>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', '')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
  @stack('styles')
</head>
<body>

  <main>
      @yield('content')
  </main>

  @stack('scripts')
</body>
</html>
