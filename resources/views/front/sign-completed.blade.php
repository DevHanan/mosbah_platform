<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @if(isset($title))
  {{ $title }} -
  @endif
  {{ $setting->title }}</title>
  <link rel="shortcut icon" href="{{ asset($setting->favicon_path) }}">    <link rel="stylesheet" href="public/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="public/front/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="public/front/css/custom.css">
    <link rel="stylesheet" href="public/front/css/media.css">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="register sign-completed position-relative">
        <div class="welcome w-100 d-flex flex-column align-items-center justify-content-center">
            <div class="layout position-absolute"></div>
            <img src="public/front/img/completed-bg.svg" class="position-absolute img-fluid h-100" alt="">
            <img src="public/front/img/logo.svg" class="logo img-fluid position-absolute" alt="">
            <div class="data text-center text-white">
                <div class="img mb-4 position-relative">
                    <div class="img-back rounded-circle secondary-bg position-absolute"></div>
                    <img src="public/front/img/sign-completed.svg" class="img-fluid" alt="">
                </div>
                <h2>مرحبا بك  يا صديقي </h2>
                <h4 class="text-white">لقد تم التسجيل بنجاح</h4>

                <a href="{{url('/')}}" type="submit" class="btn secondary-bg fw-bold text-white w-75 my-3 py-3">ابدأ رحلتك التعليمية</a>
            </div>
        </div>
    </div>
</body>
</html>