@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
      @include('admin.layouts.inc.breadcrumb')

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
                        <!-- Form Start -->


                        <div class="col-md-12">
                            <label class="form-label" for="title"> {{__('admin.policies.field_title')}} <span>*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $row->title }}" required>

                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        
                        <div class="form-check form-switch" style="margin:10px">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="active" @if($row->active==1) checked @endif>
                            <label class="form-check-label form-label" for="flexSwitchCheckDefault"  >{{ __('admin.policies.status') }}</label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.policies.descriptions') }} <span class="form-label-description"></span></label>
                            <textarea class="form-control" name="description" rows="6" placeholder="Content.."> {{ $row->description }}</textarea>
                        </div>


                        <div class="form-group col-md-6">


                            <label for="logo">{{ __('admin.policies.field_file') }}</label>
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