@extends('admin.layouts.master')
@section('title', $title)
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


      <form class="card" novalidate action="{{ route($route.'.update',$row) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="card-body">
            <div class="row ">
              <div class="col-md-6">
              <div class="mb-3">
                  <label class="form-label" for="course_id">{{ __('admin.levels.course') }} <span>*</span></label>
                  <select class="form-control" name="course_id" id="course_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($courses as $course)
                    <option value="{{ $course->id }}"  @if($row->course_id == $course->id ) selected @endif> {{ $course->name }}</option>

                    @endforeach
                  </select>

                  @error('course_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
             

<input type="hidden" name="id" value="{{$row->id}}">
                

                <div class="mb-3">
                  <label class="form-label" for="start_date">{{ __('admin.levels.start_date') }} <span>*</span></label>
                  <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $row->start_date }}">

                  @error('start_date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>



                <div class="mb-3">
                  <label class="form-label" for="period"> {{ __('admin.levels.period') }} <span>*</span></label>
                  <input type="number" class="form-control" name="period" id="period" value="{{ $row->period }}" required>

                  @error('period')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
           

              </div>
              <div class="col-md-6">
              <div class="mb-3">
                  <label class="form-label" for="name"> {{ __('admin.levels.name') }} <span>*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>

                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="period_type">{{ __('admin.levels.period_type') }} <span>*</span></label>
                  <select class="form-control" name="period_type" id="period_type" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($courses as $course)
                    <option value="1" @if($row->period_type == 1 ) selected @endif> {{ __('admin.levels.month') }}</option>
                    <option value="2" @if($row->period_type == 2 ) selected @endif>> {{ __('admin.levels.day') }}</option>
                    <option value="3" @if($row->period_type == 3 ) selected @endif>> {{ __('admin.levels.hour') }}</option>

                    @endforeach
                  </select>

                  @error('period_type')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              

              
              

           

              </div>
         

             
            </div>
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">{{ __('admin.btn_save') }}</button>
        </div>
      </form>
    </div>
  </div>
  <!-- [ Card ] end -->
</div>
</div>
<!-- [ Main Content ] end -->


@endsection