    <footer class="primary-bg pt-5 pb-2 position-relative">
        <div class="layout position-absolute" style="z-index: 0;"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact">
                        <h4 class="secondary-color">تواصل معنا</h4>
                        <ul class="p-0 text-white list-unstyled">
                            <li class="py-2"><a href="#" class="text-white text-decoration-none"> <i class="fa fa-clock secondary-color ms-2"></i> علي مدار الاسبوع</a></li>
                            <li class="py-2"><a href="tel:0227537567" class="text-white text-decoration-none"> <i class="fa-solid fa-phone-flip secondary-color ms-2"></i> الهاتف الارضي: 0227537567</a></li>
                            <li class="py-2"><a href="tel:01287848630" class="text-white text-decoration-none"> <i class="fa-solid fa-mobile-screen secondary-color ms-2"></i> الهاتف الجوال: 01287848630</a></li>
                            <li class="py-2"><a href="mailto:example@gmail.com" class="text-white text-decoration-none"> <i class="fa-solid fa-envelope secondary-color ms-2"></i> البريد الالكتروني:  example@mail.com</a></li>
                        </ul>
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
                            <li class="py-2"><a href="{{url('/')}}" class="secondary-color text-decoration-none">الرئيسية</a></li>
                            <li class="py-2"><a href="pages/about.html" class="text-white text-decoration-none">من نحن</a></li>
                            <li class="py-2"><a href="pages/courses.html" class="text-white text-decoration-none">الدورات</a></li>
                            <li class="py-2"><a href="pages/policies.html" class="text-white text-decoration-none">سياستنا</a></li>
                            <li class="py-2"><a href="pages/blogs.html" class="text-white text-decoration-none">المدونة</a></li>
                            <li class="py-2"><a href="pages/contact.html" class="text-white text-decoration-none">تواصل معنا</a></li>
                            <li class="py-2"><a href="#" class="text-white text-decoration-none">حساب المعادلة</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="contact text-white">
                        <div class="logo d-flex justify-content-center"><a href="/"><img src="{{asset('public/front/img/logo.png')}}" alt=""></a></div>
                        <p class="text-center">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور <br>
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد 
                        </p>
                        <div class="social">
                            <ul class="list-unstyled d-flex justify-content-center w-100 m-0 p-0">
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center text-dark secondary-bg rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-facebook-f fa-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center text-dark secondary-bg rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center text-dark secondary-bg rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center text-dark secondary-bg rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-youtube fa-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-center align-items-center text-dark secondary-bg rounded-circle text-decoration-none mx-2">
                                        <i class="fa-brands fa-telegram fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="text-white">
            <div class="coprRight text-center text-white">
                <p> Copyright by Mesbah Academy. All rights reserved ©</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('public/front/js/jquery.min.js')}}"></script>  
    <script src="{{ asset('public/front/js/bootstrap.bundle.min.js')}}"></script>  
    <script src="{{ asset('public/front/js/swiper-bundle.min.js')}}"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--animation-->
    <script>
        AOS.init();
      </script>
    <script src="{{ asset('public/front/js/main.js')}}"></script>  

   









