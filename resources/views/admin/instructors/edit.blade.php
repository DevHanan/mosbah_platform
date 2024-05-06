@extends('admin.layouts.master')
@section('title', trans('edit_staff') )

@section('content')

<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
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


        <form class="card" action="{{ route($route.'.update', [$row->id]) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <input type="hidden" name="id" value="{{$row->id}}">

          <div class="card-body">
            <div class="row ">
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="first_name"> {{ __('admin.instructors.field_first_name') }} <span>*</span></label>
                  <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $row->first_name }}" required>

                  @error('first_name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="phone">{{ __('admin.instructors.phone_number') }} <span>*</span></label>
                  <input type="text" class="form-control" name="phone" id="phone" value="{{ $row->phone }}">

                  @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="type">{{ __('admin.instructors.is_employee') }} <span>*</span></label>
                  <select class="form-control" name="is_employee" required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1"  @if($row->is_employee == 1) selected="selected" @endif> {{ __('admin.instructors.yes')}}</option>
                    <option value="0" @if($row->is_employee == 0 ) selected="selected" @endif> {{ __('admin.instructors.no')}}</option>

                  </select>

                  @error('type')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="userName">{{ __('admin.instructors.userName') }} <span>*</span></label>
                  <input type="userName" class="form-control" name="userName" id="userName" value="{{ $row->userName }}" required>

                  @error('userName')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="track_id">{{ __('admin.instructors.track') }} <span>*</span></label>
                  <select class="form-control" name="track_id" id="track_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($tracks as $track)
                    <option value="{{ $track->id }}" @if($row->track_id == $track->id) selected="selected" @endif> {{ $track->name }}</option>

                    @endforeach
                  </select>

                  @error('track_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>



              </div>
              <div class="col-md-6">



                <div class="mb-3">
                  <label class="form-label" for="last_name"> {{ __('admin.instructors.field_last_name') }} <span>*</span></label>
                  <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $row->last_name }}" required>

                  @error('last_name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="email">{{ __('admin.instructors.field_email') }} <span>*</span></label>
                  <input type="text" class="form-control" name="email" id="email" value="{{ $row->email }}" required>

                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="salary">{{ __('admin.instructors.salary') }} <span>*</span></label>
                  <input type="salary" class="form-control" name="salary" id="salary" value="{{ $row->salary }}" required>

                  @error('salary')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="bank_account">{{ __('admin.instructors.bank_account') }} <span>*</span></label>
                  <input type="text" class="form-control" name="bank_account" id="bank_account" value="{{ $row->bank_account }}" required>
                  @error('bank_account')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="logo">{{ __('admin.instructors.field_photo') }}</label>
                  <input type="file" class="form-control" name="image" id="logo">

                  @if(isset($row->image))
                  <img src="{{ asset($row->image) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                  <div class="clearfix"></div>
                  @endif
                  @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>



              </div>

              <div class="col-md-12">
                <label class="form-label">{{ __('admin.instructors.about') }} <span class="form-label-description"></span></label>
                <textarea class="form-control" name="about_teacher" rows="6" placeholder="Content.."> {{ $row->about_teacher }}</textarea>
              </div>
              <div class="col-md-12">
                <label class="form-label">{{ __('admin.instructors.qualifications') }} <span class="form-label-description"></span></label>
                <textarea class="form-control" name="qualifications" rows="6" placeholder="Content..">{{ $row->qualifications }}</textarea>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <div class="d-flex">
              <button type="submit" class="btn btn-success">{{ __('admin.btn_save') }}</button>
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>


@endsection