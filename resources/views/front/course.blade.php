@extends('front.layouts.master')
@section('title', $title)
@section('content')
@include('front.layouts.common.navbar')
 {{ __($title) }}
@endsection