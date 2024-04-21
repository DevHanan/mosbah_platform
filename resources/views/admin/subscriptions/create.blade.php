@extends('admin.layouts.master')
@section('title', trans('module_staff'))

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Combo layout
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <div class="card-header">
                        <div class="card-block">
                            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-primary">{{ __('admin.btn_back') }}</a>

                        </div>
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
                                    <option value="{{ $student->id }}"> {{ $student->first_name }}</option>

                                    @endforeach
                                </select>

                                @error('student_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
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
                            </div>

                            <div class="mb-3">


                                <label class="form-label" for="logo">{{ __('admin.subscriptions.field_paymenttype') }}</label>
                                <input type="file" class="form-control" name="payment_attachment" id="logo">

                                @error('payment_attachment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">

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

                        <div class="mb-3">
                                <label class="form-label" for="course_id">{{ __('admin.subscriptions.field_course') }} <span>*</span></label>
                                <select class="form-control" name="course_id" id="course_id" required>
                                    <option value="">{{ __('select') }}</option>
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}"> {{ $course->name }}</option>

                                    @endforeach
                                </select>

                                @error('course_id')
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