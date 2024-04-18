@extends('admin.layouts.master')
@section('title', $title)
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

                    <a href="{{ route($route.'.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        {{ __('btn_add_new') }}
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">

            <!-- [ Data table ] start -->
            <div class="table-responsive">
                <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('field_title') }}</th>
                            <th>{{ __('field_action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $roles as $key => $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>
                                <a href="{{ route($route.'.show', $row->id) }}" class="btn btn-icon btn-success btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route($route.'.edit', $row->id) }}" class="btn btn-icon btn-primary btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>

                                @php
                                $roles_slug = array('super-admin', 'admin', 'accountant', 'librarian', 'receptionist', 'teacher');
                                @endphp
                                @if(in_array($row->slug, $roles_slug))
                                @else
                                @if($row->slug != 'super-admin')
                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $row->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <!-- Include Delete modal -->

                                @include('admin.layouts.inc.delete')
                                @endif
                                @endif
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


@endsection