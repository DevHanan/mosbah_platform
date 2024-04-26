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

          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                    </svg>
                    {{ __('admin.settings.general_setting') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                    {{ __('admin.settings.policy_settings') }}</a>

                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="#tabs-activity-7" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                    </svg>
                    {{ __('admin.settings.about_settings') }}</a>
  
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-7" role="tabpanel">
                  <div class="page-body">
                    <div class="container-xl">
                      <div class="row row-cards">
                        <div class="col-md-12">
                          <form  action="{{ route($route.'.siteinfo') }}" method="post" enctype="multipart/form-data">
                            @csrf


                              <div class="card-body">

                                <!-- Form Start -->
                                <input name="id" type="hidden" value="{{ (isset($row->id))?$row->id:-1 }}">

                                <div class="form-group col-md-12">
                                  <label class="form-label" for="title">{{ __('admin.settings.field_site_title') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="title" id="title" value="{{ isset($row->title)?$row->title:'' }}">

                                  @error('title')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>


                                <div class="form-group col-md-12">
                                  <label class="form-label" for="phone">{{ __('admin.settings.field_phone') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="phone" id="phone" value="{{ isset($row->phone)?$row->phone:'' }}">

                                  @error('phone')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>



                            

                                <div class="form-group col-md-12">
                                  <label class="form-label" for="email">{{ __('admin.settings.field_email') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="email" id="currency" value="{{ isset($row->email)?$row->email:'' }}">

                                  @error('email')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>



                                <div class="form-group col-md-12">
                                  <label class="form-label" for="address">{{ __('admin.settings.field_address') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="address" id="currency" value="{{ isset($row->address)?$row->address:'' }}">

                                  @error('address')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="form-group col-md-12">
                                  <label class="form-label" for="address">{{ __('admin.settings.field_currency') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="currency" id="currency" value="{{ isset($row->currency)?$row->currency:'' }}">

                                  @error('currency')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="form-group col-md-12">
                                  <label class="form-label" for="facebook_url">{{ __('admin.settings.field_facebook_url') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="facebook_url" id="currency" value="{{ isset($row->facebook_url)?$row->facebook_url:'' }}">

                                  @error('facebook_url')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="form-group col-md-12">
                                  <label class="form-label" for="twitter_url">{{ __('admin.settings.field_twitter_url') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="twitter_url" id="currency" value="{{ isset($row->twitter_url)?$row->twitter_url:'' }}">

                                  @error('twitter_url')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>


                                <div class="form-group col-md-12">
                                  <label class="form-label" for="youtube_url">{{ __('admin.settings.field_youtube_url') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="youtube_url" id="youtube_url" value="{{ isset($row->youtube_url)?$row->youtube_url:'' }}">

                                  @error('youtube_url')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>


                                <div class="form-group col-md-12">
                                  <label class="form-label" for="instgram_url">{{ __('admin.settings.field_instgram_url') }} <span>*</span></label>
                                  <input type="text" class="form-control" name="instgram_url" id="instgram_url" value="{{ isset($row->instgram_url)?$row->instgram_url:'' }}">

                                  @error('instgram_url')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                               
                                <div class="form-group col-md-12">



                                  <label class="form-label" for="logo">{{ __('admin.settings.field_site_logo') }}</span></label>
                                  <input type="file" class="form-control" name="logo_path" id="logo">


                                  @if(isset($row->logo_path))
                                  <img src="{{ asset($row->logo_path) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}">
                                  <div class="clearfix"></div>
                                  @endif
                                </div>

                                <div class="form-group col-md-12">



                                  <label class="form-label" for="favicon">{{ __('admin.settings.field_site_favicon') }}</label>
                                  <input type="file" class="form-control" name="favicon_path" id="favicon">

                                  @if(isset($row->favicon_path))
                                  <img src="{{ asset($row->favicon_path) }}" class="img-fluid setting-image" alt="{{ __('field_site_favicon') }}">
                                  <div class="clearfix"></div>
                                  @endif
                                </div>

                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-success">{{ __('admin.btn_update') }}</button>
                              </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-profile-7" role="tabpanel">
                </div>
                <div class="tab-pane" id="tabs-activity-7" role="tabpanel">
                  <h4>Activity tab</h4>
                  <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

@endsection