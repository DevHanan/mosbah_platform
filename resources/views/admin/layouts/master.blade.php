<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  @include('admin.layouts.common.header_script')

</head>

<body>
  <script src="{{asset('dist/js/demo-theme.min.js?1692870487')}}"></script>


  <div class="page">

    @include('admin.layouts.inc.navbar')


    <div class="page-wrapper">
      @yield('content')
    </div>
  </div>



  <footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
      <div class="row text-center align-items-center flex-row-reverse">

        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
          <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item">
              Copyright © 2023
              <a href="." class="link-secondary">Tabler</a>.
              All rights reserved.
            </li>
            <li class="list-inline-item">
              <a href="./changelog.html" class="link-secondary" rel="noopener">
                v1.0.0-beta20
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  @include('admin.layouts.common.footer_script')
  @stack('scripts')


</body>

</html>