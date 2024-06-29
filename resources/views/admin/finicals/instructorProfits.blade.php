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
                    <th> {{__('admin.instructors.field_name')}}</th>
                    <th>{{ __('admin.instructors.total_course') }}</th>
                    <th>{{ __('admin.instructors.student_number') }}</th>
                    <th> {{__('admin.instructors.susbscriptions_total')}}</th>
                    <th>{{ __('admin.instructors.current_balance') }}</th>
                    <th>{{ __('admin.instructors.total_balance') }}</th>

                    
                    <th>{{ __('admin.field_action') }}</th>



                  </tr>
                </thead>
                <tbody>
                  @foreach($rows as $row)

                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-secondary">{{$loop->iteration}}</span></td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->courseNumber }}</td>
                    <td> {{ $row->subscriptions()->count() }}</td>
                    <td> {{ $row->subscriptions()->sum('paid') }} {{ $setting->currency }}</td>
                    <td>{{$row->total_balance}} {{ $setting->currency }}</td>
                    <td>{{ $row->current_balance }} {{ $setting->currency }} </td>
<td></td>




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