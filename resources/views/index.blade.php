@extends('templates.layoutCoures');
@section('content')
        <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
            <div class="hero__shape">
                <img class="hero-1-circle" src="../assets/img/shape/hero/hero-1-circle.png" alt="">
                <img class="hero-1-circle-2" src="../assets/img/shape/hero/hero-1-circle-2.png" alt="">
                <img class="hero-1-dot-2" src="../assets/img/shape/hero/hero-1-dot-2.png" alt="">
            </div>
            <div class="container">
                <div class="hero__content-wrapper mt-90">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="hero__content p-relative z-index-1">
                                <h3 class="hero__title">
                                    <span>Hơn 100 giảng viên tham gia</span>
                                    <span class="yellow-shape">Hướng dẫn <img src="../assets/img/shape/yellow-bg.png"
                                            alt="yellow-shape"> </span>
                                    trực tiếp
                                </h3>
                                <p>Gặp mặt và trao đổi với những giảng viên đã có kinh nghiệm nhiều năm.</p>
                                <a href="course-grid.html" class="e-btn">Xem tất cả khóa học</a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="hero__thumb d-flex p-relative">
                                <div class="hero__thumb-shape">
                                    <img class="hero-1-dot" src="../assets/img/shape/hero/hero-1-dot.png" alt="">
                                    <img class="hero-1-circle-3" src="../assets/img/shape/hero/hero-1-circle-3.png"
                                        alt="">
                                    <img class="hero-1-circle-4" src="../assets/img/shape/hero/hero-1-circle-4.png"
                                        alt="">
                                </div>
                                <div class="hero__thumb-big mr-30">
                                    <img src="../assets/img/hero/hero-1.jpg" alt="">
                                    <div class="hero__quote hero__quote-animation">
                                        <span>Tomorrow is our</span>
                                        <h4>“When I Grow Up” Spirit Day!</h4>
                                    </div>
                                </div>
                                <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                                    <img src="../assets/img/hero/hero-sm-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->
        <!-- category area start -->
        <section class="category__area pt-120 pb-70">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                        <div class="section__title-wrapper mb-45">
                            <h2 class="section__title">Các danh mục<br><span class="yellow-bg">khóa học <img
                                        src="../assets/img/shape/yellow-bg-2.png" alt=""> </span>của chúng tôi
                            </h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4">
                        <div class="category__more mb-50 float-md-end fix">
                            <a href="course-grid.html" class="link-btn">
                                View all Category
                                <i class="far fa-arrow-right"></i>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($cateData as $key => $value)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="category__item mb-30 transition-3 d-flex align-items-center">
                            <div class="category__icon mr-30">
                                <svg viewBox="0 0 512 512">
                                    <g>
                                        <path class="st0"
                                            d="M178.7,492H120c-55.2,0-100-44.8-100-100V120C20,64.8,64.8,20,120,20h58.7C123.7,20,81,64.8,81,120v272   C81,447.2,123.7,492,178.7,492z M355.5,204.8l18.9-85.5c4.8-24.1,16.7-46.3,34.1-63.7l35.4-35.4c-15.1-1.4-30.7,3.7-42.3,15.3   l-61.1,61.1c-17.4,17.4-29.3,39.6-34.1,63.7L295,217l56.7-11.3C352.9,205.4,354.2,205.1,355.5,204.8L355.5,204.8z" />
                                        <path class="st1"
                                            d="M299,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h183c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h179c44.1,0,80-35.9,80-80V272c0-11,9-20,20-20s20,9,20,20v120   C419,458.2,365.2,512,299,512z M298.9,236.6l56.7-11.3c28.1-5.6,53.7-19.3,73.9-39.6l61.1-61.1c28.5-28.5,28.5-74.8,0-103.2   c-28.5-28.5-74.8-28.5-103.2,0l-61.1,61.1c-20.3,20.3-33.9,45.8-39.6,73.9l-11.3,56.7c-1.3,6.6,0.7,13.3,5.5,18.1   c3.8,3.8,8.9,5.9,14.1,5.9C296.3,237,297.6,236.9,298.9,236.6L298.9,236.6z M462.4,49.7c6.2,6.2,9.7,14.5,9.7,23.3   s-3.4,17.1-9.7,23.3l-61.1,61.1c-14.7,14.7-33.2,24.6-53.5,28.6l-27.3,5.4l5.4-27.3c4.1-20.3,14-38.8,28.6-53.5l61.1-61.1   c6.2-6.2,14.5-9.7,23.3-9.7S456.1,43.4,462.4,49.7L462.4,49.7z" />
                                        <path class="st2"
                                            d="M319,352H101c-11,0-20-9-20-20s9-20,20-20h218c11,0,20,9,20,20S330.1,352,319,352z M211,387   c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S224.8,387,211,387z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="category__content">
                                <h4 class="category__title"><a href="course-details.html">{{$value->ten_danh_muc}}</a></h4>
                                <p>Danh mục</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- KDSFLSAJFLSAJFLSAJ -->
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- banner area start -->
        <section class="banner__area pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item p-relative mb-40"
                            data-background="../assets/img/banner/banner-bg-1.jpg">
                            <div class="banner__content">
                                <span>Free</span>
                                <h3 class="banner__title">
                                    <a href="course-details.html">Germany Foundation <br> Document</a>
                                </h3>
                                <a href="course-grid.html" class="e-btn e-btn-2">View Courses</a>
                            </div>
                            <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                                <img src="../assets/img/banner/banner-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item p-relative mb-40"
                            data-background="../assets/img/banner/banner-bg-2.jpg">
                            <div class="banner__content">
                                <span class="orange">new</span>
                                <h3 class="banner__title">
                                    <a href="course-details.html">Online Courses <br>From Eduka University</a>
                                </h3>
                                <a href="course-grid.html" class="e-btn e-btn-2">Find Out More</a>
                            </div>
                            <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                                <img src="../assets/img/banner/banner-img-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- course area start -->
        <section class="course__area pt-115 pb-120 grey-bg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="section__title-wrapper mb-60">
                            <h2 class="section__title">Các khóa <br>học <span
                                    class="yellow-bg yellow-bg-big">của<img src="../assets/img/shape/yellow-bg.png"
                                        alt=""></span> chúng tôi</h2>
                            <p>You don't have to struggle alone, you've got our assistance and help.</p>
                        </div>
                    </div>
                </div>

                <!-- Phần danh sách khóa học -->
                <div class="row grid">
                    @foreach($dataRender as $item)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat1 cat3">
                        <div class="course__item white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                                <a href="detail-course/{{$item->id}}">
                                    <img style="width: 376px; height: 230px;" src="{{ $item->hinh_anh?''.Storage::url($item->hinh_anh):'http://placehold.it/100x100' }}" alt="">
                                </a>
                                <div class="course__tag">
                                @foreach($cateData as $key => $value)
                                    @if($item->categories_id == $value->id)
                                        <a href="#" class="blue">{{ $value->ten_danh_muc }}</a>
                                    @endif
                                @endforeach
                                </div>
                                
                            </div>
                            <div class="course__content">
                                <div class="course__meta d-flex align-items-center justify-content-between">
                                    <div class="course__lesson">
                                        <span><i class="far fa-book-alt"></i>{{ $item->so_luong_bai_tap }} Bài giảng</span>
                                    </div>
                                    <div class="course__rating">    
                                        <span><i class="icon_star"></i>4.5 (42)</span>
                                    </div>
                                </div>
                                <h3 class="course__title"><a href="course-details.html">{{$item->ten_khoa_hoc}}</a></h3>
                                <div class="course__teacher d-flex align-items-center">
                                    <div class="course__teacher-thumb mr-15">
                                        <img src="../assets/img/course/teacher/teacher-4.jpg" alt="">
                                    </div>
                                    <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                                </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                                <div class="course__status d-flex align-items-center">
                                    <span class="blue">{{number_format($item->gia, 0)}} VND</span>
                                    @if($item->khuyen_mai === 1)
                                        <span class="old-price">$97.00</span>
                                    @endif
                                </div>
                                <div class="course__btn">
                                    <a href="course-details.html" class="link-btn">
                                        Know Details
                                        <i class="far fa-arrow-right"></i>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- events area start -->
        <section class="events__area pt-115 pb-120 p-relative">
            <div class="events__shape">
                <img class="events-1-shape" src="../assets/img/events/events-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 offset-xxl-4">
                        <div class="section__title-wrapper mb-60 text-center">
                            <h2 class="section__title">Current <span class="yellow-bg yellow-bg-big">Events<img
                                        src="../assets/img/shape/yellow-bg.png" alt=""></span></h2>
                            <p>We found 13 events available for you.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                                <div class="events__content">
                                    <div class="events__meta">
                                        <span>Jun 14, 2022</span>
                                        <span>12:00 am - 2:30 pm</span>
                                        <span>New York</span>
                                    </div>
                                    <h3 class="events__title"><a href="event-details.html">Digital transformation
                                            conference</a></h3>
                                </div>
                                <div class="events__more">
                                    <a href="event-details.html" class="link-btn">
                                        View More
                                        <i class="far fa-arrow-right"></i>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                                <div class="events__content">
                                    <div class="events__meta">
                                        <span>April 10, 2022</span>
                                        <span>9:00 am - 5:00 pm</span>
                                        <span>Mindahan</span>
                                    </div>
                                    <h3 class="events__title"><a href="event-details.html">World education day
                                            conference</a></h3>
                                </div>
                                <div class="events__more">
                                    <a href="event-details.html" class="link-btn">
                                        View More
                                        <i class="far fa-arrow-right"></i>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                                <div class="events__content">
                                    <div class="events__meta">
                                        <span>July 16, 2022</span>
                                        <span>10:30 am - 1:30 pm</span>
                                        <span>Weedpatch</span>
                                    </div>
                                    <h3 class="events__title"><a href="event-details.html">Foundations of global
                                            health</a></h3>
                                </div>
                                <div class="events__more">
                                    <a href="event-details.html" class="link-btn">
                                        View More
                                        <i class="far fa-arrow-right"></i>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                                <div class="events__content">
                                    <div class="events__meta">
                                        <span>March 24, 2022</span>
                                        <span>10:30 am - 12:00 pm</span>
                                        <span>Lnland</span>
                                    </div>
                                    <h3 class="events__title"><a href="event-details.html">Business creativity
                                            workshops</a></h3>
                                </div>
                                <div class="events__more">
                                    <a href="event-details.html" class="link-btn">
                                        View More
                                        <i class="far fa-arrow-right"></i>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events area end -->

        <!-- pricing area start -->
        <section class="price__area pt-60 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 offset-xxl-4">
                        <div class="section__title-wrapper mb-60 text-center">
                            <h2 class="section__title">Simple <br> All Inclusive <span
                                    class="yellow-bg yellow-bg-big">Pricing<img src="../assets/img/shape/yellow-bg.png"
                                        alt=""></span></h2>
                            <p>No contracts. No surprise fees.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="price__tab-btn text-center mb-50">
                            <nav>
                                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-monthly-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-monthly" type="button" role="tab"
                                        aria-controls="nav-monthly" aria-selected="true">monthly plan</button>
                                    <button class="nav-link active" id="nav-annually-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-annually" type="button" role="tab"
                                        aria-controls="nav-annually" aria-selected="false">Annual Plan</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="price__tab-content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-monthly" role="tabpanel"
                                    aria-labelledby="nav-monthly-tab">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="price__item grey-bg mb-30 p-relative">
                                                <div class="price__head">
                                                    <h3>Gold</h3>
                                                    <p>Perfect for small marketing teams</p>
                                                </div>
                                                <div class="price__tag mb-25">
                                                    <h4>$59<span>.99 / annually</span></h4>
                                                </div>
                                                <div class="price__features mb-40">
                                                    <ul>
                                                        <li><i class="far fa-check"></i>Course Discussions</li>
                                                        <li><i class="far fa-check"></i>Content Library</li>
                                                        <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                                    </ul>
                                                </div>
                                                <a href="contact.html" class="e-btn e-btn-4">Get Started</a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="price__item grey-bg mb-30 p-relative">
                                                <div class="price__offer">
                                                    <span>Best Value</span>
                                                </div>
                                                <div class="price__head">
                                                    <h3>Diamond</h3>
                                                    <p>Perfect for small marketing teams</p>
                                                </div>
                                                <div class="price__tag mb-25">
                                                    <h4>$99<span>.99 / annually</span></h4>
                                                </div>
                                                <div class="price__features mb-40">
                                                    <ul>
                                                        <li><i class="far fa-check"></i>Course Discussions</li>
                                                        <li><i class="far fa-check"></i>Content Library</li>
                                                        <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                                        <li><i class="far fa-check"></i>Online Course</li>
                                                    </ul>
                                                </div>
                                                <a href="contact.html" class="e-btn e-btn-border">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="nav-annually" role="tabpanel"
                                    aria-labelledby="nav-annually-tab">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="price__item grey-bg mb-30 p-relative">
                                                <div class="price__head">
                                                    <h3>Gold</h3>
                                                    <p>Perfect for small marketing teams</p>
                                                </div>
                                                <div class="price__tag mb-25">
                                                    <h4>$59<span>.99 / annually</span></h4>
                                                </div>
                                                <div class="price__features mb-40">
                                                    <ul>
                                                        <li><i class="far fa-check"></i>Course Discussions</li>
                                                        <li><i class="far fa-check"></i>Content Library</li>
                                                        <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                                    </ul>
                                                </div>
                                                <a href="contact.html" class="e-btn e-btn-4">Get Started</a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="price__item grey-bg mb-30 p-relative">
                                                <div class="price__offer">
                                                    <span>Best Value</span>
                                                </div>
                                                <div class="price__head">
                                                    <h3>Diamond</h3>
                                                    <p>Perfect for small marketing teams</p>
                                                </div>
                                                <div class="price__tag mb-25">
                                                    <h4>$99<span>.99 / annually</span></h4>
                                                </div>
                                                <div class="price__features mb-40">
                                                    <ul>
                                                        <li><i class="far fa-check"></i>Course Discussions</li>
                                                        <li><i class="far fa-check"></i>Content Library</li>
                                                        <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                                        <li><i class="far fa-check"></i>Online Course</li>
                                                    </ul>
                                                </div>
                                                <a href="contact.html" class="e-btn e-btn-border">Get Started</a>
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
        <!-- pricing area end -->

        <!-- cta area start -->
        <section class="cta__area mb--120">
            <div class="container">
                <div class="cta__inner blue-bg fix">
                    <div class="cta__shape">
                        <img src="../assets/img/cta/cta-shape.png" alt="">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                            <div class="cta__content">
                                <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                            <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                                <a href="contact.html" class="e-btn e-btn-white">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection