@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')

<div class="book_details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img  src="public/front/img/Book.svg" class="img-fluid w-100 bookImg" alt="">
                </div>
                <div class="col-md-8">
                    <h3>The Atomic One’s</h3>
                    <h3 class="secondary-color fw-bold" style="font-size: 20px;">USD $30.00 </h3>

                    <p class="w-75 my-4">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري 
                        ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد 
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>

                    <div class="info">
                        <p> <span class="fw-bold">الناشر:</span>  التعلم الخاصة المحدودة (1 يناير 2021) </p>
                        <p> <span class="fw-bold">اللغة:</span> الإنجليزية </p>
                        <p> <span class="fw-bold">الأبعاد:</span> 20 × 14 × 4 سم  </p>
                        <p> <span class="fw-bold">نوع الكتاب:</span>   مطبوع ورقي أو pdf </p>
                    </div>

                    <button class="mt-4 btn text-white rounded secondary-bg w-100">احصل على الكتاب</button>
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="px-4">
                            <p class="fw-bold" style="font-size: 20px;">هل هذا الكتاب لي؟</p>
                            <p>إذا كنت ستستخدم مقطعا من لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات لوريم إيبسوم على الإنترنت إلى تكرار القطع المحددة مسبقا حسب الضرورة.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="px-4">
                            <p class="fw-bold" style="font-size: 20px;">هل تقدمون خصومات للتعليم؟ </p>
                            <p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، لكن الغالبية عانت من تغيير في شكل ما ، أو تجاوز الفكاهة المحقونة ، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلا.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="advantages mt-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info text-center" data-aos="fade-down" data-aos-duration="1000">
                            <div><img  src="public/front/img/icons/Satisfactions.svg" class="p-2 secondary-bg rounded" alt=""></div>
                            <p class="text-center my-3 fw-bold">100% Satisfactions</p>
                            <p>There are many variations of passages of alteration in some form.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="info text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div><img  src="public/front/img/icons/puzzle.svg" class="p-2 secondary-bg rounded" alt=""></div>
                            <p class="text-center my-3 fw-bold">Free Shipping</p>
                            <p>There are many variations of passages of alteration in some form.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="info text-center" data-aos="fade-down" data-aos-duration="1000">
                            <div><img  src="public/front/img/icons/security.svg" class="p-2 secondary-bg rounded" alt=""></div>
                            <p class="text-center my-3 fw-bold">Secure Payments</p>
                            <p>There are many variations of passages of alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection