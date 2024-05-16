<footer class="primary-bg pt-5 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="subscribe w-75">
                    <h4 class="text-white"> اشترك فى نشرتنا الاخبارية </h4>
                    <p class="text-white py-3"> سجل ايميلك ليصلك كل ما هو جديد عن دورات وتخفيضات دوافير </p>
                    <form action="">
                        <input type="email" class="form-control p-3" placeholder="البريد الألكتروني" required>
                        <div>
                            <button type="submit" class="btn rounded-pill secondary-bg text-white my-4">اشترك الان</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6">
                <div class="footer_categories">
                    <h4 class="text-white">المسارات النشطة</h4>
                    <ul class="list-unstyled p-0">
                        @foreach($tracks as $track)
                        <li class="py-2"><a href="#" class="text-white text-decoration-none">{{ $track->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="footer_categories">
                    <h4 class="text-white">اكتشف</h4>
                    <ul class="list-unstyled p-0">
                        <li class="py-2"><a href="{{ url('/') }}" class="text-white text-decoration-none">الرئيسية</a></li>
                        <li class="py-2"><a href="{{ url('/about-us') }}" class="text-white text-decoration-none">من نحن</a></li>
                        <li class="py-2"><a href="{{ url('courses') }}" class="text-white text-decoration-none">الدورات</a></li>
                        <li class="py-2"><a href="{{ url('books')}}" class="text-white text-decoration-none">متجر الكتب</a></li>
                        <li class="py-2"><a href=" {{ url('/blogs') }}" class="text-white text-decoration-none">المدونة</a></li>
                        <li class="py-2"><a href="{{ url('/contactus') }}" class="text-white text-decoration-none">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="contact text-white">
                    <div class="logo"><a href="{{ url('/')}}"><img src="
  {{ asset($setting->logo_path) }}" alt="" style="max-height:140px;max-width:fit-content;"></a></div>
                    <h4 class="text-white pb-2">تواصل معنا</h4>
                    <p>
                        <a href="tel:01287848630" class="text-white text-decoration-none"><i class="fa-solid fa-phone-flip ms-2"></i> {{ $setting->phone }} </a>
                    </p>
                    <p>
                        <a href="tel:01287848630" class="text-white text-decoration-none"><i class="fa-solid fa-mobile-screen ms-2"></i> {{ $setting->whatsapp }} </a>
                    </p>
                    <p class="mt-1"><i class="fa fa-envelope ms-2"></i> {{ $setting->email }}</p>

                    <div class="social">
                        <ul class="list-unstyled d-flex w-100 m-0 p-0">
                            <li>
                                <a href="{{ $setting->facebook_url}}" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                    <i class="fa-brands fa-facebook-f fa-lg primary-color"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->whatsapp }}" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                    <i class="fa-brands fa-whatsapp fa-lg primary-color"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->instagram_url }}" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                    <i class="fa-brands fa-instagram fa-lg primary-color"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->youtube_url }}" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                    <i class="fa-brands fa-youtube fa-lg primary-color"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->twitter_url }}" class="d-flex justify-content-center align-items-center bg-white rounded-circle text-decoration-none mx-2">
                                    <i class="fa-brands fa-x-twitter fa-lg primary-color"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="{{asset('public/front/js/jquery.min.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('public/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/front/js/select2.full.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--animation-->
<script src="{{asset('public/front/js/pagination.js')}}"></script>

<script>
    AOS.init();
</script>
<script src="{{asset('public/front/js/price_filter.js')}}"></script>
<script src="{{asset('public/front/js/pagination.js')}}"></script>
<script src="{{asset('public/front/js/main.js')}}"></script>
<script>
    // counter
    const counters = document.querySelectorAll(".statistics .count");
    const speed = 700;

    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    const startCounterIfVisible = (counter) => {
        if (isElementInViewport(counter)) {
            const updateCount = () => {
                const target = parseInt(counter.getAttribute("data-target"));
                const count = parseInt(counter.innerText);
                const increment = Math.ceil(target / speed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        } else {
            window.addEventListener('scroll', () => {
                if (isElementInViewport(counter)) {
                    startCounterIfVisible(counter);
                    // Remove the event listener once the counter starts
                    window.removeEventListener('scroll', arguments.callee);
                }
            });
        }
    };

    counters.forEach(startCounterIfVisible);
</script>


<!---  course details custom script -->
<script>
    var video = document.getElementById("myVideo");
    var playButton = document.getElementById("playButton");
    video.controls = false;

    // Add click event listener to the play button
    playButton.addEventListener("click", function() {
        if (video.paused) {
            video.play();
            playButton.style.display = "none";
        } else {
            video.pause();
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const ratingContainers = document.querySelectorAll('.rating-stars');

        ratingContainers.forEach(container => {
            const stars = container.querySelectorAll('img');
            const question = container.getAttribute('data-question');
            const ratingInput = document.querySelector(`#ratingInput-${question}`); // Assuming you have separate rating input for each question

            stars.forEach((star, index) => {
                star.addEventListener('click', function() {
                    // Set all stars to gray
                    stars.forEach(s => s.src = "../img/emptyStar.png");
                    // Set clicked and previous stars to yellow
                    for (let i = 0; i <= index; i++) {
                        stars[i].src = "../img/Star.svg";
                    }
                    // Update the rating input field with the selected index
                    ratingInput.value = index + 1; // Assuming the rating starts from 1
                });
            });
        });
    });
</script>

<!--  cart custtom script-->

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<script>
    document.getElementById('fileInput').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                const imgBox = document.querySelector('.img_box');
                imgBox.innerHTML = ''; // Clear previous content
                const img = document.createElement('img');
                img.src = reader.result;
                img.alt = 'Selected Image';
                img.className = 'img-fluid rounded-circle';
                img.style.cssText = 'width: 100%; height: 100%;';
                imgBox.style.cssText = 'background: transparent; width:213px;height:200px;padding: 0';
                imgBox.appendChild(img);
            }
            reader.readAsDataURL(file);
        }
    });
</script>
<script>
    function showForm(formId) {
        var forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.classList.add('d-none');
        });
        // Show the selected form
        document.querySelector('.' + formId).classList.remove('d-none');
    }
</script>

<script>
    //<!-- copy -->
    document.addEventListener('DOMContentLoaded', function() {
        const copyIcons = document.querySelectorAll('.fa-copy');

        copyIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                const textToCopy = this.previousElementSibling.textContent.trim();
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert('copied successfully!');
                }).catch(err => {
                    console.error('Error copying text: ', err);
                });
            });
        });
    });
</script>
<script>
        $(document).ready(function() {
            $('.select2').select2();
        });


        let categoryCards = document.querySelector('.categoryCards');
        let rowsCards = document.querySelector('.rowsCards');
        let paginationCards = document.querySelectorAll('#paginationCard .card_pagination');
        let paginationCardsImg = document.querySelectorAll('#paginationCard .paginationCardImg');
        let paginationCardsData = document.querySelectorAll('#paginationCard .paginationCardData');

        rowsCards.addEventListener('click', function() {
            categoryCards.classList.remove('active');
            rowsCards.classList.add('active');

            paginationCards.forEach(paginationCard => {
                paginationCard.classList.add('col-sm-12');
            });
            paginationCardsImg.forEach(paginationCardImg => {
                paginationCardImg.classList.remove('col-12');
                paginationCardImg.classList.add('col-4');
            });
            paginationCardsData.forEach(paginationCardData => {
                paginationCardData.classList.remove('col-12');
                paginationCardData.classList.add('col-8');
            });

            let paginationCardsDesc = document.querySelectorAll('#paginationCard article p');

            paginationCardsDesc.forEach(paginationCardDesc => {
                paginationCardDesc.style.cssText = 'white-space: normal;';
            });
        });

        categoryCards.addEventListener('click', function() {
            rowsCards.classList.remove('active');
            categoryCards.classList.add('active');

            paginationCards.forEach(paginationCard => {
                paginationCard.classList.remove('col-sm-12');

                paginationCardsImg.forEach(paginationCardImg => {
                    paginationCardImg.classList.remove('col-4');
                    paginationCardImg.classList.add('col-12');
                });
                paginationCardsData.forEach(paginationCardData => {
                    paginationCardData.classList.remove('col-8');
                    paginationCardData.classList.add('col-12');
                });
            });

            let paginationCardsDesc = document.querySelectorAll('#paginationCard article p');

            paginationCardsDesc.forEach(paginationCardDesc => {
                paginationCardDesc.style.cssText = 'white-space: nowrap;';
            });
        });
    </script>

    <script>
        function checkAll(filterClass) {
            // Get the "Check All" checkbox and all other checkboxes
            const checkAllCheckbox = document.querySelector(`.${filterClass} #checkAll`);
            const checkboxes = document.querySelectorAll(`.${filterClass} .form-check-input:not(.check-all)`);
    
            // Add event listener to the "Check All" checkbox
            checkAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = checkAllCheckbox.checked;
                });
            });
    
            // Add event listener to other checkboxes to uncheck "Check All" if any checkbox is unchecked
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (!this.checked) {
                        checkAllCheckbox.checked = false;
                    }
                });
            });
        }
    </script>
    <script>
        

  
 
    </script>