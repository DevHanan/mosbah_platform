@extends('front.layouts.master')
@section('title', $title)
@section('content')
@include('front.layouts.common.navbar')
<div class="blogs">
        
        <section class="news-titles titles d-flex justify-content-between p-5" style="direction: rtl;">
            <div class="mb-2" style="direction: rtl;">
              <label for="" class="form-label">تصفية حسب التاريخ</label>
              <form method="get" action="{{url('blogs')}}">
              <div class="d-flex align-items-center filter-by-date">
                <span>من</span> <input type="date" class="form-control mx-2 mb-2" name="start"> 
                <span>الى</span> <input type="date" class="form-control mx-2 mb-2" name="end"> 
                <button type="submit" class="btn border p-2 px-4 mx-2 mb-2 reset_btn"> بحث </button>
              </div>
              </form>
            </div>
          </section>
      
          <section class="container-fluid px-5 mb-5 news-cards">
              <div class="row justify-content-center" id="paginationCardd">
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
                                <div class="card-date primary-color fw-bold">{{ $blog->published_at->locale('ar')->calendar()  }}  </div>
                                <a href="{{url('/blog/'.$blog->id)}}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endforeach
    
                  
              </div>
          </section>
        </div>   
@endsection

