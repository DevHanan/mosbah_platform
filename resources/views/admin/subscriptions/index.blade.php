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
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
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
                                        <th>{{ __('admin.subscriptions.field_paymenttype') }}</th>
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
                                        <td>{{ optional($row->course)->price }} {{ $setting->currency }}</td>
                                        <td>{{ $row->created_at->format('l, F j, Y')  }}</td>
                                        <td>
                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Subscription' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                        </td>
                                        <td> {{ optional($row->paymentType)->name }}</td>
                                        <td>
                                            @if($row->payment_attachment)
                                            <a href="{{ asset($row->payment_attachment)}}" target="_blank" class="btn btn-icon btn-primary btn-sm">
                                                <img src="{{asset($row->payment_attachment)}}" style="width:40px"> </a>
                                            @else
                                            {{ __('admin.no_file') }}
                                            @endif
                                        </td>


                                        <td>



                                            <a style="margin-bottom: 2px;" target="_blank" href="{{ url('admin/students/'.$row->student_id) }}" class="btn btn-icon btn-primary btn-sm">
                                                <i class="fa-solid fa-person"></i>
                                            </a>
                                            @if($row->payment_attachment)
                                            <a href="{{ asset($row->payment_attachment)}}" target="_blank" class="btn btn-icon btn-primary btn-sm">
                                                <i class="far fa-file"></i>
                                            </a>
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