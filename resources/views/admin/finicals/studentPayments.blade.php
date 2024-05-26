@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        {{ Breadcrumbs::render('subscribtions') }}

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
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('admin.subscriptions.field_date') }}</th>
                                        <th>{{ __('admin.subscriptions.field_name') }}</th>
                                        <th>{{ __('admin.subscriptions.field_course') }}</th>
                                        <th>{{ __('admin.subscriptions.field_course_price') }}</th>
                                        <th>{{ __('admin.subscriptions.field_paymenttype') }}</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $rows as $key => $row )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->created_at->format('l, F j, Y')  }}</td>

                                        <td>{{ optional($row->student)->name }}</td>
                                        <td>{{ optional($row->course)->name }}</td>
                                        <td>{{ $row->paid }} {{ $setting->currency }}</td>
                                        
                                        <td>
                                            @if($row->payment_attachment)
                                            <a href="{{ asset($row->payment_attachment)}}" target="_blank" class="btn btn-icon btn-primary btn-sm">
                                                <img src="{{asset($row->payment_attachment)}}" style="width:40px"> </a>
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