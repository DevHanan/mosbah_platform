@extends('admin.layouts.master')
@section('title', 'إاضافة منتج')
@section('content')
<div class="container-xl">
  <div class="row row-cards">
    <div class="card">
      <div class="card-block">
        <div class="card-header">
          <div class="card-block">
            <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-info">{{ __('btn_back') }}</a>
          </div>
        </div>
        <form action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
          @csrf


          <div class=" row card-block">
            <div class="form-group col-md-6">
              <label class="form-label" for="name" class="form-label" required>إسم المنتج <span>*</span></label>
              <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>

              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="company_id">الشركة <span>*</span></label>
              <select class="form-control select2" name="company_id" id="company_id">
                <option value="">{{ __('select') }}</option>
                @foreach( $companies as $company )
                <option value="{{ $company->id }}" @if(old('company_id')==$company->id) selected @endif>{{ $company->name }}</option>
                @endforeach
              </select>

              @error('company_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="section">القسم <span>*</span></label>
              <select class="form-control select2-multiple sectionobj" name="section_id" id="section" required>
                <option value="">{{ __('select') }}</option>
                @foreach( $sections as $section )
                <option value="{{ $section->id }}" @if(old('section')==$section->id) selected @endif>{{ $section->title }}</option>
                @endforeach
              </select>

              @error('section_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>


            <div class="form-group col-md-6">
              <label class="form-label" for="category">الفئة <span>*</span></label>
              <select class="form-control select2-multiple categoryObj" name="category_id" id="category_id" required>

              </select>

              @error('category_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="main_unit" class="form-label" required>
أكبر وحدة بيع 
              </label>
            <select name="main_unit"  class="form-control select2-multiple " id="main_unit">
                          @foreach( $units as $unit )
                          <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                          @endforeach
                        </select>
            </div>




            <div class="form-group col-md-6">
              <label class="form-label" for="product_price" class="form-label" required>
                السعر  {{ $setting->currency}}
              </label>
              <input type="number" class="form-control" name="product_price" min="1" value="{{ old('price') }}" required="required">
              @error('product_price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="discount" class="form-label"
              > {{ $setting->currency}} السعر بعد الخصم أن وجد </label>
              <input type="number" class="form-control" min="0" name="discount" id="discount" value="{{ old('discount') }}" required="required">

              @error('discount')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="quantity" class="form-label">
                الكمية المتاحة بالمخزن
              </label>
              <input type="number" class="form-control" min="1" name="quantity" id="quantity" value="{{ old('quantity') }}" required="required">

              @error('quantity')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

           

            <div class="form-group col-md-6">
              <label class="form-label" for="supplier_price" class="form-label">
                السعر من المورد {{ $setting->currency}}
              </label>
              <input type="text" class="form-control" min="0" name="supplier_price" id="supplier_price" value="{{ old('supplier_price') }}">

              @error('supplier_price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>


            

           

            <div class="form-group col-md-6">
              <label class="form-label" for="max_order_quantity" class="form-label">
                أقصى كمية للطلب
              </label>
              <input type="number" class="form-control" min="1" name="max_order_quantity" id="max_order_quantity" value="{{ old('max_order_quantity') }}" required="required">


              @error('max_order_quantity')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="status" class="form-label">{{ __('select_status') }}</label>
              <div>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" value="1" type="radio" name="status">
                  <span class="form-check-label"> {{ __('status_active')}}</span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" value="0" type="radio" name="status">
                  <span class="form-check-label"> {{ __('status_inactive' )}}</span>
                </label>

              </div>
            </div>
            <div class="form-group col-md-6">
                  <label for="recommend" class="form-label">{{ __('status_recommend') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1"  type="radio" name="recommend" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0"  type="radio" name="recommend" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="best_seller" class="form-label">{{ __('status_best_seller') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1"  type="radio" name="best_seller" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0"  type="radio" name="best_seller" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="highest_rated" class="form-label">{{ __('status_highest_rated') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1"  type="radio" name="highest_rated" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0"  type="radio" name="highest_rated" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>

            <div class="form-group col-md-12">
              <label class="form-label" for="about">وصف المنتج </label>
              <textarea class="form-control texteditor" name="description" id="description">{{ old('description') }}</textarea>

              @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>


            <div class="form-group col-md-12">


              <label class="form-label" for="logo">الصورة الأساسية للمنتج </label>
              <input type="file" class="form-control" name="img" id="img">

              @error('img')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group col-md-12">
              <label class="form-label" for="photos">صور المتج </label>
              <input type="file" class="form-control" name="photos[]" id="photos" multiple>

              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="card" style="margin-top: 20px;">
              <div class="card-header">
                <h3> إضافة وحدات فرعية للمنتج </h3>
              </div>
              <div class="card-body">
                <table class="friends-list table table-bordered width100" id="dynamicTable" style="margin-top:20px;">

                  <thead>
                    <tr class="filters">
                      <th>الوحدة</th>
                      <th>الكمية من الوحدة الأساسية </th>
                      <th>سعر الوحدة</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr role="row">
                      <td><select name="unit" id="unit">
                          @foreach( $units as $unit )
                          <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                          @endforeach
                        </select></td>
                      <td><input type="number" id="qty" value="1" min="1" name="qty" required></td>
                      <td><input type="number" id="price" value="1" min="1" required></td>
                      <td><button type="button" onclick="addRow()">إضافة</button></td>


                    </tr>
                  </tbody>


                </table>
              </div>
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-success">{{ __('btn_save') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection