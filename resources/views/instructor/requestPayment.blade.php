@extends('admin.layouts.master')
@section('amount', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">

        </div>
        <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-stamp">
                    <div class="card-stamp-icon bg-yellow">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title"> {{ __('admin.available_amount') }} 
                        <span> {{ auth()->guard('instructors-login')->user()->current_balance }} {{ $setting->currency }}</span>
                    </h3>
                  </div>
                </div>
              </div>            
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-12">

                <form class="card" novalidate action="{{ route('instructor.storeRequest') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <!-- Form Start -->


                        <div class="col-md-12">
                            <label class="form-label" for="amount"> {{__('admin.amount')}} <span>*</span></label>
                            <input type="number" class="form-control" name="amount" id="amount" value="{{ old('amount') }}" required>

                            @error('amount')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <!-- Form End -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">{{ __('admin.btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection