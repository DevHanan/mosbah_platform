@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')

<section class="about">
    <div class="hero_sec pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <img src="public/front/img/about.svg" class="img-fluid m-0" data-aos="fade-left" data-aos-duration="1000" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info position-relative py-5">
                        <img src="public/front/img/completed-bg.svg" class="position-absolute img-fluid" alt="">
                        <h4 class="title py-5 pb-1 fw-bold secondary-color">من نحن </h4>
                        <div class="content fw-bold text-white">
                            منصة تعليمية تقدم دورات تدريبية عن بعد تهدف إلى نشر العلم وخدمة المجتمع وإكساب الطلاب مهارات وقدرات تؤهلهم لسوق العمل، منصة تعليمية متوافقة مع شروط ومعايير المركز الوطني للتعليم الالكتروني
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="achievementSec my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <img src="public/front/img/achievement.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <h2 class="position-relative"> إنجازاتنا <img src="public/front/img/text-line2.svg" class="position-absolute" alt=""></h2>
                        <h5 class="my-5 mb-5 ">خلال فترة قصيرة حققنا هذه الإنجازات، نحن بكم ولكم وفي خدمتكم على الدوام.</h5>
                        <div class="row">

                            <div class="col-6">
                                <div class="data mb-4 d-flex align-items-center">
                                    <div class="img rounded p-3" style="background-color: #E9F8F3;"><img src="public/front/img/icons/GraduationCap.svg" alt=""></div>
                                    <div class="mx-3 text-center">
                                        <h3 class="fw-bold count" data-target="300">0</h3>
                                        <p class="fw-bold">دورات</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="data mb-4 d-flex align-items-center">
                                    <div class="img rounded p-3" style="background-color: #FFFAF5;"><img src="public/front/img/icons/VideoCamera.svg" alt=""></div>
                                    <div class="mx-3 text-center">
                                        <h3 class="fw-bold count" data-target="5000">0</h3>
                                        <p class="fw-bold">محاضرات</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="data mb-4 d-flex align-items-center">
                                    <div class="img rounded p-3" style="background-color: #F0F7FF;"><img src="public/front/img/icons/UsersThree.svg" alt=""></div>
                                    <div class="mx-3 text-center">
                                        <h3 class="fw-bold count" data-target="50">0</h3>
                                        <p class="fw-bold">مدربين</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="data mb-4 d-flex align-items-center">
                                    <div class="img rounded p-3" style="background-color: #FFEEF0;"><img src="public/front/img/icons/GraduationCap2.svg" alt=""></div>
                                    <div class="mx-3 text-center">
                                        <h3 class="fw-bold count" data-target="1000">0</h3>
                                        <p class="fw-bold">طلاب</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team trainers py-5">
        <div class="container">
            <h2> تعرف على <span class="position-relative primary-color"> فريقنا <img src="public/front/img/text-line2.svg" style="bottom: -12px;right: 0;" class="position-absolute" alt=""></span> </h2>
            <h5 class="my-5 mb-5 "> فريق عمل يضم نخبة من المتميزين فى إدارة المحتوى التعليمى الالكتروني وتقديمه بصورة متكاملة ومتميزة.</h5>
        </div>
        <div class="card__container swiper mt-4">
            <div class="container">

                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-2">
                                    <img src="public/front/img/photography.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card__shadow"></div>
                                </div>
                            </a>

                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Photograpy Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-2">
                                    <img src="public/front/img/business.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card__shadow"></div>
                                </div>
                            </a>

                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Business Idea Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-2">
                                    <img src="public/front/img/social.svg" alt="image" class="card__img img-fluid w-100">
                                    <div class="card__shadow"></div>
                                </div>
                            </a>

                            <div class="card__data p-3">
                                <p class="card__description fw-bold text-center m-0 mb-2"> Jacob Jones </p>
                                <p class="card__description text-center m-0"> Social Media Expart </p>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="#">
                                <div class="card__image p-2">
                                    <img src="public/front/img/ui-ux.svg" alt="image" class="card__img img-fluid w-100">
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

    <div class="aim position-relative my-5">
        <!-- <img src="public/front/img/aim-bg.svg" class="position-absolute img-fluid" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <h2 class="position-relative"> مهمتنا <img src="public/front/img/text-line2.svg" class="position-absolute" alt=""></h2>
                        <h5 class="my-5 mb-5 "> نعمل جاهدين على توفير دورات تدريبية متعددة فى مجالات متنوعة بحيث تساعد الطلاب على اكتساب مهارات تؤهلهم للعمل وتزيد المعرفة لديهم </h5>
                        <div>
                            <a href="signup.html" class="btn rounded-pill secondary-bg text-white my-4">اشترك الآن مجانا وابدأ رحلتك التعليمية</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img"><img src="public/front/img/aim.svg" class="img-fluid" data-aos="fade-right" data-aos-duration="1000" alt=""></div>
                </div>
            </div>

        </div>
    </div>

    <div class="messages py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <div class="img"><img src="public/front/img/messages.svg" class="img-fluid" data-aos="fade-left" data-aos-duration="1000" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="h-100">
                        <h2 class="position-relative"> رسالتنا وأهدافنا <img src="public/front/img/text-line2.svg" class="position-absolute" alt=""></h2>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="data mb-5">
                                    <img src="public/front/img/icons/Outline.svg" class="img-fluid rounded mb-3 p-2" style="background-color: #E8FEFD;" alt="">
                                    <h5>التعليم الهادف</h5>
                                    <p>العديد من مدارس أكاديمية كونيكشنز لدينا لديها اعتمادات إضافية.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="data mb-5">
                                    <img src="public/front/img/icons/presentaion.svg" class="img-fluid rounded mb-3 p-2" style="background-color: #E8FEFD;" alt="">
                                    <h5>التعلم الافتراضي</h5>
                                    <p>التكاليف الوحيدة هي اللوازم المدرسية القياسية والرحلات الميدانية الطوعية.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="data mb-5">
                                    <img src="public/front/img/icons/hierarchy.svg" class="img-fluid rounded mb-3 p-2" style="background-color: #E8FEFD;" alt="">
                                    <h5>التفاعل الاجتماعي</h5>
                                    <p>يتعاون الطلاب في أكاديمية “علمني” في المشاريع معا.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="data mb-5">
                                    <img src="public/front/img/icons/open_book.svg" class="img-fluid rounded mb-3 p-2" style="background-color: #E8FEFD;" alt="">
                                    <h5>المناهج الدراسية عبر الإنترنت</h5>
                                    <p>يعد منهجنا الطلاب للذهاب إلى أبعد من ذلك في الحياة من خلال منحهم الدعم.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="partners position-relative my-5">
        <div class="container text-center mb-3">
            <h2 class="position-relative"> شركاء نجاحنا <img src="public/front/img/text-line2.svg" class="position-absolute" style="bottom: -19px;right: 50%;
                    transform: translateX(10px);" alt=""></h2>
        </div>

        <div class="card__container swiper mt-4">
            <div class="container">
                <div class="card__content">
                    <div class="swiper-wrapper">
                        <article class="card__article swiper-slide d-flex flex-column align-items-center shadow p-3">
                            <img src="public/front/img/partner1.webp" class="img-fluid" alt="">
                            <div class="fw-bold mt-3">Partner name</div>
                        </article>

                        <article class="card__article swiper-slide d-flex flex-column align-items-center shadow p-3">
                            <img src="public/front/img/partner2.webp" class="img-fluid" alt="">
                            <div class="fw-bold mt-3">Partner name</div>
                        </article>

                        <article class="card__article swiper-slide d-flex flex-column align-items-center shadow p-3">
                            <img src="public/front/img/partner3.webp" class="img-fluid" alt="">
                            <div class="fw-bold mt-3">Partner name</div>
                        </article>

                        <article class="card__article swiper-slide d-flex flex-column align-items-center shadow p-3">
                            <img src="public/front/img/partner4.webp" class="img-fluid" alt="">
                            <div class="fw-bold mt-3">Partner name</div>
                        </article>

                        <article class="card__article swiper-slide d-flex flex-column align-items-center shadow p-3">
                            <img src="public/front/img/partner5.webp" class="img-fluid" alt="">
                            <div class="fw-bold mt-3">Partner name</div>
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