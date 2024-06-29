@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                {{ Breadcrumbs::render('platformCertifications') }}
            </div>
            <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">

          <a href="{{ route($route.'.create') }}" class="btn btn-primary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 5l0 14" />
              <path d="M5 12l14 0" />
            </svg>
            {{__('admin.btn_add_new')}} </a>

        </div>
      </div>

        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                    </div>
                    <!-- [ Data table ] start -->
                    <div class="table-responsive">
                        <table id="export-table" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> {{__('admin.certifications.name')}}</th>
                                    <th> {{__('admin.certifications.courses')}}</th>
                                    <th> {{__('admin.certifications.track')}}</th>
                                    <th> {{__('admin.certifications.create_date')}}</th>
                                    <th> {{__('admin.tracks.status')}}</th>
                                    <th> {{__('admin.certifications.file')}}</th>
                                    <th> {{__('admin.certifications.image')}}</th>
                                    <th>{{ __('admin.certifications.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rows as $row)
                                <tr>
                                    <td class="ui-state-default drag-handler" data-faq="{{$row->id}}">{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{ optional($row->course)->name }}</td>
                                    <td>{{ optional($row->track)->name }}</td>
                                    <td>{{$row->created_at }}</td>
                                    <td>


                                        <div class="form-check form-switch md-3" style="margin:10px">

                                            <input data-id="{{$row->id}}" data-type='App\Models\Certificate' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                        </div>
                                    </td>
                                    <td>
                                    @if($row->file)    
                                    <a href="{{asset($row->FileFullPath)}}" style="width:40px" target="_blank">
                                            عرض النموذج
                                        </a>
                                        @else
                                        لا يوجد
                                        @endif
                                    </td>

                                    <td>
                                    @if($row->image)    
                                    <a href="{{asset($row->ImageFullPath)}}" style="width:40px" target="_blank">
                                            عرض الصورة
                                        </a>
                                        @else
                                        لا يوجد
                                        @endif
                                    </td>


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
    </div>
</div>

@endsection