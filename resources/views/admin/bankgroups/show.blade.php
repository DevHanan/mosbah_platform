@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                {{ Breadcrumbs::render('show-bankgroups',$row) }}
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <div class="card-header">
                        <div class="card-block">
                            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-primary">{{ __('admin.btn_back') }}</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-12">

                <div class="card-body">
                    <div class="row ">
                        <!-- Form Start -->
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label class="form-label" for="title"> {{__('admin.bankgroups.bank_name')}} <span>*</span></label>
                                <input type="text" class="form-control" name="name" id="title" value="{{ old('name',$row) }}" readonly>


                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="courses">{{ __('admin.bankgroups.course_name') }} <span>*</span></label>
                                <select class="form-control" name="course_id" id="courses" readonly>
                                    <option value="{{$row->course_id}}" selected>{{ optional($row->course)->name }}</option>

                                </select>


                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="track_id">{{ __('admin.bankgroups.track_name') }} <span>*</span></label>
                                <select class="form-control" name="track_id" id="track_id" readonly>
                                    <option value="{{$row->track_id}}" selected>{{ optional($row->track)->name }}</option>

                                </select>


                            </div>

                            <div class="form-group ">
                                <label class="form-label" for="active" class="form-label">{{ __('admin.select_status') }}</label>
                                <div>
                                    @if($row->active == 1)
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" value="1" type="radio" name="active" checked>
                                        <span class="form-check-label"> {{ __('admin.active')}}</span>
                                    </label>
                                    @else
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" value="0" type="radio" name="active" checked>
                                        <span class="form-check-label"> {{ __('admin.inactive' )}}</span>
                                    </label>
                                    @endif

                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="row row-cards" style="padding-top: 30px;">
                        <div class="col-md">
                            <div class="card">
                                <div class="card-status-top bg-red"></div>
                                <div class="card-header">
                                    <h3 class="card-title"> {{__('admin.bankgroups.bank_question')}} </h3>
                                    <!-- <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">
                                        New Question
                                    </a> -->
                                </div>
                                <div class="card-body p-0">
                                    <div class="card-body">
                                        <table class="table table-responsive" id="products_table">
                                            <thead>
                                                <tr>
                                                    <th>{{__('admin.questions.title')}} </th>
                                                    <th>{{__('admin.questions.title_img')}} </th>
                                                    <th>{{__('admin.questions.ban_group')}} </th>
                                                    <th>{{__('admin.questions.mark')}} </th>
                                                    <th>{{__('admin.questions.answer_option1')}} </th>
                                                    <th>{{__('admin.questions.answer_option2')}} </th>
                                                    <th>{{__('admin.questions.answer_option3')}} </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- Form End -->
                </div>

            </div>
        </div>
    </div>

</div>



<div class="modal modal-blur fade" dir="rtl" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{url('admin/bank-questions'
                )}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="bank_group_id" value="{{$row->id}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('admin.questions.title')}}</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('admin.questions.link')}}</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('admin.questions.mark')}}</label>
                                <input type="number" class="form-control" name="mark">
                            </div>
                        </div>

                        <div class=" col-md-6">
                            <label class="form-label" for="active" class="form-label">{{ __('admin.tracks.status') }}</label>
                            <div>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" value="1" @if($row->active ==1) checked="checked" @endif type="radio" name="active" >
                                    <span class="form-check-label"> {{ __('admin.active')}}</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" value="0" @if($row->active == 0) checked="checked" @endif type="radio" name="active" >
                                    <span class="form-check-label"> {{ __('admin.inactive' )}}</span>
                                </label>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">{{__('admin.questions.title_notes')}}</label>
                                <textarea class="form-control" rows="3" name="title_notes"></textarea>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">{{__('admin.questions.optiomal_answer')}}</label>
                                <textarea class="form-control" rows="3" name="optiomal_answer"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">{{__('admin.questions.answer_notes')}}</label>
                                <textarea class="form-control" rows="3" name="answer_notes"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">


                        <label>{{ __('admin.questions.title_photo') }}</label>
                        <input type="file" class="form-control" name="title_photo" id="logo">

                        @error('title_photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">


                        <label>{{ __('admin.questions.question_photo') }}</label>
                        <input type="file" class="form-control" name="question_photo">

                        @error('question_photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group col-md-12">


                        <label>{{ __('admin.questions.answer_photo') }}</label>
                        <input type="file" class="form-control" name="answer_photo">

                        @error('answer_photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Create new report
                        </a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush