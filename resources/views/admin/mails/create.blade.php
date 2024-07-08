@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                {{ Breadcrumbs::render('send-emails') }}
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

                <form class="card" action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <!-- Form Start -->
                        <div class="mb-3">
                            <label class="form-label" for="email_id">{{ __('admin.emails.mail') }} <span>*</span></label>
                            <select class="select2 form-control" name="email_ids[]" id="email_id" required multiple>
                                <option value="" disabled hidden>{{ __('select') }}</option>
                                @foreach($emails as $email)
                                <option value="{{ $email->id }}"> {{ $email->email }}</option>

                                @endforeach
                            </select>

                            @error('email_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="title"> {{__('admin.emails.subject')}} <span>*</span></label>
                            <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" required>

                            @error('subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>



                        <hr />

                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.emails.message') }} <span class="form-label"></span></label>
                            <textarea dir="auto" class="form-control richtext" name="message" rows="4" placeholder="Content.."></textarea>
                        </div>


                        <!-- Form End -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">{{ __('admin.btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection