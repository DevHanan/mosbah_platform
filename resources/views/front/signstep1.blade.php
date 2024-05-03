<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>  @if(isset($title))
  {{ $title }} -
  @endif
  {{ $setting->title }}</title>
  <link rel="shortcut icon" href="{{ asset($setting->favicon_path) }}">
      <link rel="stylesheet" href="public/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="public/front/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="public/front/css/custom.css">
    <link rel="stylesheet" href="public/front/css/media.css">
</head>
<body>
    <div class="register sign_step1">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="public/front/img/Group 327.svg" class="position-absolute img-fluid h-100" alt="">
                    <img src="public/front/img/logo.svg" class="logo img-fluid position-absolute" alt="">
                    <div class="data text-center text-white">
                        <img src="public/front/img/sign_step1.svg" class="img-fluid" alt="">
                        <h2>فقط بضع خطوات وننتهي </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro container p-5 pt-3">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <a href="{{url('signup')}}" class="text-decoration-none fw-bold" style="color:#696F79">
                            <i class="fa-solid fa-angle-right ms-2"></i> عودة 
                        </a>
                        <div class="text-center">
                            <span style="color: #BDBDBD;">خطوة 01/03</span>
                            <p class="fw-bold"> المعلومات الشخصية </p>
                        </div>
                    </div>
                    <h1>تسجيل حساب مدرب!</h1>
                    <p class="mt-3 mb-5">لغرض التنظيم ، التفاصيل الخاصة بك مطلوبة.</p>
                    <form action="{{url('sign_step1')}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6"></div>
                        </div>
                        <label for="" class="mb-3">عنوان البريد الإلكتروني*</label>
                        <input type="email" name="email" required class="form-control mb-3 p-3" placeholder="أدخل عنوان البريد الإلكتروني">
                        
                        <label for="" class="mb-3"> رقم الهاتف </label>
                        <input id="phone_number"  name="phone" required  type="tel" name="phone" class="form-control w-100 mb-3 p-3 ps-5" placeholder="">
                        <label for="" class="my-3">كلمة مرور*</label>
                        <input type="password"  name="password" required  class="form-control mb-3 p-3" placeholder="أدخل كلمة المرور" >

                        <label for="" class="my-3"> تأكيد كلمة المرور</label>
                        <input type="password"  required name="password_confirmation" required  class="form-control mb-3 p-3" placeholder="أدخل كلمة المرور" >

                        <div class="form-check d-flex">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label mx-5" for="flexCheckChecked">
                                أوافق على الشروط والأحكام
                            </label>
                        </div>

                        <button type="submit" class="btn secondary-bg fw-bold text-white w-100 my-3 py-3">تسجيل حساب</a>
                    </form>
                    <p class="text-center">او</p>
                    <button ype="submit" class="btn shadow border fw-bold w-100 my-3 py-3">التسجيل عن طريق جوجل <img src="public/front/img/icons/google.png" class="mx-3" alt=""></button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const phoneInputField = document.querySelector("#phone_number");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
      </script>
</body>
</html>