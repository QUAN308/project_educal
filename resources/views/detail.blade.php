@extends('templates.layoutCoures');
@section('content')
        <!-- page title area start -->
        <section class="page__title-area pt-120 pb-90">
            <div class="page__title-shape">
                <img class="page-title-shape-5 d-none d-sm-block" src="../assets/img/page-title/page-title-shape-1.png"
                    alt="">
                <img class="page-title-shape-6" src="../assets/img/page-title/page-title-shape-6.png" alt="">
                <img class="page-title-shape-7" src="../assets/img/page-title/page-title-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="course__wrapper">
                            <div class="page__title-content mb-25">
                                @foreach($cateData as $ket => $value)
                                    @if($value->id == $courseData->categories_id)
                                        <span class="page__title-pre">{{$value->ten_danh_muc}}</span>
                                    @endif
                                @endforeach
                                <h5 class="page__title-3">{{$courseData->ten_khoa_hoc}}</h5>
                            </div>
                            <div class="course__meta-2 d-sm-flex mb-30">
                                <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                                    <div class="course__teacher-thumb-3 mr-15">
                                        <img src="../assets/img/course/teacher/teacher-1.jpg" alt="">
                                    </div>
                                    <div class="course__teacher-info-3">
                                        <h5>Teacher</h5>
                                        <p><a href="#">Elon Gated</a></p>
                                    </div>
                                </div>
                                <div class="course__update mr-80 mb-30">
                                    <h5>Last Update:</h5>
                                    <p>July 24, 2022</p>
                                </div>
                                <div class="course__rating-2 mb-30">
                                    <h5>Review:</h5>
                                    <div class="course__rating-inner d-flex align-items-center">
                                        <ul>
                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                        </ul>
                                        <p>4.5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="course__img w-img mb-30">
                                <img src="{{ $courseData->hinh_anh?''.Storage::url($courseData->hinh_anh):'http://placehold.it/100x100' }}" alt="">
                            </div>
                            <div class="course__tab-2 mb-45">
                                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true"> <i
                                                class="icon_ribbon_alt"></i> <span>Mô tả</span> </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                            aria-selected="false"> <i class="icon_star_alt"></i> <span>Đánh giá</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="member-tab" data-bs-toggle="tab"
                                            data-bs-target="#member" type="button" role="tab" aria-controls="member"
                                            aria-selected="false"> <i class="fal fa-user"></i> <span>Học viên</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="course__tab-content mb-95">
                                <div class="tab-content" id="courseTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="course__description">
                                            <h3>Tổng quan về khóa học</h3>
                                                <p>{{$courseData->mo_ta}}</p>
                                            <div class="course__description-list mb-45">
                                                <h4>What is the Target Audience?</h4>
                                                <ul>
                                                    <li> <i class="icon_check"></i> Business's managers, leaders</li>
                                                    <li> <i class="icon_check"></i> Downloadable lectures, code and
                                                        design assets for all projects</li>
                                                    <li> <i class="icon_check"></i> Anyone who is finding a chance to
                                                        get the promotion</li>
                                                </ul>
                                            </div>
                                            <div class="course__instructor mb-45">
                                                <h3>Other Instructors</h3>
                                                <div class="course__instructor-wrapper d-md-flex align-items-center">
                                                    <div
                                                        class="course__instructor-item d-flex align-items-center mr-70">
                                                        <div class="course__instructor-thumb mr-20">
                                                            <img src="../assets/img/course/teacher/teacher-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="course__instructor-content">
                                                            <h3>Eleanor Fant</h3>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__instructor-item d-flex align-items-center mr-70">
                                                        <div class="course__instructor-thumb mr-20">
                                                            <img src="../assets/img/course/teacher/teacher-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="course__instructor-content">
                                                            <h3>Lauren Stamps</h3>
                                                            <p>Teacher</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__instructor-item d-flex align-items-center mr-70">
                                                        <div class="course__instructor-thumb mr-20">
                                                            <img src="../assets/img/course/teacher/teacher-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="course__instructor-content">
                                                            <h3>Jonquil Von</h3>
                                                            <p>Associate</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                        aria-labelledby="curriculum-tab">
                                        <div class="course__curriculum">
                                            <div class="accordion" id="course__accordion">
                                                <div class="accordion-item mb-50">
                                                    <h2 class="accordion-header" id="week-01">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#week-01-content"
                                                            aria-expanded="true" aria-controls="week-01-content">
                                                            Week 01
                                                        </button>
                                                    </h2>
                                                    <div id="week-01-content" class="accordion-collapse collapse show"
                                                        aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                                        <div class="accordion-body">
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg class="document" viewBox="0 0 24 24">
                                                                        <path class="st0"
                                                                            d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                        <polyline class="st0"
                                                                            points="14,2 14,8 20,8 " />
                                                                        <line class="st0" x1="16" y1="13" x2="8"
                                                                            y2="13" />
                                                                        <line class="st0" x1="16" y1="17" x2="8"
                                                                            y2="17" />
                                                                        <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                    </svg>
                                                                    <h3> <span>Reading:</span> Ut enim ad minim veniam
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        14 minutes</span>
                                                                    <span class="question">2 questions</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg viewBox="0 0 24 24">
                                                                        <polygon class="st0"
                                                                            points="23,7 16,12 23,17 " />
                                                                        <path class="st0"
                                                                            d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z" />
                                                                    </svg>
                                                                    <h3> <span>Video: </span> Greetings and introduction
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        15 minutes</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg viewBox="0 0 16 16">

                                                                        <path class="st0"
                                                                            d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4" />
                                                                        <path class="st0"
                                                                            d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z" />
                                                                    </svg>
                                                                    <h3> <span>Audio:</span> Interactive lesson</h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i> 7
                                                                        minutes</span>
                                                                    <span class="question">3 questions</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg class="document" viewBox="0 0 24 24">
                                                                        <path class="st0"
                                                                            d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                        <polyline class="st0"
                                                                            points="14,2 14,8 20,8 " />
                                                                        <line class="st0" x1="16" y1="13" x2="8"
                                                                            y2="13" />
                                                                        <line class="st0" x1="16" y1="17" x2="8"
                                                                            y2="17" />
                                                                        <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                    </svg>
                                                                    <h3> <span>Reading: </span> Ut enim ad minim veniam
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        22 minutes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion" id="course__accordion-2">
                                                <div class="accordion-item mb-50">
                                                    <h2 class="accordion-header" id="week-02">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#week-02-content"
                                                            aria-expanded="true" aria-controls="week-02-content">
                                                            Week 02
                                                        </button>
                                                    </h2>
                                                    <div id="week-02-content" class="accordion-collapse  collapse show"
                                                        aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                                        <div class="accordion-body">
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg class="document" viewBox="0 0 24 24">
                                                                        <path class="st0"
                                                                            d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                        <polyline class="st0"
                                                                            points="14,2 14,8 20,8 " />
                                                                        <line class="st0" x1="16" y1="13" x2="8"
                                                                            y2="13" />
                                                                        <line class="st0" x1="16" y1="17" x2="8"
                                                                            y2="17" />
                                                                        <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                    </svg>
                                                                    <h3> <span>Reading:</span> Ut enim ad minim veniam
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        14 minutes</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg viewBox="0 0 24 24">
                                                                        <polygon class="st0"
                                                                            points="23,7 16,12 23,17 " />
                                                                        <path class="st0"
                                                                            d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z" />
                                                                    </svg>
                                                                    <h3> <span>Video: </span> Greetings and introduction
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        15 minutes</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg viewBox="0 0 16 16">
                                                                        <path class="st0"
                                                                            d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4" />
                                                                        <path class="st0"
                                                                            d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z" />
                                                                    </svg>
                                                                    <h3> <span>Audio:</span> Interactive lesson</h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i> 7
                                                                        minutes</span>
                                                                    <span class="question">2 questions</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                <div class="course__curriculum-info">
                                                                    <svg class="document" viewBox="0 0 24 24">
                                                                        <path class="st0"
                                                                            d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                        <polyline class="st0"
                                                                            points="14,2 14,8 20,8 " />
                                                                        <line class="st0" x1="16" y1="13" x2="8"
                                                                            y2="13" />
                                                                        <line class="st0" x1="16" y1="17" x2="8"
                                                                            y2="17" />
                                                                        <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                    </svg>
                                                                    <h3> <span>Reading: </span> Ut enim ad minim veniam
                                                                    </h3>
                                                                </div>
                                                                <div class="course__curriculum-meta">
                                                                    <span class="time"> <i class="icon_clock_alt"></i>
                                                                        22 minutes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="course__review">
                                            <h3>Reviews</h3>
                                            <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's
                                                your father bugger all mate off his nut that, what a plonker cuppa owt
                                                to do</p>

                                            <div class="course__review-rating mb-50">
                                                <div class="row g-0">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <div class="course__review-rating-info grey-bg text-center">
                                                            <h5>5</h5>
                                                            <ul>
                                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                            </ul>
                                                            <p>4 Ratings</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                                        <div class="course__review-details grey-bg">
                                                            <h5>Detailed Rating</h5>
                                                            <div class="course__review-content mb-20">
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>5 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="100%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>100%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>4 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="30%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>30%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>3 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>2 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>1 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course__comment mb-75">
                                                <h3>2 Comments</h3>
                                                <ul>
                                                    <li>
                                                        <div class="course__comment-box ">
                                                            <div class="course__comment-thumb float-start">
                                                                <img src="../assets/img/course/comment/course-comment-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="course__comment-content">
                                                                <div class="course__comment-wrapper ml-70 fix">
                                                                    <div class="course__comment-info float-start">
                                                                        <h4>Eleanor Fant</h4>
                                                                        <span>July 14, 2022</span>
                                                                    </div>
                                                                    <div
                                                                        class="course__comment-rating float-start float-sm-end">
                                                                        <ul>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="course__comment-text ml-70">
                                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger
                                                                        cuppa gosh David blatant have it, standard A bit
                                                                        of how's your father my lady absolutely.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course__comment-box ">
                                                            <div class="course__comment-thumb float-start">
                                                                <img src="../assets/img/course/comment/course-comment-2.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="course__comment-content">
                                                                <div class="course__comment-wrapper ml-70 fix">
                                                                    <div class="course__comment-info float-start">
                                                                        <h4>Shahnewaz Sakil</h4>
                                                                        <span>July 17, 2022</span>
                                                                    </div>
                                                                    <div
                                                                        class="course__comment-rating float-start float-sm-end">
                                                                        <ul>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#" class="no-rating"> <i
                                                                                        class="icon_star"></i> </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="course__comment-text ml-70">
                                                                    <p>David blatant have it, standard A bit of how's
                                                                        your father my lady absolutely.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="course__form">
                                                <h3>Write a Review</h3>
                                                <div class="course__form-inner">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-xxl-6">
                                                                <div class="course__form-input">
                                                                    <input type="text" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="course__form-input">
                                                                    <input type="email" placeholder="Your Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-input">
                                                                    <input type="text" placeholder="Review Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-input">
                                                                    <div class="course__form-rating">
                                                                        <span>Rating : </span>
                                                                        <ul>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#"> <i class="icon_star"></i>
                                                                                </a></li>
                                                                            <li><a href="#" class="no-rating"> <i
                                                                                        class="icon_star"></i> </a></li>
                                                                            <li><a href="#" class="no-rating"> <i
                                                                                        class="icon_star"></i> </a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <textarea placeholder="Review Summary"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-btn mt-10 mb-55">
                                                                    <button type="submit" class="e-btn">Submit
                                                                        Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                                        <div class="course__member mb-45">
                                            <div class="course__member-item">
                                                <div class="row align-items-center">
                                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                                        <div class="course__member-thumb d-flex align-items-center">
                                                            <img src="../assets/img/course/instructor/course-instructor-1.jpg"
                                                                alt="">
                                                            <div class="course__member-name ml-20">
                                                                <h5>Shahnewaz Sakil</h5>
                                                                <span>Engineer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-45">
                                                            <h5>07</h5>
                                                            <span>Courses</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-70">
                                                            <h5>05</h5>
                                                            <span>Reviw</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-85">
                                                            <h5>3.00</h5>
                                                            <span>Rating</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course__member-item">
                                                <div class="row align-items-center">
                                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                                        <div class="course__member-thumb d-flex align-items-center">
                                                            <img src="../assets/img/course/instructor/course-instructor-2.jpg"
                                                                alt="">
                                                            <div class="course__member-name ml-20">
                                                                <h5>Lauren Stamps</h5>
                                                                <span>Teacher</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-45">
                                                            <h5>05</h5>
                                                            <span>Courses</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-70">
                                                            <h5>03</h5>
                                                            <span>Reviw</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-85">
                                                            <h5>3.00</h5>
                                                            <span>Rating</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course__member-item">
                                                <div class="row align-items-center">
                                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                                                        <div class="course__member-thumb d-flex align-items-center">
                                                            <img src="../assets/img/course/instructor/course-instructor-3.jpg"
                                                                alt="">
                                                            <div class="course__member-name ml-20">
                                                                <h5>Jonquil Von</h5>
                                                                <span>Associate</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-45">
                                                            <h5>09</h5>
                                                            <span>Courses</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-70">
                                                            <h5>07</h5>
                                                            <span>Reviw</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                                        <div class="course__member-info pl-85">
                                                            <h5>4.00</h5>
                                                            <span>Rating</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course__share">
                                        <h3>Share :</h3>
                                        <ul>
                                            <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="course__related">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="section__title-wrapper mb-40">
                                            <h2 class="section__title">Related <span
                                                    class="yellow-bg yellow-bg-big">Course<img
                                                        src="../assets/img/shape/yellow-bg.png" alt=""></span></h2>
                                            <p>You don't have to struggle alone, you've got our assistance and help.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Khóa học liên quan -->
                                        <div class="col-xxl-12">
                                            <div class="course__slider swiper-container pb-60">
                                                <div class="swiper-wrapper">
                                                    <div
                                                        class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                                        <div class="course__thumb w-img p-relative fix">
                                                            <a href="course-details.html">
                                                                <img src="../assets/img/course/course-1.jpg" alt="">
                                                            </a>
                                                            <div class="course__tag">
                                                                <a href="#">Art & Design</a>
                                                            </div>
                                                        </div>
                                                        <div class="course__content">
                                                            <div
                                                                class="course__meta d-flex align-items-center justify-content-between">
                                                                <div class="course__lesson">
                                                                    <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                                </div>
                                                                <div class="course__rating">
                                                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                                                </div>
                                                            </div>
                                                            <h3 class="course__title"><a href="course-details.html">Become a
                                                                    product Manager learn the skills & job.</a></h3>
                                                            <div class="course__teacher d-flex align-items-center">
                                                                <div class="course__teacher-thumb mr-15">
                                                                    <img src="../assets/img/course/teacher/teacher-1.jpg"
                                                                        alt="">
                                                                </div>
                                                                <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__more d-flex justify-content-between align-items-center">
                                                            <div class="course__status">
                                                                <span>Free</span>
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
                                                    <div
                                                        class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                                        <div class="course__thumb w-img p-relative fix">
                                                            <a href="course-details.html">
                                                                <img src="../assets/img/course/course-2.jpg" alt="">
                                                            </a>
                                                            <div class="course__tag">
                                                                <a href="#" class="sky-blue">Mechanical</a>
                                                            </div>
                                                        </div>
                                                        <div class="course__content">
                                                            <div
                                                                class="course__meta d-flex align-items-center justify-content-between">
                                                                <div class="course__lesson">
                                                                    <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                                                </div>
                                                                <div class="course__rating">
                                                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                                                </div>
                                                            </div>
                                                            <h3 class="course__title"><a
                                                                    href="course-details.html">Fundamentals of music theory
                                                                    Learn new</a></h3>
                                                            <div class="course__teacher d-flex align-items-center">
                                                                <div class="course__teacher-thumb mr-15">
                                                                    <img src="../assets/img/course/teacher/teacher-2.jpg"
                                                                        alt="">
                                                                </div>
                                                                <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__more d-flex justify-content-between align-items-center">
                                                            <div class="course__status d-flex align-items-center">
                                                                <span class="sky-blue">$32.00</span>
                                                                <span class="old-price">$68.00</span>
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
                                                    <div
                                                        class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                                        <div class="course__thumb w-img p-relative fix">
                                                            <a href="course-details.html">
                                                                <img src="../assets/img/course/course-3.jpg" alt="">
                                                            </a>
                                                            <div class="course__tag">
                                                                <a href="#" class="green">Development</a>
                                                            </div>
                                                        </div>
                                                        <div class="course__content">
                                                            <div
                                                                class="course__meta d-flex align-items-center justify-content-between">
                                                                <div class="course__lesson">
                                                                    <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                                </div>
                                                                <div class="course__rating">
                                                                    <span><i class="icon_star"></i>3.5 (55)</span>
                                                                </div>
                                                            </div>
                                                            <h3 class="course__title"><a href="course-details.html">Strategy
                                                                    law and organization Foundation</a></h3>
                                                            <div class="course__teacher d-flex align-items-center">
                                                                <div class="course__teacher-thumb mr-15">
                                                                    <img src="../assets/img/course/teacher/teacher-3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__more d-flex justify-content-between align-items-center">
                                                            <div class="course__status d-flex align-items-center">
                                                                <span class="green">$46.00</span>
                                                                <span class="old-price">$68.00</span>
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
                                                    <div
                                                        class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                                        <div class="course__thumb w-img p-relative fix">
                                                            <a href="course-details.html">
                                                                <img src="../assets/img/course/course-4.jpg" alt="">
                                                            </a>
                                                            <div class="course__tag">
                                                                <a href="#" class="blue">Marketing</a>
                                                            </div>
                                                        </div>
                                                        <div class="course__content">
                                                            <div
                                                                class="course__meta d-flex align-items-center justify-content-between">
                                                                <div class="course__lesson">
                                                                    <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                                                </div>
                                                                <div class="course__rating">
                                                                    <span><i class="icon_star"></i>4.5 (42)</span>
                                                                </div>
                                                            </div>
                                                            <h3 class="course__title"><a href="course-details.html">The
                                                                    business Intelligence analyst Course 2022</a></h3>
                                                            <div class="course__teacher d-flex align-items-center">
                                                                <div class="course__teacher-thumb mr-15">
                                                                    <img src="../assets/img/course/teacher/teacher-4.jpg"
                                                                        alt="">
                                                                </div>
                                                                <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__more d-flex justify-content-between align-items-center">
                                                            <div class="course__status d-flex align-items-center">
                                                                <span class="blue">$62.00</span>
                                                                <span class="old-price">$97.00</span>
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
                                                <!-- Add Pagination -->
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="course__sidebar pl-70 p-relative">
                            <div class="course__shape">
                                <img class="course-dot" src="../assets/img/course/course-dot.png" alt="">
                            </div>
                            <div class="course__sidebar-widget-2 white-bg mb-20">
                                <div class="course__video">
                                    <div class="course__video-thumb w-img mb-25">
                                        <img src="../assets/img/course/video/course-video.jpg" alt="">
                                        <div class="course__video-play">
                                            <a href="https://youtu.be/yJg-Y5byMMw" data-fancybox="" class="play-btn"> <i
                                                    class="fas fa-play"></i> </a>
                                        </div>
                                    </div>
                                    <div
                                        class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                                        <div class="course__video-price">
                                            <h5>{{number_format($courseData->gia, 0)}}</h5>
                                            @if($courseData->khuyen_mai == 1)
                                                <h5 class="old-price"></h5>
                                            @endif
                                        </div>
                                        <div class="course__video-discount">
                                        @if($courseData->khuyen_mai == 1)
                                            <span>68% OFF</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="course__video-content mb-35">
                                        <ul>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                                                        xml:space="preserve">
                                                        <path class="st0"
                                                            d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                        <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Giảng viên :</span> Tracey peace</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                                                        xml:space="preserve">

                                                        <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20" />
                                                        <path class="st0"
                                                            d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Bài giảng :</span>{{$courseData->so_luong_bai_tap}}</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                                                        xml:space="preserve">
                                                        <circle class="st0" cx="8" cy="8" r="6.7" />
                                                        <polyline class="st0" points="8,4 8,8 10.7,9.3 " />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Thời gian học :</span>6 Tuần</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg>
                                                        <path class="st0"
                                                            d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14" />
                                                        <circle class="st0" cx="8" cy="4.7" r="2.7" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Học viên :</span>43 Học viên</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg>
                                                        <circle class="st0" cx="8" cy="8" r="6.7" />
                                                        <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8" />
                                                        <path class="st0"
                                                            d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Language :</span>English</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="course__payment mb-35">
                                        <h3>Payment:</h3>
                                        <a href="#">
                                            <img src="../assets/img/course/payment/payment-1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="course__enroll-btn">
                                        <a href="contact.html" class="e-btn e-btn-7 w-100">Đăng ký<i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->


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
        <!-- cta area end -->
@endsection