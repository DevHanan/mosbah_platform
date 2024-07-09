@extends('front.layouts.master')
@section('title', '')
@section('content')
<style>
  input[type="text"] {
    text-align: center;
    color: #0075ff;
  }

  .div {
    width: 100%;
  }

  .div::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 350px;
    background: #0075ff;
    z-index: -1;
  }

  .main-div {
    padding-top: 120px;
  }

  .girls {
    display: none;
  }

  .transition {
    transition: all 0.2s;
  }

  .transition:hover {
    transform: translateY(-1px);
  }
</style>
@include('front.layouts.common.navbar')
<div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
<div class="pop-up d-none bg-white shadow-sm position-absolute p-4" style="width:350px ;top: 50%;left: 50%;transform: translate(-50%,-50%);z-index: 10;border-radius: 5px;">
  <div class="d-flex justify-content-between align-items-center">
    <h5>المجموع الأعتباري</h5>
    <i class="fa-solid fa-close" onclick="hidePopUp()" style="cursor:pointer ;"></i>
  </div>
  <hr>
  <div class="py-4 text-center">
    <h3> 410 / <span class="text-primary">0.0000</span></h3>
  </div>
  <hr>
  <div class="text-center pt-2">
    <div class="btn btn-primary" onclick="goToResults()">تنسيق 2023</div>
  </div>
</div>
<div class="div"></div>
<section class="main-div">
  <div class="container">
    <h2 class="text-center text-white mb-5" style="font-size:45px ;">معادلة المسارات</h2>
    <div class="shadow-sm p-4 bg-white" style="border-radius:20px ;">
      <div class="filter-page">
        <div class="row">
          <div class="col-4 px-1 px-md-2">
            <div id="btnSecondaryOne" onclick="secondaryOneFunction()" class="btn btn-primary shadow-sm w-100">أول ثانوى</div>
          </div>
          <div class="col-4 px-1 px-md-2">
            <div id="btnSecondaryTwo" onclick="secondaryTwoFunction()" class="btn shadow-sm text-primary w-100">ثانى ثانوى</div>
          </div>
          <div class="col-4 px-1 px-md-2">
            <div id="btnSecondaryThree" onclick="secondaryThreeFunction()" class="btn shadow-sm text-primary w-100">ثالث ثانوى</div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-2 col-4 px-1 px-md-2">
            <div class="btn btn-primary transition w-100" onclick="toggleFill()" style="border-radius: 15px;">تعبئة/تفريغ</div>
          </div>
          <div class="col-md-10 col-8">
            <div class="row align-items-center">
              <div class="col-4">
                <p class="text-secondary text-center">1</p>
              </div>
              <div class="col-4">
                <p class="text-secondary text-center">2</p>
              </div>
              <div class="col-4">
                <p class="text-secondary text-center">3</p>
              </div>
            </div>
          </div>
        </div>
        <div class="secondary-one ">
          @foreach ($first  as $item )
          <div class="row mt-2">
            <div class="col-md-2 col-4 px-1 px-md-2">
              <div class="btn btn-primary transition w-100" style="border-radius: 15px;">{{ $item->name }}</div>
            </div>
            <div class="col-md-10 col-8">
              <div class="row">
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="secondary-two d-none">
        @foreach ($first  as $item2 )

          <div class="row mt-2">
            <div class="col-md-2 col-4 px-1 px-md-2">
              <div class="btn btn-primary transition w-100" style="border-radius: 15px;">{{ $item2->name }}</div>
            </div>
            <div class="col-md-10 col-8">
              <div class="row">
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="secondary-three d-none">
        @foreach ($third  as $item3 )
          <div class="row mt-2">
            <div class="col-md-2 col-4 px-1 px-md-2">
              <div class="btn btn-primary transition w-100" style="border-radius: 15px;">{{ $item3->name }}</div>
            </div>
            <div class="col-md-10 col-8">
              <div class="row">
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
                <div class="col-4"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
        <div class="row mt-2">
          <div class="col-md-2 col-4 px-1 px-md-2">
            <div class="btn btn-primary transition w-100" style="border-radius: 15px;">القدرات</div>
          </div>
          <div class="col-md-10 col-8">
            <div class="row">
              <div class="col-12"><input type="text" class="form-control border-primary" style="border-radius: 10px;"></div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class="btn btn-primary transition w-100" style="border-radius: 15px;" onclick="showPopUp()">حساب المعادلة</div>
          </div>
        </div>

      </div>
      <div class="results-page d-none">
        <div class="d-flex justify-content-around">
          <div class="d-flex gap-2">
            <div class="bg-primary mt-2" style="width:10px ;height:10px;border-radius: 50%;"></div>
            <p class="m-0">الكليات المتاحة</p>
          </div>
          <div class="d-flex gap-2">
            <div class="bg-secondary mt-2" style="width:10px ;height:10px;border-radius: 50%;"></div>
            <p class="m-0">الكليات الغير متاحة</p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div id="boysBtn" onclick="showBoys()" class="btn btn-primary shadow-sm w-100"> البنين</div>
          </div>
          <div class="col-6">
            <div id="girlsBtn" onclick="showGirls()" class="btn shadow-sm text-primary w-100">البنات</div>
          </div>
        </div>
        <div class="mt-3 border p-3">
          <div class="row boys">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">411.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-primary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
          <div class="row girls">
            <div class="col-md-10 col-8">
              <p class="text-secondary text-center border-bottom fw-bold pb-3">طب القاهرة</p>
            </div>
            <div class="col-md-2 col-4">
              <div class="btn btn-secondary w-100" style="border-radius:15px ;">410.0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection