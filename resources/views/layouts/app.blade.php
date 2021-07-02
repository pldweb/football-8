<!DOCTYPE html>
<html lang="en">
<head>

  @include('include.meta')
  
  <title>@yield('title')| Landing Page</title>

  @stack('before-style')
  {{-- Style --}}
  
  @include('include.style')

  @stack('after-style')

</head>
<body>

  @include('include.master')
    @yield('content')
  @include('include.footer')


  @stack('before.script')
  {{-- Script --}}

  @include('include.script')
</body>
</html>