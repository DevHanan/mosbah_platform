@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
 
<div class="hero_sec bg-transparent px-5">
        <div class="container-fluid my-4">
            <div class="row shadow bg-white" style="border-radius: 20px;">
                <div class="col-lg-1 d-none d-lg-block">
                    <img src="{{asset('public/front/img/scetch-vector.png')}}" class="position-absolute scetch-vector" alt="">
                    <img src="{{asset('public/front/img/pencilVector.png')}}" class="position-absolute pencil-vector" alt="">
                    <img src="{{asset('public/front/img/bookVector.png')}}" class="position-absolute book-vector" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="info d-flex flex-column align-items-center py-4 pt-2">
                        <div> <img src="{{asset('public/front/img/logo.png')}}" class="text-center" height="150" alt=""> </div>
                        <p class="desc fw-bold text-center m-0">
                            التعلم عبر الإنترنت الآن في متناول يدك
                        </p>
                        <p class="text-center" style="font-size: 18px;font-weight: 600;">منصة التعلم عبر الإنترنت التي تقدم دورات متميزة متنوعة لتطوير مهاراتك</p>
                        <div class="content text-center mb-4" style="font-size: 14px;"> 
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                        </div>
                        <div>
                            <a href="#pathSection" class="btn secondary-bg text-white px-4"> ابدأ الأن <i class="fa-solid fa-arrow-left-long mx-2"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="px-4 w-100 h-100">
                        <div class="img position-relative w-100 h-100"><!--data-aos="fade-left" data-aos-duration="1000" -->
                            <img src="{{asset('public/front/img/Rectangle2.png')}}" class="img-fluid position-absolute bottom-0" alt="">
                            <img src="{{asset('public/front/img/Mask Group.png')}}" class="img-fluid position-absolute bottom-0" data-aos="fade-up" data-aos-delay="10" style="left: 0;" alt="">
                            <div class="bg-white shadow position-absolute d-flex align-items-center px-2" style="bottom: 12px;right: -55px;border-radius: 20px;">
                                <div class="persons d-flex flex-column justify-content-center mx-2">
                                    <p class="m-0 py-2 fw-bold d-flex">200+ طالب نشط <span class="rounded-circle d-block mx-2" style="width: 10px; height: 10px;background-color: rgb(139, 253, 139);"></span></p>
                                    <ul class="list-unstyled users-list py-3 m-0 avatar-group d-flex align-items-center justify-content-end" dir="ltr">
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="{{asset('public/front/img/user4.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="{{asset('public/front/img/user1.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="{{asset('public/front/img/user2.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="{{asset('public/front/img/user3.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <span class="rounded-circle w-100 h-100 secondary-bg text-white d-flex justify-content-center align-items-center">+2</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="statistics px-5 py-4">
        <div class="container-fluid">
            <div class="row shadow py-3 bg-white" style="border-radius: 20px;">
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center align-items-center my-2">
                        <div class="img"><img src="{{asset('public/front/img/courses.svg')}}" class="img-fluid" width="70" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold m-0" data-target="300">0</h4>
                            <p class="fw-bold m-0">دورات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center align-items-center my-2">
                        <div class="img"><img src="{{asset('public/front/img/video.svg')}}" class="img-fluid" width="70" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold m-0" data-target="5000">0</h4>
                            <p class="fw-bold m-0">محاضرات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center align-items-center my-2">
                        <div class="img"><img src="{{asset('public/front/img/students.svg')}}" class="img-fluid" width="70" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold m-0" data-target="1000">0</h4>
                            <p class="fw-bold m-0">طلاب</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center align-items-center my-2">
                        <div class="img"><img src="{{asset('public/front/img/graduation.svg')}}" class="img-fluid" width="70" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold m-0" data-target="50">0</h4>
                            <p class="fw-bold m-0">مدربين</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>

    <!-- workWay -->
    <section class="workSection px-5">
        <div class="container-fluid my-5">
            <div class="workWay p-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="workWay__content">
                            <h2 class="section_title fw-bold text-white"> كيفية عمل المنصة </h2>
                            <p class="text-white my-4" style="font-size: 14px;">
                                لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                            </p>
                            <div data-aos="fade-up" class="info my-3 d-flex justify-content-between align-items-center shadow-sm p-4 py-3 bg-white">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle secondary-bg d-flex justify-content-center align-items-center" style="width: 35px;height: 35px;">
                                        <i class="fa fa-user text-white"></i>
                                    </div>
                                    <div class="me-4">
                                        <p class="m-0 secondary-color">ابحث عن مدرس</p>
                                        <p class="m-0"> اختر معلمك المثالي من بين أكثر من 10000 مدرس لغة مؤهل. </p>
                                    </div>
                                </div>
                                <a href="#" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                            </div>
    
                            <div data-aos="fade-up" class="info my-3 d-flex justify-content-between align-items-center shadow-sm p-4 py-3 bg-white">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle secondary-bg d-flex justify-content-center align-items-center" style="width: 35px;height: 35px;">
                                        <i class="fa fa-calendar text-white"></i>
                                    </div>
                                    <div class="me-4">
                                        <p class="m-0 secondary-color"> احجز درسا </p>
                                        <p class="m-0"> حدد وقت الدرس وأضفه إلى التقويم الخاص بهم. </p>
                                    </div>
                                </div>
                                <a href="#" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                            </div>
    
                            <div data-aos="fade-up" class="info my-3 d-flex justify-content-between align-items-center shadow-sm p-4 py-3 bg-white">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle secondary-bg d-flex justify-content-center align-items-center" style="width: 35px;height: 35px;">
                                        <i class="fa-solid fa-laptop text-white"></i>
                                    </div>
                                    <div class="me-4">
                                        <p class="m-0 secondary-color">ابدأ التعلم</p>
                                        <p class="m-0"> اختر معلمك المثالي من بين أكثر من 10000 مدرس لغة مؤهل. </p>
                                    </div>
                                </div>
                                <a href="#" class="d-none"><i class="fa-solid fa-arrow-left-long secondary-color fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="position-relative w-100 h-100 gallery-item">
                            <video id="myVideo" class="w-100 h-100" poster="{{asset('public/front/img/video-bg.png')}}">
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div id="playButton" class="position-absolute play-icon p-3 rounded-pill d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="develope my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block px-5">
                    <div class="img d-flex position-relative">
                        <img src="{{asset('public/front/img/coach-by-whiteboard.png')}}" height="400" alt="">
                        <img src="{{asset('public/front/img/student-class-looking-course.png')}}" class="position-absolute" height="250" style="left: 0;" alt="">
                        <div class="primary-bg position-absolute rounded" style="right: 40%;bottom: 50px;">
                            <div class="text-white d-flex align-items-center rounded" style="background-color: #8980EE;">
                                <span class="m-2 ms-4 my-0" style="font-size: 40px;font-weight: 600;">15</span> 
                                <span class="w-50">سنة من الخبرة والتميز</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="secondary-color fw-bold">طور مهاراتك وتعلم معنا من أي مكان</h2>
                    <p class="my-4">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="50">
                                <i class="fa-solid fa-check bg-warning rounded-circle p-2 text-white"></i>
                                <p class="fw-bold m-0 me-3">مدربون خبراء</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="150">
                                <i class="fa-solid fa-check bg-danger rounded-circle p-2 text-white"></i>
                                <p class="fw-bold m-0 me-3">التعلم عبر الإنترنت</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="250">
                                <i class="fa-solid fa-check bg-info rounded-circle p-2 text-white"></i>
                                <p class="fw-bold m-0 me-3">نضعك علي المسار الصحيح</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="350">
                                <i class="fa-solid fa-check bg-primary rounded-circle p-2 text-white"></i>
                                <p class="fw-bold m-0 me-3">نتائج رائعة</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-end develop-btns">
                        <a href="pages/signup.html" class="btn secondary-bg text-white fw-bold mt-3 ms-3">انضم للطلاب الان</a>
                        <a href="pages/signup.html" class="btn tertiary-bg text-white fw-bold mt-3">انضم للمدربين</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular-courses my-5 mt-4">
        <div class="container">
            <h2 class="section_title fw-bold">دورات <span class="primary-color">اكثر طلبا</span></h2>
            <p class="fw-bold mt-3"> بين يديك الدورات الأكثر طلبا فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
        </div>
            
        <div class="card__container swiper mt-4">
            <div class="container">

                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work2.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> التخطيط الاستراتيجي للمؤسسات </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> كيفية بناء خطة عمل </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/frontimg/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/frontimg/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/frontimg/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/frontimg/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/design.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> تعلم تصميم ui ux </p>
                                </a> 
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/html.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">برمجة وتطوير</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم مواقع الويب باستخدام html,css </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            
            <div class="swiper-button-prev">
                <i class="fa-solid fa-angle-left"></i>
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- paths -->
    <div class="paths px-4" id="pathSection">
        <div class="container">
            <h2 class="section_title primary-color fw-bold my-4">المسارات التدريبية</h4>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/human-res.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">موارد بشرية</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/accountance.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">محاسبة</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/programming.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">برمجة وتطوير</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/graphic-design.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">تصميم جرافيك</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/lang-path.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">لغة</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/human-growth.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">تنمية بشرية</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/management.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">إدارة</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="bg-white p-1 py-2 mb-4 shadow-sm">
                        <div class="card__img w-100">
                            <img src="{{asset('public/front/img/medical.png')}} class="h-100 w-100" alt="">
                        </div>
                        <div class="content">
                            <p class="fw-bold text-center">طب</p>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>  

    <div class="courses my-5">
        <div class="">
            <div class="card__container swiper mt-4">
                <div class="container px-4 bg-white" style="border-radius: 20px;">
                    <h2 class="text-center pt-4">دورات تبدأ قريبا</h2>
                    <div class="swiper-pagination" style="top: 90px;"></div>

                    <div class="card__content mt-5">
                        <div class="swiper-wrapper">
                            <article class="card__article swiper-slide bg-white shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work2.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mb-1"> كيفية بناء خطة تسويقية ناجحة</p>
                                </a>
                                <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end align-items-center">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <div class="rating my-2 mb-3">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                            </article>
    
                            <article class="card__article swiper-slide bg-white shadow">
                                <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                                </a>
                
                                <div class="card__data p-3">
                                    <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                        <p class="card__description mb-1">دورة اللغة الانجليزية مستوى أول</p>
                                    </a>
                                    <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                    <div class="rating d-flex justify-content-end align-items-center">
                                        <span class="mx-3">(102)</span>
                                        <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                        <div class="rating my-2 mb-3">
                                            <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                        <div class="price">
                                            <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                            <span class="fw-bold">$ 500</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
    
                            <article class="card__article swiper-slide bg-white shadow">
                                <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/design.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                                </a>
                
                                <div class="card__data p-3">
                                    <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                        <p class="card__description mb-1">بناء برنامج مبيعات ويندور</p>
                                    </a>
                                    <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                    <div class="rating d-flex justify-content-end align-items-center">
                                        <span class="mx-3">(102)</span>
                                        <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                        <div class="rating my-2 mb-3">
                                            <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                        <div class="price">
                                            <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                            <span class="fw-bold">$ 500</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
    
                            <article class="card__article swiper-slide bg-white shadow">
                                <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/html.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">Html</div>
                                    <div class="card__shadow"></div>
                                </div>
                                </a>
                
                                <div class="card__data p-3">
                                    <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                        <p class="card__description mb-1">ورشة عمل كتابة محتوى</p>
                                    </a>
                                    <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                    <div class="rating d-flex justify-content-end align-items-center">
                                        <span class="mx-3">(102)</span>
                                        <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                        <div class="rating my-2 mb-3">
                                            <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                            <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                        <div class="price">
                                            <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                            <span class="fw-bold">$ 500</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
    
                <div class="swiper-button-next">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
        
            </div>
        </div>
    </div>

    <div class="trainers my-5">
        <h2 class=" text-center fw-bold"> أفضل مدربين لدينا </h2>
            
        <div class="card__container swiper mt-4">
            <div class="container">

                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-3">
                                <img src="{{asset('public/front/img/team1.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3 text-start">
                                <p class="card__description fw-bold m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description mb-0"> Photograpy Expart </p>
                                <div class="rating my-2 mb-3">
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <div class="social d-flex justify-content-end">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-3">
                                <img src="{{asset('public/front/img/team2.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3 text-start">
                                <p class="card__description fw-bold m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description m-0"> Business Idea Expart </p>
                                <div class="rating my-2 mb-3">
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <div class="social d-flex justify-content-end">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-3">
                                <img src="{{asset('public/front/img/team3.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3 text-start">
                                <p class="card__description fw-bold m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description m-0"> Social Media Expart </p>
                                <div class="rating my-2 mb-3">
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <div class="social d-flex justify-content-end">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-3">
                                <img src="{{asset('public/front/img/team4.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3 text-start">
                                <p class="card__description fw-bold m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description m-0"> UI-UX Design Expart </p>
                                <div class="rating my-2 mb-3">
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <div class="social d-flex justify-content-end">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            
            <div class="swiper-button-prev">
                <i class="fa-solid fa-angle-left"></i>
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </div>   

    <div class="nominated-courses my-5 mt-4">
        <div class="container">
            <h2 class="section_title fw-bold">دورات <span class="primary-color"> مرشحة </span></h2>
            <p class="fw-bold mt-3"> بين يديك الدورات المرشحة فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
        </div>
            
        <div class="card__container swiper mt-4">
            <div class="container">

                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work2.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> التخطيط الاستراتيجي للمؤسسات </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> كيفية بناء خطة عمل </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/design.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mt-1 mb-1"> تعلم تصميم ui ux </p>
                                </a> 
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/html.svg')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">برمجة وتطوير</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم مواقع الويب باستخدام html,css </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="pages/course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            
            <div class="swiper-button-prev">
                <i class="fa-solid fa-angle-left"></i>
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </div>
  
    <div class="testimonials my-5 mx-3">
        <div class="">
            <div class="card__container swiper mt-4">
                <div class="container bg-white" style="border-radius: 20px;">
                    <h2 class="text-center pt-4">اراء الطلاب</h2>
                    <div class="swiper-pagination" style="top: 90px;"></div>

                    <div class="card__content mt-5">
                        <div class="swiper-wrapper">
                            <article class="card__article swiper-slide">
                                <a href="#">
                                    <div class="card__image d-flex justify-content-center p-2">
                                        <img src="{{asset('public/front/img/testimonials1.png')}}" alt="image" class="card__img img-fluid w-100">
                                        <div class="card__shadow"></div>
                                    </div>
                                </a>
                    
                                <div class="card__data p-3 text-start text-center">
                                    <p class="card__description fw-bold m-0 mb-2"> Hannah Schmitt </p>
                                    <p class="card__description m-0"> Lead designer </p>
                                    <div class="my-2">
                                        <i class="fa-solid fa-quote-left text-warning"></i>
                                    </div>
                                    <div class="content p-2">
                                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                                    </div>
                                </div>
                            </article>
    
                            <article class="card__article swiper-slide">
                                <a href="#">
                                    <div class="card__image d-flex justify-content-center p-2">
                                    <img src="{{asset('public/front/img/testimonials2.png')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card__shadow"></div>
                                    </div>
                                </a>
                    
                                <div class="card__data p-3 text-start text-center">
                                    <p class="card__description fw-bold m-0 mb-2"> Hannah Schmitt </p>
                                    <p class="card__description m-0"> Lead designer </p>
                                    <div class="my-2">
                                        <i class="fa-solid fa-quote-left text-info"></i>
                                    </div>
                                    <div class="content p-2">
                                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                                    </div>
                                </div>
                            </article>
    
                            <article class="card__article swiper-slide">
                                <a href="#">
                                    <div class="card__image d-flex justify-content-center p-2">
                                    <img src="{{asset('public/front/img/testimonials3.png')}}" alt="image" class="card__img img-fluid w-100">
                                    <div class="card__shadow"></div>
                                    </div>
                                </a>
                    
                                <div class="card__data p-3 text-start text-center">
                                    <p class="card__description fw-bold m-0 mb-2"> Hannah Schmitt </p>
                                    <p class="card__description m-0"> Lead designer </p>
                                    <div class="my-2">
                                        <i class="fa-solid fa-quote-left text-danger"></i>
                                    </div>
                                    <div class="content p-2">
                                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
    
                <div class="swiper-button-next">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
        
            </div>
        </div>
    </div>

    <div class="join_us my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img mb-4">
                        <img src="{{asset('public/front/img/join.svg')}}" class="img-fluid" data-aos="fade-left" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="data h-100 d-flex flex-column justify-content-center">
                        <p class="title fw-bold">  انضم الى  <span class="tertiary-color"> اكاديمية مصباح التعليمية</span> اختيارك الأفضل اليوم،  متوافقة مع شروط ومعايير المركز الوطني للتعليم الالكتروني</p>
                        <p>بين يديك عدد كبير من الدورات التدريبية فى مسارات متعددة تكسبك مهارات تؤهلك لسوق العمل أو تمنحك خبرات ومعارف تجعل حياتك أفضل</p>
                        <div>
                            <a href="pages/signup.html" class="btn rounded-pill secondary-bg text-white mt-4">سجل الآن مجانا وابدأ التعلم</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@push('frontscript')
<script>
        // counter
        const counters = document.querySelectorAll(".statistics .count");
        const speed = 700;
        
        const isElementInViewport = (el) => {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        };
    
        const startCounterIfVisible = (counter) => {
            if (isElementInViewport(counter)) {
                const updateCount = () => {
                    const target = parseInt(counter.getAttribute("data-target"));
                    const count = parseInt(counter.innerText);
                    const increment = Math.ceil(target / speed);
        
                    if (count < target) {
                        counter.innerText = count + increment;
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            } else {
                window.addEventListener('scroll', () => {
                    if (isElementInViewport(counter)) {
                        startCounterIfVisible(counter);
                        // Remove the event listener once the counter starts
                        window.removeEventListener('scroll', arguments.callee);
                    }
                });
            }
        };
        
        counters.forEach(startCounterIfVisible);
    </script>
@endpush