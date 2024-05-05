@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="contact-us my-5">
        <div class="container">
            <div class="bg-white">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="position-relative">ابق على اتصال <img src="public/front/img/text-line2.svg" class="position-absolute" style="bottom: -19px;right:0" alt=""></h3>
                        <p class="my-5">أخبرنا برأيك فى خدماتنا وما لديكم من استفسارات واقتراحات وشكاوى، نحن هنا دائما من أجلكم يسعدنا أن نلبي احتياجاتكم </p>
                        <div class="icons mb-4 d-flex align-items-center">
                            <div><img src="public/front/img/icons/home.svg" class="p-2 rounded" alt=""></div>
                            <div class="info mx-3">
                                <p class="fw-bold m-0">تفضل بزيارتنا :</p>
                                <p class="mb-0"> {{ $setting->address }}</p>
                            </div>
                        </div>
                        <div class="icons mb-4 d-flex align-items-center">
                            <div><img src="public/front/img/icons/mail.svg" class="p-2 rounded" alt=""></div>
                            <div class="info mx-3">
                                <p class="fw-bold m-0"> ارسل لنا :</p>
                                <p class="mb-0">{{ $setting->email }}</p>
                            </div>
                        </div>
                        <div class="icons mb-4 d-flex align-items-center">
                            <div><img src="public/front/img/icons/phone-call.svg" class="p-2 rounded" alt=""></div>
                            <div class="info mx-3">
                                <p class="fw-bold m-0">تليفون ارضي :</p>
                                <a href="tel:1234567" class="text-dark text-decoration-none mb-0">Call: {{ $setting->phone }}</a>
                            </div>
                        </div>

                        <div class="icons mb-4 d-flex align-items-center">
                            <div><img src="public/front/img/icons/mobile.svg" width="48" class="p-2 rounded" alt=""></div>
                            <div class="info mx-3">
                                <p class="fw-bold m-0">هاتف محمول :</p>
                                <a href="tel:1234567" class="text-dark text-decoration-none mb-0">Call: {{ $setting->whatsapp }}</a>
                            </div>
                        </div>

                        <div class="contact text-white">
                            <div class="social">
                                <ul class="list-unstyled d-flex w-100 m-0 p-0">
                                    <li>
                                        <a href="#" class="d-flex justify-content-center align-items-center text-white primary-bg rounded-circle text-decoration-none mx-2">
                                            <i class="fa-brands fa-facebook-f fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-center align-items-center text-white primary-bg rounded-circle text-decoration-none mx-2">
                                            <i class="fa-brands fa-whatsapp fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-center align-items-center text-white primary-bg rounded-circle text-decoration-none mx-2">
                                            <i class="fa-brands fa-instagram fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-center align-items-center text-white primary-bg rounded-circle text-decoration-none mx-2">
                                            <i class="fa-brands fa-youtube fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-center align-items-center text-white primary-bg rounded-circle text-decoration-none mx-2">
                                            <i class="fa-brands fa-x-twitter fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row">
                                <div class="form-group mb-3 position-relative">
                                    <i class="fa-solid fa-user secondary-color position-absolute" style="top: 13px ; right: 25px;"></i>
                                    <input type="text" class="form-control pe-5 py-2" placeholder="الاسم">
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3 position-relative">
                                        <i class="fa-solid fa-envelope secondary-color position-absolute" style="top: 13px; right: 14px;"></i>
                                        <input type="email" class="form-control pe-5 py-2" placeholder="البريد الالكتروني">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3 position-relative">
                                        <i class="fa-solid fa-phone secondary-color position-absolute" style="top: 13px; right: 17px;"></i>
                                        <input type="email" class="form-control pe-5 py-2" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <i class="fa-solid fa-edit secondary-color position-absolute" style="top: 13px; right: 25px;"></i>
                                    <textarea name="" id="" cols="30" rows="9" class="form-control pe-5" placeholder="رسالتك"></textarea>
                                </div>
                            </div>

                            <div class="form-check my-3 d-flex">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label me-5" for="flexCheckChecked">
                                    ابقني على اطلاع دائم بالأخبار والعروض من وقت لآخر عن طريق البريد الإلكتروني
                                </label>
                            </div>

                            <button class="btn secondary-bg text-white w-100 my-3 py-3" type="submit">ارسل الرسالة</button>
                        </form>    
                    </div>
                </div>    
            </div>
        </div>

        <!-- <div class="que mt-5 py-5 mb-3">
            <div class="container">
                <h2 class="text-center mb-5">أسئلة متكررة؟</h2>
                <div class="d-flex justify-content-between">
                    <div class="w-100">
                    @foreach($questions as $item)
                        @if($loop->odd)
                        <ul>
                            <li>
                                <p class="m-0">
                                    <a class="collapseQue fw-bold text-decoration-none" data-bs-toggle="collapse" href="#collapse_right_{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapse_right1">
                                    {{ $item->question }}  
                                </a>
                                </p>
                                <div class="collapse" id="collapse_right_{{$item->id}}">
                                    <div class="card card-body bg-transparent border-0">
                                    {{ $item->answer }}  
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endif
                        @endforeach
                       
                    </div>
                    <div class="w-100">
                        @foreach($questions as $item)
                        @if($loop->even)
                        <ul>
                            <li>
                                <p class="m-0">
                                    <a class="collapseQue fw-bold text-decoration-none" data-bs-toggle="collapse" href="#collapse_left{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapse_left1">
                                    {{ $item->question }}  
                                    </a>
                                </p>
                                <div class="collapse" id="collapse_left{{$item->id}}">
                                    <div class="card card-body bg-transparent border-0">
                                    {{ $item->answer }}  
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endif
                        @endforeach
                        
                    </div>
                </div>
                
            </div>     
        </div> -->
        <div class="row col-md-12">

<div id="mapelement" style="height: 500px; width: 100%;"></div>
</div>
    </section>
@endsection