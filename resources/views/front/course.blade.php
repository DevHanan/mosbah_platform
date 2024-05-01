@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<div class="course-content-page">

<div class="hero_sec pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img h-100 d-flex">
                    <img src="{{ asset('public/front/img/questions.svg')}}" class="img-fluid m-0" alt="">
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <img src="{{ asset('public/front/img/completed-bg.svg')}}" class="position-absolute img-fluid" alt="">
                <div class="info position-relative py-5">
                    <h2 class="title py-3 pb-1 fw-bold secondary-color text-center">  {{ $course->name }} </h2>
                    <h3 class="fw-bold text-center mb-4">
                        <a href="{{url('/courses')}}" class="text-decoration-none text-white">الأختبارات</a>
                    </h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="persons mx-3">
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li class="avatar avatar-xs pull-up position-relative">
                                  <img src="{{ asset('public/front/img/user4.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                </li>
                                <li class="avatar avatar-xs pull-up position-relative">
                                  <img src="{{ asset('public/front/img/user1.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                </li>
                                <li class="avatar avatar-xs pull-up position-relative">
                                  <img src="{{ asset('public/front/img/user2.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                </li>
                                <li class="avatar avatar-xs pull-up position-relative">
                                  <img src="{{ asset('public/front/img/user3.png')}}" alt="Avatar" class="rounded-circle w-100 h-100" />
                                </li>
                                <li class="avatar avatar-xs pull-up position-relative">
                                  <span class="rounded-circle w-100 h-100 bg-white d-flex justify-content-center align-items-center">+2</span>
                                </li>
                            </ul>
                        </div>
                        <div class="followers_number mx-3">
                            <p class="text-white mb-1"> طلاب  {{ $course->SubscriptionCount}} </p>
                            <p class="text-white mb-0">يتابعون هذه الدورة </p>
                        </div>
                    </div>
                    <div class="ratings d-flex justify-content-center my-4">
                        <span class="text-white mx-4 fw-bold">(15) 4.5</span>
                        <div class="stars">
                            <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                            <img src="{{ asset('public/front/img/Star.svg')}}" alt="">
                            <img src="{{ asset('public/front/img/Star.svg')}}" alt="">
                            <img src="{{ asset('public/front/img/Star.svg')}}" alt="">
                            <img src="{{ asset('public/front/img/Star.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="date text-center">
                        <i class="fa fa-calendar" style="color: #374957;"></i>
                        <span class="fw-bold mx-2">{{ $course->start_date  }}</span>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a href="{{url('cart/'.$course->id)}}" class="btn secondary-bg text-white mt-4 px-3"> اشترك الأن <i class="fa fa-arrow-left mx-2"></i></a>
                    </div>
                    
                    <div class="form-check d-flex justify-content-center p-0" style="font-size: 14px;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label me-5 text-white" for="flexCheckChecked">
                            أرغب في تلقي بريد إلكتروني من دوافير والتعرف على العروض الأخرى المتعلقة بالمحاسبة
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 right-class"> 
          <div class="nav-align-top shadow-sm border my-4" style="border-radius: 24px;">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item py-3">
                    <button type="button" class="nav-link border-0 p-0 m-0 active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-content" aria-controls="navs-justified-content" aria-selected="true">
                    <span class="d-sm-block fw-bold text-dark"> محتوي الدورة</span>
                    </button>
                </li>
                <li class="nav-item py-3">
                    <button type="button" class="nav-link border-0 p-0 m-0" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-about" aria-controls="navs-justified-about" aria-selected="false">
                    <span class="d-sm-block fw-bold text-dark"> عن الدورة</span>
                    </button>
                </li>
                <li class="nav-item py-3">
                    <button type="button" class="nav-link border-0 p-0 m-0" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-trainsers" aria-controls="navs-justified-trainsers" aria-selected="false">
                    <span class="d-sm-block fw-bold text-dark"> عن المدرب</span>
                    </button>
                </li>
                <li class="nav-item py-3">
                    <button type="button" class="nav-link border-0 p-0 m-0" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-rating" aria-controls="navs-justified-rating" aria-selected="false">
                    <span class="d-sm-block fw-bold text-dark"> تقييمات الطلاب</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content p-4">
                <div class="tab-pane fade show active" id="navs-justified-content" role="tabpanel">

                    <!-- اختبار بداية الدورة -->
                    <!-- <div class="accordion mb-4" id="course_start_exam">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-white border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#start_exam" aria-expanded="true" aria-controls="start_exam">
                                <img src="{{ asset('public/front/img/icons/fi-rr-document.png')}}" class="ms-2" alt="">  اختبار بداية الدورة
                            </button>
                          </h2>
                          <div id="start_exam" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#course_start_exam">
                            <div class="accordion-body">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="my-2">المحاولات : <span>0/3</span></div>
                                    <div class="my-2">درجات الاجتياز : <span>70/100</span></div>
                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                </div>                                            
                                <div class="d-flex flex-wrap justify-content-end mt-2">
                                    <div class="mt-2">
                                        <button class="btn secondary-bg px-3 text-white">ابدء الأختبار</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div> -->
                  
                    <!-- المرحلة الاولي -->
                    @foreach($course->levels as $level)
                    <div class="accordion mb-4" id="accordion{{$level->id}}">
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button pb-0 d-block bg-transparent border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#dataTab{{$level->id}}" aria-expanded="true" aria-controls="dataTab{{$level->id}}">
                                    <div class="d-flex justify-content-between flex-wrap mb-2">
                                        <p>   {{ $level->name }} </p>
                                        <div class="d-flex flex-wrap">
                                            <div class="parts"> {{ $level->lectures()->count()}} </div>
                                            <div class="time mx-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 10 ساعات </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>

                            @foreach($level->lectures as $lecture)
                            <div id="dataTab{{$lecture->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion{{$level->id}}">
                                <div class="accordion-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#stage1_lec{{$lecture->id}}
                                        " aria-expanded="true" aria-controls="stage1_lec1">
                                        <img src="{{ asset('public/front/img/icons/fi-rr-bell.png')}}" class="ms-2" alt="">  {{ $lecture->title }}
                                        </button>
                                        </h2>
                                        <div id="stage1_lec{{$lecture->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data_body">
                                            <div class="accordion-body">
                                                <p>
{{
    $lecture->short_description
}}                                                </p>                                          
                                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-4">
                                                    <div class="d-flex flex-wrap mt-2">
                                                        <div class="time ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                                        <div class="time ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button class="btn secondary-bg px-3 text-white">اذهب الي الدورة</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
<!-- 
                            <div id="dataTab" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion{{$level->id}}">
                                <div class="accordion-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwo">
                                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#stage1_lec1_exam" aria-expanded="true" aria-controls="stage1_lec1_exam">
                                                <img src="{{ asset('public/front/img/icons/fi-rr-document.png')}}" class="ms-2" alt=""> اختبار المحاضرة الاولى
                                            </button>
                                        </h2>
                                        <div id="stage1_lec1_exam" class="accordion-collapse collapse" aria-labelledby="headingtwo" data-bs-parent="#data_body">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="my-2">المحاولات : <span>0/3</span></div>
                                                    <div class="my-2">درجات الاجتياز : <span>70/100</span></div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                                </div>                                            
                                                <div class="d-flex flex-wrap justify-content-end mt-2">
                                                    <div class="mt-2">
                                                        <button class="btn secondary-bg px-3 text-white">ابدء الأختبار</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="dataTab" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion{{$level->id}}">
                                <div class="accordion-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#stage1_lec2" aria-expanded="true" aria-controls="stage1_lec2">
                                        <img src="{{ asset('public/front/img/icons/fi-rr-bell.png')}}" class="ms-2" alt=""> المحاضرة الثانية
                                        </button>
                                        </h2>
                                        <div id="stage1_lec2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data_body">
                                            <div class="accordion-body">
                                                <p>
                                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                                                </p>                                          
                                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-4">
                                                    <div class="d-flex flex-wrap mt-2">
                                                        <div class="time ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                                        <div class="time ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button class="btn secondary-bg px-3 text-white">اذهب الي الدورة</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="dataTab" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion{{$level->id}}">
                                <div class="accordion-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwo">
                                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#stage1_lec2_exam" aria-expanded="true" aria-controls="stage1_lec2_exam">
                                                <img src="{{ asset('public/front/img/icons/fi-rr-document.png')}}" class="ms-2" alt=""> اختبار المحاضرة الثانية
                                            </button>
                                        </h2>
                                        <div id="stage1_lec2_exam" class="accordion-collapse collapse" aria-labelledby="headingtwo" data-bs-parent="#data_body">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="my-2">المحاولات : <span>0/3</span></div>
                                                    <div class="my-2">درجات الاجتياز : <span>70/100</span></div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                                </div>                                            
                                                <div class="d-flex flex-wrap justify-content-end mt-2">
                                                    <div class="mt-2">
                                                        <button class="btn secondary-bg px-3 text-white">ابدء الأختبار</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="dataTab" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion{{$level->id}}">
                                <div class="accordion-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwo">
                                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#stage1_exam" aria-expanded="true" aria-controls="stage1_exam">
                                                <img src="{{ asset('public/front/img/icons/fi-rr-document.png')}}" class="ms-2" alt=""> اختبار نهاية المرحلة
                                            </button>
                                        </h2>
                                        <div id="stage1_exam" class="accordion-collapse collapse" aria-labelledby="headingtwo" data-bs-parent="#data_body">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="my-2">المحاولات : <span>0/3</span></div>
                                                    <div class="my-2">درجات الاجتياز : <span>70/100</span></div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                                </div>                                            
                                                <div class="d-flex flex-wrap justify-content-end mt-2">
                                                    <div class="mt-2">
                                                        <button class="btn secondary-bg px-3 text-white">ابدء الأختبار</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                    @endforeach

                    <!-- المرحلة الثانية -->
                   

                    <!-- اختبار نهاية الدورة -->
                    <!-- <div class="accordion mb-4" id="course_end_exam">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-white border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#end_exam" aria-expanded="true" aria-controls="end_exam">
                                <img src="{{ asset('public/front/img/icons/fi-rr-document.png')}}" class="ms-2" alt="">  اختبار نهاية الدورة
                            </button>
                          </h2>
                          <div id="end_exam" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#course_end_exam">
                            <div class="accordion-body">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="my-2">المحاولات : <span>0/3</span></div>
                                    <div class="my-2">درجات الاجتياز : <span>70/100</span></div>
                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-alarm-clock.svg')}}" class="mx-1" width="15" alt=""> 30 : 1 ساعة </div>
                                    <div class="time my-2 ms-3"> <img src="{{ asset('public/front/img/icons/fi-rr-calendar.png')}}" class="mx-1" width="15" alt=""> 12 سبتمبر , 2023 </div>
                                </div>                                            
                                <div class="d-flex flex-wrap justify-content-end mt-2">
                                    <div class="mt-2">
                                        <button class="btn secondary-bg px-3 text-white">ابدء الأختبار</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div> -->

                </div>

                <div class="tab-pane fade" id="navs-justified-about" role="tabpanel">
                    <h3 class="primary-color fw-bold">المحاسبة مالية</h3>
                    <p class="my-4">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                    <br>    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                    </p>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title primary-color fw-bold mb-4">اهدف الدورة</div>
                            <ul>
                                <li>تعليم مبادئ المحاسبة المالية</li>
                                <li>اعداد قوائم مالية</li>
                                <li>اعداد ميزانية لأي مؤسسة</li>
                                <li>حساب ارباح وخسارة أي مؤسسة</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="title primary-color fw-bold mb-4">الدورة موجهة الي :</div>
                            <ul>
                                <li>طلاب الجامعات بكليات التجارة</li>
                                <li>موظفي المؤسسات التجارية</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="navs-justified-trainsers" role="tabpanel">
                    <div class="shadow-sm my-4 p-4" style="border-radius: 24px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="person d-flex align-items-center">
                                <div class="img"><img src="{{ asset('public/front/img/user4.png')}}" alt=""></div>
                                <p class="fw-bold mx-3">علي احمد</p>
                            </div>
                            <div class="rating d-flex">
                                <div><img src="{{ asset('public/front/img/icons/fi-rr-e-learning.png')}}" width="20" alt=""></div>
                                <div class="mx-2 fw-bold">
                                    15 دورة
                                </div>
                            </div>
                        </div>
                        <div class="opinion my-3">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                        </div>
                        <div class="rating d-flex justify-content-end align-items-center"> 
                            <!-- <div class="fw-bold">تقييم عام </div> -->
                            <div class="mx-2 fw-bold">4.5 </div>
                            <div class="img">
                                <img src="{{ asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="navs-justified-rating" role="tabpanel">
                    <div id="paginationCard">
                        <div class="card_pagination shadow-sm my-4 p-4" style="border-radius: 24px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="person d-flex align-items-center">
                                    <div class="img"><img src="{{ asset('public/front/img/user4.png')}}" alt=""></div>
                                    <p class="fw-bold mx-3">علي احمد</p>
                                </div>
                                <div class="rating d-flex">
                                    <div class="mx-2 fw-bold">4.5</div>
                                    <div class="img">
                                        <img src="{{ asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="opinion my-3">
                                لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                            </div>
                        </div>

                        <div class="card_pagination shadow-sm my-4 p-4" style="border-radius: 24px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="person d-flex align-items-center">
                                    <div class="img"><img src="{{ asset('public/front/img/user4.png')}}" alt=""></div>
                                    <p class="fw-bold mx-3">علي احمد</p>
                                </div>
                                <div class="rating d-flex">
                                    <div class="mx-2 fw-bold">4.5 </div>
                                    <div class="img">
                                        <img src="{{ asset('public/front/img/icons/empty-yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/icons/yellow-star.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="opinion my-3">
                                لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                            </div>
                        </div>
                    </div>
                    
                    <nav class="mt-4 d-flex justify-content-center" aria-label="Page navigation example">
                        <ul id="pagination" class="pagination align-items-center">
                            <li class="page-item">
                                <a id="prevPageBtn" class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <!-- Numbered pagination buttons will be added dynamically here -->
                            <li class="page-item">
                                <a id="nextPageBtn" class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="comment mt-5">
                        <h3 class="primary-color">اضف تعليقك</h2>
                            <form action="">
                                <textarea name="" class="form-control w-100" id="" cols="30" rows="5"></textarea>
                                <div class="d-flex flex-wrap my-3">
                                    <p class="fw-bold ms-3">ما تقييمك للدورة؟</p>
                                    <div class="rating-stars" data-question="course">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap my-3">
                                    <p class="fw-bold ms-3">ما تقييمك للمدرب؟</p>
                                    <div class="rating-stars" data-question="trainer">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                        <img src="{{ asset('public/front/img/emptyStar.png')}}" alt="">
                                    </div>
                                </div>
                                <button class="btn secondary-bg text-white mt-3"> انشر التعليق <img src="{{ asset('public/front/img/icons/fi-rr-comment-alt.png')}}"
                                        width="20" class="mx-3" alt=""></button>
                            </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 left-class">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="course_content shadow-sm border my-4 p-2" style="border-radius: 24px;">
                        <div class="position-relative w-100 h-100 gallery-item">
                            <video id="myVideo" class="w-100 h-100" poster="../img/video-img.png')}}" style="object-fit: cover;">
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div id="playButton" class="position-absolute play-icon p-3 rounded-pill d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-play text-white"></i>
                            </div>
                        </div>

                        <!-- <div class="img"><img src="{{ asset('public/front/img/video-img.png')}}" class="img-fluid w-100" alt=""></div> -->
                        <div class="info mt-3 px-4">
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-e-learning.png')}}" class="ms-2" width="20" alt=""> <span> {{ $course->lectures()->count()}} محاضرة</span></p>
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-money.svg')}}" class="ms-2" width="20" alt=""> <span> $ {{ $course->price }} </span></p>
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-user.svg')}}" class="ms-2" width="20" alt=""> <span> {{ $course->SubscriptionCount}} طلاب مشتركين</span></p>
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-e-learning.png')}}" class="ms-2" width="20" alt=""> <span> 200 سعة مقاعد</span></p>
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-time-quarter-to.svg')}}" class="ms-2" width="20" alt=""> <span> 80 ساعة </span></p>
                            <p> <img src="{{ asset('public/front/img/icons/fi-rr-graduation-cap.svg')}}" class="ms-2" width="20" alt=""> <span>مستوى متقدم </span></p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ url('cart/'.$course->id)}}" class="btn secondary-bg text-white px-3"> اشترك الأن <i class="fa fa-arrow-left mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="shadow-sm border my-4 p-4 py-5 d-flex flex-column align-items-center" style="border-radius: 24px;">
                        <p class="fw-bold" style="font-size: 18px;">دورات ذات صلة</p>
                        <ul class="">
                            @foreach($related_courses as $item)
                            <li class="py-1"><a href="{{url('course/'.$item->id)}}" class="text-decoration-none">  {{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection