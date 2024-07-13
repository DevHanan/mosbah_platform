@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="contact-us bg-white pb-5">
        <div class="hero_sec position-relative pb-5">
            <div class="layout position-absolute"></div>
            <h4 class="title p-4 m-0 fw-bold position-absolute bottom-0 bg-white"> تواصل معنا </h4>
        </div>

        <div class="container">
            <h3 class="text-center p-5">نحن نحب التعرف على أشخاص <br>جدد ومساعدتهم.</h3>
            <div class="row">
                <div class="col-lg-8">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3 position-relative">
                                    <input type="text" class="form-control pe-2 py-2" placeholder="الاسم">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3 position-relative">
                                    <input type="email" class="form-control pe-2 py-2" placeholder="البريد الالكتروني">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3 position-relative">
                                    <input type="text" class="form-control pe-2 py-2" placeholder="رقم الهاتف">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3 position-relative">
                                    <input type="text" class="form-control pe-2 py-2" placeholder="الموضوع">
                                </div>
                            </div>
                            <div class="form-group position-relative">
                                <textarea name="" id="" cols="30" rows="8" class="form-control border-dark my-3 pe-2" placeholder="مرحبا أنا مهتم في.."></textarea>
                            </div>
                        </div>

                        <button class="btn secondary-bg text-white my-3 px-5 py-3" type="submit">ارسل الرسالة</button>
                    </form>    
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-start">
                    <div style="background-color: #FFEDE1;border-radius: 25px;" class="p-5 my-4" dir="ltr">
                        <div class="d-flex align-items-center mb-2" data-aos="fade-up" data-aos-delay="50">
                            <i class="fa fa-home secondary-color bg-white p-2 me-4 rounded-circle"></i>
                            <span>No: 09a, Downtown, San Dieago, USA.</span>
                        </div>

                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="150">
                            <i class="fa fa-phone secondary-color bg-white p-2 me-4 rounded-circle"></i>
                            <span>+0227537567 </span>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="150">
                            <i class="fa fa-mobile-screen secondary-color bg-white p-2 me-4 rounded-circle"></i>
                            <span>+01287848630 </span>
                        </div>

                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="250">
                            <i class="fa fa-globe secondary-color bg-white p-2 me-4 rounded-circle"></i>
                            <span>www.mosbahAcademy.com</span>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <i class="fa-brands fa-facebook-f p-2 me-1"></i>
                            <i class="fa-brands fa-x-twitter p-2 me-1"></i>
                            <i class="fa-brands fa-linkedin p-2 me-1"></i>
                            <i class="fa-brands fa-instagram p-2 me-1"></i>
                            <i class="fa-brands fa-telegram p-2 me-1"></i>
                            <i class="fa-brands fa-tiktok p-2 me-1"></i>
                            <i class="fa-brands fa-youtube p-2 me-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="google-map w-100 my-5" style="height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217863.85924270397!2d31.996540659996498!3d31.438286074413117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e375eb0246b7%3A0x8e6df51878254838!2z2YXYr9mK2YbYqSDYr9mF2YrYp9i3INin2YTYrNiv2YrYr9ip2Iwg2YPZgdixINiz2LnYr9iMINmF2K3Yp9mB2LjYqSDYr9mF2YrYp9i3!5e0!3m2!1sar!2seg!4v1710018598392!5m2!1sar!2seg" 
                style="border:0;border-radius:30px;width:100%;height:100%;box-shadow: 1px 1px 8px #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>
@endsection
