    @extends('admin.layouts.master')
    @section('title', 'تعديل بيانات المنتج')
    @section('content')
    <div class="container-xl">
      <div class="row row-cards">
        <div class="card">
          <div class="card-header">
            <div class="card-block">
              <a href="{{ route($route.'.index') }}" class="btn btn-rounded btn-info">{{ __('btn_back') }}</a>
            </div>
          </div>

          <form class="needs-validation" novalidate action="{{ route($route.'.update',$row) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">

              <div class="card-body row">
                <!-- Form Start -->
                <div class="form-group col-md-6">
                  <label for="name" class="form-label">إسم المنتج <span>*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>

                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="form-group col-md-6">
                  <label for="company_id">الشركة <span>*</span></label>
                  <select class="form-control select2" name="company_id" id="company_id" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach( $companies as $company )
                    <option value="{{ $company->id }}" @if($row->company_id == $company->id) selected @endif>{{ $company->name }}</option>
                    @endforeach
                  </select>

                  @error('company_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group col-md-6 ">
                  <label for="section">القسم <span>*</span></label>
                  <select class="form-control select2-multiple sectionobj" name="section_id" id="section" required>
                    <option value="">{{ __('select') }}</option>
                    @foreach( $sections as $section )
                    <option value="{{ $section->id }}" @if($row->section_id == $section->id) selected @endif>{{ $section->title }}</option>
                    @endforeach
                  </select>

                  @error('section_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="form-group col-md-6 ">
                  <label for="category">الفئة <span>*</span></label>
                  <select class="form-control select2-multiple categoryObj" name="category_id" id="category" required>
                    @foreach( $category as $categoryrow )
                    <option value="{{ $categoryrow->id }}">{{ $categoryrow->title }}</option>
                    @endforeach
                  </select>

                  @error('category_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label" for="product_price" class="form-label" required>
                    السعر {{ $setting->currency}}
                  </label>
                  <input type="number" class="form-control" name="product_price" min="1" id="product_price" value="{{ $row->price }}">

                  @error('product_price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label" for="discount" class="form-label"> {{ $setting->currency}} السعر بعد الخصم أن وجد </label>
                  <input type="text" class="form-control" min="1" name="discount" id="discount" value="{{ $row->discount }}">

                  @error('discount')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>




                <div class="form-group col-md-6">
                  <label for="supplier_price" class="form-label">
                    السعر من المورد
                  </label>
                  <input type="text" class="form-control" min="1" name="supplier_price" id="supplier_price" value="{{ $row->supplier_price }}">

                  @error('supplier_price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="form-group col-md-6">
                  <label for="quantity" class="form-label">
                  الكمية المتاحة بالمخزن
                  </label>
                  <input type="number" class="form-control" min="1" name="quantity" id="quantity" value="{{ $row->quantity }}">

                  @error('quantity')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                  <label for="max_order_quantity" class="form-label">
                    أقصى كمية للطلب
                  </label>
                  <input type="number" class="form-control" name="max_order_quantity" id="max_order_quantity" value="{{ $row->max_order_quantity }}">

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
                      <input class="form-check-input" value="1" @if($row->status ==1) checked="checked" @endif type="radio" name="status" >
                      <span class="form-check-label"> {{ __('status_active')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0" @if($row->status ==0) checked="checked" @endif type="radio" name="status" >
                      <span class="form-check-label"> {{ __('status_inactive' )}}</span>
                    </label>

                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="recommend" class="form-label">{{ __('status_recommend') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1" @if($row->recommend ==1) checked="checked" @endif type="radio" name="recommend" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0" @if($row->recommend ==0) checked="checked" @endif type="radio" name="recommend" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="best_seller" class="form-label">{{ __('status_best_seller') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1" @if($row->best_seller ==1) checked="checked" @endif type="radio" name="best_seller" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0" @if($row->best_seller ==0) checked="checked" @endif type="radio" name="best_seller" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="highest_rated" class="form-label">{{ __('status_highest_rated') }}</label>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="1" @if($row->highest_rated ==1) checked="checked" @endif type="radio" name="highest_rated" >
                      <span class="form-check-label"> {{ __('yes')}}</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" value="0" @if($row->highest_rated ==0) checked="checked" @endif type="radio" name="highest_rated" >
                      <span class="form-check-label"> {{ __('no' )}}</span>
                    </label>

                  </div>
                </div>










                <div class="form-group col-md-12 ">
                  <label for="about"> وصف المنتج</label>
                  <textarea class="form-control texteditor" name="description" id="description">{!! $row->description !!}</textarea>

                  @error('description')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group col-md-12 ">



                  <label for="logo">{{ __('image') }}</label>
                  <input type="file" class="form-control" name="img" id="logo">
                  @if(isset($row->main_img))
                  @if(is_file($row->main_img))
                  <img src="{{ asset($row->main_img) }}" class="img-fluid setting-image" alt="{{ __('field_site_logo') }}" style="max-height:150px;">
                  <div class="clearfix"></div>
                  @endif
                  @endif
                  @error('img')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-12 ">



                  <label for="photos">صور المتج </label>
                  <input type="file" class="form-control" name="photos[]" id="photos[]" multiple>


                  @if($row->photos)
                  @foreach($row->photos as $photo)



                  <img src="{{ asset($photo->path) }}" alt="Snow" style="clear:none;margin:0px 10px;max-height:140px;">
                  <a href="{{url('admin/delete-photo/'.$photo->id)}}" style="color:red;left:130px;"> <i class="fas fa-trash-alt"></i> </a>

                  @endforeach
                  @endif
                </div>

                <!-- Form End -->
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
                    @foreach($row->saleUnits as $unit)
                    <tr role="row">
                    
                    <td><input type="text"  style="width:100%" name="units_name[]" value ="{{$unit->name}}"><input type="hidden" name="units_arr[]" value="{{$unit->id}}"></td>
<td><input type="number" name="qty_arr[]" value="{{$unit->pivot->qty}}"></td>
<td><input type="number" name="price_arr[]" value="{{$unit->pivot->price}}"></td>
<td> <button type="button" onclick="removeRow(this)">حذف</button></td>
                    </tr>


                    </tr>
                    @endforeach
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
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('btn_Back') }}</button>-->
                <button type="submit" class="btn btn-success">{{ __('btn_update') }}</button>
              </div>


          </form>
        </div>
      </div>
    </div>


    @endsection