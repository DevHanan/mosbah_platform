@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<div class="hero_sec pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img">
                    <img src="public/front/img/index-header.svg" class="img-fluid" data-aos="fade-left" data-aos-duration="1000" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="info py-5">
                    <h4 class="title py-3 pb-1 fw-bold secondary-color">ابدأ بالنجاح</h4>
                    <p class="desc fw-bold text-white">
                        يمكنك الوصول إلى
                        <span class="position-relative">5000+ <img src="public/front/img/text-line1.svg" class="img-fluid img-line position-absolute" alt=""></span>
                        دورة
                        مع <span class="position-relative">300 <img src="public/front/img/text-line2.svg" class="img-fluid img-line position-absolute" alt=""></span> من المدربين
                        والمؤسسات
                    </p>
                    <div class="content my-5">منصة دوافير التعليمية متوافقة مع شروط ومعايير المركز الوطني للتعليم الالكتروني</div>
                    <div class="search position-relative">
                        <input type="search" class="form-control rounded-pill py-2 mt-3 text-center" placeholder="ماذا تريد أن تتعلم؟">
                        <i class="fa-solid fa-search p-2 h-100 position-absolute rounded-circle d-flex align-items-center text-white secondary-bg"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="statistics py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="d-flex justify-content-center my-2">
                    <div class="img"><img src="public/front/img/courses.svg" class="img-fluid" alt=""></div>
                    <div class="info d-flex flex-column mx-3">
                        <h4 class="count fw-bold" data-target="{{ $about->course_number}}"> 0</h4>
                        <p class="fw-bold">دورات</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="d-flex justify-content-center my-2">
                    <div class="img"><img src="public/front/img/video.svg" class="img-fluid" alt=""></div>
                    <div class="info d-flex flex-column mx-3">
                        <h4 class="count fw-bold" data-target="{{ $about->lecture_number}}">0</h4>
                        <p class="fw-bold">محاضرات</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="d-flex justify-content-center my-2">
                    <div class="img"><img src="public/front/img/students.svg" class="img-fluid" alt=""></div>
                    <div class="info d-flex flex-column mx-3">
                        <h4 class="count fw-bold" data-target="{{ $about->student_number}}">0</h4>
                        <p class="fw-bold">طلاب</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="d-flex justify-content-center my-2">
                    <div class="img"><img src="public/front/img/graduation.svg" class="img-fluid" alt=""></div>
                    <div class="info d-flex flex-column mx-3">
                        <h4 class="count fw-bold" data-target="{{ $about->instructor_number}}">0</h4>
                        <p class="fw-bold">مدربين</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popular-courses my-5">
    <div class="container">
        <h2 class="section_title fw-bold">دورات <span class="primary-color">اكثر طلبا</span></h2>
        <p class="fw-bold mt-3"> بين يديك الدورات الأكثر طلبا فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
    </div>

    <div class="card__container swiper mt-4">
        <div class="container">

            <div class="card__content">
                <div class="swiper-wrapper">
                    @foreach($most_required as $course)
                    <article class="card__article swiper-slide shadow">
                        <a href="{{ url('course/'.$course->id)}}">
                            <div class="card__image p-2">
                                <img src="public/front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1"> {{ optional($course->track)->name }}</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>

                        <div class="card__data p-3">
                            <a href="{{ url('course/'.$course->id)}}" class="text-decoration-none">
                                <p class="card__description mt-1 mb-1"> {{ $course->name }} </p>
                            </a>
                            <div class="name primary-color mb-3" style="font-size: 14px;"> {{ optional($course->instructor)->name }}</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3">({{ $course->SubscriptionCount}})</span>
                                <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="public/front/img/grayStar.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ url('course/'.$course->id)}}" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                <div class="price">
                                    <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                    <span class="fw-bold">$ {{ $course->price }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach

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

<div class="popular-courses my-5">
    <div class="container">
        <h2 class="section_title fw-bold">دورات <span class="primary-color">المرشحة </span></h2>
        <p class="fw-bold mt-3"> بين يديك الدورات الأكثر ترشيحا فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
    </div>

    <div class="card__container swiper mt-4">
        <div class="container">

            <div class="card__content">
                <div class="swiper-wrapper">
                    @foreach($recommened_courses as $course)
                    <article class="card__article swiper-slide shadow">
                        <a href="{{ url('course/'.$course->id)}}">
                            <div class="card__image p-2">
                                <img src="public/front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1"> {{ optional($course->track)->name }}</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>

                        <div class="card__data p-3">
                            <a href="{{ url('course/'.$course->id)}}" class="text-decoration-none">
                                <p class="card__description mt-1 mb-1"> {{ $course->name }} </p>
                            </a>
                            <div class="name primary-color mb-3" style="font-size: 14px;"> {{ optional($course->instructor)->name }}</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3">({{ $course->SubscriptionCount}})</span>
                                <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="public/front/img/grayStar.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ url('course/'.$course->id)}}" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                <div class="price">
                                    <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                    <span class="fw-bold">$ {{ $course->price }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach

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
<div class="categories py-5">
    <div class="container">
        <h2 class="section_title fw-bold">المسارات</h2>
        <p class="fw-bold mt-3">مسارات تعليمية وتدريبية متعددة تضم عددا كبيرا من الدورات المتنوعة ذات مادة علمية دسمة .</p>
        <div class="row">
            @if($tracks)
            @foreach($tracks as $track)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url('courses?track_id='.$track->id)}}" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="{{ asset('public/'. $track->image )}}" class="mx-2" alt=""> {{ $track->name}}</div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>


<div class="trainers my-5">
    <div class="container">
        <h2 class="section_title fw-bold">افضل <span class="primary-color"> مدربين لدينا</span></h2>
        <p class="fw-bold mt-3">لدينا مدربين ذوي خبرات ومؤهلات علمية ومهارات تجعلهم اختيارك الأفضل لتبدأ رحلتك التعليمية .</p>
    </div>

    <div class="card__container swiper mt-4">
        <div class="container">

            <div class="card__content">
                <div class="swiper-wrapper">
                    @foreach($instructors as $instructor)
                        @if($instructor->recommened == 1)
                    <article class="card__article swiper-slide shadow">
                        <a href="#">
                            <div class="card__image p-2">
                                <img src="{{ asset('public/'.$instructor->image)}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">{{ $instructor->courseNumber }} دورات</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>

                        <div class="card__data p-3">
                            <p class="card__description fw-bold text-center m-0 mb-2"> {{ $instructor->name }} </p>
                            <p class="card__description text-center m-0"> {{ $instructor->job }} </p>
                        </div>
                    </article>
                    @endif
                    @endforeach


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

<div class="courses position-relative py-5">
    <div class="container">
        <h2 class="section_title fw-bold">دورات <span class="primary-color"> تبدأ قريباً</span></h2>
        <p class="fw-bold mt-3">سارع بحجز مقعدك فى دوراتنا المباشرة سيتم انطلاقها قريبا .</p>
    </div>

    <div class="card__container swiper mt-4 w-75">
        <div class="container">

            <div class="card__content">
                <div class="swiper-wrapper">
                    @foreach($latest as $course)
                    <article class="card__article swiper-slide bg-white shadow">
                        <a href="{{ url('course/'.$course->id)}}">
                            <div class="card__image p-2">
                                <img src="public/front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1"> {{ optional($course->track)->name }}</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>

                        <div class="card__data p-3">
                            <a href="{{ url('course/'.$course->id)}}" class="text-decoration-none text-dark">
                                <p class="card__description mb-1">  {{ $course->name }}</p>
                            </a>
                            <div class="name primary-color mb-2" style="font-size: 14px;"> {{ optional($course->instructor)->name }}</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3"> ({{ $course->SubscriptionCount}})</span>
                                <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="public/front/img/grayStar.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ url('course/'.$course->id)}}" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                <div class="price">
                                    <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                    <span class="fw-bold">$ {{ $course->price }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach

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


    <img src="public/front/img/icons/pencil.svg" class="pencil d-none d-lg-block position-absolute" alt="">
    <img src="public/front/img/icons/loop.svg" class="loop d-none d-md-block position-absolute" alt="">
    <img src="public/front/img/icons/lamp.svg" class="lamp position-absolute" alt="">
    <img src="public/front/img/icons/pc.svg" class="pc position-absolute" alt="">
    <img src="public/front/img/icons/map.svg" class="map position-absolute" alt="">
</div>


<div class="students_notes my-5">
    <div class="container">
        <h2 class="section_title fw-bold">آراء <span class="primary-color">الطلاب</span></h2>
        <p class="fw-bold mt-3">طلابنا سعداء، انظر ماذا يقول عنا طلابنا</p>
    </div>

    <div class="card__container swiper mt-4">
        <div class="container">

            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide shadow">
                        <div class="d-flex align-items-center justify-content-end position-relative px-3 pt-3">
                            <img src="public/front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                            <div class="person_info text-start mx-2">
                                <p class="fw-bold m-0">Guy Hawkins</p>
                                <p class="m-0">UI-UX Designer</p>
                            </div>
                            <div class="img"><img src="public/front/img/person1.svg" class="img-fluid rounded-circle" alt=""></div>
                        </div>
                        <div class="card__data p-3">
                            <p class="card__description my-3"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                        </div>
                    </article>

                    <article class="card__article swiper-slide shadow">
                        <div class="d-flex align-items-center justify-content-end position-relative px-3 pt-3">
                            <img src="public/front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                            <div class="person_info text-start mx-2">
                                <p class="fw-bold m-0">Guy Hawkins</p>
                                <p class="m-0">UI-UX Designer</p>
                            </div>
                            <div class="img"><img src="public/front/img/person2.svg" class="img-fluid rounded-circle" alt=""></div>
                        </div>
                        <div class="card__data p-3">
                            <p class="card__description my-3"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                        </div>
                    </article>

                    <article class="card__article swiper-slide shadow">
                        <div class="d-flex align-items-center justify-content-end position-relative px-3 pt-3">
                            <img src="public/front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                            <div class="person_info text-start mx-2">
                                <p class="fw-bold m-0">Guy Hawkins</p>
                                <p class="m-0">UI-UX Designer</p>
                            </div>
                            <div class="img"><img src="public/front/img/person3.svg" class="img-fluid rounded-circle" alt=""></div>
                        </div>
                        <div class="card__data p-3">
                            <p class="card__description my-3"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
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

<div class="join_us my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img">
                    <img src="public/front/img/join.svg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="data h-100 d-flex flex-column justify-content-center">
                    <p class="title fw-bold"> انضم الى <span class="primary-color"> منصة دوافير التعليمية</span> اختيارك الأفضل اليوم، متوافقة مع شروط ومعايير المركز الوطني للتعليم الالكتروني</p>
                    <p>بين يديك عدد كبير من الدورات التدريبية فى مسارات متعددة تكسبك مهارات تؤهلك لسوق العمل أو تمنحك خبرات ومعارف تجعل حياتك أفضل</p>
                    <div>
                        <a href="{{ url('signup')}}" class="btn rounded-pill secondary-bg text-white mt-4">سجل الآن مجانا وابدأ التعلم</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection