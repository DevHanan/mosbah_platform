<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwafeer</title>
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="front/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="front/css/custom.css">
    <link rel="stylesheet" href="front/css/media.css">
</head>
<body>
    <div class="nav-hero">
        <div class="container-fluid">
          <div class="d-flex flex-wrap justify-content-between align-items-center py-2">
            <div class="header-info d-flex align-items-center">
              <a href="pages/signup.html" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none"> اشترك الان مجانا </a>
              <a href="pages/login.html" class="mx-3 p-2 text-decoration-none text-dark"> تسجيل الدخول <i class="fa-solid fa-lock mx-2"></i> </a>
            </div>
            <div>
              <ul class="navbar-nav me-auto my-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="nav-item px-2">
                  <a class="nav-link position-relative" aria-current="page" href="pages/course-cart.html">
                      <i class="fa-solid fa-cart-shopping primary-color fa-lg"></i>
                      <span class="position-absolute bg-white fw-bold rounded-pill">1</span>
                  </a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link primary-color" href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link primary-color" href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link primary-color" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
              </ul>  
            </div>
          </div> 
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light primary-bg sec-nav shadow-sm">
    <div class="container-fluid nav_content">
        <a class="navbar-brand" href="index.html"><img src="front/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" href="index.html">الرئيسية</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/about.html">من نحن</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/courses.html">دوراتنا</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/blogs.html">المدونة</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="#">حساب التنسيق</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">تحقق من الشهادة</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="#">صانع CV</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="pages/policies.html">سياساتنا</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/contact.html">تواصل معنا</a>
            </li>
			<li class="nav-item">
				  <div class="header-info d-flex align-items-center">
                  <a href="pages/books.html" class="mx-3 p-2 rounded-pill secondary-bg text-white text-decoration-none">متجر الكتب</a>
                  </div>
            </li>
        </div>
    </div>
    </nav>

    <img src="front/img/bg-header.svg" class="position-absolute header_layout" alt="">

    <div class="hero_sec pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <img src="front/img/index-header.svg" class="img-fluid" data-aos="fade-left" data-aos-duration="1000" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info py-5">
                        <h4 class="title py-3 pb-1 fw-bold secondary-color">ابدأ بالنجاح</h4>
                        <p class="desc fw-bold text-white">
                           يمكنك الوصول إلى
                            <span class="position-relative">5000+ <img src="front/img/text-line1.svg" class="img-fluid img-line position-absolute" alt=""></span>
                            دورة
                            مع <span class="position-relative">300 <img src="front/img/text-line2.svg" class="img-fluid img-line position-absolute" alt=""></span> من المدربين 
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
                        <div class="img"><img src="front/img/courses.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="300">0</h4>
                            <p class="fw-bold">دورات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="front/img/video.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="5000">0</h4>
                            <p class="fw-bold">محاضرات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="front/img/students.svg" class="img-fluid" alt=""></div>
                        <div class="info d-flex flex-column mx-3">
                            <h4 class="count fw-bold" data-target="1000">0</h4>
                            <p class="fw-bold">طلاب</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="d-flex justify-content-center my-2">
                        <div class="img"><img src="front/img/graduation.svg" class="img-fluid" alt=""></div>
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
                                    <img src="front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
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
                                    <img src="front/img/work.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
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
                                    <img src="front/img/design.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
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
                                    <img src="front/img/html.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
                                    <img src="front/img/Star.svg" alt="">
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
                            <div> <img src="front/img/icons/Briefcase.svg" class="mx-2" alt=""> الاعمال</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                        <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                            <div> <img src="front/img/icons/Briefcase.svg" class="mx-2" alt=""> الاعمال</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                        <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                            <div> <img src="front/img/icons/MicrophoneStage.svg" class="mx-2" alt=""> تسويق</div>
                            <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/FileHtml.svg" class="mx-2" alt=""> تطوير</div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/PenNib.svg" class="mx-2" alt=""> تصميم</div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Database.svg" class="mx-2" alt=""> علم البيانات </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/MusicNote.svg" class="mx-2" alt=""> موسيقى </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Camera.svg" class="mx-2" alt=""> تصوير </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/SunHorizon.svg" class="mx-2" alt="">  اسلوب الحياه </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Detective.svg" class="mx-2" alt=""> تدريس </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Graph.svg" class="mx-2" alt=""> الشؤون الماليه </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Heartbeat.svg" class="mx-2" alt=""> صحة واللياقة البدنية </div>
                        <div class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="pages/courses.html" class="text-decoration-none text-dark">
                    <div class="data bg-white d-flex justify-content-between align-items-center my-4 p-3">
                        <div> <img src="front/img/icons/Lightbulb.svg" class="mx-2" alt="">  تطوير الشخصية </div>
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
                                <img src="front/img/photography.svg" alt="image" class="card__img img-fluid w-100">
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
                                <img src="front/img/business.svg" alt="image" class="card__img img-fluid w-100">
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
                                <img src="front/img/social.svg" alt="image" class="card__img img-fluid w-100">
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
                                <img src="front/img/ui-ux.svg" alt="image" class="card__img img-fluid w-100">
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
                                <img src="front/img/work2.svg" alt="image" class="card__img img-fluid w-100">
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
                                <img src="front/img/grayStar.svg" alt="">
                                <img src="front/img/Star.svg" alt="">
                                <img src="front/img/Star.svg" alt="">
                                <img src="front/img/Star.svg" alt="">
                                <img src="front/img/Star.svg" alt="">
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
                                <img src="front/img/work.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
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
                                <img src="front/img/design.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
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
                                <img src="front/img/html.svg" alt="image" class="card__img img-fluid w-100">
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
                                    <img src="front/img/grayStar.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
									<img src="front/img/Star.svg" alt="">
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


        <img src="front/img/icons/pencil.svg" class="pencil d-none d-lg-block position-absolute" alt="">
        <img src="front/img/icons/loop.svg" class="loop d-none d-md-block position-absolute" alt="">
        <img src="front/img/icons/lamp.svg" class="lamp position-absolute" alt="">
        <img src="front/img/icons/pc.svg" class="pc position-absolute" alt="">
        <img src="front/img/icons/map.svg" class="map position-absolute" alt="">
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
                                <img src="front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                                <div class="person_info text-start mx-2">
                                    <p class="fw-bold m-0">Guy Hawkins</p>
                                    <p class="m-0">UI-UX Designer</p>
                                </div>
                                <div class="img"><img src="front/img/person1.svg" class="img-fluid rounded-circle" alt=""></div>
                            </div>
                            <div class="card__data p-3">
                                <p class="card__description my-3"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <div class="d-flex align-items-center justify-content-end position-relative px-3 pt-3">
                                <img src="front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                                <div class="person_info text-start mx-2">
                                    <p class="fw-bold m-0">Guy Hawkins</p>
                                    <p class="m-0">UI-UX Designer</p>
                                </div>
                                <div class="img"><img src="front/img/person2.svg" class="img-fluid rounded-circle" alt=""></div>
                            </div>
                            <div class="card__data p-3">
                                <p class="card__description my-3"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow">
                            <div class="d-flex align-items-center justify-content-end position-relative px-3 pt-3">
                                <img src="front/img/quotes.svg" class="img-fluid position-absolute" style="top: 20px;right: 22px;" alt="">
                                <div class="person_info text-start mx-2">
                                    <p class="fw-bold m-0">Guy Hawkins</p>
                                    <p class="m-0">UI-UX Designer</p>
                                </div>
                                <div class="img"><img src="front/img/person3.svg" class="img-fluid rounded-circle" alt=""></div>
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
                        <img src="front/img/join.svg" class="img-fluid" alt="">
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

    <footer class="primary-bg pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="subscribe w-75">
                        <h4 class="text-white"> اشترك فى نشرتنا الاخبارية </h4>
                        <p class="text-white py-3"> سجل ايميلك ليصلك كل ما هو جديد عن دورات وتخفيضات دوافير </p>
                        <form action="">
                            <input type="email" class="form-control p-3" placeholder="البريد الألكتروني" required>
                            <div>
                                <button type="submit" class="btn rounded-pill secondary-bg text-white my-4">اشترك الان</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <div class="footer_categories">
                        <h4 class="text-white">المسارات النشطة</h4>
                        <ul class="list-unstyled p-0">
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">التصميم</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">تطوير</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">تسويق</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">تجارة و اعمال</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">اسلوب الحياه</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">التصوير</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">موسيقي</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer_categories">
                        <h4 class="text-white">اكتشف</h4>
                        <ul class="list-unstyled p-0">
                            <li class="py-2"><a href="/" class="text-white text-decoration-none">الرئيسية</a></li>
                            <li class="py-2"><a href="pages/about.html" class="text-white text-decoration-none">من نحن</a></li>
                            <li class="py-2"><a href="pages/courses.html" class="text-white text-decoration-none">الدورات</a></li>
                            <li class="py-2"><a href="pages/books.html" class="text-white text-decoration-none">متجر الكتب</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">المدونة</a></li>
                            <li class="py-2"><a href="pages/contact.html" class="text-white text-decoration-none">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="contact text-white">
                        <div class="logo"><a href="/"><img src="front/img/logo.png" alt=""></a></div>
                        <h4 class="text-white pb-2">تواصل معنا</h4>
                        <p>
                            <a href="tel:01287848630" class="text-white text-decoration-none"><i class="fa-solid fa-phone-flip ms-2"></i> 0227537567 </a>
                        </p>
                        <p>
                            <a href="tel:01287848630" class="text-white text-decoration-none"><i class="fa-solid fa-mobile-screen ms-2"></i> 01287848630 </a>
                        </p>
                        <p class="mt-1"><i class="fa fa-envelope ms-2"></i> example@mail.com</p>

                        <div class="social">
                            <ul class="list-unstyled d-flex w-100 m-0 p-0">
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-facebook-f fa-lg primary-color"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-whatsapp fa-lg primary-color"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-instagram fa-lg primary-color"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-youtube fa-lg primary-color"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-x-twitter fa-lg primary-color"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="front/js/jquery.min.js"></script>  
    <script src="front/js/bootstrap.bundle.min.js"></script>  
    <script src="front/js/swiper-bundle.min.js"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--animation-->
    <script>
        AOS.init();
      </script>
    <script src="front/js/main.js"></script>  

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
</body>
</html>