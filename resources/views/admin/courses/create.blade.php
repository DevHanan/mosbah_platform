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

        <form autocomplete="off" class="card" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
          @csrf


          <div class="card-body">
            <div class="row ">
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="name"> {{ __('admin.courses.name') }} <span>*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>

                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="period"> {{ __('admin.courses.period') }} <span>*</span></label>
                  <input type="number" class="form-control" name="period" id="period" value="{{ old('name') }}" required>

                  @error('period')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="course_type_id">{{ __('admin.courses.course_type') }} <span>*</span></label>
                  <select class="select2 form-control" name="course_type_id" id="course_type_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($courseTypes as $type)
                    <option value="{{ $type->id }}"> {{ $type->name }}</option>

                    @endforeach
                  </select>

                  @error('course_type_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="instructor_id">{{ __('admin.courses.instructor') }} <span>*</span></label>
                  <select class="select2 form-control" name="instructor_id" id="instructor_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($instructors as $instructor)
                    <option value="{{ $instructor->id }}"> {{ $instructor->name }}</option>

                    @endforeach
                  </select>

                  @error('instructor_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="published_at">{{ __('admin.courses.field_published_at') }} <span>*</span></label>
                  <input type="date" class="form-control" name="published_at" id="published_at" value="{{ old('published_at') }}" required>

                  @error('published_at')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>






                <div class="form-group col-md-12">
                  <label class="form-label" for="active" class="form-label">{{ __('admin.select_status') }}</label>
                  <div>
                    <select class="select2 form-control" name="active" id="active" required>
                      <option value="">{{ __('select') }}</option>
                      <option value="1"> {{ __('admin.active')}}</option>
                      <option value="0"> {{ __('admin.inactive')}}</option>

                    </select>


                  </div>
                </div>

                <div class="form-group col-md-12">
                  <label class="form-label" for="recommend" class="form-label">{{ __('admin.select_recommend') }}</label>
                  <div>
                    <select class="select2 form-control" name="recommend" id="recommend" required>
                      <option value="">{{ __('select') }}</option>
                      <option value="1"> {{ __('admin.recommend')}}</option>
                      <option value="0"> {{ __('admin.inrecommend')}}</option>

                    </select>


                  </div>
                </div>
              






              </div>
              <div class="col-md-6">



                <div class="mb-3">
                  <label class="form-label" for="price"> {{ __('admin.courses.price') }} <span>*</span></label>
                  <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}" required>

                  @error('price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="period_type">{{ __('admin.courses.period_type') }} <span>*</span></label>
                  <select class="form-control" name="period_type" id="period_type" required>
                    <option value="">{{ __('select') }}</option>
                    <option value="1"> {{ __('admin.levels.month') }}</option>
                    <option value="2"> {{ __('admin.levels.day') }}</option>
                    <option value="3"> {{ __('admin.levels.hour') }}</option>
                  </select>

                  @error('period_type')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="track_id">{{ __('admin.courses.track') }} <span>*</span></label>
                  <select class="select2 form-control" name="track_id" id="track_id" required>
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
                  <label class="form-label" for="seat_number"> {{ __('admin.courses.seat_number') }} <span>*</span></label>
                  <input type="number" class="form-control" name="seat_number" id="seat_number" value="{{ old('seat_number') }}" required>

                  @error('seat_number')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="start_date">{{ __('admin.courses.start_date') }} <span>*</span></label>
                  <input type="date" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}">

                  @error('start_date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="end_date">{{ __('admin.courses.end_date') }} <span>*</span></label>
                  <input type="date" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}" required>

                  @error('end_date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="promo_url"> {{ __('admin.courses.promo_url') }} <span>*</span></label>
                  <input type="text" class="form-control" name="promo_url" id="promo_url" value="{{ old('promo_url') }}" required>

                  @error('promo_url')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>



              


              </div>
              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.descriptions') }} <span class="form-label-description"></span></label>
                <textarea dir="auto" class="form-control" name="description" rows="4" placeholder="Content.."></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.directedTo') }} <span class="form-label-description"></span></label>
                <textarea dir="auto" class="form-control" name="directedTo" rows="4" placeholder="Content.."></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.goals') }} <span class="form-label-description"></span></label>
                <textarea dir="auto" class="form-control" name="goals" rows="4" placeholder="Content.."></textarea>
              </div>

              <div class="mb-3 ">



<label for="logo">{{ __('admin.courses.thumbinal_image') }}</label>
<input type="file" class="form-control" name="thumbinal_image" id="logo">

@error('thumbinal_image')
<div class="invalid-feedback">
  {{ $message }}
</div>
@enderror
</div>

<div class="mb-3 ">



<label for="logo">{{ __('admin.courses.image') }}</label>
<input type="file" class="form-control" name="image" id="logo">

@error('img')
<div class="invalid-feedback">
  {{ $message }}
</div>
@enderror
</div>

<div class="mb-3 ">



<label for="logo">{{ __('admin.courses.background_image') }}</label>
<input type="file" class="form-control" name="background_image" id="logo">

@error('background_image')
<div class="invalid-feedback">
  {{ $message }}
</div>
@enderror
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