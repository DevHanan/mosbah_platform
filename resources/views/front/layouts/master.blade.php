<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<html lang="ar" dir="rtl">

<head>
  @include('front.layouts.common.header_script')

</head>

<body>
  <div class="container">
@yield('content')

  @include('front.layouts.common.footer_script')
  @stack('frontscript')
  </div>
</body>

</html>