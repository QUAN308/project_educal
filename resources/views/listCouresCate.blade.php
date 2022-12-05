@extends('templates.layoutCoures');
@section('content')
         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="../assets/img/page-title/page-title.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Courses</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Courses</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- course area start -->
         <section class="course__area pt-120 pb-120">
            <div class="container">
               <div class="course__tab-inner grey-bg-2 mb-50">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                           <div class="course__tab-btn">
                              <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                   <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                    <svg class="grid" viewBox="0 0 24 24">
                                       <rect x="3" y="3" class="st0" width="7" height="7"/>
                                       <rect x="14" y="3" class="st0" width="7" height="7"/>
                                       <rect x="14" y="14" class="st0" width="7" height="7"/>
                                       <rect x="3" y="14" class="st0" width="7" height="7"/>
                                       </svg>
                                   </button>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__sort d-flex justify-content-sm-end">
                           <div class="course__sort-inner">
                              <select>
                                 <option>Default</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                 <option>Option 3</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                           <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                              <div class="row">
                                @foreach($dataRender as $item)
                                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="/detail-course/{{$item->id}}">
                                             <img src="{{$item->hinh_anh?''.Storage::url($item->hinh_anh):'http://placehold.it/100x100'}}" alt="">
                                          </a>
                                          <div class="course__tag">
                                            @foreach($cateData as $key => $value)
                                                @if($item->categories_id == $value->id)
                                                <a href="#">{{ $value->ten_danh_muc }}</a>
                                                @endif
                                            @endforeach
                                          </div>
                                       </div>
                                       <div class="course__content">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i>{{$item->so_luong_bai_tap}} Lesson</span>
                                             </div>
                                             <div class="course__rating">
                                                <span><i class="icon_star"></i>4.5 (44)</span>
                                             </div>
                                          </div>
                                          <h3 class="course__title"><a href="detail-course/{{$item->id}}">{{$item->ten_khoa_hoc}}</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <div class="course__teacher-thumb mr-15">
                                                <img src="../assets/img/course/teacher/teacher-1.jpg" alt="">
                                             </div>
                                             <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status">
                                             <span>{{$item->gia}}</span>
                                          </div>
                                          <div class="course__btn">
                                             <a href="detail-course/{{$item->id}}" class="link-btn">
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
                           <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                              <div class="row">
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-1.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>4.5 (44)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Become a product Manager learn the skills & job.</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-1.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-2.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="sky-blue">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>4.5 (44)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Fundamentals of music theory Learn new.</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-2.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-3.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="blue-2">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Strategy law and organization Foundation</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-3.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="blue-2">$46.00</span>
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-4.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="green">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">The business Intelligence analyst Course 2022</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-4.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-5.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="blue">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Build your media and Public presence</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-5.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Pelican Steve</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
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
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="../assets/img/course/list/course-6.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="yellow">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>33 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (72)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Creative writing through Storytelling</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="../assets/img/course/teacher/teacher-6.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="yellow">$62.00</span>
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
                                       </div>
                                    </div>
                                 </div>                                                           
                              </div>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
               {{--<div class="row">
                  <div class="col-xxl-12">
                     <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                        <ul class="d-flex align-items-center"> 
                           <li class="prev">
                              <a href="course-grid.html" class="link-btn link-prev">
                                 Prev
                                 <i class="arrow_left"></i>
                                 <i class="arrow_left"></i>
                              </a>
                           </li>
                           <li>
                              <a href="course-grid.html">
                                 <span>1</span>
                              </a>
                           </li>
                           <li class="active">
                              <a href="course-grid.html">
                                 <span>2</span>
                              </a>
                           </li>
                           <li>
                              <a href="course-grid.html">
                                 <span>3</span>
                              </a>
                           </li>
                           <li class="next">
                              <a href="course-grid.html" class="link-btn">
                                 Next
                                 <i class="arrow_right"></i>
                                 <i class="arrow_right"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>--}}
            </div>
         </section>
         <!-- course area end -->

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
                           <a href="#" class="e-btn e-btn-white">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->
@endsection