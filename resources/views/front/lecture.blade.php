@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<div class="course-content-page">

        <h2 class="lec-title position-relative m-4 mb-5 fw-bold primary-color">  {{ $lecture->title }} </h2>
 
        <div class="px-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 right-class"> 
                        <div class="position-relative w-100 gallery-item mt-3" style="height: 400px;">
                            <video id="myVideo" class="w-100 h-100" poster="public/front/img/video-img.png')}}" style="object-fit: cover;">
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div id="playButton" class="position-absolute play-icon p-3 rounded-pill d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-play text-white"></i>
                            </div>
                        </div>

                        <div class="lec-desc">
                                    {{ $lecture->short_description }}
                    </div>
                    </div>

                    <div class="col-lg-4 left-class">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="course_content shadow-sm border my-4 p-2" style="border-radius: 24px;">
                                    <div class="info mt-3 px-4">
                                        <p> <img src="{{asset('public/front/img/icons/fi-rr-e-learning.png')}}" class="ms-2" width="20" alt=""> <span>  الدورة  : {{ optional($lecture->course)->name }}                                    </span></p>
                                        <p> <img src="{{asset('public/front/img/icons/fi-rr-e-learning.png')}}" class="ms-2" width="20" alt=""> <span> المرحلة  :     {{ optional($lecture->level)->name }}                             </span></p>
                                        <p> <img src="{{asset('public/front/img/icons/fi-rr-calendar.png')}}" class="ms-2" width="20" alt=""> <span> {{ $lecture->created_at }}  </span></p>
                                        <p> <img src="{{asset('public/front/img/icons/fi-rr-time-quarter-to.svg" class="ms-2" width="20" alt=""> <span> 2 ساعة </span></p>
                                        <p> <img src="{{asset('public/front/img/icons/fi-rr-e-learning.png')}}" class="ms-2" width="20" alt=""> <span> 
                                            نوع المحاضرة :
                                            @if($lecture->type == 1)
                                            {{ __('admin.lectures.viedo')}}
                                            @else
                                            {{ __('admin.lectures.metting')}}
                                            @endif
                                        </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="shadow-sm border my-3 p-4 pb-2" style="border-radius: 24px;">
                                    <p class="fw-bold text-center" style="font-size: 18px;">الاهداف</p>
                                    <ul>
                                        <li class="py-1">هدف 1</li>
                                        <li class="py-1">هدف 1</li>
                                        <li class="py-1">هدف 1</li>
                                        <li class="py-1">هدف 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
 
                   <section class="center-class">
                        <div class="content-lec mt-4">
                            <h3 class="fw-bold primary-color position-relative mb-4">الموضوع</h3>
                            <p class="container">
                                {{ $lecture->description }}
                        </p>
                        </div>

                        <section class="container py-3 mb-3 gallay-all">
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="position-relative w-100 h-100 gallery-item">
                                        <img src="{{asset('public/front/img/Rectangle1585.png')}}" class="w-100 h-100" alt="">
                                        <div class="position-absolute event-title bottom-0 w-100" style="background-color: rgb(0 0 0 / 65%);box-shadow: 0 0 10px #00000091;">
                                            <p class="text-white m-3 mx-4">عنوان الصورة</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7 mb-4">
                                    <div class="position-relative w-100 h-100 gallery-item">
                                        <img src="{{asset('public/front/img/Rectangle1586.png')}}" class="w-100 h-100" alt="">
                                        <div class="position-absolute event-title bottom-0 w-100" style="background-color: rgb(0 0 0 / 65%);box-shadow: 0 0 10px #00000091;">
                                            <p class="text-white m-3 mx-4">عنوان الصورة</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 mb-4">
                                    <div class="position-relative w-100 h-100 gallery-item">
                                        <img src="{{asset('public/front/img/Rectangle1588.png')}}" class="w-100 h-100" alt="">
                                        <div class="position-absolute event-title bottom-0 w-100" style="background-color: rgb(0 0 0 / 65%);box-shadow: 0 0 10px #00000091;">
                                            <p class="text-white m-3 mx-4">عنوان الصورة</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-4 mb-4">
                                    <div class="position-relative w-100 h-100 gallery-item">
                                        <img src="{{asset('public/front/img/Rectangle1587.png')}}" class="w-100 h-100" alt="">
                                        <div class="position-absolute event-title bottom-0 w-100" style="background-color: rgb(0 0 0 / 65%);box-shadow: 0 0 10px #00000091;">
                                            <p class="text-white m-3 mx-4">عنوان الصورة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <div class="content-book">
                            <h3 class="fw-bold primary-color position-relative mb-5">الكتب المرفقة</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-between align-items-center bg-white rounded policy-card mb-4">
                                            <div>
                                                <h3>عنوان الكتاب</h2>
                                                <p class="mt-4">وصف عن هذا الكتاب</p>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-success primary-bg" download=""> <img src="{{asset('public/front/img/icons/material-symbols_download.png')}}" alt=""> تنزيل </a>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-between align-items-center bg-white rounded policy-card mb-4">
                                            <div>
                                                <h3>عنوان الكتاب</h2>
                                                <p class="mt-4">وصف عن هذا الكتاب</p>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-success primary-bg" download=""> <img src="{{asset('public/front/img/icons/material-symbols_download.png')}}" alt=""> تنزيل </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                            </div>
                        </div>
                   </section>
    
                </div>
             </div>
         </div>    
     </div>
    @endsection