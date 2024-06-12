@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                {{ Breadcrumbs::render('show-courses',$row) }}

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

                                <tbody>

                                    <tr>
                                        <th>{{ __('admin.students.field_name') }}</th>
                                        <td>{{ $row->name }}</td>
                                    </tr>
                                    <tr>

                                        <th>{{ __('admin.students.field_photo') }}</th>
                                        <td> <img src="{{ $row->imageFullPath }}" style="width:40px"></td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.students.field_email') }}</th>
                                        <td>{{ $row->email }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.students.phone_number') }}</th>
                                        <td>{{ $row->phone }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.students.field_country') }}</th>
                                        <td>{{ optional($row->country)->name }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.students.field_join_date') }}</th>
                                        <td>{{ optional($row->created_at)->format('l, F j, Y')  }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.students.qualifications') }}</th>
                                        <td>{!! $row->qualifications !!}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.students.favourite_tracks') }}</th>
                                        <td>
                                            @foreach ($row->tracks as $item)
                                            <span class="badge bg-blue text-blue-fg"> {{ $item->name  }} </span>
                                            @endforeach

                                        </td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.students.field_course_number') }}</th>
                                        <td> {{ $row->subscriptions()->count() }} </td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.students.field_total_subscription') }}</th>
                                        <td> {{ $row->subscriptions()->sum('paid') }} {{ $setting->currency }} </td>

                                    </tr>




                                    <tr>



                                        <th>{{ __('admin.students.field_status') }}</th>
                                        <td>


                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Student' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                        </td>


                                    </tr>






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
                    <h3> الدورات المشترك بها </h3>
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
                                        \ <th> {{__('admin.courses.type')}}</th>
                                        <th>{{ __('admin.courses.period') }}</th>
                                        <th>{{ __('admin.courses.price') }}</th>
                                        <th>{{ __('admin.courses.price_with_discount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($row->subscriptions as $row)

                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                        <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                                        <td>{{optional($row->course)->name}}</td>
                                        <td><img src="{{optional($row->course)->imageFullPath}}" style="width:40px"></td>
                                        <td>{{ optional(optional($row->course)->coursetype)->name}}</td>
                                        <th>{{ optional($row->course)->period }} {{ __($row->periodLabel) }}</th>
                                        <td>{{ optional($row->course)->price}} {{ $setting->currency }}</td>
                                        <td>{{ optional($row->course)->price_with_discount}} {{ $setting->currency }}</td>



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