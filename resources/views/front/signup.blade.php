<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @if(isset($title))
  {{ $title }} -
  @endif
  {{ $setting->title }}</title>
  <link rel="shortcut icon" href="{{ asset($setting->iconFullPath) }}"> 
     <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/media.css')}}">
</head>
<body>
    <div class="register">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="{{asset('front/img/Group 327.svg')}}" class="position-absolute img-fluid h-100" alt="">
                    <img src="{{asset('front/img/logo.svg')}}" class="logo img-fluid position-absolute" alt="">
                    <div class="data text-center text-white">
                        <img src="{{asset($setting->registerImageFullPath)}}" class="img-fluid" alt="">
                        <h2>مرحبا بك  يا صديقي </h2>
                        <p class="text-white">فقط بضع نقرات ونبدأ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro container p-5">
                    <div class="text-center mb-5">
                        هل لديك حساب بالفعل؟ <a href="{{url('signin')}}">تسجيل الدخول</a>
                    </div>
                    <h1>انضم إلينا!</h1>
                    <p class="mt-3 mb-5">لبدء هذه الرحلة، أخبرنا بنوع الحساب الذي ستفتحه.</p>

                    <a href="{{url('sign_step1?type=instructor')}}" class="text-decoration-none">
                        <div class="info mb-5 d-flex justify-content-between align-items-center shadow-sm border p-4">
                            <div class="d-flex align-items-center">
                                <div class="polygon d-flex justify-content-center align-items-center"><i class="fa-regular fa-user fs-lg"></i></div>
                                <div class="mx-2">
                                    <p class="fw-bold m-0">مدرب</p>
                                    <p>حساب المعلم لإدارة جميع أنشطتك.ولوحة القيادة</p>
                                </div>
                            </div>
                            <a href="{{url('sign_step1?type=instructor')}}" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                        </div>
                    </a>

                    <a href="{{url('sign_step1?type=student')}}" class="text-decoration-none">
                        <div class="info mb-5 d-flex justify-content-between align-items-center shadow-sm border p-4">
                            <div class="d-flex align-items-center">
                                <div class="polygon d-flex justify-content-center align-items-center"><i class="fa-solid fa-graduation-cap"></i></div>
                                <div class="mx-2">
                                    <p class="fw-bold m-0">طالب</p>
                                    <p>حساب شخصي لإدارة جميع أنشطتك.</p>
                                </div>
                            </div>
                            <a href="{{url('sign_step1?type=student')}}" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                        </div>
                    </a>

                    <a href="{{url('sign_step1?type=org')}}" class="text-decoration-none">
                        <div class="info d-flex justify-content-between align-items-center shadow-sm border p-4">
                            <div class="d-flex align-items-center">
                                <div class="polygon d-flex justify-content-center align-items-center"><i class="fa-solid fa-building-columns"></i></div>
                                <div class="mx-2">
                                    <p class="fw-bold m-0">منظمة</p>
                                    <p>حساب مؤسسة تضم مجموعة موظفين بغرض تدريبهم</p>
                                </div>
                            </div>
                            <a href="{{url('sign_step1?type=org')}}" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>