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
                            <h4 class="count fw-bold" data-target="300">0</h4>
                            <p class="fw-bold">دورات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="public/front/img/video.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="5000">0</h4>
                            <p class="fw-bold">محاضرات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="public/front/img/students.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="1000">0</h4>
                            <p class="fw-bold">طلاب</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="public/front/img/graduation.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="50">0</h4>
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
                        <article class="card__article swiper-slide shadow">
                            <a href="pages/course-content.html">
                                <div class="card__image p-2">
                                    <img src="public/front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none">
                                    <p class="card__description mt-1 mb-1"> التخطيط الاستراتيجي للمؤسسات </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
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
                                    <img src="public/front/img/work.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none">
                                    <p class="card__description mt-1 mb-1"> كيفية بناء خطة عمل </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
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
                                    <img src="public/front/img/design.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none">
                                    <p class="card__description mt-1 mb-1"> تعلم تصميم ui ux </p>
                                </a> 
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
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
                                    <img src="public/front/img/html.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">برمجة وتطوير</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none">
                                    <p class="card__description my-1"> تعلم تصميم مواقع الويب باستخدام html,css </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
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

    <div class="categories py-5">
        <div class="container">
            <h2 class="section_title fw-bold">المسارات</h2>
            <p class="fw-bold mt-3">مسارات تعليمية وتدريبية متعددة تضم عددا كبيرا من الدورات المتنوعة ذات مادة علمية دسمة .</p>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                        <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                            <div> <img src="public/front/img/icons/Briefcase.svg" class="mx-2" alt=""> الاعمال</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                        <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                            <div> <img src="public/front/img/icons/Briefcase.svg" class="mx-2" alt=""> الاعمال</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                        <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                            <div> <img src="public/front/img/icons/MicrophoneStage.svg" class="mx-2" alt=""> تسويق</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/FileHtml.svg" class="mx-2" alt=""> تطوير</div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/PenNib.svg" class="mx-2" alt=""> تصميم</div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Database.svg" class="mx-2" alt=""> علم البيانات </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/MusicNote.svg" class="mx-2" alt=""> موسيقى </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Camera.svg" class="mx-2" alt=""> تصوير </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/SunHorizon.svg" class="mx-2" alt="">  اسلوب الحياه </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Detective.svg" class="mx-2" alt=""> تدريس </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Graph.svg" class="mx-2" alt=""> الشؤون الماليه </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Heartbeat.svg" class="mx-2" alt=""> صحة واللياقة البدنية </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="public/front/img/icons/Lightbulb.svg" class="mx-2" alt="">  تطوير الشخصية </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
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
                                <img src="public/front/img/photography.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">3 دورات</div>
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Photograpy Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="public/front/img/business.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">3 دورات</div>
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Business Idea Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="public/front/img/social.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">3 دورات</div>
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Social Media Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <a href="#">
                                <div class="card__image p-2">
                                <img src="public/front/img/ui-ux.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">3 دورات</div>
                                <div class="card__shadow"></div>
                                </div>
                            </a>
                
                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> UI-UX Design Expart </p>
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

    <div class="courses position-relative py-5">
        <div class="container">
            <h2 class="section_title fw-bold">دورات <span class="primary-color">  تبدأ قريباً</span></h2>
            <p class="fw-bold mt-3">سارع بحجز مقعدك فى دوراتنا المباشرة سيتم انطلاقها قريبا .</p>
        </div>

        <div class="card__container swiper mt-4 w-75">
            <div class="container">

                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide bg-white shadow">
                        <a href="pages/course-content.html">
                            <div class="card__image p-2">
                                <img src="public/front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>
            
                        <div class="card__data p-3">
                            <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                <p class="card__description mb-1"> كيفية بناء خطة تسويقية ناجحة</p>
                            </a>
                            <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3">(102)</span>
								<span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="public/front/img/grayStar.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
                                <img src="public/front/img/Star.svg" alt="">
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
                                <img src="public/front/img/work.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                <div class="card__shadow"></div>
                            </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mb-1">دورة اللغة الانجليزية مستوى أول</p>
                                </a>
                                <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
									<span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
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
                                <img src="public/front/img/design.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                <div class="card__shadow"></div>
                            </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mb-1">بناء برنامج مبيعات ويندور</p>
                                </a>
                                <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
									<span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
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
                                <img src="public/front/img/html.svg" alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">Html</div>
                                <div class="card__shadow"></div>
                            </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="pages/course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description mb-1">ورشة عمل كتابة محتوى</p>
                                </a>
                                <div class="name primary-color mb-2" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
									<span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="public/front/img/grayStar.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
									<img src="public/front/img/Star.svg" alt="">
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
                        <p class="title fw-bold">  انضم الى  <span class="primary-color"> منصة دوافير التعليمية</span> اختيارك الأفضل اليوم،  متوافقة مع شروط ومعايير المركز الوطني للتعليم الالكتروني</p>
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
