    @extends('admin.layouts.master')
    @section('title', 'تعديل بيانات المنتج')
    @section('content')
    <div class="container-xl">
      <div class="row row-cards">
        <div class="card">
          <div class="card-header">
            <div class="card-block">
              <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-info">{{ __('admin.btn_back') }}</a>
            </div>
          </div>

          <form class="needs-validation" novalidate action="{{ route($route.'.update',$row) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
            <div class="row ">
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="name"> {{ __('admin.courses.name') }} <span>*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>

                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="course_type_id">{{ __('admin.courses.course_type') }} <span>*</span></label>
                  <select class="form-control" name="course_type_id" id="course_type_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($courseTypes as $type)
                    <option value="{{ $type->id }}" @if($row->course_type_id == $type->id ) selected @endif> {{ $type->name }}</option>

                    @endforeach
                  </select>

                  @error('course_type_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="start_date">{{ __('admin.courses.start_date') }} <span>*</span></label>
                  <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $row->start_date }}">

                  @error('start_date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>





                <div class="mb-3 ">


                @if(isset($row->image))
                @if(is_file($row->image))
                <img src="{{ asset($row->image) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                <div class="clearfix"></div>
                @endif
                @endif
                  <label for="logo">{{ __('admin.courses.image') }}</label>
                  <input type="file" class="form-control" name="image" id="logo">

                  @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3 ">

                @if(isset($row->background_image))
                @if(is_file($row->background_image))
                <img src="{{ asset($row->background_image) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                <div class="clearfix"></div>
                @endif
                @endif

                  <label for="logo">{{ __('admin.courses.background_image') }}</label>
                  <input type="file" class="form-control" name="background_image" id="logo">

                  @error('background_image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="track_id">{{ __('admin.courses.track') }} <span>*</span></label>
                  <select class="form-control" name="track_id" id="track_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($tracks as $track)
                    <option value="{{ $track->id }}" @if($row->track_id == $track->id ) selected @endif> {{ $track->name }}</option>

                    @endforeach
                  </select>

                  @error('track_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="level_id">{{ __('admin.courses.level') }} <span>*</span></label>
                  <select class="form-control" name="level_id" id="level_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($levels as $level)
                    <option value="{{ $level->id }}" @if($row->level_id == $level->id ) selected @endif> {{ $level->name }}</option>

                    @endforeach
                  </select>

                  @error('level_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

              </div>
              <div class="col-md-6">



                <div class="mb-3">
                  <label class="form-label" for="price"> {{ __('admin.courses.price') }} <span>*</span></label>
                  <input type="text" class="form-control" name="price" id="price" value="{{ $row->price }}" required>

                  @error('price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label class="form-label" for="published_at">{{ __('admin.courses.field_published_at') }} <span>*</span></label>
                  <input type="date" class="form-control" name="published_at" id="published_at" value="{{ $row->published_at }}" required>

                  @error('published_at')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="start_date">{{ __('admin.courses.end_date') }} <span>*</span></label>
                  <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $row->end_date }}" required>

                  @error('start_date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group col-md-12">
                  <label class="form-label" for="active" class="form-label">{{ __('admin.select_status') }}</label>
                  <div>
                    <select class="form-control" name="active" id="active" required>
                      <option value="">{{ __('select') }}</option>
                      <option value="1" @if($row->active ==1 ) selected @endif> {{ __('admin.active')}}</option>
                      <option value="0" @if($row->active == 0 ) selected @endif>> {{ __('admin.inactive')}}</option>

                    </select>


                  </div>
                </div>
                <div class="mb-3 ">

                @if(isset($row->thumbinal_image))
                @if(is_file($row->thumbinal_image))
                <img src="{{ asset($row->thumbinal_image) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                <div class="clearfix"></div>
                @endif
                @endif

                  <label for="logo">{{ __('admin.courses.thumbinal_image') }}</label>
                  <input type="file" class="form-control" name="thumbinal_image" id="logo">

                  @error('thumbinal_image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="promo_url"> {{ __('admin.courses.promo_url') }} <span>*</span></label>
                  <input type="text" class="form-control" name="promo_url" id="promo_url" value="{{ $row->promo_url }}" required>

                  @error('promo_url')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="instructor_id">{{ __('admin.courses.instructor') }} <span>*</span></label>
                  <select class="form-control" name="instructor_id" id="instructor_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach($instructors as $instructor)
                    <option value="{{ $instructor->id }}"  @if($row->instructor_id == $instructor->id ) selected @endif> {{ $instructor->name }}</option>

                    @endforeach
                  </select>

                  @error('instructor_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

              </div>
              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.descriptions') }} <span class="form-label-description"></span></label>
                <textarea class="form-control" name="descriptions" rows="6" placeholder="Content..">
                  {{ $row->description }}
                </textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.directedTo') }} <span class="form-label-description"></span></label>
                <textarea class="form-control" name="directedTo" rows="6" placeholder="Content..">
                {{ $row->directedTo }}

                </textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">{{ __('admin.courses.goals') }} <span class="form-label-description"></span></label>
                <textarea class="form-control" name="goals" rows="6" placeholder="Content..">
                {{ $row->goals }}

                </textarea>
              </div>


            </div>
          </div>

              <div class="card-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('admin.btn_Back') }}</button>-->
                <button type="submit" class="btn btn-success">{{ __('admin.btn_update') }}</button>
              </div>


          </form>
        </div>
      </div>
    </div>


    @endsection