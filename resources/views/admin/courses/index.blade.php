@extends('admin.layouts.master')
@section('title', '')
@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="card">
                <div class="card-header">
                    <div class="card-block">
                        <a href="{{ route($route.'.create') }}" class="btn btn-rounded btn-info"> {{ __('admin.btn_add_new') }} </a>
                        <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-info">{{ __('admin.btn_refresh') }}</a>

                    </div>
                </div>

                <div class="card-block">
                    <!-- [ Data table ] start -->
                    <div class="table-responsive">
                        <table id="export-table" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> {{__('admin.courses.name')}}</th>
                                    <th> {{__('admin.courses.track')}}</th>
                                    <th> {{__('admin.courses.instructor')}}</th>
                                    <th> {{__('admin.courses.student_number')}}</th>
                                    <th> {{__('admin.courses.price')}}</th>
                                    <th> {{__('admin.courses.course_type')}}</th>
                                    <th> {{__('admin.courses.level')}}</th>
                                    <th> {{__('admin.courses.actions')}}</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $rows as $key => $row )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ optional($row->track)->name }}</td>
                                    <td>{{ optional($row->instructor)->name }}</td>
                                    <td> 0</td>
                                    <td>{{ optional($row->courseType)->name }}</td>
                                    <td>{{ optional($row->level)->name }}</td>

                                  
                                    <td>
                                        @if( $row->status == 1 )
                                        <span class="badge bg-green text-green-fg">{{ __('status_active') }}</span>
                                        @else
                                        <span class="badge bg-red text-red-fg">{{ __('status_inactive') }}</span>
                                        @endif


                                    </td>
                                    <td>
                                        @if( $row->recommend == 1 )
                                        <span class="badge bg-green text-green-fg"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M18.333 2c1.96 0 3.56 1.537 3.662 3.472l.005 .195v12.666c0 1.96 -1.537 3.56 -3.472 3.662l-.195 .005h-12.666a3.667 3.667 0 0 1 -3.662 -3.472l-.005 -.195v-12.666c0 -1.96 1.537 -3.56 3.472 -3.662l.195 -.005h12.666zm-2.626 7.293a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor" />
                                            </svg></span>
                                        @else
                                        <span class="badge bg-red text-red-fg"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 10l4 4m0 -4l-4 4" />
                                                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                            </svg></span>
                                        @endif
                                    </td>

                                    <td>
                                   

                                        <a href="{{ route($route.'.edit',$row->id) }}" class="btn btn-icon btn-primary btn-sm"> <i class="far fa-edit"></i>
                                        </a>



                                        <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $row->id }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <!-- Include Delete modal -->
                                        @include('admin.layouts.inc.delete')
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


@endsection