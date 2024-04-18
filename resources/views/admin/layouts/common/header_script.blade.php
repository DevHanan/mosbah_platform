<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>
      @if(isset($title))
        {{ $title }} -
      @endif
      {{ $setting->title }} </title>
      <link rel="shortcut icon" href="{{ asset($setting->favicon_path) }}">
          <!-- CSS files -->


          
    <link href="{{asset('dist/css/tabler.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-flags.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-payments.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-vendors.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/demo.min.css?1692870487')}}" rel="stylesheet"/>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/fontawesome/css/fontawesome-all.min.css') }}">
        <!-- data tables css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/data-tables/css/datatables.min.css') }}">
        <!-- select2 css -->
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
        <script src="{{asset('dist/js/demo-theme.min.js?1692870487')}}"></script>
