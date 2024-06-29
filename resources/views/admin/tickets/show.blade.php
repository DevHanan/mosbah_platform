@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                {{ Breadcrumbs::render('show-tickets',$row) }}

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
                        <div class="table-responsive">
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">

                                <tbody>

                                    <tr>
                                        <th>{{ __('admin.tickets.name') }}</th>
                                        <td>{{ $row->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.tickets.phone') }}</th>
                                        <td>{{ $row->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.tickets.email') }}</th>
                                        <td>{{ $row->email }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.tickets.title') }}</th>
                                        <td>{{ $row->title }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.tickets.subject') }}</th>
                                        <td>{{ $row->description }}</td>

                                    </tr>
                                    <tr>
                                        <th>{{ __('admin.tickets.send_date') }}</th>
                                        <td>{{ optional($row->created_at)->format('l, F j, Y')  }}</td>

                                    </tr>

                                    <tr>
                                        <th>{{ __('admin.tickets.status') }}</th>
                                        <td> {{ __($row->statusLabel) }}
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