@extends('admin.layouts.master')
@section('title', $title)
@section('content')


<div class="card-block">
  <form class="needs-validation" novalidate action="{{ url('admin/mobile-settinginfo') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">


      <div class="card-block row">

        <div class="mb-3">
          <label class="form-label">إعداد المنتجات</label>
          <div class="divide-y">
            <div>
              <label class="row">
                <span class="col">عرض قائمة المنتجات الأعلى تقييما </span>
                <span class="col-auto">
                  <label class="form-check form-check-single form-switch">
                    <input class="form-check-input" type="checkbox" name="top_rated_products" @if($row->top_rated_products==1) checked @endif>
                  </label>
                </span>
              </label>
            </div>
            <div>
              <label class="row">
                <span class="col">
                  عرض قائمة المنتجات الموصي بها
                </span>
                <span class="col-auto">
                  <label class="form-check form-check-single form-switch">
                    <input class="form-check-input" type="checkbox" name="recommended_products" @if($row->recommended_products==1) checked @endif>
                  </label>
                </span>
              </label>
            </div>
            <div>
              <label class="row">
                <span class="col">
                  عرض قائمة المنتجات المضاف حديثا

                </span>
                <span class="col-auto">
                  <label class="form-check form-check-single form-switch">
                    <input class="form-check-input" type="checkbox" name="latest_products" @if($row->latest_products==1) checked @endif>
                  </label>
                </span>
              </label>
            </div>

            <div>
              <label class="row">
                <span class="col">
                  عرض قائمة المنتجات  الأكثر مبيعا

                </span>
                <span class="col-auto">
                  <label class="form-check form-check-single form-switch">
                    <input class="form-check-input" type="checkbox" name="most_selling_products" @if($row->most_selling_products==1) checked @endif>
                  </label>
                </span>
              </label>
            </div>
          </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">{{ __('btn_update') }}</button>
      </div>

    </div>
  </form>
</div>


@endsection