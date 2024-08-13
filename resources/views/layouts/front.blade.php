<!DOCTYPE html>
<html lang="{{ str_replace('_', '-' app()->getlocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ cstf_token() }}">
  {{-- meta for seo --}}
  @yield('meta')

  {{-- title --}}
  @yield('title')

  {{-- style --}}
  @yield('style')

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=">

  {{-- Scripts --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-900 antialiased">

  {{-- content --}}
  @yield('content')



  {{-- script --}}
  @yield('script')
</body>
</html>