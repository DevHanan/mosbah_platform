@extends('admin.layouts.master')
@section('title', trans('module_staff'))

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                {{ Breadcrumbs::render('add-subscribtions') }}

            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <a href="{{ route($route.'.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        {{__('admin.btn_back')}} </a>

                </div>
            </div>
            <!-- Page title actions -->
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-12">

                <form autocomplete="off" class="card" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="student_id">{{ __('admin.subscriptions.student') }} <span>*</span></label>
                                    <select class="form-control" name="student_id" id="student_id" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach($students as $student)
                                        <option value="{{ $student->id }}"> {{ $student->name }}</option>

                                        @endforeach
                                    </select>

                                    @error('student_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="course_id">{{ __('admin.subscriptions.field_course') }} <span>*</span></label>
                                    <select class="form-control select2" name="course_id" id="courses" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach($courses as $course)
                                        <option value="{{ $course->id }}"> {{ $course->name }} - {{ $course->price_with_discount }} {{ $setting->currency }}</option>

                                        @endforeach
                                    </select>

                                    @error('course_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <!-- <div class="mb-3">
                                <label class="form-label" for="track_id">{{ __('admin.subscriptions.field_track') }} <span>*</span></label>
                                <select class="form-control" name="track_id" id="track_id" required>
                                    <option value="">{{ __('select') }}</option>
                                    @foreach($tracks as $track)
                                    <option value="{{ $track->id }}"> {{ $track->name }}</option>

                                    @endforeach
                                </select>

                                @error('track_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> -->

                                <div class="mb-3">


                                    <label class="form-label" for="logo">{{ __('admin.subscriptions.field_payment_attachmend') }}</label>
                                    <input type="file" class="form-control" name="bill" id="logo">

                                    @error('bill')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="track_id">{{ __('admin.coupons.track') }} <span>*</span></label>
                                    <select class="form-control" name="track_id" id="track_id" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach($tracks as $track)
                                        <option value="{{$track->id}}">{{ $track->name }}</option>
                                        @endforeach

                                    </select>

                                    @error('track_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="price">{{ __('admin.coupons.course_price_after_discount') }} <span>*</span></label>
                                    <input type="number" class="form-control" name="course_price" id="course_price">
                                </div>




                                <div class="mb-3">
                                    <label class="form-label" for="payment_type_id">{{ __('admin.subscriptions.field_paymenttype') }} <span>*</span></label>
                                    <select class="form-control" name="payment_type_id" id="payment_type_id" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach($paymenttypes as $paymenttype)
                                        <option value="{{ $paymenttype->id }}"> {{ $paymenttype->name }}</option>

                                        @endforeach
                                    </select>

                                    @error('payment_type_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>







                            </div>






                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <button type="submit" class="btn btn-success">{{ __('admin.btn_save') }}</button>
                        </div>
                    </div>

                    <!-- Form End -->


                </form>
            </div>
        </div>
    </div>
</div>





@endsection