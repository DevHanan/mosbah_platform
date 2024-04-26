@extends('admin.layouts.master')
@section('lat', $title)
@section('content')


<div class="card-block">
  <form class="needs-validation" novalidate action="{{ url('admin/landing-page-settinginfo') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">


      <div class="card-block row">

        <div class="form-group col-md-6">
          <label class="form-label" for="lat">{{ __('field_lat') }} <span>*</span></label>
          <input type="text" class="form-control" name="lat" id="lat" value="{{ $row->lat }}">

          @error('lat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group col-md-6">
          <label class="form-label" for="lng">{{ __('field_lng') }} <span>*</span></label>
          <input type="text" class="form-control" name="lng" id="lng" value="{{ $row->lng }}">

          @error('lng')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        <div class="form-group col-md-6">
          <label class="form-label" for="sale_app_andriod_url"> رابط تطبيق المندوب على جوجل <span>*</span></label>
          <input type="text" class="form-control" name="sale_app_andriod_url" id="sale_app_andriod_url" value="{{ $row->sale_app_andriod_url }}">

          @error('sale_app_andriod_url')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        <div class="form-group col-md-6">
          <label class="form-label" for="sale_app_ios_url">رابط تطبيق المندوب على أبل <span>*</span></label>
          <input type="text" class="form-control" name="sale_app_ios_url" id="sale_app_ios_url" value="{{ $row->sale_app_ios_url  }}">

          @error('sale_app_ios_url')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group col-md-6">
          <label class="form-label" for="client_app_andriod_url"> رابط تطبيق العميل على جوجل<span>*</span></label>
          <input type="text" class="form-control" name="client_app_andriod_url" id="client_app_andriod_url" value="{{  $row->client_app_andriod_url  }}">

          @error('client_app_andriod_url')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group col-md-6">
          <label class="form-label" for="client_app_ios_url">رابط تطبيق العميل على أبل <span>*</span></label>
          <input type="text" class="form-control" name="client_app_ios_url" id="client_app_ios_url" value="{{ $row->client_app_ios_url   }}">

          @error('client_app_ios_url')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        <div class="card" style="margin-top: 35px;">
          <div class="card-header">
            <h3 class="card-title"> بيانات الجزء الأول  </h3>
          </div>
          <div class="card-body">


            <div class="form-group col-md-12">
              <label class="form-label" for="section1_title">{{ __('field_title') }} <span>*</span></label>
              <input type="text" class="form-control" name="section1_title" id="section1_title" value="{{ $row->section1_title }}" required>

              @error('section1_title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-12">
              <label class="form-label" for="section1_description">{{ __('field_description') }}</label>
              <textarea class="form-control texteditor" name="section1_description" id="section1_description">{{  $row->section1_description   }}</textarea>

            </div>

            <div class="form-group col-md-6">



              <label class="form-label" for="logo">{{ __('image') }}</label>
              <input type="file" class="form-control" name="section1_image" id="logo">
              @if(is_file($setting->section1_image))
                    <img src="{{ asset($setting->section1_image) }}" class="card-img-top img-fluid profile-thumb" alt="{{ __('field_photo') }}" onerror="this.src='{{ asset('dashboard/images/user/avatar-1.jpg') }}';">


                    @endif

            </div>
          </div>
        </div>

        <div class="card" style="margin-top: 35px;">
          <div class="card-header">
            <h3 class="card-title"> بيانات الجزء التانى  </h3>
          </div>
          <div class="card-body">


            <div class="form-group col-md-12">
              <label class="form-label" for="section2_title">{{ __('field_title') }} <span>*</span></label>
              <input type="text" class="form-control" name="section2_title" id="section2_title" value="{{ $row->section2_title }}" required>

              @error('section2_title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-12">
              <label class="form-label" for="section2_description">{{ __('field_description') }}</label>
              <textarea class="form-control texteditor" name="section2_description" id="section2_description">{{ $row->section2_description  }}</textarea>

            </div>

            <div class="form-group col-md-6">



              <label class="form-label" for="logo">{{ __('image') }}</label>
              <input type="file" class="form-control" name="section2_image" id="logo">
              @if(is_file($setting->section2_image))
                    <img src="{{ asset($setting->section2_image) }}" class="card-img-top img-fluid profile-thumb" alt="{{ __('field_photo') }}" onerror="this.src='{{ asset('dashboard/images/user/avatar-1.jpg') }}';">


                    @endif
            </div>
          </div>
        </div>


      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">{{ __('btn_update') }}</button>
      </div>

    </div>
  </form>
</div>


@endsection