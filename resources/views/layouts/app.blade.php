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

  <div class="Shell">
    @isset($username)
      <x-sidebar :username="$username" />
    @endisset

    <div class="landingpage">
      <main>
        @yield('content')
      </main>

      @include('components.footer')
    </div>
  </div>

  @stack('scripts')
</body>
</html>
