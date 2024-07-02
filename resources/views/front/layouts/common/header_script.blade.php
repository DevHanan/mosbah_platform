<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @if(isset($title))
  {{ $title }} -
  @endif
  {{ $setting->title }}</title>
  <link rel="shortcut icon" href="{{ asset($setting->iconFullPath) }}">

    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('public/front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/media.css')}}">
</head>

<style>
  /* Default styles for large screens */
.responsive-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  list-style: none;
  padding: 0;
  margin: 0;
}

.responsive-list li {
  width: 25%; /* 4 columns on large screens */
  margin: 10px;
}

/* Media query for small screens (e.g., mobile devices) */
@media only screen and (max-width: 768px) {
 .responsive-list {
    flex-direction: column; /* Stack list items vertically on small screens */
  }
  
 .responsive-list li {
    width: 100%; /* Take full width on small screens */
    margin: 10px 0;
  }
}
</style>