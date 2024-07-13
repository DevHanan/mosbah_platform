@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="coursesPage">
        <div class="hero_sec position-relative pb-5">
            <div class="layout position-absolute"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="info position-relative text-center py-5">
                            <h4 class="title py-5 pb-1 fw-bold secondary-color">قائمة الدورات </h4>
                            <div class="content fw-bold text-white w-100 text-center">
                                <p class="w-75 m-auto">
                                    بين يديك مجموعة متنوعة من الدورات التدريبية فى مختلف المسارات التعليمية نسعى من خلالها لتلبية احتياجاتك العلمية واكسابك مهارات متنوعة وخبرات ومعرفة تؤهلك للعمل وممارسة حياتك بشكل أفضل 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content my-5 container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="filter px-5">
                        <div class="btn w-100 rounded-pill fw-bold text-center secondary-bg text-white"> تصفية النتائج</div>
                        <div class="search position-relative">
                            <input type="search" class="form-control rounded-pill py-2 mt-3 text-center" placeholder="ماذا تريد أن تتعلم؟">
                            <i class="fa-solid fa-search p-2 h-100 position-absolute rounded-circle d-flex align-items-center text-white secondary-bg" style="top: 0;"></i>
                        </div>

                        <div class="my-5 p-4 pb-1 category bg-white rounded">
                            <h3>المسارات</h3>
                            <div class="search">
                                <input type="text" class="form-control my-3 rounded-pill" placeholder="بحث">
                            </div>
                            <ul class="list-unstyled">
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('category')">
                                    <p class="m-0 mx-2">الكل</p>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="leaning-academy">
                                    <label for="leaning-academy" class="d-flex">
                                        <p class="m-0 mx-2">التعليم الأكاديمي</p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="computer-science">
                                    <label for="computer-science" class="d-flex">
                                        <p class="m-0 mx-2">علوم الكمبيوتر </p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="design">
                                    <label for="design" class="d-flex">
                                        <p class="m-0 mx-2"> الفن الرقمي والتصميم </p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="develope">
                                    <label for="develope" class="d-flex">
                                        <p class="m-0 mx-2"> تطوير الذات</p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="marketing">
                                    <label for="marketing" class="d-flex">
                                        <p class="m-0 mx-2"> التسويق والإعلان</p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="art">
                                    <label for="art" class="d-flex">
                                        <p class="m-0 mx-2">فنون جميلة </p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="money-work">
                                    <label for="money-work" class="d-flex">
                                        <p class="m-0 mx-2">مال وأعمال </p>
                                        <span>(25)</span>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="img-videos" id="">
                                    <label for="img-videos" class="d-flex">
                                        <p class="m-0 mx-2"> صور وفيديو</p>
                                        <span>(25)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="my-5 p-4 pb-1 coursesFilter bg-white rounded">
                            <h3>الدورات</h3>
                            <div class="search">
                                <input type="text" class="form-control my-3 rounded-pill" placeholder="بحث باسم الدورة">
                            </div>
                            <ul class="list-unstyled">
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('coursesFilter')">
                                    <p class="m-0 mx-2">الكل</p>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="register-courses">
                                    <label for="register-courses">
                                        <p class="m-0 mx-2"> دورات مسجلة </p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="direct-courses">
                                    <label for="direct-courses">
                                        <p class="m-0 mx-2"> دورات مباشرة </p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="company-courses">
                                    <label for="company-courses">
                                        <p class="m-0 mx-2"> دورات من المقر </p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="combine-courses" id="">
                                    <label for="combine-courses">
                                    <p class="m-0 mx-2"> دورات مدمجة </p>
                                    </label>
                                </li>
                            </ul>
                        </div>

						<div class="my-5 p-4 pb-1 trainers bg-white rounded">
                            <h3>المدربين</h3>
                            <div class="search">
                                <input type="text" class="form-control my-3 rounded-pill" placeholder="بحث">
                            </div>
                            <ul class="list-unstyled">
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('trainers')">
                                    <p class="m-0 mx-2">الكل</p>
                                </li>
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="teacher1">
                                    <label for="teacher1">
                                        <p class="m-0 mx-2">John Hope Dio</p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="teacher2">
                                    <label for="teacher2">
                                        <p class="m-0 mx-2">John Hope Dio</p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="teacher3">
                                    <label for="teacher3">
                                        <p class="m-0 mx-2">John Hope Dio</p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="teacher4">
                                    <label for="teacher4">
                                        <p class="m-0 mx-2">John Hope Dio</p>
                                    </label>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="teacher5">
                                    <label for="teacher5">
                                        <p class="m-0 mx-2">John Hope Dio</p>
                                    </label>
                                </li>
                            </ul>
                        </div>
						
                        <div class="my-5 p-4 pb-1 prices bg-white rounded">
                            <h3>بحث بالسعر</h3>
                            <div class="mx-2 my-4 w-100 price-filter">
                                <ul class="list-unstyled">
                                    <li class="my-2 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('price-filter')">
                                        <p class="m-0 mx-2">الكل</p>
                                    </li>
    
                                    <li class="my-2 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="free-course">
                                        <label for="free-course">
                                            <p class="m-0 mx-2"> مجانا </p>
                                        </label>
                                    </li>
    
                                    <li class="my-2 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="discount-course">
                                        <label for="discount-course">
                                            <p class="m-0 mx-2"> تخفيضات </p>
                                        </label>
                                    </li>
    
                                    <li class="my-2 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="price-course">
                                        <label for="price-course">
                                            <p class="m-0 mx-2"> رينج سعر </p>
                                        </label>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col-sm-12">
                                      <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span id="slider-range-value2"></span>
                                    <span id="slider-range-value1"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                      <form>
                                        <input type="hidden" name="min-value" value="">
                                        <input type="hidden" name="max-value" value="">
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-5 p-4 pb-1 dateFilter bg-white rounded">
                            <h3>تاريخ النشر</h3>
                            <ul class="list-unstyled">
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('dateFilter')">
                                    <p class="m-0 mx-2">الكل</p>
                                </li>

                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="recently-added">
                                    <label for="recently-added">
                                        <p class="m-0 mx-2"> مضاف حديثا </p>
                                    </label>
                                </li>

                                <li class="my-2">
                                   <div class="d-flex align-items-center mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="period-time">
                                    <label for="period-time">
                                        <p class="m-0 mx-2"> خلال فترة </p>
                                    </label>
                                   </div>
                                    <label for="" class="my-2">من تاريخ</label>
                                    <input class="form-control" type="date" value="" id="">
                                    <label for="" class="my-2">الي تاريخ</label>
                                    <input class="form-control" type="date" value="" id="">
                                </li>
                            </ul>
                        </div>

                        <div class="my-5 p-4 pb-1 rating bg-white rounded">
                            <h3>التقيم</h3>
                            <ul class="list-unstyled mt-3">
                                <li class="my-2 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="checkAll('rating')">
                                    <p class="m-0 mx-2">الكل</p>
                                </li>
                                <li class="my-2 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="more-4">
                                        <label for="more-4">
                                            <p class="m-0 mx-2">4 وما فوق</p>
                                        </label>
                                    </div>
                                    <div>
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                    </div>
                                </li>    
                                <li class="my-2 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="more-3">
                                        <label for="more-3">
                                            <p class="m-0 mx-2">3 وما فوق</p>
                                        </label>
                                    </div>
                                    <div>
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                    </div>
                                </li>    
                                <li class="my-2 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="more-2">
                                        <label for="more-2">
                                            <p class="m-0 mx-2">2 وما فوق</p>
                                        </label>
                                    </div>
                                    <div>
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                    </div>
                                </li>
                                <li class="my-2 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="more-1">
                                        <label for="more-1">
                                            <p class="m-0 mx-2">1 وما فوق</p>
                                        </label>
                                    </div>
                                    <div>
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  width="20" alt="">
                                        <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  width="20" alt="">
                                    </div>
                                </li>         
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="course_content">
                        <h3 class="position-relative fw-bold primary-color mb-4">التصميم <img src="{{asset('public/front/img/text-line2.svg')}}"  class="position-absolute img-fluid" alt=""></h3>
                        <div class="d-flex justify-content-between">
                            <h3 class="fw-bold">قائمة الدورات</h3>
                            <div class="list_view d-flex">
                                <img src="{{asset('public/front/img/icons/category.svg')}}"  class="img-fluid categoryCards cardShape active p-1 rounded mx-2" alt="">
                                <img src="{{asset('public/front/img/icons/Layer.svg')}}"  class="img-fluid rowsCards cardShape p-1 rounded" alt="">
                            </div>
                        </div>

                        <div class="row" id="paginationCard">
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
                            </div>
                            <div class="col-sm-6 card_pagination">
                                <article class="rounded mt-4 shadow bg-white">
                                    <div class="row">
                                        <div class="col-12 paginationCardImg">
                                            <div class="card__image h-100 p-2">
                                                <a href="course-content.html">
                                                    <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100 h-100">
                                                </a>
                                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                                <div class="card__shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 paginationCardData">
                                            <div class="card__data p-3 pt-1">
                                                <a href="course-content.html" class="text-decoration-none text-dark">
                                                    <p class="card__description my-1"> لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . </p>
                                                </a>
                                                <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">محمد علي</div>
                                                <div class="rating d-flex justify-content-end">
                                                    <span class="mx-3">(102)</span>
                                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="course-content.html" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                                    <div class="price">
                                                        <span class="instead-price text-danger text-decoration-line-through mx-2">$ 700</span>
                                                        <span class="fw-bold">$ 500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </article>
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
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="popular-courses my-5">
            <div class="container">
                <h2 class="section_title fw-bold">دورات <span class="primary-color">اكثر طلباً</span></h2>
            <p class="fw-bold mt-3"> بين يديك الدورات الأكثر طلبا فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
            </div>
                
            <div class="card__container swiper mt-4">
                <div class="container">
    
                    <div class="card__content">
                        <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow bg-white">
                        <a href="course-content.html">
                            <div class="card__image p-2">
                                <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>
            
                        <div class="card__data p-3">
                            <a href="course-content.html" class="text-decoration-none text-dark">
                                <p class="card__description my-1"> التخطيط الاستراتيجي للمؤسسات </p>
                            </a>
                            <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3">(102)</span>
                                <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                <div class="price">
                                    <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                    <span class="fw-bold">$ 500</span>
                                </div>
                            </div>
                        </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> كيفية بناء خطة عمل </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/design.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم ui ux </p>
                                </a> 
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/html.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">برمجة وتطوير</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم مواقع الويب باستخدام html,css </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
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

        <div class="nominated-courses my-5">
            <div class="container">
                <h2 class="section_title fw-bold">دورات <span class="primary-color"> مرشحة </span></h2>
            <p class="fw-bold mt-3"> بين يديك الدورات المرشحة فى سوق العمل يسعى أغلب الطلاب للاشتراك بها فانضم اليهم </p>
            </div>
                
            <div class="card__container swiper mt-4">
                <div class="container">
    
                    <div class="card__content">
                        <div class="swiper-wrapper">
                        <article class="card__article swiper-slide shadow bg-white">
                        <a href="course-content.html">
                            <div class="card__image p-2">
                                <img src="{{asset('public/front/img/work2.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                <div class="card__shadow"></div>
                            </div>
                        </a>
            
                        <div class="card__data p-3">
                            <a href="course-content.html" class="text-decoration-none text-dark">
                                <p class="card__description my-1"> التخطيط الاستراتيجي للمؤسسات </p>
                            </a>
                            <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                            <div class="rating d-flex justify-content-end">
                                <span class="mx-3">(102)</span>
                                <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                <div class="price">
                                    <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                    <span class="fw-bold">$ 500</span>
                                </div>
                            </div>
                        </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/work.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">الاعمال</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> كيفية بناء خطة عمل </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/design.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">التصميم</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم ui ux </p>
                                </a> 
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                    <div class="price">
                                        <span class="instead-price text-decoration-line-through mx-2 primary-color">$ 700</span>
                                        <span class="fw-bold">$ 500</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="card__article swiper-slide shadow bg-white">
                            <a href="course-content.html">
                                <div class="card__image p-2">
                                    <img src="{{asset('public/front/img/html.svg')}}"  alt="image" class="card__img img-fluid w-100">
                                    <div class="card_category position-absolute rounded text-dark px-2 py-1">برمجة وتطوير</div>
                                    <div class="card__shadow"></div>
                                </div>
                            </a>
            
                            <div class="card__data p-3">
                                <a href="course-content.html" class="text-decoration-none text-dark">
                                    <p class="card__description my-1"> تعلم تصميم مواقع الويب باستخدام html,css </p>
                                </a>
                                <div class="name primary-color mb-3" style="font-size: 14px;">محمد علي</div>
                                <div class="rating d-flex justify-content-end">
                                    <span class="mx-3">(102)</span>
                                    <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                    <img src="{{asset('public/front/img/icons/empty-yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                    <img src="{{asset('public/front/img/icons/yellow-star.png')}}"  alt="">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="course-content.html" class="link-arrow secondary-bg rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
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
    
    </section>
@endsection
@push('frontscript')
<script src="{{asset('public/front/js/price_filter.js')}}"></script> 
    <script src="{{asset('public/front/js/pagination.js')}}"></script> 
    <script src="{{asset('public/front/js/main.js')}}"></script> 
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });


        let categoryCards = document.querySelector('.categoryCards');
        let rowsCards = document.querySelector('.rowsCards');
        let paginationCards = document.querySelectorAll('#paginationCard .card_pagination');
        let paginationCardsImg = document.querySelectorAll('#paginationCard .paginationCardImg');
        let paginationCardsData = document.querySelectorAll('#paginationCard .paginationCardData');

        rowsCards.addEventListener('click', function() {
            categoryCards.classList.remove('active');
            rowsCards.classList.add('active');

            paginationCards.forEach(paginationCard => {
                paginationCard.classList.add('col-sm-12');
            });
            paginationCardsImg.forEach(paginationCardImg => {
                paginationCardImg.classList.remove('col-12');
                paginationCardImg.classList.add('col-4');
            });
            paginationCardsData.forEach(paginationCardData => {
                paginationCardData.classList.remove('col-12');
                paginationCardData.classList.add('col-8');
            });

            let paginationCardsDesc = document.querySelectorAll('#paginationCard article p');

            paginationCardsDesc.forEach(paginationCardDesc => {
                paginationCardDesc.style.cssText = 'white-space: normal;';
            });
        });

        categoryCards.addEventListener('click', function() {
            rowsCards.classList.remove('active');
            categoryCards.classList.add('active');

            paginationCards.forEach(paginationCard => {
                paginationCard.classList.remove('col-sm-12');

                paginationCardsImg.forEach(paginationCardImg => {
                    paginationCardImg.classList.remove('col-4');
                    paginationCardImg.classList.add('col-12');
                });
                paginationCardsData.forEach(paginationCardData => {
                    paginationCardData.classList.remove('col-8');
                    paginationCardData.classList.add('col-12');
                });
            });

            let paginationCardsDesc = document.querySelectorAll('#paginationCard article p');

            paginationCardsDesc.forEach(paginationCardDesc => {
                paginationCardDesc.style.cssText = 'white-space: nowrap;';
            });
        });
    </script>

    <script>
        function checkAll(filterClass) {
            // Get the "Check All" checkbox and all other checkboxes
            const checkAllCheckbox = document.querySelector(`.${filterClass} #checkAll`);
            const checkboxes = document.querySelectorAll(`.${filterClass} .form-check-input:not(.check-all)`);
    
            // Add event listener to the "Check All" checkbox
            checkAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = checkAllCheckbox.checked;
                });
            });
    
            // Add event listener to other checkboxes to uncheck "Check All" if any checkbox is unchecked
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (!this.checked) {
                        checkAllCheckbox.checked = false;
                    }
                });
            });
        }
    </script>

@endpush