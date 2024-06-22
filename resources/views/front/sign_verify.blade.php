<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @if(isset($title))
        {{ $title }} -
        @endif
        {{ $setting->title }}
    </title>
    <link rel="shortcut icon" href="{{ asset($setting->iconFullPath) }}">
    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/media.css')}}">
</head>

<body>
    <div class="register sign_step1">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="{{asset('public/front/img/Group 327.svg')}}" class="position-absolute img-fluid h-100" alt="">
                    <img src="{{asset('public/front/img/logo.svg')}}" class="logo img-fluid position-absolute" alt="">
                    <div class="data text-center text-white">
                        <img src="{{asset('public/front/img/sign_step1.svg')}}" class="img-fluid" alt="">
                        <h2>فقط بضع خطوات وننتهي </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro container p-5 pt-3">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <!-- <a href="{{  url('sign_step1')}}" class="text-decoration-none fw-bold" style="color:#696F79">
                            <i class="fa-solid fa-angle-right ms-2"></i> عودة
                        </a> -->
                    </div>
                    <h1>تأكيد الحساب !</h1>
                    <p class="mt-3 mb-5">تم ارسال كود تفعيل على الايميل أو رقم الهاتف الخاص بك قم بنسخه ولصقه هنا لمتابعة إنشاء حسابك </p>
                    <form action="{{url('verify-email')}}" method="POST">
                        @csrf

                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-flex justify-content-around verification_number mb-3">
                                    <input type="text"  required maxlength="1" class="form-control mx-2 text-center" name="verify[]">
                                    <input type="text" required  maxlength="1" class="form-control mx-2 text-center"  name="verify[]">
                                    <input type="text"  required maxlength="1" class="form-control mx-2 text-center"  name="verify[]">
                                    <input type="text" required maxlength="1" class="form-control mx-2 text-center"  name="verify[]">
                                </div>
                                <span class="timer" id="timer">{{ $landingSetting->verification_expire_time_in_seconds }} </span>ث
                            </div>
                            <input type="hidden" name="model" value="{{$type}}">
                            <input type="hidden" name="email" value="{{$item->email}}">

                            <div style="font-size:14px;padding:48px 0 0;"> لم تتلقى الرمز ؟ <a href="{{url('sign_step1')}}" disabled>ارسال مرة اخري</a></div>
                            <div class="card-footer border-0">
                                <a href="{{url('sign_step2')}}" disabled type="button" class="btn primary-color w-100"></a>
                            </div>
                        </div>
                        <button type="submit" class="btn secondary-bg fw-bold text-white w-100 my-3 py-3">متابعة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var timer = document.getElementById('timer');
        var seconds = <?php echo $landingSetting->verification_expire_time_in_seconds ?>; // initial time in seconds

        function countdown() {
            seconds--;
            timer.innerHTML = seconds + '';
            if (seconds > 0) {
                setTimeout(countdown, 1000); // call countdown every 1 second
            } else {
                // timer expired, do something here
                //   alert('Time\'s up!');
            }
        }

        countdown(); // start the countdown
    </script>
</body>

</html>