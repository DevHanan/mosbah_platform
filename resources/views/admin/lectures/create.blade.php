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
                  <label class="form-label" for="course_id">{{ __('admin.lectures.course') }} <span>*</span></label>
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
                <div class="mb-3">
                  <label class="form-label" for="title"> {{ __('admin.lectures.field_title') }} <span>*</span></label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required>

                  @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


              </div>
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="level_id">{{ __('admin.lectures.level') }} <span>*</span></label>
                  <select class="form-control" name="level_id" id="level_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($levels as $level)
                    <option value="{{ $level->id }}"> {{ $level->name }}</option>

                    @endforeach
                  </select>

                  @error('level_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="type">{{ __('admin.lectures.type') }} <span>*</span></label>
                  <select class="form-control" name="type" id="type" required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1"> {{ __('admin.lectures.viedo')}}</option>
                    <option value="2"> {{ __('admin.lectures.metting')}}</option>

                  </select>

                  @error('type')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>






              </div>
              <div class="mb-3">
              <label class="form-label">{{ __('admin.lectures.short_description') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="short_description" rows="6" placeholder="Content.."></textarea>
              </div>
              <div class="mb-3">
              <label class="form-label">{{ __('admin.lectures.descriptions') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="descriptions" rows="6" placeholder="Content.."></textarea>
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