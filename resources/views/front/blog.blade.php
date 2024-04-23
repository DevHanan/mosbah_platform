@extends('front.layouts.master')
@section('title', '')
@section('content')
@include('front.layouts.common.navbar')
<div class="blog-details">
        <div class="header text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="header-content container d-flex justify-content-center flex-column h-100 mb-4">
                            <h2 class="mb-4">عنوان الخبر</h2>
                            <p>
                                Earlier this month, a viral video depicting hyper-realistic cakes as everyday items had folks on social media double-guessing every other post, and sometimes even their own realities, effectively launching the next meme : “Is this real or is this cake?”
                            </p>
                            <p style="font-size: 14px;">04:30 - 18 نوفمبر 2023</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="public/front/img/image 44.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    
        <section class="container">
           <div class="more-news p-4 my-5">
                <h2>المزيد عن الخبر</h2>
                <p>تعد جمعية البر من أقدم الجمعيات الخيرية بالمملكة العربية السعوديةحيث تأسست في شهر رجب من عام 1379 هـ بإسم صندوق البر بالمدينة المنورة و تم تعديل إسمها إلى جمعية البر بالمدينة المنورة بعد أن سجلت بوزارة العمل و الشؤون الإجتماعية برقم (22) و تاريخ 04/06/1396هـ . و تعتبر حلقة الوصل بين المحسنين الداعمين و المحتاجين في نطاق عملها داخل المدينة المنورة. وتهدف الجمعية إلى رعاية المحتاجين من الأرامل و الأيتام و الفقراء و تأهيلهم والوصول بهم إلى تحقيق الإكتفاء الذاتي لهم و ذلك من خلال البرامج والمشاريع المتنوعة الموضحة ضمن موقع الجمعية.</p>
           </div>
           <section class="container pt-3 gallay-all">
            <div class="row">
              <div class="col-md-5 mb-4">
                  <div class="position-relative w-100 h-100 gallery-item">
                      <img src="public/front/img/Rectangle 1585.png" class="w-100 h-100" alt="">
                      <div class="position-absolute play-icon p-3 rounded-pill d-flex justify-content-center align-items-center">
                          <a href="#"><i class="fa-solid fa-play fa-lg text-white"></i></a> 
                      </div>
                  </div>
              </div>
              <div class="col-md-7 mb-4">
                  <div class="position-relative w-100 h-100 gallery-item">
                      <img src="public/front/img/Rectangle 1586.png" class="w-100 h-100" alt="">
                  </div>
              </div>
              <div class="col-md-8 mb-4">
                  <div class="position-relative w-100 h-100 gallery-item">
                      <img src="public/front/img/Rectangle 1588.png" class="w-100 h-100" alt="">
                      <div class="position-absolute play-icon p-3 rounded-pill d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-play fa-lg text-white"></i>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="position-relative w-100 h-100 gallery-item">
                      <img src="public/front/img/Rectangle 1587.png" class="w-100 h-100" alt="">
                  </div>
              </div>
            </div>
          </section>
        </section>
    
        <section class="container my-5 news-cards">
          <h1 class="text-center fw-bold primary-color mb-5"> أخبار ذات صلة </h1>
          <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card shadow-sm border mb-5 mx-3">
                    <a href="news-details.html" class="position-relative">
                        <img class="card-img-top" src="public/front/img/image 46.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold"> عنوان الخبر </h5>
                        <p class="card-text" style="color: #6C757D;"> The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama, where he helped lead a march for  </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="news-details.html" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card shadow-sm border mb-5 mx-3">
                    <a href="news-details.html" class="position-relative">
                        <img class="card-img-top" src="public/front/img/image 46.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold"> عنوان الخبر </h5>
                        <p class="card-text" style="color: #6C757D;"> The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama, where he helped lead a march for  </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="news-details.html" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card shadow-sm border mb-5 mx-3">
                    <a href="news-details.html" class="position-relative">
                        <img class="card-img-top" src="public/front/img/image 46.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold"> عنوان الخبر </h5>
                        <p class="card-text" style="color: #6C757D;"> The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama, where he helped lead a march for  </p>
                        <div class="cardFooter d-flex justify-content-between align-items-center">
                            <div class="card-date primary-color fw-bold">04:30 - 18 نوفمبر 2023</div>
                            <a href="news-details.html" class="btn btn-success primary-bg border-0">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    
        </section>
    </div>
@endsection