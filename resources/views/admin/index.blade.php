@extends('admin.layouts.master')
@section('title', $title)
@section('content')

 
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
             
             
            </div>
          </div>
        </div>
       
		@include('admin.layouts.inc.footer')
@endsection

@push('custom-scripts')

@endpush