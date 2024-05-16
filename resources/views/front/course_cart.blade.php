@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<section class="cartPage my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 right-class">
                <h5 class="fw-bold">تفاصيل الدفع</h5>
                <div class="row">
                    <div class="col-12">
                        <div class="pay_methods shadow my-3 p-3 px-2 d-flex justify-content-around align-items-center flex-wrap">
                            <div class="d-flex mb-1">
                                <input type="radio" name="pay_method" value="a" id="visa" onclick="showForm('visaForm')">
                                <label for="visa" class="p-2 rounded shadow-sm py-2 px-4 me-2 ">
                                    <img src="{{asset('public/front/img/icons/visa-logo.png')}}" alt="">
                                </label>
                            </div>

                            <div class="d-flex mb-1">
                                <input type="radio" name="pay_method" value="a" id="paypal" onclick="showForm('paypalForm')">
                                <label for="paypal" class="p-2 rounded shadow-sm py-2 px-4 me-2 ">
                                    <img src="{{asset('public/front/img/icons/PayPal.png')}}" alt="">
                                </label>
                            </div>

                            <div class="d-flex">
                                <input type="radio" name="pay_method" value="a" id="yandex" onclick="showForm('cashForm')">
                                <label for="yandex" class="p-2 rounded shadow-sm py-2 px-4 me-2 text-center">
                                    <img src="{{asset('public/front/img/icons/Yandex.png')}}" alt="">
                                    <p style="font-size: 10px;" class="m-0 secondary-color">موبايل كاش</p>
                                </label>
                            </div>

                            <div class="d-flex mb-1">
                                <input type="radio" name="pay_method" value="a" id="external" onclick="showForm('externalForm')">
                                <label for="external" class="p-2 rounded shadow-sm py-2 px-4 me-2 text-center" style="cursor: pointer;">
                                    <img src="{{asset('public/front/img/icons/add-square.png')}}" alt=""> <span class="primary-color" style="font-size: 12px;">تحويل خارجي</span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="" class="normal">
                    <div class="payment shadow-sm p-4 my-3">
                        <h5 class="fw-bold">الدفع</h5>
                        <hr>
                        <label class="fw-bold mb-3">رقم البطاقة</label>
                        <input type="text" class="form-control mb-3" placeholder="1234  5678  9101 1121">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">تاريخ الانتهاء</label>
                                <input type="text" class="form-control mb-3" placeholder="شهر / سنة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">الرقم السري ( CVV )</label>
                                <input type="text" class="form-control mb-3" placeholder="123">
                            </div>
                        </div>
                        <div class="form-check mb-3 d-flex">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label mx-5" for="flexCheckChecked">
                                حفظ بيانات البطاقة
                            </label>
                        </div>
                        <label class="fw-bold mb-3">عنوان إرسال الفواتير</label>
                        <select class="form-control select2 p-4 py-5">
                            <option selected="selected">مصر</option>
                            <option>Alaska</option>
                        </select>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">المدينة</label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : الجيزة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3"> الرمز البريدي </label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : 77889">
                            </div>
                        </div>
                    </div>
                    <button class="btn secondary-bg rounded-pill text-white w-100 my-3 py-3">احصل على الكتاب الآن</button>
                </form>
                <form action="" class="paypalForm d-none">
                    <div class="payment shadow-sm p-4 my-3">
                        <h5 class="fw-bold">الدفع</h5>
                        <hr>
                        <p>يمكنك الدفع مباشرة من خلال حسابك على باي بال، اضغط زر الدفع لاتمام العملية
                            اخفاء زر الدفع واظهار زر دفع بواسطة باي بال كالآتي
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="p-2" style="background-color: rgb(232, 232, 232);">
                                <a href="#" class="btn px-5 d-flex justify-content-center align-items-center" style="height: 50px;;background-color: rgb(241, 185, 44);">
                                    <img src="{{asset('public/front/img/icons/paypal.svg')}}" class="img-fluid" alt=""> Pay with
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn secondary-bg rounded-pill text-white w-100 my-3 py-3">احصل على الكتاب الآن</button>
                </form>
                <form action="" class="cashForm d-none">
                    <div class="payment shadow-sm p-4 my-3">
                        <h5 class="fw-bold">الدفع</h5>
                        <hr>
                        <label class="fw-bold mb-3">رقم الموبايل ( رقم المحفظة الالكترونية )</label>
                        <input type="text" class="form-control mb-3" placeholder="012345678910">
                        <div class="form-check mb-3 d-flex">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label mx-5" for="flexCheckChecked">
                                حفظ بيانات البطاقة
                            </label>
                        </div>
                        <label class="fw-bold mb-3">عنوان إرسال الفواتير</label>
                        <select class="form-control select2 p-4 py-5">
                            <option selected="selected">مصر</option>
                            <option>Alaska</option>
                        </select>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">المدينة</label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : الجيزة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3"> الرمز البريدي </label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : 77889">
                            </div>
                        </div>
                    </div>
                    <button class="btn secondary-bg rounded-pill text-white w-100 my-3 py-3">احصل على الكتاب الآن</button>
                </form>
                <form action="" class="visaForm d-none">
                    <div class="payment shadow-sm p-4 my-3">
                        <h5 class="fw-bold">الدفع</h5>
                        <hr>
                        <label class="fw-bold mb-3">طرق الدفع المحفوظة</label>
                        <div class=" mb-4 mx-1 d-flex flex-wrap justify-content-around">
                            <div class="position-relative my-1">
                                <input type="radio" class="position-absolute" style="top: 9px;left:10px" name="visa-type" id="visaType1" checked>
                                <label for="visaType1" class="shadow-sm rounded p-2 px-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="img"><img src="{{asset('public/front/img/icons/visa-logo.png')}}" alt=""></div>
                                        </div>
                                        <div class="col-8">
                                            <p class="fw-bold mb-0"> 1234 ****</p>
                                            <a href="#" class="text-decoration-none">تعديل . visa</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="position-relative my-1">
                                <input type="radio" class="position-absolute" style="top: 9px;left:10px" name="visa-type" id="visaType2">
                                <label for="visaType2" class="shadow-sm rounded p-2 px-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="img"><img src="{{asset('public/front/img/icons/visa-logo.png')}}" alt=""></div>
                                        </div>
                                        <div class="col-8">
                                            <p class="fw-bold mb-0"> 1234 ****</p>
                                            <a href="#" class="text-decoration-none">تعديل . visa</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="position-relative my-1">
                                <button class="btn shadow-sm rounded p-2 px-3 h-100">
                                    <img src="{{asset('public/front/img/icons/add-square.png')}}" alt=""> <span class="primary-color" style="font-size: 12px;">اضف بطاقة جديدة </span>
                                </button>
                            </div>
                        </div>

                        <label class="fw-bold mb-3" for="">اسم حامل البطاقة</label>
                        <input type="text" class="form-control mb-3" placeholder="مثال : محمد سامح">
                        <label class="fw-bold mb-3" for="">رقم البطاقة </label>
                        <input type="text" class="form-control mb-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3" for=""> تاريخ انتهاء الصلاحية </label>
                                <input type="text" class="form-control mb-3" placeholder="شهر / سنة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">الرقم السري ( CVV )</label>
                                <input type="text" class="form-control mb-3" placeholder="123">
                            </div>
                        </div>
                        <label class="fw-bold mb-3">عنوان إرسال الفواتير</label>
                        <select class="form-control select2 p-4 py-5">
                            <option selected="selected">مصر</option>
                            <option>Alaska</option>
                        </select>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">المدينة</label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : الجيزة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3"> الرمز البريدي </label>
                                <input type="text" class="form-control mb-3" placeholder="مثال : 77889">
                            </div>
                        </div>
                    </div>
                    <button class="btn secondary-bg rounded-pill text-white w-100 my-3 py-3">احصل على الكتاب الآن</button>
                </form>
                <form action="{{url('subscribe')}}" class="externalForm d-none" method="POST">
                    @csrf
                    <div class="payment shadow-sm p-4 my-3">
                        <h5 class="fw-bold">تحويل خارجي</h5>
                        <hr>
                        <p class="fw-bold mb-3" for="">يمكنك ارسال المبلغ من خلال الوسايل التالية</p>
                        <label class="mb-3 fw-bold">رقم محفظة للتحويل</label>
                        <div class="d-flex align-items-baseline mb-3">
                            <p class="fw-bold">0123456789</p> <i class="fa-regular fa-copy mx-3 fa-lg" style="cursor: pointer;"></i>
                        </div>

                        <label class="mb-3 fw-bold">رابط حساب باي بال</label>
                        <div class="d-flex align-items-center mb-3">
                            <p class="fw-bold">paypal.link.com</p> <i class="fa-regular fa-copy mx-3 fa-lg" style="cursor: pointer;"></i>
                        </div>

                        <label class="fw-bold mb-3">رقم العملية</label>
                        <input type="text" class="form-control mb-3" name="transcation_id">

                        <div class="px-5 d-flex flex-column align-items-center">
                            <div class="img_box rounded d-flex flex-column align-items-center justify-content-center">
                                <p> اسحب صورة الفاتورة هنا <img name="bill" src="{{asset('public/front/img/icons/upload.png')}}" alt=""></p>
                            </div>
                            <div class="choose_img position-relative d-flex justify-content-center my-3">
                                <input type="file" class="position-absolute" id="fileInput">
                                <div class="btn secondary-bg text-white py-2 px-4 text-center rounded">اختر الملف</div>
                            </div>
                        </div>

                        <label class="fw-bold mb-3">عنوان إرسال الفواتير</label>
                        <select class="form-control select2 p-4 py-5" name="country_id">
                            @foreach($countries as $country)
                            <option value="{{$country->id}}"> {{$country->name }}</option>
                            @endforeach
                        </select>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3">المدينة</label>
                                <input type="text" name="city" class="form-control mb-3" placeholder="مثال : الجيزة">
                            </div>
                            <div class="col-sm-6">
                                <label class="fw-bold mb-3"> الرمز البريدي </label>
                                <input type="text" name="postal_code" class="form-control mb-3" placeholder="مثال : 77889">
                            </div>
                            <input type="hidden" value="{{$course->id}}" name="course_id">
                        </div>
                    </div>
                    <button type="submit" class="btn secondary-bg rounded-pill text-white w-100 my-3 py-3">احصل على الدورة الآن</button>
                </form>
                <p class="text-center">من خلال إكمال عملية الشراء ، فإنك توافق على <a href="{{url('/policies')}}" class="text-decoration-none secondary-color">شروط الخدمة</a> هذه.</p>
            </div>

            <div class="col-lg-4 left-class">
                <h5 class="fw-bold">تفاصيل الطلب</h5>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="course_content shadow-sm my-4 p-2">
                            <div class="img"><img src="{{ $course->fullImagePath }}" class="img-fluid w-100" alt=""></div>
                            <div class="info mt-4 px-4">
                                <p class="course_title mb-0 fw-bold"> {{ $course->name }}</p>
                                <p class="secondary-color" style="font-size: 14px;">
                                    @if($course->tracks)
                                    @foreach ($course->tracks as $item)
                                    {{ $item->name  }}
                                    @endforeach
                                    @endif
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="img"><img src="{{asset('public/front/img/user4.png')}}" alt=""></div>
                                    <p class="mx-2 fw-bold">
                                        @if($course->instructors)
                                        @foreach($course->instructors as $item)
                                        {{ $item->name }}
                                        @endforeach

                                        @endif

                                    </p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-around" style="font-size: 14px;">
                                    <p> <i class="fa-solid fa-graduation-cap ms-1"></i> {{ $course->difficultyLevelLabel }}</p>
                                    <p> <i class="fa-regular fa-clock ms-1"></i> {{ $course->period }} ساعة</p>
                                    <p> <i class="fa-solid fa-laptop ms-1"></i> {{ $course->lectures()->count()}} محاضرة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="course_price shadow-sm my-4 p-2">
                            <div class="info mt-4 px-4">
                                <div class="row">
                                    <div class="col-7">
                                        <p class="fw-bold">السعر الاساسي :</p>
                                    </div>
                                    <div class="col-5">
                                        <span class=""> {{ $course->TotalDiscount }} {{ $setting->currency }}</span>

                                        <span class=" text-decoration-line-through mx-2 primary-color"> {{ $course->price }} {{ $setting->currency }}</span>

                                    </div>
                                </div>
                                <p class="fw-bold">كوبون خصم</p>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control mb-3" placeholder="57CTWAY" id="couponinput">
                                    </div>
                                    <div class="col-6">
                                        <button  data-id="{{$course->id}}" class="btn secondary-bg rounded text-white check-discount-button">تطبيق الخصم</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-7">
                                        <p class="fw-bold">تخفيض :</p>
                                    </div>
                                    <div class="col-5">
                                        <p class="mx-3 fw-bold">$ 10- </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-7">
                                        <p class="fw-bold">الأجمالي :</p>
                                    </div>
                                    <div class="col-5">
                                        <p class="mx-3 fw-bold">$ 210 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection@push('scripts')

<script>
$(function() {
		$('.check-discount-button').change(function() {
			var code = $('document').getElementByIddata('couponinput').value;
			var id = $(this).data('id');

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "{{url('admin/checkcouponstatus')}}",
				data: {
					'code': status,
					'course-id': id,
				},
				success: function(data) {
					Swal.fire({
						icon: 'success',
						title: 'Success!',
						text: data.success,
					})

				}
			});
		})
	})
</script>
@endpush