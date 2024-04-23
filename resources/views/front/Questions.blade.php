@extends('front.layouts.master')
@section('title', '')
@section('content')
  
@include('front.layouts.common.navbar')
<div class="questions">

        <div class="hero_sec pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img h-100 d-flex">
                            <img src="public/front/img/questions.svg" class="img-fluid m-0" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <img src="public/front/img/completed-bg.svg" class="position-absolute img-fluid" alt="">
                        <div class="info position-relative py-5">
                            <h2 class="title py-3 pb-1 fw-bold secondary-color text-center"> محاسبة مالية </h2>
                            <h3 class="text-white fw-bold text-center mb-4">الأختبارات</h3>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="persons mx-3">
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="public/front/img/user4.png" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="public/front/img/user1.png" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="public/front/img/user2.png" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <img src="public/front/img/user3.png" alt="Avatar" class="rounded-circle w-100 h-100" />
                                        </li>
                                        <li class="avatar avatar-xs pull-up position-relative">
                                          <span class="rounded-circle w-100 h-100 bg-white d-flex justify-content-center align-items-center">+2</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="followers_number mx-3">
                                    <p class="text-white mb-1">5 مستخدمين  </p>
                                    <p class="text-white mb-0">يتابعون هذه الدورة القادمة</p>
                                </div>
                            </div>
                            <div class="ratings d-flex justify-content-center my-4">
                                <span class="text-white mx-4 fw-bold">(15) 4.5</span>
                                <div class="stars">
                                    <img src="public/front/img/emptyStar.png" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                    <img src="public/front/img/Star.svg" alt="">
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-center p-0" style="font-size: 14px;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label me-5 text-white" for="flexCheckChecked">
                                    أرغب في تلقي بريد إلكتروني من دوافير والتعرف على العروض الأخرى المتعلقة بالمحاسبة
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="primary-color fw-bold">اختبار المحاسبة</h2>
            <p class="lec_num mb-0">محاضرة 01/03</p>
            <p style="font-size:14px;color:#BDBDBD">أجب عن الأسئلة أدناه</p>

            <form class="shadow-sm rounded p-4 mt-3">
    
                <div class="que_box active mb-5 p-4 rounded shadow-sm">
                    <div class="que_head">
                        1. لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                    </div>
                    <hr style="color: #E8E8E8;">
                    <ol class="que_answer">
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que1_answer" value="a" class="d-none"  id="que1_ans1">
                            <label for="que1_ans1" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que1_answer" value="b" class="d-none"  id="que1_ans2" checked>
                            <label for="que1_ans2" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que1_answer" value="c" class="d-none"  id="que1_ans3">
                            <label for="que1_ans3" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que1_answer" value="d" class="d-none"  id="que1_ans4">
                            <label for="que1_ans4" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                    </ol>
                </div>
    
                <div class="que_box mb-5 p-4 rounded shadow-sm">
                    <div class="que_head">
                        2. لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .
                    </div>
                    <hr style="color: #E8E8E8;">
                    <ol class="que_answer">
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que2_answer" value="a" class="d-none"  id="que2_ans1">
                            <label for="que2_ans1" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que2_answer" value="b" class="d-none"  id="que2_ans2">
                            <label for="que2_ans2" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que2_answer" value="c" class="d-none"  id="que2_ans3">
                            <label for="que2_ans3" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                        <li class="rounded my-3 py-2">
                            <input type="radio" name="que2_answer" value="d" class="d-none"  id="que2_ans4">
                            <label for="que2_ans4" class="p-2 rounded">
                            لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .
                            </label>
                        </li>
                    </ol>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn secondary-bg text-white px-3"> ارسال <img src="public/front/img/icons/send.png" width="20" class="mx-3" alt=""> </button>
                </div>
            </form>
        </div>
    </div>

@endsection