@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">

      <div class="col">
        @include('admin.layouts.inc.breadcrumb')

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
          <div class="card-body">

            <div class="table-responsive">
              <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                <thead>
                  <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 15l6 -6l6 6"></path>
                      </svg>
                    </th>
                    <th> {{__('admin.number')}}</th>
                    <th> {{__('admin.date')}}</th>
                    <th> {{__('admin.intructor_name')}}</th>
                    <th>{{ __('admin.intructor_current_balance') }}</th>
                    <th>{{ __('admin.amount') }}</th>
                    <th>{{ __('admin.status') }}</th>

                    <th>{{ __('admin.notes') }}</th>


                    <th>{{ __('admin.field_action') }}</th>



                  </tr>
                </thead>
                <tbody>
                  @foreach($rows as $row)

                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                    <td>{{$row->id}}</td>
                    <td>{{$row->date}}</td>
                    <td>{{ optional($row->instructor)->name  }} </td>

                    <td>{{ optional($row->instructor)->current_balance}} {{ $setting->currency }} </td>
                    <td>{{$row->value}} {{ $setting->currency }}</td>
                    <td>{{$row->statusLabel }} </td>
                    <td> {{ $row->notes }}</td>
                    <td>
                      @if($row->status != 1)
                    <a href="#"  title="{{__('admin.edit')}}"  data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn btn-icon btn-primary btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            @endif
                    </td>




                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
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