<div class="nav-hero">
        <div class="container-fluid">
          <div class="d-flex flex-wrap justify-content-between align-items-center py-2">
            <div class="header-info d-flex align-items-center">
              <a href="{{url('signup')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> اشترك الان مجانا </a>
              <a href="{{url('signin')}}" class="mx-3 p-2 text-decoration-none text-dark"> تسجيل الدخول <i class="fa-solid fa-lock mx-2"></i> </a>
            </div>
            <div>
              <ul class="navbar-nav me-auto my-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="nav-item px-2">
                  <a class="nav-link position-relative" aria-current="page" href="{{ url('/cart') }}">
                      <i class="fa-solid fa-cart-shopping primary-color fa-lg"></i>
                      <span class="position-absolute bg-white fw-bold rounded-pill">1</span>
                  </a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="{{ $setting->facebook_url }}"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="{{ $setting->whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="{{ $setting->instagram_url }}"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link primary-color" href="{{ $setting->youtube_url }}"><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link primary-color" href="{{ $setting->twitter_url }}"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
              </ul>  
            </div>
          </div> 
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light primary-bg sec-nav shadow-sm">
    <div class="container-fluid nav_content">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('public/'.$setting->logo_path)}}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">الرئيسية</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us')}}">من نحن</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/courses')}}">دوراتنا</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/blogs')}}">المدونة</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="#">حساب التنسيق</a>
            </li>
            <li class="nav-item">
            <!-- <a class="nav-link" href="#">تحقق من الشهادة</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="#">صانع CV</a>
            </li> -->
			<li class="nav-item">
            <a class="nav-link" href="{{ url('/policies') }}">سياساتنا</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/contactus')}}">تواصل معنا</a>
            </li>
			<li class="nav-item">
				  <div class="header-info d-flex align-items-center">
                  <a href="{{ url('/books')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none">متجر الكتب</a>
                  </div>
            </li>
        </div>
    </div>
    </nav>

    <img src="#" class="position-absolute header_layout" alt="">