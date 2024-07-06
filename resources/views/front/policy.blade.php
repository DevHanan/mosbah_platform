@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="header">
        <div class="text-center text-white">
          <h1 class="pb-3">سياساتنا</h1>
          <!-- <p>تعرف على السياسات و اللوائح وكل ما يخص المؤسسة</p> -->
        </div>
      </section>
  
      <section class="policies container my-5 p-5 rounded">
          <div class="policy-info d-flex justify-content-between align-items-center mb-5">
              <div>
                  <!-- <h1 class="fw-bold">السياسات واللوائح</h1> -->
                  <p class="fw-bold mt-4">
                  تعرف على السياسات واللوائح الخاصة بنا
                  </p>
              </div>
              <div>
                  <img src="public/front/img/docs.png" alt="">
              </div>
          </div>
          <div class="row">
             
          @if($policies)
          @foreach($policies as $policy)
              <div class="col-lg-6">
                  <div class="d-flex justify-content-between align-items-center bg-white rounded policy-card mb-4">
                      <div>
                          <h3> {{ $policy->title }}</h2>
                          <p class="mt-4">  {!! $policy->description !!}</p>
                      </div>
                      <div>
                          <a href="{{ asset($policy->file )}}" class="btn btn-success primary-bg"  target="_blank" download="{{ asset($policy->file )}}">
                             <!-- <img src="{{ asset($policy->file )}}" alt=""> -->
                              تنزيل </a>
                      </div>
                  </div>
              </div>
              @endforeach
              @else

<p>  {{ __('admin.no_data_found')}}</p>
              @endif
             
          </div>
      </section>
@endsection