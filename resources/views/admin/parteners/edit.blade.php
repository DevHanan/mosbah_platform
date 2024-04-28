    @extends('admin.layouts.master')
    @section('title', $title)
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
                <div class="col-md-12">

                  <div class="mb-3">
                    <label class="form-label" for="name"> {{ __('admin.parteners.name') }} <span>*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>

                    @error('name')
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
                    <label for="logo">{{ __('admin.parteners.field_photo') }}</label>
                    <input type="file" class="form-control" name="image" id="logo">

                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>



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