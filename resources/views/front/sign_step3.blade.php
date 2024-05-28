<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @if(isset($title))
  {{ $title }} -
  @endif
  {{ $setting->title }}</title>
  <link rel="shortcut icon" href="{{ asset($setting->favicon_path) }}">    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('public/front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/media.css')}}">
    <link rel="stylesheet" href="public/front/styles.css" />
</head>
<body>
    <div class="register sign_step3">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="{{asset('public/front/img/Group 327.svg')}}" class="position-absolute img-fluid h-100" alt="">
                    <img src="{{asset('public/front/img/logo.svg')}}" class="logo img-fluid position-absolute" alt="">
                    <div class="data text-center text-white">
                        <img src="{{asset('public/front/img/sign_step3.svg')}}" class="img-fluid" alt="">
                        <h2>فقط بضع خطوات وننتهي </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro container p-5 pt-3">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <a href="{{url(url()->previous())}}" class="text-decoration-none fw-bold" style="color:#696F79">
                            <i class="fa-solid fa-angle-right ms-2"></i> عودة 
                        </a>
                        <div class="text-center">
                            <span style="color: #BDBDBD;">خطوة 03/03</span>
                            <p class="fw-bold"> المعلومات الشخصية </p>
                        </div>
                    </div>
                    <h1>أكمل ملفك الشخصي!</h1>
                    <p class="mt-3 mb-5">لغرض التنظيم ، التفاصيل الخاصة بك مطلوبة.</p>
                    <form action="{{url('sign_step3')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="px-5 mb-4 d-flex flex-column align-items-center">
                            <div class="img_box rounded d-flex flex-column align-items-center justify-content-center">
                                <img src="{{asset('public/front/img/fi-rr-camera.svg')}}"  name="profile" alt="">
                                <p>اضف صورة</p>
                            </div>
                           

                            <div class="choose_img position-relative d-flex justify-content-center my-3">
                                <input type="file" class="position-absolute"  name="image" id="fileInput">
                                <div class="py-2 text-center rounded">اختر الملف</div>
                            </div>                            
                        </div>
                                                
                        <button type="submit" class="btn secondary-bg fw-bold text-white w-100 my-3 py-3">حفظ ومتابعة </button>
                        <p class="text-center">يتم تأمين معلوماتك بأمان <i class="fa-solid fa-lock mx-3"></i></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.getElementById('fileInput').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const imgBox = document.querySelector('.img_box');
                    imgBox.innerHTML = ''; // Clear previous content
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.alt = 'Selected Image';
                    img.className = 'img-fluid rounded-circle';
                    img.style.cssText = 'width: 100%; height: 100%;';
                    imgBox.style.cssText = 'background: transparent; width:213px;height:200px;padding: 0';
                    imgBox.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        });       
        
    </script>
</body>
</html>