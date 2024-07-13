@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')

<section class="about position-relative pt-5">
        <div class="container">
            <h1 class="text-center fw-bold py-5 pb-3">من نحن</h1>
            <div class="d-flex justify-content-center mb-4">
                <p class="about-text text-center w-50" style="font-size: 18px;">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('public/front/img/aboutHeader2.png')}}" class="img-fluid h-100" data-aos="fade-left" alt="">
                </div>
                <div class="col-8">
                    <img src="{{asset('public/front/img/aboutHeader1.png')}}" class="img-fluid h-100" data-aos="fade-right" alt="">
                </div>
            </div>


            <div class="intro my-5">
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <h2 class="fw-bold text-center position-relative">ماذا نقدم</h2>
                    </div>
                    <div class="w-50 intro-content">
                        <p class="mx-5" style="line-height: 1.9;">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات؟لوريم ايبسوم دولار سيت أميت , </p>
                    </div>
                </div>
            </div>

            <div class="statistics py-5">
                <div class="row">
                    
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <span><h2 class="secondary-color fw-bold" style="font-size: 45px;"> + </h2></span>
                                <h2 class="fw-bold me-2 count" data-target="208" style="font-size: 45px;"> 0 </h2> 
                            </div>
                            <p class="fw-bold text-dark">مدرب حول العالم</p>
                        </div>
                    </div>

                    
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <span><h2 class="secondary-color fw-bold" style="font-size: 45px;"> + </h2></span>
                                <h2 class="fw-bold me-2 count" data-target="100" style="font-size: 45px;"> 0 </h2> 
                            </div>
                            <p class="fw-bold text-dark">دورات</p>
                        </div>
                    </div>

                    
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <span><h2 class="secondary-color fw-bold" style="font-size: 45px;"> h </h2></span>
                                <h2 class="fw-bold me-2 count" data-target="24" style="font-size: 45px;"> 0 </h2> 
                            </div>
                            <p class="fw-bold text-dark">فريق دعم محترف</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <span><h2 class="secondary-color fw-bold" style="font-size: 45px;"> k </h2></span>
                                <h2 class="fw-bold me-2 count" data-target="100" style="font-size: 45px;"> 0 </h2> 
                            </div>
                            <p class="fw-bold text-dark">طالب حول العالم</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aim my-5">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{asset('public/front/img/aim.png')}}" class="img-fluid"  data-aos="fade-left"alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex flex-column justify-content-center h-100">
                            <h2 class="fw-bold position-relative">مهمتنا</h2>
                            <p class="mt-5" style="line-height: 1.9;">
                                لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn fw-bold secondary-color mt-5 px-5 py-3">قيمنا</button>
                </div>
            </div>

            <div class="story">
                <h2 class="fw-bold text-center py-5 pt-3">القصة والقيم الكامنة وراء شركتنا</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-4 mb-4 shadow-sm" style="background-color: #F9F9F9;border-radius: 24px;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img d-flex justify-content-center align-items-center py-4 h-100" 
                                    style="background-color: #FFB584;border-radius: 24px;">
                                        <img src="{{asset('public/front/img/icons/story-team-work.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <h4 class="fw-bold">العمل الجماعي</h4>
                                        <p class="m-0">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="p-4 mb-4 shadow-sm" style="background-color: #F9F9F9;border-radius: 24px;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img d-flex justify-content-center align-items-center py-4 h-100" 
                                    style="background-color: #FFB584;border-radius: 24px;">
                                        <img src="{{asset('public/front/img/icons/story2.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <h4 class="fw-bold">ابتداع</h4>
                                        <p class="m-0">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="p-4 mb-4 shadow-sm" style="background-color: #F9F9F9;border-radius: 24px;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img d-flex justify-content-center align-items-center py-4 h-100" 
                                    style="background-color: #FFB584;border-radius: 24px;">
                                        <img src="{{asset('public/front/img/icons/story3.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <h4 class="fw-bold">مسؤولية </h4>
                                        <p class="m-0">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="p-4 mb-4 shadow-sm" style="background-color: #F9F9F9;border-radius: 24px;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img d-flex justify-content-center align-items-center py-4 h-100" 
                                    style="background-color: #FFB584;border-radius: 24px;">
                                        <img src="{{asset('public/front/img/icons/story4.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <h4>التميز</h4>
                                        <p class="m-0">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="{{asset('public/front/img/team4.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Photograpy Expart </p>
                                <div class="social d-flex justify-content-center mt-4">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="{{asset('public/front/img/team1.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Business Idea Expart </p>
                                <div class="social d-flex justify-content-center mt-4">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="{{asset('public/front/img/team2.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Social Media Expart </p>
                                <div class="social d-flex justify-content-center mt-4">
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#" class="mx-1 d-flex justify-content-center align-items-center text-white text-decoration-none rounded-circle" style="width: 40px;height: 40px;"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="{{asset('public/front/img/team3.png')}}" alt="image" class="card__img img-fluid w-100">
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> UI-UX Design Expart </p>
                                <div class="social d-flex justify-content-center mt-4">
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

        <div class="partners position-relative py-5">
            <h2 class="text-center fw-bold"> شركاء نجاحنا </h2>

            <div class="card__container swiper mt-4">
                <div class="container">
                    <div class="card__content">
                        <div class="swiper-wrapper">
                            <article class="card__article swiper-slide d-flex flex-column align-items-center p-3">
                                <img src="{{asset('public/front/img/partners.png')}}" class="img-fluid p-2" alt="" data-toggle="tooltip" data-placement="top" title="Partner name">
                                <!-- <div class="partner_name fw-bold mt-3">Partner name</div> -->
                            </article>

                            <article class="card__article swiper-slide d-flex flex-column align-items-center p-3">
                                <img src="{{asset('public/front/img/partners.png')}}" class="img-fluid p-2" alt="" data-toggle="tooltip" data-placement="top" title="Partner name">
                            </article>

                            <article class="card__article swiper-slide d-flex flex-column align-items-center p-3">
                                <img src="{{asset('public/front/img/partners.png')}}" class="img-fluid p-2" alt="" data-toggle="tooltip" data-placement="top" title="Partner name">
                            </article>

                            <article class="card__article swiper-slide d-flex flex-column align-items-center p-3">
                                <img src="{{asset('public/front/img/partners.png')}}" class="img-fluid p-2" alt="" data-toggle="tooltip" data-placement="top" title="Partner name">
                            </article>

                            <article class="card__article swiper-slide d-flex flex-column align-items-center p-3">
                                <img src="{{asset('public/front/img/partners.png')}}" class="img-fluid p-2" alt="" data-toggle="tooltip" data-placement="top" title="Partner name">
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

    </section>
@endsection

@push('frontscript')
<script src="{{asset('public/front/js/main.js')}}"></script>  
    <script src="{{asset('public/front/js/main.js')}}"></script>  

    <script>
        // counter
        const counters = document.querySelectorAll(".count");
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

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endpush