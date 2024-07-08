@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        {{ Breadcrumbs::render('update-payment-types',$row) }}

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


        <form class="card" action="{{ route($route.'.update',$row) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method("PUT")
          <div class="card-body">
            <!-- Form Start -->
            <fieldset class="row scheduler-border">


              <div class="form-group col-md-12">
                <label class="form-label" for="name"> {{__('admin.paymenttypes.name')}} <span>*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$row) }}" required>
                <input type="hidden" name="id" value="{{$row->id}}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>





              <div class="form-group col-md-12">
                <label class="form-label" for="active" class="form-label">{{ __('admin.select_status') }}</label>
                <div>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" value="1" @if($row->active ==1) checked="checked" @endif type="radio" name="active" >
                    <span class="form-check-label"> {{ __('admin.active')}}</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" value="0" @if($row->active == 0) checked="checked" @endif type="radio" name="active" >
                    <span class="form-check-label"> {{ __('admin.inactive' )}}</span>
                  </label>

                </div>
              </div>


              @if($row->type == 'externel')
              <div class="form-group col-md-12">
                <label class="form-label" for="paypal_link"> {{__('admin.paymenttypes.paypal_link')}} <span>*</span></label>
                <input type="text" class="form-control" name="paypal_link" id="paypal_link" value="{{ old('paypal_link',$row) }}" required>
                @error('paypal_link')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group col-md-12">
                <label class="form-label" for="mobile_cash_number"> {{__('admin.paymenttypes.mobile_cash_number')}} <span>*</span></label>
                <input type="text" class="form-control" name="mobile_cash_number" id="mobile_cash_number" value="{{ old('mobile_cash_number',$row) }}" required>
                @error('mobile_cash_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>


              <div class="form-group col-md-12">
                <label class="form-label" for="fawry_number"> {{__('admin.paymenttypes.fawry_number')}} <span>*</span></label>
                <input type="text" class="form-control" name="fawry_number" id="fawry_number" value="{{ old('fawry_number',$row) }}" required>
                @error('fawry_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>


              @endif


              <div class="form-group col-md-6">

              

                <label for="logo">{{ __('admin.tracks.field_photo') }}</label>
                <input type="file" class="form-control" name="image" id="logo">
                @if(isset($row->image))
                <img src="{{ $row->imageFullPath }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                <div class="clearfix"></div>
                @endif
                @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>



            </fieldset>


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