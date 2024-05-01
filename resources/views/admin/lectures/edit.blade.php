@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
    @if( app()->getLocale() == 'ar')
<style>
  .breadcrumb-item+.breadcrumb-item::before {
    float: right;
    padding-left: var(--tblr-breadcrumb-item-padding-x);
}
</style>
@endif

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">{{ __('admin.home') }}</a></li>
    <li class="breadcrumb-item"><a href="{{url('/admin/courses')}}">{{  optional($level->course)->name }}</a></li>
    <li class="breadcrumb-item"><a href="{{url('/admin/courses/'.optional($level->course)->id.'/levels')}}">{{ $level->name }}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> @if(isset($title)) {{ $title }} @endif </li>
  </ol>
</nav>  
      <!-- Page title actions -->
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">

          <div class="card-header">
            <div class="card-block">
              <a href="{{ route($route.'.index',$level->id) }}" class="btn btn-rounded btn-primary">{{ __('admin.btn_back') }}</a>

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


        <form class="card" novalidate action="{{ route($route.'.update',[$level->id,$row]) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method("PUT")
          <div class="card-body">
            <div class="row ">
              <div class="col-md-6">
                <input type="hidden" name="id" value="{{$row->id}}">
              
                <div class="mb-3">
                  <label class="form-label" for="title"> {{ __('admin.lectures.field_title') }} <span>*</span></label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ $row->title }}" required>

                  @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


              </div>
              <div class="col-md-6">

             

                <div class="mb-3">
                  <label class="form-label" for="type">{{ __('admin.lectures.type') }} <span>*</span></label>
                  <select class="form-control" name="type" id="type" required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1" @if($row->type == 1 ) selected @endif> {{ __('admin.lectures.viedo')}}</option>
                    <option value="2" @if($row->type == 2 ) selected @endif> {{ __('admin.lectures.metting')}}</option>

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
                                <textarea class="form-control" name="short_description" rows="6" placeholder="Content..">
                                  {{ $row->short_description }}
                                </textarea>
              </div>
              <div class="mb-3">
              <label class="form-label">{{ __('admin.lectures.descriptions') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="description" rows="6" placeholder="Content..">
                                {{ $row->description }}

                                </textarea>
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