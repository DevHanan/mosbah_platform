@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            {{ Breadcrumbs::render('update-roles',$role) }}

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
                <div class="card">

                    <form class="needs-validation" novalidate action="{{ route($route.'.update', [$role->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <!-- Form Start -->
                            <div class="mb-3">
                                <label for="name">{{ __('admin.roles.field_title') }} <span>*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}" required>

                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message  }}
                                </div>
                                @enderror
                            </div>


                            @php
                            $separation = '0';
                            @endphp

                            @foreach($permission as $value)

                            @if($separation != $value->group)
                            <hr />
                            <h6 class="mt-4 text-primary">{{ $value->group }}</h6>
                            @endif

                            <div class="form-group d-inline" style="margin-right: 40px;">
                                <div class="checkbox d-inline">
                                    <input type="checkbox" id="checkbox-{{ $value->id }}" name="permission[]" value="{{ $value->id }}" @foreach($rolePermissions as $rolePermission) @if($rolePermission->permission_id == $value->id) checked @endif
                                    @endforeach
                                    >

                                    <label for="checkbox-{{ $value->id }}" class="cr">{{ $value->title }}</label>
                                </div>
                            </div>

                            @php
                            $separation = $value->group;
                            @endphp

                            @endforeach
                            <!-- Form End -->

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">{{ __('admin.btn_update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection