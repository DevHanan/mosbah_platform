@extends('front.layouts.master')
@section('title', $title)
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
              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 card_pagination">
                <div class="card shadow-sm mb-5 mx-3">
                    <a href="{{ url('/blog/1') }}" class="position-relative">
                        <img class="card-img-top w-100 p-2" src="{{asset('public/front/img/Book.svg')}}"  style="max-height: 500px;" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('/blog/1') }}" class="text-decoration-none text-dark">
                            <h5 class="card-title mb-3 fw-bold"> عنوان المقال </h5>
                        </a>
                        <p class="card-text" style="color: #6C757D;"> نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا نص المقال هنا </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="{{ url('/blog/1') }}" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
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
      </section>
    </div> 
@endsection
@push('frontscript') 
    <script src="{{asset('public/front/js/pagination.js')}}"></script> 
    <script src="{{asset('public/front/js/main.js')}}"></script> 
@endpush