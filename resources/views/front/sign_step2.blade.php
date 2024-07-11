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
    <link rel="shortcut icon" href="{{ asset($setting->favicon_path) }}">
    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/media.css')}}">
    <link rel="stylesheet" href="public/front/styles.css" />
</head>

<body>
    <div class="register sign_step2">
        <div class="row p-0 m-0">
            <div class="col-md-6 p-0 position-relative">
                <div class="welcome d-flex flex-column align-items-center justify-content-center">
                    <div class="layout position-absolute"></div>
                    <img src="{{asset('public/front/img/Group 327.svg')}}" class="position-absolute img-fluid h-100" alt="">
                    <a href="{{url('/')}}">
                     <img src="{{asset($setting->logoFullPath)}}" class="logo img-fluid position-absolute" style="height:120px;" alt="">
                    </a>
                    <div class="data text-center text-white">
                        <img src="{{asset('public/front/img/sign_step2.svg')}}" class="img-fluid" alt="">
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
                        <span style="color: #BDBDBD;">خطوة 02/03</span>
                        <p class="fw-bold"> المعلومات الشخصية </p>
                    </div>
                </div>
                <h1>أكمل ملفك الشخصي!</h1>
                <p class="mt-3 mb-5">قم بادخال بياناتك الشخصية ، التفاصيل الخاصة بك مطلوبة.</p>
                <form action="{{url('signup/step2')}}" method="POST">
                    @csrf
                    <label for="" class="mb-3"> الاسم الاول* </label>
                    <input type="text" name="first_name" class="form-control mb-3 p-3" placeholder="محمد " required>
                    <label for="" class="mb-3"> الاسم الاخير* </label>
                    <input type="text" name="last_name" class="form-control mb-3 p-3" placeholder=" علي" required>
                    <label for="" class="mb-3">بلد الإقامة</label>
                    <select class="form-control mb-3 p-3" name="country_id">
                        <option selected disabled>يرجى الاختيار</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}"> {{ $country->name }} </option>
                        @endforeach
                    </select>
                    <label for="" class="mb-3">المؤهل الدراسي</label>
                    <input type="text" name="qualifications" class="form-control mb-3 p-3" placeholder="الرجاء إدخال المؤهل الدراسي">
                    <label for="" class="mb-3">المسارات التي تهتم بها (مع الطالب والمنظمة)</label>
                    <div class="multiselect w-100">

                        <label class="form-label" for="track_id"> المسارات المفضلة <span>*</span></label>
                        <select class="form-control select2" name="track_ids[]" id="track_id" multiple>
                            <option value="">{{ __('select') }}</option>
                            @foreach($tracks as $track)
                            <option value="{{ $track->id }}"> {{ $track->name }}</option>

                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="about">الدرجه العلمية <span>*</span></label>
                        <select class="select2 form-control" name="about" id="about" required>
                            <option value="">{{ __('select') }}</option>
                            <option value="0">{{ __('admin.instructors.student') }}</option>
                            <option value="1">{{ __('admin.instructors.Bachelor') }}</option>
                            <option value="2 ">{{ __('admin.instructors.Graduated') }}</option>
                            <option value="3">{{ __('admin.instructors.Doctorate') }}</option>
                            <option value="4">{{ __('admin.instructors.Master') }}</option>

                        </select>
                        @error('about')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn secondary-bg fw-bold text-white w-100 my-3 py-3">حفظ ومتابعة </button>
                    <p class="text-center">يتم تأمين معلوماتك بأمان <i class="fa-solid fa-lock mx-3"></i></p>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        var expanded = false;

        function showCheckboxes(id) {
            var checkboxes = document.getElementById(id);
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
    </script>
</body>

</html>