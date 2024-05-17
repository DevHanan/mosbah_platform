@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                @include('admin.layouts.inc.breadcrumb')

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
                                        <th>{{ __('admin.instructors.field_name') }}</th>
                                        <td>{{ $row->name }}</td>
                                    </tr>
                                    <tr>

                                        <th>{{ __('admin.instructors.field_photo') }}</th>
                                        <td> <img src="{{ $row->imageFullPath }}" style="width:40px"></td>

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
                                    <tr>
                                        <th>{{ __('admin.instructors.field_course_total') }}</th>
                                        <td> {{ $row->courses()->sum('price') }} </td>


                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.instructors.salary') }}</th>
                                        <td> {{ $row->salary }}  {{ $setting->currency }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.instructors.about') }}</th>
                                        <td> {{ $row->aboutLabel }} </td>

                                    </tr>




                                    <tr>



                                        <th>{{ __('admin.instructors.field_status') }}</th>
                                        <td>


                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Instructor' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                        </td>


                                    </tr>






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