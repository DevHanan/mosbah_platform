@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header ">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        {{ Breadcrumbs::render('all-student-payments') }}

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
                <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                    </div>
                    <div class="card-body">
                        <!-- [ Data table ] start -->
                        <div class="table-responsive">
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('admin.studentPayments.student') }}</th>
                                        <th>{{ __('admin.studentPayments.field_course') }}</th>
                                        <th>{{ __('admin.studentPayments.field_paid') }}</th>
                                        <th>{{ __('admin.studentPayments.field_date') }}</th>
                                        <th>{{ __('admin.studentPayments.field_paymenttype') }}</th>
                                        <th>{{ __('admin.studentPayments.field_payment_attachmend') }}</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $rows as $key => $row )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($row->student)->name }}</td>
                                        <td>{{ optional($row->course)->name }}</td>
                                        <td>{{ $row->paid }} {{ $setting->currency }}</td>
                                        <td>{{ $row->created_at->format('l, F j, Y')  }}</td>

                                        <td>{{ optional($row->payment)->name }}</td>
                                        <td>
                                            @if($row->bill)
                                            <a href="{{ asset($row->billFullPath)}}" target="_blank" class="btn btn-icon btn-primary btn-sm">
                                                <img src="{{asset($row->billFullPath)}}" style="width:40px"> </a>
                                            @else
                                            {{ __('admin.no_file') }}
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
        </div>
    </div>
</div>


@endsection