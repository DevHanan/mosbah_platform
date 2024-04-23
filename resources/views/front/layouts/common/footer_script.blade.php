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
                        <div class="logo"><a href="/"><img src="public/front/img/logo.png" alt=""></a></div>
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

    <script src="public/front/js/jquery.min.js"></script>  
    <script src="public/front/js/bootstrap.bundle.min.js"></script>  
    <script src="public/front/js/swiper-bundle.min.js"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--animation-->
    <script src="public/front/js/pagination.js"></script> 

    <script>
        AOS.init();
      </script>
    <script src="public/front/js/main.js"></script>  

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