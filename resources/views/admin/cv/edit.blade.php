    @extends('admin.layouts.master')
    @section('title', $title)
    @section('content')
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            {{ Breadcrumbs::render('update-cvs',$row) }}

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
      <div class="row row-cards">
        <div class="card">


          <form class="needs-validation" novalidate action="{{ route($route.'.update',$row) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row ">
                <div class="col-md-12">

                  






                  <div class="mb-3 ">


                    @if(isset($row->image))
                    <img src="{{ asset($row->imageFullPath) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                    <div class="clearfix"></div>
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
              <button type="submit" class="btn btn-success">{{ __('admin.btn_update') }}</button>
            </div>


          </form>
        </div>
      </div>
    </div>


    @endsection