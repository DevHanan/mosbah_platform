@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<style>
    .courses .swiper-button-prev {left: 30%;transform: translateX(-50%);bottom: 3px;}
.courses .swiper-button-next {right: 30%;transform: translateX(-50%);bottom: 3px;}
.courses .card__content{padding: 30px 20px;}
.courses .swiper-button-next .fa-angle-right, .courses .swiper-button-prev i {bottom: 0;position: absolute;}
.courses .pencil {top: 5%;width: 70px;height: 70px;left: 55%;}
.courses .loop {top: 0%;width: 70px;height: 70px;left: 37%;}
.courses .lamp {top: 8%;width: 70px;height: 70px;left: 5%;}
.courses .pc {top: 35%;width: 70px;height: 70px;left: 5%;}
.courses .map {bottom: 6%;width: 85px;height: 85px;left: 9%;}
.courses article p{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;width: 100%;}
.courses .card_category{top: 18px;left: 18px;z-index: 99;background-color: #dbfffe8c;}


/* ================= courses =============== */
section.coursesPage .hero_sec .info .content{line-height: 2.8;font-size: 18px;}
section.coursesPage .filter :is(.category,.trainers,.rating,.coursesFilter,.prices, .dateFilter){box-shadow: 0 0 5px #d1d1d1;border-radius: 12px !important;}
section.coursesPage .filter .category p{font-size: 18px;color: var(--gray-text);}
section.coursesPage .filter .category span{font-size: 12px;color: #796F6F;}
section.coursesPage .filter .trainers ul{height: 160px;overflow-y: scroll;}
section.coursesPage .filter .trainers ul::-webkit-scrollbar {width: 5px;}
section.coursesPage .filter .trainers ul::-webkit-scrollbar-track {background: hsl(0, 0%, 92%);width: 4px; }
section.coursesPage .filter .trainers ul::-webkit-scrollbar-thumb {background-color: #C4C4C4;border-radius: 20px; border: 3px solid #C4C4C4;}
section.coursesPage .select2-container--default .select2-selection--single{border: 1px solid var(--secondary);}
section.coursesPage .select2-container--default .select2-selection--single {height: 40px;display: flex;align-items: center;}
section.coursesPage article p{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;width: 100%;}
section.coursesPage .course_content h3 img{bottom: -19px;right: 0;}
section.coursesPage .cardShape{background-color: #D8D8D8;cursor: pointer;}
section.coursesPage .cardShape.active{background-color: var(--secondary);}
section.coursesPage #paginationCard .card_category{top: 18px;left: 18px;z-index: 99;background-color: #dbfffe8c;}
section.coursesPage #paginationCard .card_category{top: 18px;left: 18px;z-index: 99;background-color: #dbfffe8c;}
section.coursesPage label{cursor: pointer;}
.trainers .card_category{top: 18px;left: 18px;z-index: 99;background-color: #dbfffe8c;}

</style>
<div class="content my-5 container">

    <div class="row">
      
        <div class="col-lg-12">
            <div class="course_content">
                <div class="d-flex justify-content-between">
                    <h3 class="fw-bold">قائمة الدورات</h3>
                    <div class="d-flex">

                        <img src="{{asset('front/img/icons/category.svg')}}" class="img-fluid categoryCards cardShape active p-1 rounded mx-2" alt="">
                        <img src="{{asset('front/img/icons/Layer.svg')}}" class="img-fluid rowsCards cardShape p-1 rounded" alt="">
                    </div>
                </div>

                <div class="row" id="paginationCard">
                    @if($courses)
                    @foreach($courses as $course)
                    <div class="col-sm-4 card_pagination">
                        <article class="rounded mt-4 shadow">
                            <div class="row">
                                <div class="col-12 paginationCardImg">
                                    <div class="card__image h-100 p-2">
                                        <a href="{{ url('course/'.$course->id)}}">
                                            <img src="{{asset('public/'.$course->image)}}" style="max-height:175px;" alt="image" class="card__img img-fluid w-100 h-100">
                                        </a>
                                        <div class="card_category position-absolute rounded text-dark px-2 py-1">
                                            @if($course->tracks)
                                            @foreach ($course->tracks as $item)
                                            {{ $item->name  }}
                                            @endforeach
                                            @endif
                                        </div>
                                        <div class="card__shadow"></div>
                                    </div>
                                </div>
                                <div class="col-12 paginationCardData">
                                    <div class="card__data p-3 pt-1">
                                        <a href="{{ url('course/'.$course->id)}}" class="text-decoration-none text-dark">
                                            <p class="card__description my-1">
                                                {{ $course->name }}
                                            </p>
                                        </a>
                                        <div class="name primary-color fw-bold mb-3" style="font-size: 14px;">
                                            @if($course->instructors)
                                            @foreach($course->instructors as $item)
                                            {{ $item->name }}
                                            @endforeach

                                            @endif
                                        </div>

                                        <div class="rating d-flex justify-content-end">
                                            <span class="mx-3">({{ $course->SubscriptionCount}})</span>
                                            <span class="fw-bold ms-2" style="color:#5a5a5a">4</span>
                                            <img src="{{asset('front/img/grayStar.svg')}}" alt="">
                                            <img src="{{asset('front/img/Star.svg')}}" alt="">
                                            <img src="{{asset('front/img/Star.svg')}}" alt="">
                                            <img src="{{asset('front/img/Star.svg')}}" alt="">
                                            <img src="{{asset('front/img/Star.svg')}}" alt="">
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ url('course/'.$course->id)}}" class="link-arrow rounded-circle"><i class="fa-solid fa-arrow-up-long"></i></a>
                                            <div class="price">
                                                <span class="instead-price text-danger text-decoration-line-through mx-2">{{ $setting->currency }}{{ $course->price }}</span>
                                                <span class="fw-bold">{{ $setting->currency }} {{ $course->TotalDiscount }}</span>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    @else
                                                            لا توجد دورات للعرض
                    @endif

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
@endsection