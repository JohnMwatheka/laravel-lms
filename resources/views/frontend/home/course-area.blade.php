@php
    $courses = App\Models\Course::where('status',1)->orderBy('id','ASC')->limit(6)->get();
    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
@endphp

<section class="course-area pb-120px">
    <div class="container">
        <div class="text-center section-heading">
            <h5 class="mb-2 ribbon ribbon-lg">Choose your desired courses</h5>
            <h2 class="section__title">The world's largest selection of courses</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->

        <ul class="pb-4 nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">All</a>
            </li>
            @foreach ($categories as $category)

            <li class="nav-item">
                <a class="nav-link" id="business-tab" data-toggle="tab" href="#business{{ $category->id }}" role="tab" aria-controls="business" aria-selected="false">{{ $category->category_name }}</a>
            </li>
            @endforeach

        </ul>
    </div><!-- end container -->


    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">

      @foreach ($courses as $course)

    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1{{ $course->id }}">
            <div class="card-image">
                <a href="{{ url('course/details/'.$course->id. '/' .$course->course_name_slug) }}" class="d-block">
                    <img class="card-img-top lazy" src="{{ asset($course->course_image) }}" data-src="images/img8.jpg" alt="Card image cap">
                </a>


    @php
        $amount = $course->selling_price - $course->discount_price;
        $discount = ($amount/$course->selling_price) * 100;
    @endphp

                <div class="course-badge-labels">

                    @if ($course->bestseller == 1)
                    <div class="course-badge">Bestseller</div>
                    @else
                    @endif

                    @if ($course->highestrated == 1)
                    <div class="course-badge sky-blue">Highest Rated</div>
                    @else
                    @endif

                    @if ($course->discount_price == NULL)
                    <div class="course-badge blue">New</div>
                    @else
                    <div class="course-badge blue">{{ round($discount) }}%</div>
                    @endif



                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">{{ $course->label }}</h6>
                <h5 class="card-title"><a href="{{ url('course/details/'.$course->id. '/' .$course->course_name_slug) }}">{{ $course->course_name }}</a></h5>
          <p class="card-text"><a href="{{ route('instructor.details',$course->instructor_id) }}">{{ $course['user']['name'] }}</a></p>
                <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                        <span class="rating-number">4.4</span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                </div><!-- end rating-wrap -->
                <div class="d-flex justify-content-between align-items-center">

                    @if ($course->discount_price == NULL)
                    <p class="text-black card-price font-weight-bold">Ksh. {{ $course->selling_price }}  </p>
                    @else
                    <p class="text-black card-price font-weight-bold">Ksh. {{ $course->discount_price }} <span class="before-price font-weight-medium">Ksh. {{ $course->selling_price }}</span></p>
                    @endif



                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist" onclick="addToWishList (this.id)" id="{{ $course->id }}"><i class="la la-heart-o"></i></div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    @endforeach



                    </div><!-- end row -->
                </div><!-- end tab-pane -->



   @foreach ($categories as $category)
                <div class="tab-pane fade" id="business{{ $category->id }}" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
  @php
      $catwiseCourse = App\Models\Course::where('category_id',$category->id)->where('status',1)->orderBy('id','DESC')->get();
  @endphp

          @forelse ($catwiseCourse as $course)
        <div class="col-lg-4 responsive-column-half">
            <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                    <img class="card-img-top lazy" src="{{ asset($course->course_image) }}" data-src="{{ asset($course->course_image) }}" alt="Card image cap">
                </div><!-- end card-image -->
                <div class="card-body">
         <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">{{ $course->label }}</h6>
           <h5 class="card-title"><a href="course-details.html">{{ $course->course_name }}</a></h5>
          <p class="card-text"><a href=" ">{{ $course['user']['name'] }}</a></p>
                    <div class="py-2 rating-wrap d-flex align-items-center">
                        <div class="review-stars">
                            <span class="rating-number">4.4</span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star-o"></span>
                        </div>
                        <span class="pl-1 rating-total">(20,230)</span>
                    </div><!-- end rating-wrap -->
                    <div class="d-flex justify-content-between align-items-center">

                    @if ($course->discount_price == NULL)
                    <p class="text-black card-price font-weight-bold">${{ $course->selling_price }}  </p>
                    @else
                    <p class="text-black card-price font-weight-bold">${{ $course->discount_price }} <span class="before-price font-weight-medium">${{ $course->selling_price }}</span></p>
                    @endif

                        <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col-lg-4 -->

        @empty

        <h5 class="text-danger"> No Course Found </h5>

        @endforelse



                    </div><!-- end row -->
                </div><!-- end tab-pane -->
           @endforeach


            </div><!-- end tab-content -->
            <div class="mt-4 text-center more-btn-box">
                <a href="course-grid.html" class="btn theme-btn">Browse all Courses <i class="ml-1 la la-arrow-right icon"></i></a>
            </div><!-- end more-btn-box -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end courses-area -->


@php
    $courseData = App\Models\Course::get();
@endphp

<!-- tooltip_templates -->
@foreach ($courseData as $item)

<div class="tooltip_templates">
    <div id="tooltip_content_1{{ $item->id }}">
        <div class="card card-item">
            <div class="card-body">
                <p class="pb-2 card-text">By <a href="teacher-detail.html">{{ $item['user']['name'] }}</a></p>
                <h5 class="pb-1 card-title"><a href="course-details.html"> {{ $item->course_name }}</a></h5>
                <div class="pb-1 d-flex align-items-center">
                    @if ($item->bestseller == 1)
                    <h6 class="mr-2 ribbon fs-14">Bestseller</h6>
                    @else
                    <h6 class="mr-2 ribbon fs-14">New</h6>
                    @endif

                    <p class="text-success fs-14 font-weight-medium">Updated<span class="pl-1 font-weight-bold">{{ $item->created_at->format('M d Y') }}</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>{{ $item->duration }} total hours</li>
                    <li>{{ $item->label }}</li>
                </ul>
                <p class="pt-1 card-text fs-14 lh-22">{{ $item->prerequisites }}</p>

    @php
       $goals = App\Models\Course_goal::where('course_id',$item->id)->orderBy('id','DESC')->get();
    @endphp
                <ul class="py-3 generic-list-item fs-14">
                    @foreach ($goals as $goal)
                    <li><i class="mr-1 text-black la la-check"></i> {{ $goal->goal_name }}</li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="mr-3 btn theme-btn flex-grow-1"><i class="mr-1 la la-shopping-cart fs-18"></i> Add to Cart</a>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
@endforeach
