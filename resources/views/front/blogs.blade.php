@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<div class="blogs">
        
        <section class="news-titles titles d-flex justify-content-between p-5" style="direction: ltr;">
            <div class="mb-2" style="direction: rtl;">
              <label for="" class="form-label">تصفية حسب التاريخ</label>
              <div class="d-flex align-items-center filter-by-date">
                <span>من</span> <input type="date" class="form-control mx-2 mb-2"> 
                <span>الى</span> <input type="date" class="form-control mx-2 mb-2"> 
                <button class="btn border p-2 px-4 mx-2 mb-2 reset_btn"> إلغاء </button>
              </div>
            </div>
          </section>
      
          <section class="container-fluid px-5 mb-5 news-cards">
              <div class="row justify-content-center" id="paginationCard">
                @foreach($blogs as $blog)
                  <div class="col-lg-4 col-md-6 card_pagination">
                    <div class="card shadow-sm mb-5 mx-3">
                        <a href="{{url('/blog/'.$blog->id)}}" class="position-relative">
                            @if($blog->main_image)
                            <img class="card-img-top w-100 p-2" src="{{ asset($blog->imageFullPath)}}" style="height: 200px;" alt="Card image cap">
                            @else
                            <img class="card-img-top w-100 p-2" src="{{asset('front/img/Book.svg')}}" style="height: 200px;" alt="Card image cap">
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="{{url('/blog/'.$blog->id)}}" class="text-decoration-none text-dark">
                                <h5 class="card-title mb-3 fw-bold">  {{ $blog->title }} </h5>
                            </a>
                            <p class="card-text" style="color: #6C757D;"> {!!  $blog->description !!}</p>
                            <div class="cardFooter d-flex justify-content-between align-items-center">
                                <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                                <a href="{{url('/blog/'.$blog->id)}}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endforeach
    
                  
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
          </section>
        </div>   
@endsection

