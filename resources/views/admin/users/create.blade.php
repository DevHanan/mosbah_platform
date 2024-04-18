@extends('admin.layouts.master')
@section('title', trans('module_staff'))

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Combo layout
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <div class="card-header">
                        <div class="card-block">
                            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-primary">{{ __('btn_back') }}</a>

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

                <form id="" class="card" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                
                        <div class="card-body">
                            <fieldset class="row scheduler-border">


                                <div class="form-group col-md-6">
                                   <label class="form-label" for="name"> {{ __('field_name') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                   <label class="form-label" for="role">{{ __('field_role') }} <span>*</span></label>
                                    <select class="form-control" name="roles[]" id="role" required>
                                        <option value="">{{ __('select') }}</option>
                                        @foreach( $roles as $role )
                                        <option value="{{ $role->id }}" @if(old('roles')==$role->id) selected @endif>{{ $role->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('roles')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                   <label class="form-label" for="password">{{ __('field_password') }} <span>*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" required>

                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                   <label class="form-label" for="password">{{ __('field_password_confirmation') }} <span>*</span></label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" required>

                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>




                                <div class="form-group col-md-6">
                                   <label class="form-label" for="email">{{ __('field_email') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" required>

                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                   <label class="form-label" for="phone">{{ __('field_phone') }} <span>*</span></label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">

                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>



                                </hr>



                            </fieldset>
                            <div class="card-footer text-end">
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-success">{{ __('btn_save') }}</button>
                                </div>
                            </div>

                            <!-- Form End -->
                 

                </form>
            </div>
        </div>
    </div>
</div>





@endsection