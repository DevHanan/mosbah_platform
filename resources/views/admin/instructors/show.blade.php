@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                {{ Breadcrumbs::render('show-instructors',$row) }}

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
                        <h3> إحصائيات</h3>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!-- [ Data table ] start -->
                        <div class="table-responsive">
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">

                                <tbody>

                                    <tr>
                                        <th>{{ __('admin.instructors.field_name') }}</th>
                                        <td>{{ $row->name }}</td>
                                    </tr>
                                    <tr>

                                        <th>{{ __('admin.instructors.field_photo') }}</th>
                                        <td><a href="{{ $row->imageFullPath }}" target="_blank">
                                                <img src="{{ $row->imageFullPath }}" style="width:40px">
                                            </a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.instructors.field_email') }}</th>
                                        <td>{{ $row->email }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.instructors.phone_number') }}</th>
                                        <td>{{ $row->phone }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.instructors.field_country') }}</th>
                                        <td>{{ optional($row->country)->name }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.instructors.field_join_date') }}</th>
                                        <td>{{ optional($row->created_at)->format('l, F j, Y')  }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.instructors.qualifications') }}</th>
                                        <td>{!! $row->qualifications !!}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.instructors.favourite_tracks') }}</th>
                                        <td>
                                            @foreach ($row->tracks as $item)
                                            <span class="badge bg-blue text-blue-fg"> {{ $item->name  }} </span>
                                            @endforeach

                                        </td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.instructors.field_course_number') }}</th>
                                        <td> {{ $row->courses()->count() }} دورة تدريبية </td>


                                    </tr>
                                    <!-- <tr>
                                        <th>{{ __('admin.instructors.field_course_total') }}</th>
                                        <td> {{ $row->courses()->sum('price') }} </td>


                                    </tr> -->
                                    <tr>
                                        <th>{{ __('admin.instructors.salary') }}</th>
                                        <td> {{ $row->salary }} {{ $setting->currency }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.instructors.about') }}</th>
                                        <td> {{ $row->aboutLabel }} </td>

                                    </tr>




                                    <tr>



                                        <th>{{ __('admin.instructors.field_status') }}</th>
                                        <td>


                                            <div class="form-check form-switch md-3" style="margin:10px;display:inline;">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Instructor' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                            @if($row->active == 1)
                                            <span class="badge bg-green text-green-fg">{{ __('admin.active')}}</span>
                                            @else
                                            <span class="badge bg-red text-red-fg">{{ __('admin.inactive')}}</span>
                                            @endif
                                        </td>


                                    </tr>






                                </tbody>
                            </table>
                        </div>
                        <!-- [ Data table ] end -->
                    </div>
                </div>
            </div>


          

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3> بيانات تحويل الأموال</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards">
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-active">
                                    <div class="card-body">
                                        <h4> {{ __('admin.instructors.paypall_account_number') }} </h4>
                                        @if($row->paypall_account_number)
                                        <p> {{ $row->paypall_account_number }}</p>
                                        @else
                                        {{ __('admin.no_data')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-active">
                                    <div class="card-body">
                                        <h4> {{ __('admin.instructors.cash_wallet_number') }} </h4>
                                        @if($row->cash_wallet_number)
                                        <p> {{ $row->cash_wallet_number }}</p>
                                        @else
                                        {{ __('admin.no_data')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-active">
                                    <div class="card-body">
                                        <h4> {{ __('admin.instructors.bank_account') }} </h4>
                                        @if($row->bank_account)
                                        <p> {{ $row->bank_account }}</p>
                                        @else
                                        {{ __('admin.no_data')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3> الدورات المقدمة </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" export-table table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                                        <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 15l6 -6l6 6"></path>
                                            </svg>
                                        </th>
                                        <th> {{__('admin.courses.name')}}</th>
                                        <th> {{__('admin.courses.image')}}</th>
                                         <th> {{__('admin.courses.type')}}</th>
                                        <th>{{ __('admin.courses.period') }}</th>
                                        <th>{{ __('admin.courses.price') }}</th>
                                        <th>{{ __('admin.courses.price_with_discount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($row->courses as $row)

                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                        <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                                        <td>{{$row->name}}</td>
                                        <td><img src="{{$row->imageFullPath}}" style="width:40px"></td>
                                        <td>{{ optional($row->coursetype)->name}}</td>
                                        <th>{{ $row->period }} {{ __($row->periodLabel) }}</th>
                                        <td>{{ $row->price}} {{ $setting->currency }}</td>
                                        <td>{{ $row->price_with_discount}} {{ $setting->currency }}</td>



                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection