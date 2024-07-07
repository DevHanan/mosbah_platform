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
                                        <th>{{__('admin.courses.name')}}</th>
                                        <td>{{ $row->name }}</td>
                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.type')}}</th>
                                        <td>{{optional($row->coursetype)->name}}</td>

                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.image')}}</th>
                                        <td> <img src="{{ $row->imageFullPath }}" style="width:40px"></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.courses.price') }}</th>
                                        <td>{{$row->price}} {{ $setting->currency }}</td>

                                    </tr>


                                    <tr>
                                        <th>{{ __('admin.courses.price_with_discount') }}</th>
                                        <td>{{$row->price_with_discount}} {{ $setting->currency }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.courses.seat_number') }}</th>
                                        <td>{{$row->seat_number}} </td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.courses.level') }}</th>
                                        <td>{{$row->DifficultyLevelLabel}}</td>

                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.create_date')}}</th>
                                        <td>{{ $row->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.field_published_at')}}</th>
                                        <td>{{ $row->published_at }}</td>
                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.start_date')}}</th>
                                        <td>{{ $row->start_date }}</td>
                                    </tr>
                                    <tr>
                                        <th> {{__('admin.courses.end_date')}}</th>
                                        <td>{{ $row->end_date }}</td>
                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.courses.track') }}</th>
                                        <td>
                                            @if($row->tracks)
                                            <ul class="list-unstyled">
                                                @foreach($row->tracks as $item)
                                                <li> {{ $item->name  }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </td>

                                    </tr>

                                    <!-- <tr>
                                        <th>{{ __('admin.courses.instructor') }}</th>
                                        <td>
                                            @if($row->instructors)
                                            <ul class="list-unstyled">
                                                @foreach($row->instructors as $item)
                                                <li> {{ $item->name  }}</li>
                                                @endforeach
                                            </ul>
                                            @endif

                                        </td>

                                    </tr> -->

                                    <tr>
                                        <th>{{ __('admin.courses.period') }}</th>
                                        <th>{{$row->period }} {{ __($row->periodLabel) }}</th>

                                    </tr>



                                    <tr>
                                        <th>{{ __('admin.courses.status') }}</th>
                                        <td>


                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Course' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                                            </div>
                                        </td>


                                    </tr>




                                    <tr>



                                        <th>{{ __('admin.courses.recommend_status') }}</th>
                                        <td>


                                            <div class="form-check form-switch md-3" style="margin:10px">

                                                <input data-id="{{$row->id}}" data-type='App\Models\Course' class="form-check-input form-control toggole-recommened" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->recommened==1) checked="checked" @endif name="recommened">
                                            </div>
                                        </td>


                                    </tr>


                                    <tr>
                                        <th>{{ __('admin.courses.prerequisites') }}</th>
                                        <td>{!! $row->prerequisites !!} </td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.courses.descriptions') }}</th>
                                        <td>{!! $row->description !!} </td>

                                    </tr>


                                    <tr>
                                        <th>{{ __('admin.courses.goals') }}</th>
                                        <td>{!! $row->goals !!} </td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.courses.directedTo') }}</th>
                                        <td>{!! $row->directedTo !!} </td>

                                    </tr>


                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3> {{ __('admin.courses.instructor') }} </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class=" export-table table card-table table-vcenter text-nowrap datatable">
                                            <thead>
                                                <tr>
                                                    <th class="w-1"># <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 15l6 -6l6 6"></path>
                                                        </svg>
                                                    </th>
                                                    <td> {{ __('admin.courses.instructor') }} </td>
                                                    <td> {{ __('admin.courses.buy_course_instructor') }}</td>
                                                    <td> {{ __('admin.courses.instructor_prectange') }}</td>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($row->instructors as $row)

                                                <tr>
                                                    <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->pivot->course_price}}</td>
                                                    <td>{{$row->pivot->course_prectange}}</td>



                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Data table ] end -->
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection