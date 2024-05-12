@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            {{ Breadcrumbs::render('users') }}

            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <a href="{{ route($route.'.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        {{ __('admin.btn_add_new') }}
                    </a>
                

                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">



            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <!-- [ Data table ] start -->
                        <div class="table-responsive">
                        <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>{{ __('admin.users.field_name') }}</th>

                                        <th>{{ __('admin.users.field_email') }}</th>
                                        <th>{{ __('admin.users.role') }}</th>


                                        <th>{{ __('admin.users.phone_number') }}</th>
                                        <th>{{ __('admin.users.field_status') }}</th>

                                        <th>{{ __('admin.users.field_action') }}</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $rows as $key => $row )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>@foreach($row->roles as $role) {{ $role->name ?? '' }} @endforeach</td>
                                        <td>{{ $row->phone }}</td>




                                        <td>


<div class="form-check form-switch md-3" style="margin:10px">

  <input data-id="{{$row->id}}" data-type='App\Models\User' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
</div>
</td>
                                        <td>

                                            @if($loop->iteration != $loop->last)

                                            @if($row->status == 0)


                                            <button class="btn btn-icon btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#changeStatusModal-{{ $row->id }}">
                                                <i class="fa-solid fa-lock-open"></i>
                                            </button>
                                            @else
                                            <button class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#changeStatusModal-{{ $row->id }}">
                                                <i class="fa fa-window-close" aria-hidden="true"></i>
                                            </button>
                                            @endif

                                            <!-- Include Password Change modal -->
                                            @include('admin.users.change-status')



                                            <a href="{{ route($route.'.edit', $row->id) }}" class="btn btn-icon btn-primary btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $row->id }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <!-- Include Delete modal -->
                                            @include('admin.layouts.inc.delete')
                                            @endif

                                            <button class="btn btn-icon btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#changePasswordModal-{{ $row->id }}">
                                                <i class="fas fa-key"></i>
                                            </button>

                                            <!-- Include Password Change modal -->
                                            @include('admin.users.password-change')


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- [ Data table ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection