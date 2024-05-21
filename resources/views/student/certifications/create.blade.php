@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            {{ Breadcrumbs::render('add-externalCertifications') }}

            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <div class="card-header">
                        <div class="card-block">
                            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-primary">{{ __('Back') }}</a>

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

                <form class="card" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row card-body">
                        <!-- Form Start -->


                        <div class=" form-group col-md-6">
                            <label class="form-label" for="name"> {{__('admin.certifications.name')}} <span>*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('title') }}" required>

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class=" form-group col-md-6">
                            <label class="form-label" for="authority"> {{__('admin.certifications.authority')}} <span>*</span></label>
                            <input type="text" class="form-control" authority="authority" id="authority" value="{{ old('title') }}" required>

                            @error('authority')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group col-md-6">
              <label class="form-label" for="course_id">{{__('admin.certifications.course_name')}} <span>*</span></label>
              <select class="form-control select2" name="course_id" id="course_id">
                <option value="">{{ __('select') }}</option>
                @foreach( $courses as $course )
                <option value="{{ $course->id }}" @if(old('course_id')==$course->id) selected @endif>{{ $course->name }}</option>
                @endforeach
              </select>

              @error('course_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
                        <div class="form-group col-md-6">


                            <label for="logo">{{ __('admin.certifications.file') }}</label>
                            <input type="file" class="form-control" name="file" id="logo">

                            @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Form End -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">{{ __('btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection