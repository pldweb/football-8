<!DOCTYPE html>
<html lang="en">
<head>

  @include('include.meta')
  
  <title>@yield('title')| Landing Page</title>


  {{-- Favicon --}}
  <link rel="apple-touch-icon" href="favicon.png">
  <link rel="shortcut icon" href="" type="image/x-icon">

  @stack('before-style')
  
  {{-- Style --}}
  @include('include.style')

  @stack('after-style')

</head>
<body>

  @include('include.header')
    @yield('content')
  @include('include.footer')


  @stack('before-script')
  {{-- Script --}}

  @include('include.script')


  @stack('after-script')
</body>
</html>