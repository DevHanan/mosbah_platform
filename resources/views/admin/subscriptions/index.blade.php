@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                {{ Breadcrumbs::render('subscribtions') }}

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
            <!-- Page title actions -->
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
                            <table id="subscriptiontable" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>{{ __('admin.subscriptions.field_name') }}</th>
                                        <th>{{ __('admin.subscriptions.field_email') }}</th>
                                        <th>{{ __('admin.subscriptions.field_course') }}</th>
                                        <th>{{ __('admin.subscriptions.field_course_price') }}</th>
                                        <th>{{ __('admin.subscriptions.field_date') }}</th>
                                        <th>{{ __('admin.subscriptions.field_status') }}</th>
                                        <th>{{ __('admin.subscriptions.type') }}</th>
                                        <th>{{ __('admin.subscriptions.field_payment_attachmend') }}</th>
                                        <th>{{ __('admin.subscriptions.field_action') }}</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $rows as $key => $row )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ optional($row->student)->name }}</td>
                                        <td>{{ optional($row->student)->email }}</td>
                                        <td>{{ optional($row->course)->name }}</td>
                                        <td>{{ $row->paid }} {{ $setting->currency }}</td>
                                        <td>{{ $row->created_at->format('l, F j, Y')  }}</td>
                                        <td>
                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Subscription' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                        </td>
                                        <td> {{ optional($row->paymentType)->name }}</td>
                                        <td>
                                            @if($row->bill )
                                            <a href="{{ asset($row->billFullPath)}}" target="_blank" class="btn btn-icon btn-primary btn-sm">
                                                <img src="{{asset($row->billFullPath)}}" style="width:40px"> </a>
                                            @else
                                            {{ __('admin.no_file') }}
                                            @endif
                                        </td>


                                        <td>



                                            <a style="margin-bottom: 2px;" target="_blank" title="{{__('admin.student_profile')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" href="{{ url('admin/students/'.$row->student_id) }}" class="btn btn-icon btn-primary btn-sm">
                                                <i class="fa-solid fa-person"></i>
                                            </a>
                                            @if($row->bill)
                                            <a href="{{ asset($row->billFullPath)}}" target="_blank" title="{{__('admin.attachment')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-primary btn-sm">
                                                <i class="far fa-file"></i>
                                            </a>
                                            @endif

                                            <button type="button" title="{{__('admin.delete')}}"  data-bs-placement="bottom" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$row->id }}">
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
</div>

<?php 
if(app()->getLocale() == 'ar'){
$locale = 'Arabic';
$dir = 'right to left';
}
else
{ 
$locale = 'English';
$dir = 'left to right';
}

?>
@endsection

@push('scripts')
<script>

let locale = '<?= $locale?>'; // assuming this is set by your PHP code
let url = `https://cdn.datatables.net/plug-ins/1.10.24/i18n/${locale}.json`;
let dir = '<?= $dir?>'; 
console.log(url);

new DataTable('#subscriptiontable', {
  language: {

    url: url
  },
  'direction': dir,
  columnDefs: [
                      {className: 'dt-center', targets: '_all' ,

                      }
                        ],
    layout: {
        topStart: {
            buttons: [
              {
                    extend: 'colvis',
                    text: '<i class="fa fa-eye-slash text-primary" aria-hidden="true" style="font-size:large;"></i>',
                    
                    columns: ":not(':first')"
                  },
                  
                {
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-copy text-primary" style="font-size:large;"></i>',
                    exportOptions: {
                      columns: ':visible'
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel text-primary" style="font-size:large;"></i>',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="far fa-file-pdf fa-lg text-primary"></i>',
                    exportOptions: {
                      columns: ':visible'
                    }
                },
                {
                        extend: 'csvHtml5',
						title: 'CSV',
                        text: '<i class="fas fa-file text-primary" style="font-size:large;"></i>',
                        exportOptions: {
                            columns: ':not(:last-child)',
                            columns: ':visible'

                        }
                    },
               
            ]
        }
    }
});
</script>
@endpush