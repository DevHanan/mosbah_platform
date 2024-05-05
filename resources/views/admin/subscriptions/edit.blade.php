@extends('admin.layouts.master')
@section('title', trans('edit_staff') )

@section('content')

<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
    @include('admin.layouts.inc.breadcrumb')

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

          <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="first_name"> {{ __('admin.students.field_first_name') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $row->first_name }}" required>

                                    @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="phone">{{ __('admin.students.phone_number') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $row->phone }}">

                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="password">{{ __('admin.students.field_password') }} <span>*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" required>

                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="track_id">{{ __('admin.students.track') }} <span>*</span></label>
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


                                    <label class="form-label" for="logo">{{ __('admin.students.field_photo') }}</label>
                                    <input type="file" class="form-control" name="image" id="logo">

                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">



                                <div class="mb-3">
                                    <label class="form-label" for="last_name"> {{ __('admin.students.field_last_name') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $row->last_name }}" required>

                                    @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="email">{{ __('admin.students.field_email') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ $row->email }}" required>

                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                

                                <div class="mb-3">
                                    <label class="form-label" for="country_id">{{ __('admin.students.country_id') }} <span>*</span></label>
                                    <select class="form-control" name="country_id" id="country_id" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}"> {{ $country->name }}</option>

                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>





                            </div>

                            <div class="col-md-12">
                                <label class="form-label">{{ __('admin.students.about') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="about_student" rows="6" placeholder="Content.."></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">{{ __('admin.students.qualifications') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="qualifications" rows="6" placeholder="Content.."></textarea>
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