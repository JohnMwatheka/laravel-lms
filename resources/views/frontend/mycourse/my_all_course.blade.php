@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')


<div class="container-fluid">
    <!-- end breadcrumb-content -->
    <div class="mb-5 section-block"></div>
    <div class="mb-5 dashboard-heading">
        <h3 class="fs-22 font-weight-semi-bold">My Courses</h3>
    </div>


    @foreach($mycourse as $item)
        <div class="mb-5 dashboard-cards">
            <div class="card card-item card-item-list-layout">
                <div class="card-image">
                    <a href="{{ route('course.view',$item->course_id) }}" class="d-block">
                        <img class="card-img-top" src="{{ asset($item->course->course_image) }}" alt="Card image cap">
                    </a>
                </div><!-- end card-image -->
                <div class="card-body">
                    <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">{{ $item->course->label }}</h6>
                    <h5 class="card-title"><a href="{{ route('course.view',$item->course_id) }}">{{ $item->course->course_name }}</a></h5>
                    <p class="card-text"><a href="teacher-detail.html">{{ $item->course->user->name }}</a></p>
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
                    <ul class="pb-2 card-duration d-flex align-items-center fs-15">
                        <li class="mr-2">
                            <span class="text-black">Status:</span>
                            <span class="text-white badge badge-success">Published</span>
                        </li>
                        <li class="mr-2">
                            <span class="text-black">Duration:</span>
                            <span>{{ $item->course->duration }}</span>
                        </li>
                        <li class="mr-2">
                            <span class="text-black">Students:</span>
                            <span>30,405</span>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-black card-price font-weight-bold">Ksh. {{ $item->course->selling_price }}</p>
                        <div class="pl-3 card-action-wrap">
                            <a href="course-details.html" class="ml-1 shadow-sm cursor-pointer icon-element icon-element-sm text-success" data-toggle="tooltip" data-placement="top" data-title="View"><i class="la la-eye"></i></a>
                            <div class="ml-1 shadow-sm cursor-pointer icon-element icon-element-sm text-secondary" data-toggle="tooltip" data-placement="top" data-title="Edit"><i class="la la-edit"></i></div>
                            <div class="ml-1 shadow-sm cursor-pointer icon-element icon-element-sm text-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                <span data-toggle="modal" data-target="#itemDeleteModal" class="w-100 h-100 d-inline-block"><i class="la la-trash"></i></span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
            
        </div>
        <!-- end col-lg-12 -->
    @endforeach
    
    
</div>

@endsection