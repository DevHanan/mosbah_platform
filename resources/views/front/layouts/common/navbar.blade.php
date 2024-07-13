<nav class="navbar navbar-expand-lg navbar-light bg-white sec-nav shadow-sm p-0">
        <div class="container-fluid nav_content">
            <a class="navbar-brand" href="index.html"><img src="{{asset('public/front/img/logo.png')}}" class="img-fluid" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-absolute p-1 px-2 lang rounded" style="top:0;background-color: #EDEDED;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{asset('public/front/img/icons/egypt-lang.svg')}}" width="20" alt=""> Ar 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">  <img src="{{asset('public/front/img/icons/en-lang.svg')}}" width="20" alt="">  en </a></li>
                        </ul>
                    </li>
                </ul>
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" href="{{url('/')}}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{url('/about-us')}}">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{url('/courses')}}">الدورات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{url('/blogs')}}">المدونة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/policies')}}">سياستنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/contactus')}}">تواصل معنا</a>
                </li>
                <li class="nav-item">
                <a class="nav-link rounded primary-bg text-white px-3 mx-1 book-store" href="#"> حساب المعادلة </a>
                </li>
                </ul>
                <form class="d-flex">
                <a href="{{ url('signup') }}" class="px-3 text-decoration-none fw-bold secondary-color">انضم الينا الان</a>
                <div class="secondary-bg" style="height: 25px;width: 3px;"></div>
                <a href="{{ url('/signin') }}" class="px-3 text-decoration-none fw-bold text-dark">تسجيل الدخول</a>
                </form>
            </div>
        </div>
    </nav>
<img src="{{asset('public/front/img/bg-header.svg')}}" class="position-absolute header_layout" alt="">
