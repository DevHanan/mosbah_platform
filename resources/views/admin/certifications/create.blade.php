@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{ $setting->title }}
                </div>
                <h2 class="page-title">
                    @if(isset($title))
                    {{ $title }}
                    @endif
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <div class="card-header">
                        <div class="card-block">
                            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-primary">{{ __('Back') }}</a>

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

                <form class="card" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row card-body">
                        <!-- Form Start -->


                        <div class=" form-group col-md-6">
                            <label class="form-label" for="name"> {{__('Certificate Name')}} <span>*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('title') }}" required>

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class=" form-group col-md-6">
                            <label class="form-label" for="status" class="form-label">{{ __('Select Status') }}</label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" value="1" @ type="radio" name="status">
                                <span class="form-check-label"> {{ __('status_status')}}</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" value="0" type="radio" name="status">
                                <span class="form-check-label"> {{ __('status_instatus' )}}</span>
                            </label>


                        </div>


                        <div class="form-group col-md-6">
                            <label class="form-label" for="track_id">track <span>*</span></label>
                            <select class="form-control select2" name="track_id" id="track_id">
                                <option value="">{{ __('select') }}</option>
                                @foreach( $tracks as $track )
                                <option value="{{ $track->id }}" @if(old('track_id')==$track->id) selected @endif>{{ $track->name }}</option>
                                @endforeach
                            </select>

                            @error('track_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                        <div id="courses"></div>
                        </div>

                        <div class="form-group col-md-6">


                            <label for="logo">{{ __('Certificate File') }}</label>
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
                        <button type="submit" class="btn btn-success">{{ __('btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection