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

          <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="question"> {{ __('admin.questions.question') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="question" id="question" value="{{ $row->question }}" required>

                                    @error('question')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>



<input type="hidden" value="{{$row->id}}" name="id">
                            </div>
                            <div class="col-md-6">



                          





                            </div>

                            <div class="col-md-12">
                                <label class="form-label">{{ __('admin.questions.answer') }} <span class="form-label-description"></span></label>
                                <textarea class="form-control" name="answer" rows="6" placeholder="Content.."> {{ $row->answer }}</textarea>
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