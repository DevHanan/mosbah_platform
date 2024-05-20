<div class="nav-hero">
  <div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-2">
      <div class="header-info d-flex align-items-center">
        @if(auth()->guard('students-login')->user() )
        <a href="{{url('/student/dashboard')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> لوحه تحكم الطالب </a>
        <a href="javascript:void(0);" 
        class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none" 
        href="#" onclick="event.preventDefault();
        document.getElementById('student-logout-form').submit();">

          تسجيل الخروج
        </a>

        <form id="student-logout-form" action="{{ route('student.student-logout') }}" method="POST">
          @csrf
        </form>
        @elseif(auth()->guard('instructors-login')->user())
        <a href="{{url('/instructor/dashboard')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> لوحه تحكم المحاضر </a>
        <a href="javascript:void(0);" 
        class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none" 
        href="#" onclick="event.preventDefault();
        document.getElementById('instructor-logout-form').submit();">

          تسجيل الخروج
        </a>

        <form id="instructor-logout-form" action="{{ route('instructor.instructor-logout') }}" method="POST">
          @csrf
        </form>
        @elseif(auth()->guard('web')->user())

        <a href="{{url('/admin/dashboard')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> لوحه تحكم الادمن </a>
        <a href="javascript:void(0);" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">

          تسجيل الخروج
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
        </form>
        @else
        <a href="{{url('signup')}}" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> اشترك الان مجانا </a>
        <a href="{{url('signin')}}" class="mx-3 p-2 text-decoration-none text-dark"> تسجيل الدخول <i class="fa-solid fa-lock mx-2"></i> </a>
        @endif
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
            <a class="nav-link primary-color" href="{{ $setting->instgram_url }}"><i class="fa-brands fa-instagram"></i></a>
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
      <img src="{{asset($setting->logoFullPath)}}" alt="logo" style="max-height:140px;max-width:fit-content;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  @if(Request::is('/')) active @endif" href="{{url('/')}}">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::is('about-us')) active @endif" href="{{ url('/about-us')}}">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  @if(Request::is(['courses','course/*']) ) active @endif" href="{{url('/courses')}}">دوراتنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  @if(Request::is('blogs')) active @endif" href="{{url('/blogs')}}">المدونة</a>
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
          <a class="nav-link  @if(Request::is('policies')) active @endif" href="{{ url('/policies') }}">سياساتنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  @if(Request::is('contact-us')) active @endif" href="{{url('/contactus')}}">تواصل معنا</a>
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