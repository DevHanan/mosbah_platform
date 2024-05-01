@extends('admin.layouts.master')
@section('title', $title)
@section('content')


<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
      @if( app()->getLocale() == 'ar')
<style>
  .breadcrumb-item+.breadcrumb-item::before {
    float: right;
    padding-left: var(--tblr-breadcrumb-item-padding-x);
}
</style>
@endif

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">{{ __('admin.home') }}</a></li>
    <li class="breadcrumb-item"><a href="{{url('/admin/courses')}}">{{  $course->name }}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> @if(isset($title)) {{ $title }} @endif </li>
  </ol>
</nav>  
      </div>
      <!-- Page title actions -->
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">

          <a href="{{ route($route.'.create',$course->id) }}" class="btn btn-primary d-none d-sm-inline-block">
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
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="text-secondary">
                Show
                <div class="mx-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                </div>
                entries
              </div>
              <div class="ms-auto text-secondary">
                Search:
                <div class="ms-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
              <thead>
                <tr>
                  <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                  <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M6 15l6 -6l6 6"></path>
                    </svg>
                  </th>
                  <th> {{__('admin.levels.name')}}</th>
                  <th> {{__('admin.levels.course')}}</th>
                  <th>{{ __('admin.levels.start_date') }}</th>

                  <th>{{ __('admin.levels.period') }}</th>
                  <th>{{ __('admin.levels.status') }}</th>


                  <th>{{ __('admin.levels.actions') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rows as $row)

                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-secondary">{{$row->id}}</span></td>
                  <td>{{$row->name}}</td>
                  <td>{{optional($row->course)->name}}</td>
                  <td>{{$row->start_date}}</td>
                  <td>{{$row->period}}</td>


                  <td>
                    @if( $row->active == 1 )
                    <span class="badge bg-green text-green-fg">{{ __('admin.active') }}</span>
                    @else
                    <span class="badge bg-red text-red-fg">{{ __('admin.inactive') }}</span>
                    @endif
                  </td>


                  <td style="width: 270px;">



                    <a href="{{ route($route.'.edit',[$course->id,$row->id]) }}" class="btn btn-icon btn-primary btn-sm">
                      <span class="far fa-edit "></span>
                    </a>
                   
                    <a href="{{ url('admin/levels/'.$row->id.'/lectures') }}" class="btn btn-icon btn-primary btn-sm">
                    <i class="fa fa-level-up" aria-hidden="true"></i>
                    </a>
                   
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