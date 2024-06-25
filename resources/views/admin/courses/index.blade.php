@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<style>
  .list-unstyled {
    list-style: none;
    margin-left: 0;
    padding-left: 0;
  }
</style>
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">

      <div class="col">
        @include('admin.layouts.inc.breadcrumb')

      </div>
      <!-- Page title actions -->
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
            <div class="col-md-10">
              <h3 class="card-title">{{ $title }}</h3>
            </div>

            <div class="col-md-2">



              <div class="accordion" id="accordion-example">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                      {{__('admin.advanced_search')}}
                    </button>
                  </h2>

                </div>
              </div>

            </div>



          </div>

          <div class="col-md-12">
            <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion-example" style="">
              <div class="accordion-body pt-0">
                <form class=" row col-md-12" action="{{url('admin/courses')}}">
                  <div class="form-group col-md-2">
                    <input type="text" name="name" placeholder="اسم الدورة">
                  </div>
                  <div class=" form-group col-md-2">
                    <select class="select2 " name="course_type_id" id="course_type_id" required>
                      <option value="">{{ __('select') }}</option>
                      @foreach($courseTypes as $type)
                      <option value="{{ $type->id }}"> {{ $type->name }}</option>

                      @endforeach
                    </select>
                  </div>
                  <div class=" form-group col-md-2">
                    <select class="select2 " name="track_id" id="track_id">
                      <option value="">{{ __('select') }}</option>
                      @foreach($tracks as $track)
                      <option value="{{ $track->id }}"> {{ $track->name }}</option>

                      @endforeach
                    </select>
                  </div>
                  <div class=" form-group col-md-2">
                    <select class="select2" name="instructor_id" style="padding:3px;">
                      <option value="0"> {{ __('admin.select_instructor')}}</option>
                      @foreach($instructors as $instructor)
                      <option value="{{$instructor->id}}"> {{ $instructor->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class=" form-group col-md-2">
                    <button type="submit" class="btn btn-primary">{{__('admin.search')}}</button>
                  </div>
                  <div class=" form-group col-md-2">
                    <a href="{{url('admin/courses')}}" class="btn btn-success">{{__('admin.reset')}}</a>
                  </div>
                </form>


                <div class="col-lg-12">
                  <div class="row row-cards">
                    <div class="col-12">
                      <form class="card">
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="col-md-5">
                              <div class="mb-3">
                                <label class="form-label">{{__('admin.courses.name')}}</label>
                                <input type="text" class="form-control" placeholder="course" name="name">
                              </div>
                            </div>




                            <div class="col-md-5">
                              <div class="mb-3">
                                <label class="form-label">Country</label>

                                <select class="form-control form-select" name="course_type_id" id="course_type_id" required>
                                  <option value="">{{ __('select') }}</option>
                                  @foreach($courseTypes as $type)
                                  <option value="{{ $type->id }}"> {{ $type->name }}</option>

                                  @endforeach
                                </select>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">HTTP Request</h3>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-4 col-md-2">
                              <label class="form-label required">Method</label>
                              <select class="form-select">
                                <option value="GET">GET</option>
                                <option value="POST">POST</option>
                                <option value="PUT">PUT</option>
                                <option value="HEAD">HEAD</option>
                                <option value="DELETE">DELETE</option>
                                <option value="PATCH">PATCH</option>
                              </select>
                            </div>
                            <div class="mb-3 col-sm-8 col-md-10">
                              <label class="form-label required">URL</label>
                              <input name="url" type="text" class="form-control" value="https://content.googleapis.com/discovery/v1/apis/surveys/v2/rest">
                            </div>
                          </div>
                          <div class="form-label">Assertions</div>
                          <div class="table-responsive">
                            <table class="table mb-0">
                              <thead>
                                <tr>
                                  <th>Source</th>
                                  <th>Property</th>
                                  <th>Comparison</th>
                                  <th>Target</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <select class="form-select">
                                      <option value="STATUS_CODE" selected="">Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control">
                                  </td>
                                  <td>
                                    <select class="form-select">
                                      <option value="EQUALS" selected="">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="200">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY" selected="">JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="parameters.alt.type">
                                  </td>
                                  <td>
                                    <select class="form-select">
                                      <option value="EQUALS">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE" selected="">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="string">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME" selected="">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control">
                                  </td>
                                  <td>
                                    <select class="form-select">
                                      <option value="EQUALS">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN" selected="">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="500">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS" selected="">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="content-type">
                                  </td>
                                  <td>
                                    <select class="form-select">
                                      <option value="EQUALS" selected="">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" value="application/json; charset=UTF-8">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Make request</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>

          </div>


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
                  <th>{{ __('admin.courses.track') }}</th>
                  <th>{{ __('admin.courses.instructor') }}</th>
                  <th> {{__('admin.courses.type')}}</th>
                  <th>{{ __('admin.courses.period') }}</th>
                  <th>{{ __('admin.courses.price') }}</th>
                  <th>{{ __('admin.courses.price_with_discount') }}</th>
                  <th>{{ __('admin.courses.status') }}</th>
                  <th>{{ __('admin.courses.recommend_status') }}</th>
                  <th>{{ __('admin.courses.actions') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rows as $row)

                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                  <td>{{$row->name}}</td>
                  <td><img src="{{$row->imageFullPath}}" style="width:40px"></td>
                  <td>
                    @if($row->tracks)
                    <ul class="list-unstyled">
                      @foreach($row->tracks as $item)
                      <li class="badge badge-primary" style="display: table;margin-bottom:5px;"> {{ $item->name  }}</li>
                      @endforeach
                    </ul>
                    @endif

                  </td>
                  <td>
                    @if($row->instructors)
                    <ul class="list-unstyled">
                      @foreach($row->instructors as $item)
                      <li class="badge badge-primary" style="display: table;margin-bottom:5px;"> {{ $item->name  }}</li>
                      @endforeach
                    </ul>
                    @endif

                  </td>
                  <td>{{optional($row->coursetype)->name}}</td>
                  <th>{{$row->period }} {{ __($row->periodLabel) }}</th>
                  <td>{{$row->price}} {{ $setting->currency }}</td>
                  <td>{{$row->price_with_discount}} {{ $setting->currency }}</td>

                  <td>


                    <div class="form-check form-switch md-3" style="margin:10px">

                      <input data-id="{{$row->id}}" data-type='App\Models\Course' class="form-check-input form-control toggole-class" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->active==1) checked="checked" @endif name="active">
                    </div>
                  </td>

                  <td>


                    <div class="form-check form-switch md-3" style="margin:10px">

                      <input data-id="{{$row->id}}" data-type='App\Models\Course' class="form-check-input form-control toggole-recommened" type="checkbox" style="float: right;" role="switch" id="flexSwitchCheckDefault" @if($row->recommened==1) checked="checked" @endif name="recommened">
                    </div>
                  </td>



                  <td style="width: 270px;">


                    <a href="{{ url('admin/courses/'.$row->id) }}" title="{{__('admin.show')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-primary btn-sm">
                      <span class="far fa-eye "></span>
                    </a>
                    <a href="{{ route($route.'.edit',$row->id) }}" title="{{__('admin.edit')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-primary btn-sm">
                      <span class="far fa-edit "></span>
                    </a>

                    <a href="{{ url('admin/courses/'.$row->id .'/levels') }}" title="{{__('admin.show_level')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-primary btn-sm">
                      <i class="fa fa-level-up" aria-hidden="true"></i>
                    </a>


                    <button type="button" title="{{__('admin.delete')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$row->id }}">
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
          <div class="card-footer d-flex align-items-center">
            {{ $rows->links()}}
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection