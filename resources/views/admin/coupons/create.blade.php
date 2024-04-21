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

                                <div class="col-md-12">
                                    <label class="form-label" class="form-label" for="code"> {{__('admin.coupons.code')}} <span>*</span></label>
                                    <input type="text" class="form-control" name="code" id="title" value="{{ old('code') }}" required>

                                    @error('code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" class="form-label" for="discount"> {{__('admin.coupons.discount')}} <span>*</span></label>
                                    <input type="text" class="form-control" name="discount" id="title" value="{{ old('discount') }}" required>

                                    @error('discount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" class="form-label" for="start_date"> {{__('admin.coupons.start_date')}} <span>*</span></label>
                                    <input type="date" class="form-control" name="start_date" id="title" value="{{ old('start_date') }}" required>

                                    @error('start_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-md-6">

                            <div class="form-group ">
                                    <label class="form-label" for="active" class="form-label">{{ __('admin.select_status') }}</label>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" value="1" type="radio" name="active">
                                            <span class="form-check-label"> {{ __('admin.active')}}</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" value="0" type="radio" name="active">
                                            <span class="form-check-label"> {{ __('admin.inactive' )}}</span>
                                        </label>

                                    </div>
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






                                <div class="col-md-12">
                                    <label class="form-label" class="form-label" for="end_date"> {{__('admin.coupons.end_date')}} <span>*</span></label>
                                    <input type="date" class="form-control" name="end_date" id="title" value="{{ old('end_date') }}" required>

                                    @error('end_date')
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