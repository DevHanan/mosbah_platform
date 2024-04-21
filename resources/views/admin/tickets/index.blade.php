@extends('admin.layouts.master')
@section('title', 'عرض الفئات')
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
            <table id="export-table" class="display table nowrap table-striped table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> {{__('code')}}</th>
                        <th> {{__('title')}}</th>
                        <th>{{ __('instructor_name') }}</th>
                        <th>{{ __('phone') }}</th>
                        <th>{{ __('email') }}</th>

                        <th>{{ __('control') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                    <tr>
                        <td class="ui-state-default drag-handler" data-faq="{{$row->id}}">{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            @if( $row->active == 1 )
                            <span class="badge bg-green text-green-fg">{{ __('status_active') }}</span>
                            @else
                            <span class="badge bg-red text-red-fg">{{ __('status_inactive') }}</span>
                            @endif
                        </td>
                        <td><img src="{{asset($row->image)}}" style="width:40px"></td>					

                      
                        <td style="width: 270px;">



                            <a href="{{ route($route.'.edit',$row->id) }}" class="btn btn-icon btn-primary btn-sm">
                                <span class="far fa-edit "></span>
                            </a>

                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$row->id }}">
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

@endsection