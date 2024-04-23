<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwafeer</title>
    <link rel="stylesheet" href="PUBLIC/FRONT/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="PUBLIC/FRONT/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="PUBLIC/FRONT/css/custom.css">
    <link rel="stylesheet" href="PUBLIC/FRONT/css/media.css">
</head>
<body>
    <div class="register sign_step1">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="PUBLIC/FRONT/img/Group 327.svg" class="position-absolute img-fluid h-100" alt="">
                    <img src="PUBLIC/FRONT/img/logo.svg" class="logo img-fluid position-absolute" alt="">
                    <div class="data text-center text-white">
                        <img src="PUBLIC/FRONT/img/sign_step1.svg" class="img-fluid" alt="">
                        <h2>فقط بضع خطوات وننتهي </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro container p-5 pt-3">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <a href="{{  url('sign_step1')}}" class="text-decoration-none fw-bold" style="color:#696F79">
                            <i class="fa-solid fa-angle-right ms-2"></i> عودة 
                        </a>
                    </div>
                    <h1>تأكيد الحساب !</h1>
                    <p class="mt-3 mb-5">تم ارسال كود تفعيل على الايميل أو رقم الهاتف الخاص بك قم بنسخه ولصقه هنا لمتابعة إنشاء حسابك </p>
                    <form action="">

                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-flex justify-content-around verification_number mb-3">
                                    <input type="text" maxlength="1" class="form-control mx-2 text-center">
                                    <input type="text" maxlength="1" class="form-control mx-2 text-center">
                                    <input type="text" maxlength="1" class="form-control mx-2 text-center">
                                    <input type="text" maxlength="1" class="form-control mx-2 text-center">
                                </div>
                                <span class="timer">30 ث</span>
                            </div>
                            <div style="font-size:14px;padding:48px 0 0;"> لم تتلقى الرمز ؟ <a href="{{url('sign_step1')}}">ارسال مرة اخري</a></div>
                            <div class="card-footer border-0">
                                <a href="{{url('sign_step2')}}" type="button" class="btn primary-color w-100"></a>
                            </div>
                        </div>    
                        <a href="{{url('sign_step2')}}" type="submit" class="btn secondary-bg fw-bold text-white w-100 my-3 py-3">متابعة</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>