@extends('admin.layouts.master')
@section('title', $title)
@section('content')
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
                  <th> {{__('admin.courses.name')}}</th>
                  <th> {{__('admin.courses.image')}}</th>
                  <th> {{__('admin.courses.type')}}</th>
                  <th>{{ __('admin.courses.price') }}</th>

                  <th>{{ __('admin.courses.track') }}</th>
                  <th>{{ __('admin.courses.status') }}</th>


                  <th>{{ __('admin.courses.actions') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rows as $row)

                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-secondary">{{$row->id}}</span></td>
                  <td>{{$row->name}}</td>
                  <td><img src="{{asset($row->image)}}" style="width:40px"></td>
                  <td>{{optional($row->coursetype)->name}}</td>
                  <td>{{$row->price}}</td>
                  <td>{{optional($row->track)->name}}</td>


                  <td>
                    @if( $row->active == 1 )
                    <span class="badge bg-green text-green-fg">{{ __('admin.active') }}</span>
                    @else
                    <span class="badge bg-red text-red-fg">{{ __('admin.inactive') }}</span>
                    @endif
                  </td>


                  <td style="width: 270px;">



                    <a href="{{ route($route.'.edit',$row->id) }}" class="btn btn-icon btn-primary btn-sm">
                      <span class="far fa-edit "></span>
                    </a>

                    <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$row->id }}">
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