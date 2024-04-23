@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="books">
        <div class="hero_sec pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <img  src="public/front/img/index-header.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info h-100 d-flex flex-column justify-content-center py-5">
                            <p class="desc fw-bold text-white">
                                احصل على الكتب المرفقة بالدورات
                            </p>
                            <div class="content"> وفرنا لك جميع الكتب والملازم والحقائب التدريبية التي تحتاجها لبناء معرفتك وتطوير مهاراتك، كتب ذات مادة علمية ثرية أعدت من أجلك </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="books_list my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card__article mb-4 shadow w-100">
                            <div class="card__image p-1">
                             <a href="{{url('/book')}}">
                                    <img  src="public/front/img/book.svg" alt="image" class="card__img img-fluid w-100">
                                </a>
                            </div>
                
                            <div class="card__data p-3">
                                <div class="d-flex justify-content-between">
                                   <a href="{{url('/book')}}" class="text-decoration-none">
                                        <p class="fw-bold" style="color: #1B3764;">Atomic One’s</p>
                                    </a>
                                    <div class="price fw-bold secondary-color">$23.89</div>
                                </div>
                                <div class="desc">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn mt-3 rounded">اضف الي السلة</a>
                                    <a href="{{url('/book')}}" class="link-arrow mt-3 rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="reading rounded d-flex justify-content-center align-items-center p-5 my-5 ">
                        <div class="w-75">
                            <p class="text-center fw-bold" style="color: #1B3764;font-size: 30px;">اشترك فى نشرتنا الاخبارية</p>
                        <p class="text-center">يمكنك متابعة الكتب التي نقوم بنشرها باستمرار، اترك لنا ايميلك سنقوم بارسال كل ما هو جديد عبر بريدك الالكتروني</p>
                        <form action="">
                            <div class="d-flex justify-content-center align-items-center mt-5">
                                <a href="#" class="btn text-white border-0 w-50 p-3" style="background-color: #1B3764;">اشترك</a>
                                <input type="text" class="form-control p-3 w-50" required placeholder="البريد الإلكتروني الخاص بك...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection