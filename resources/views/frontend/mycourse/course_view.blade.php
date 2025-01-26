@include('frontend.mycourse.body.header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<section class="header-menu-area">
    <div class="header-menu-content bg-dark">
        <div class="container-fluid">
            <div class="main-menu-content d-flex align-items-center">
                <div class="logo-box logo--box">
                    <div class="theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
                        <button class="theme-picker-btn light-mode-btn" title="Light mode">
                            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </div>
                </div><!-- end logo-box -->
                <div class="pl-4 course-dashboard-header-title">
                    <a href="course-details.html" class="text-white fs-15">{{ $course->course->course_name }}</a>
                </div><!-- end course-dashboard-header-title -->
                <div class="ml-auto menu-wrapper">
                    <div class="mr-3 theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
                        <button class="theme-picker-btn light-mode-btn" title="Light mode">
                            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="nav-right-button d-flex align-items-center">
                        <a href="#" class="mr-2 text-white btn theme-btn theme-btn-sm theme-btn-transparent lh-26" data-toggle="modal" data-target="#ratingModal"><i class="mr-1 la la-star"></i> leave a rating</a>
                        <a href="#" class="mr-2 text-white btn theme-btn theme-btn-sm theme-btn-transparent lh-26" data-toggle="modal" data-target="#shareModal"><i class="mr-1 la la-share"></i> share</a>
                        <div class="generic-action-wrap generic--action-wrap">
                            <div class="dropdown">
                                <a class="action-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Favorite this course</a>
                                    <a class="dropdown-item" href="#">Archive this course</a>
                                    <a class="dropdown-item" href="#">Gift this course</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</section><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->








<!--======================================
        START COURSE-DASHBOARD
======================================-->
<section class="course-dashboard">
    <div class="course-dashboard-wrap">
        <div class="course-dashboard-container d-flex">
            <div class="course-dashboard-column">
                
                <div class="lecture-viewer-container">
                    <div class="lecture-video-item">
                        <iframe width="100%" height="500" id="videoContainer" src="" 
                            title="The Best Way to Learn With Videos and Online Classes I Video Notebook" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                        <div id="textLesson" class="pb-2 mt-4 text-center fs-24 font-weight-semi-bold">
                            <h3></h3>
                        </div> 

                    </div> 
                </div>
                <!-- end lecture-viewer-container -->

                
                
                <div class="lecture-video-detail">
                    <div class="p-4 lecture-tab-body bg-gray">
                        <ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                                    <i class="la la-search"></i>
                                </a>
                            </li>
                            <li class="nav-item mobile-menu-nav-item">
                                <a class="nav-link" id="course-content-tab" data-toggle="tab" href="#course-content" role="tab" aria-controls="course-content" aria-selected="false">
                                    Course Content
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="question-and-ans-tab" data-toggle="tab" href="#question-and-ans" role="tab" aria-controls="question-and-ans" aria-selected="false">
                                    Question & Ans
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">
                                    Announcements
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="lecture-video-detail-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                                <div class="search-course-wrap pt-40px">
                                    <form action="#" class="pb-5">
                                        <div class="input-group">
                                            <input class="pl-3 form-control form--control form--control-gray" type="text" name="search" placeholder="Search course content">
                                            <div class="input-group-append">
                                                <button class="btn theme-btn"><span class="la la-search"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-center search-results-message">
                                        <h3 class="pb-1 fs-24 font-weight-semi-bold">Start a new search</h3>
                                        <p>To find captions, lectures or resources</p>
                                    </div>
                                </div><!-- end search-course-wrap -->
                            </div>
                            
                            <!-- end tab-pane -->
                            <div class="tab-pane fade" id="course-content" role="tabpanel" aria-labelledby="course-content-tab">
                                <div class="pt-4 mobile-course-menu">
                                    <div class="accordion generic-accordion generic--accordion" id="mobileCourseAccordionCourseExample">

                                        <div class="card">
                                            <div class="card-header" id="mobileCourseHeadingOne">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseOne" aria-expanded="true" aria-controls="mobileCourseCollapseOne">
                                                    <i class="la la-angle-down"></i>
                                                    <i class="la la-angle-up"></i>
                                                    <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                                    <span class="course-duration">
                                                        <span>1/5</span>
                                                        <span>21min</span>
                                                    </span>
                                                </button>
                                            </div><!-- end card-header -->
                                            <div id="mobileCourseCollapseOne" class="collapse show" aria-labelledby="mobileCourseHeadingOne" data-parent="#mobileCourseAccordionCourseExample">
                                                <div class="p-0 card-body">
                                                    <ul class="curriculum-sidebar-list">
                                                        <li class="course-item-link active">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox2" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox2"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link active-resource">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox3" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox3"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                        <div class="generic-action-wrap">
                                                                            <div class="dropdown">
                                                                                <a class="mt-1 btn theme-btn theme-btn-sm theme-btn-transparent fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mr-1 la la-folder-open"></i> Resources<i class="ml-1 la la-angle-down"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                        Section-Footage.zip
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end generic-action-wrap -->
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox4" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox4"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                    </ul>
                                                </div><!-- end card-body -->
                                            </div><!-- end collapse -->
                                        </div><!-- end card -->
                                        
                                    </div><!-- end accordion-->
                                </div><!-- end mobile-course-menu -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="lecture-overview-wrap">
                                    <div class="lecture-overview-item">
                                        <h3 class="pb-2 fs-24 font-weight-semi-bold">About this course</h3>
                                        <p>{{ $course->course->course_title }}</p>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">By the numbers</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <ul class="generic-list-item">
                                                    <li><span>Skill level:</span>{{ $course->course->course_label }}</li>
                                                    <li><span>Students:</span>83950</li>
                                                    <li><span>Languages:</span>English</li>
                                                    <li><span>Captions:</span>Yes</li>
                                                </ul>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <ul class="generic-list-item">
                                                    <li><span>Resources:</span>{{ $course->course->resources }}</li>
                                                    <li><span>Video length:</span>{{ $course->course->duration }}</li>
                                                    <li><span>Certificate:</span>{{ $course->course->certificate }}</li>
                                                </ul>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Certificates</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                <p class="pb-3">Get Aduca certificate by completing entire course</p>
                                                <a href="#" class="btn theme-btn theme-btn-transparent">Aduca Certificate</a>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Features</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <p>Available on <a href="#" class="text-color hover-underline">IOS</a> and <a href="#" class="text-color hover-underline">Android</a></p>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Description</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">From the Author of the Best Selling After Effects CC 2020 Complete Course</h3>
                                                <p>{!! $course->course->description !!}</p>
                                                 <!-- end show-more-btn-box -->
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <!-- end lecture-overview-item -->
                                </div><!-- end lecture-overview-wrap -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="question-and-ans" role="tabpanel" aria-labelledby="question-and-ans-tab">
                                <div class="lecture-overview-wrap lecture-quest-wrap">
                                    <div class="new-question-wrap">
                                        <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="mr-1 la la-reply"></i>Back to all questions</button>
                                        <div class="new-question-body pt-40px">
                                            <h3 class="fs-20 font-weight-semi-bold">My question relates to</h3>






                                            <form action="#" class="pt-4">
                                                <div class="custom-control-wrap">
                                                    <div class="pl-0 mb-3 custom-control custom-radio">
                                                        <input type="text" name ="question" class="pl-3 form-control form--control">
                                                        
                                                        
                                                    </div>
                                                    <div class="pl-0 mb-3 custom-control custom-radio">
                                                        <textarea class="pl-3 form-control form--control" name="message" rows="4" placeholder="Write your response..." spellcheck="false"></textarea>
                                                        
                                                    </div>
                                                    
                                                </div>


                                                <div class="text-center btn-box">
                                                    <button type="submit" class="btn theme-btn w-100">Submit Question<i class="ml-1 la la-arrow-right icon"></i></button>
                                                </div>
                                            </form>






                                        </div>
                                    </div>
                                    <!-- end new-question-wrap -->

                                    <div class="question-overview-result-wrap">
                                       

                                        
                                        <div class="lecture-overview-item">
                                            <div class="question-overview-result-header d-flex align-items-center justify-content-between">
                                                <h3 class="fs-17 font-weight-semi-bold">30 questions in this course</h3>
                                                <button class="btn theme-btn theme-btn-sm theme-btn-transparent ask-new-question-btn">Ask a new question</button>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="mt-0 lecture-overview-item">
                                            <div class="question-list-item">




                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-1.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">I still did't get H264 after installing Quicktime. Please what do I do</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>1</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>1</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                               





                                            </div>
                                            <div class="text-center question-btn-box pt-35px">
                                                <button class="btn theme-btn theme-btn-transparent w-100" type="button">See More</button>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                    </div>
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                                <div class="lecture-overview-wrap lecture-announcement-wrap">
                                    <div class="lecture-overview-item">
                                        <div class="media media-card align-items-center">
                                            <a href="teacher-detail.html" class="rounded-full media-img d-block avatar-md">
                                                <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="pb-1"><a href="teacher-detail.html">Alex Smith</a></h5>
                                                <div class="announcement-meta fs-15">
                                                    <span>Posted an announcement</span>
                                                    <span> · 3 years ago ·</span>
                                                    <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-4 lecture-owner-decription">
                                            <h3 class="pb-3 fs-19 font-weight-semi-bold">Important Q&A support</h3>
                                            <p>Happy 2019 to everyone, thank you for being a student and all of your support.</p>
                                            <p><strong>Great job on enrolling and your current course progress.  I encourage you keep in pursuit of your dreams :)</strong></p>
                                            <p>The whole lot. In my course After Effects Complete Course packed with all Techniques and Methods (No Tricks and gimmicks).</p>
                                            <p class="font-italic"><strong>Unfortunately this will result in delayed responses by me in the Q&A section and to direct messages.  This is only for the next week  and once back I will be back to 100% .</strong></p>
                                            <p>I will continue to do my best to respond to as many questions as possible but only one person, regularly I spend 4-5 hours daily on this and with over 440000 students as you can image that its a lot of work.</p>
                                            <p class="font-italic">Thank you once again for your understanding and for all of the wonderful students who I have had an opportunity to communicate with regularly and all of your encouragement.</p>
                                            <p>Have an awesome day</p>
                                            <p>Alex</p>
                                        </div>
                                        <div class="pt-4 lecture-announcement-comment-wrap">
                                            <div class="media media-card align-items-center">
                                                <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                    <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                                </div><!-- end media-img -->
                                                <div class="media-body">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input class="pl-3 form-control form--control form--control-gray" type="text" name="search" placeholder="Enter your comment">
                                                            <div class="input-group-append">
                                                                <button class="btn theme-btn" type="button"><i class="la la-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                            <div class="comments pt-40px">
                                                <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                                                    </div><!-- end media-img -->
                                                    <div class="media-body">
                                                        <div class="announcement-meta fs-15 lh-20">
                                                            <a href="#" class="text-color">Tony Olsson</a>
                                                            <span> · 3 years ago ·</span>
                                                            <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                        </div>
                                                        <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img src="images/small-avatar-3.jpg" alt="Instructor avatar" class="rounded-full">
                                                    </div><!-- end media-img -->
                                                    <div class="media-body">
                                                        <div class="announcement-meta fs-15 lh-20">
                                                            <a href="#" class="text-color">Eduard-Dan</a>
                                                            <span> · 2 years ago ·</span>
                                                            <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                        </div>
                                                        <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                            </div><!-- end comments -->
                                        </div><!-- end lecture-announcement-comment-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                </div>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end lecture-video-detail-body -->
                </div><!-- end lecture-video-detail -->
                <div class="py-4 cta-area bg-gray">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="cta-content-wrap">
                                    <h3 class="fs-18 font-weight-semi-bold">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build in-demand career skills.</h3>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                
                                <div class="text-right client-logo-wrap">
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img.png') }}" alt="brand image"></a>
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img2.png') }}" alt="brand image"></a>
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img3.png') }}" alt="brand image"></a>
                                </div><!-- end client-logo-wrap -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </div><!-- end cta-area -->
                <div class="footer-area pt-50px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <a href="index.html">
                                        <img src=" {{ asset('frontend/images/logo.png') }}" alt="footer logo" class="footer__logo">
                                    </a>
                                    <ul class="pt-4 generic-list-item">
                                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                                        <li>Melbourne, Australia, 105 South Park Avenue</li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Company</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Become a Teacher</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Courses</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">Hacking</a></li>
                                        <li><a href="#">PHP Learning</a></li>
                                        <li><a href="#">Spoken English</a></li>
                                        <li><a href="#">Self-Driving Car</a></li>
                                        <li><a href="#">Garbage Collectors</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Download App</h3>
                                    <div class="mobile-app">
                                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                                        <a href="#" class="mb-2 d-block hover-s"><img src="{{ asset('frontend/images/appstore.png') }}" alt="App store" class="img-fluid"></a>
                                        <a href="#" class="d-block hover-s"><img src="{{ asset('frontend/images/googleplay.png') }}" alt="Google play store" class="img-fluid"></a>
                                    </div>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                    <div class="section-block"></div>
                    <div class="py-4 copyright-content">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="flex-wrap d-flex align-items-center justify-content-end">
                                        <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14">
                                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                        <div class="select-container select-container-sm">
                                            <select class="select-container-select">
                                                <option value="1">English</option>
                                                <option value="2">Deutsch</option>
                                                <option value="3">Español</option>
                                                <option value="4">Français</option>
                                                <option value="5">Bahasa Indonesia</option>
                                                <option value="6">Bangla</option>
                                                <option value="7">日本語</option>
                                                <option value="8">한국어</option>
                                                <option value="9">Nederlands</option>
                                                <option value="10">Polski</option>
                                                <option value="11">Português</option>
                                                <option value="12">Română</option>
                                                <option value="13">Русский</option>
                                                <option value="14">ภาษาไทย</option>
                                                <option value="15">Türkçe</option>
                                                <option value="16">中文(简体)</option>
                                                <option value="17">中文(繁體)</option>
                                                <option value="17">Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                    </div><!-- end copyright-content -->
                </div><!-- end footer-area -->
            </div><!-- end course-dashboard-column -->
            <div class="course-dashboard-sidebar-column">
                <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course content</button>
                <div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
                    <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                        <h3 class="fs-18 font-weight-semi-bold">Course content</h3>
                        <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                    </div><!-- end course-dashboard-side-heading -->
                    <div class="course-dashboard-side-content">
                        <div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">








                            @foreach ($section as $sec)

                                    @php
                                        $lectures = App\Models\CourseLecture::where('section_id',$sec->id)->get();
                                    @endphp

                                    <div class="card">
                                        <div class="card-header" id="headingOne{{ $sec->id }}">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $sec->id }}" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="la la-angle-down"></i>
                                                <i class="la la-angle-up"></i>
                                                <span class="fs-15"> {{ $sec->section_title }}</span>
                                                <span class="course-duration"> 
                                                    <span>({{ count($lectures) }})</span>
                                                </span>
                                            </button>
                                        </div><!-- end card-header -->
                                    <div id="collapseOne{{ $sec->id }}" class="collapse " aria-labelledby="headingOne{{ $sec->id }}" data-parent="#accordionCourseExample">
                                        <div class="p-0 card-body">
                                            <ul class="curriculum-sidebar-list">
                                            
                                            @foreach ($lectures as $lect)
                                                <li class="course-item-link active">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15 lecture-title" data-video-url="{{ $lect->url }}" data-content="{!!$lect->content !!}">{{ $lect->lecture_title }}</h4>
                                                        
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li> 
                                            @endforeach
                                            
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card --> 
                                    
                             @endforeach

                            




                        </div><!-- end accordion-->
                    </div><!-- end course-dashboard-side-content -->
                </div><!-- end course-dashboard-sidebar-wrap -->
            </div><!-- end course-dashboard-sidebar-column -->
        </div><!-- end course-dashboard-container -->
    </div><!-- end course-dashboard-wrap -->
</section><!-- end course-dashboard -->
<!--======================================
        END COURSE-DASHBOARD
======================================-->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="ratingModalTitle">
                        How would you rate this course?
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="py-5 text-center modal-body">
                <div class="mt-5 leave-rating">
                    <input type="radio" name='rate' id="star5"/>
                    <label for="star5" class="fs-45"></label>
                    <input type="radio" name='rate' id="star4"/>
                    <label for="star4" class="fs-45"></label>
                    <input type="radio" name='rate' id="star3"/>
                    <label for="star3" class="fs-45"></label>
                    <input type="radio" name='rate' id="star2"/>
                    <label for="star2" class="fs-45"></label>
                    <input type="radio" name='rate' id="star1"/>
                    <label for="star1" class="fs-45"></label>
                    <div class="pb-4 rating-result-text fs-20"></div>
                </div><!-- end leave-rating -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Share this course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="copy-to-clipboard">
                    <span class="success-message">Copied!</span>
                    <div class="input-group">
                        <input type="text" class="pl-3 form-control form--control copy-input" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                        <div class="input-group-append">
                            <button class="shadow-none btn theme-btn theme-btn-sm copy-btn"><i class="mr-1 la la-copy"></i> Copy</button>
                        </div>
                    </div>
                </div><!-- end copy-to-clipboard -->
            </div><!-- end modal-body -->
            <div class="modal-footer justify-content-center border-top-gray">
                <ul class="social-icons social-icons-styled">
                    <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                    <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                </ul>
            </div><!-- end modal-footer -->
        </div><!-- end modal-content-->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="reportModalTitle">Report Abuse</h5>
                    <p class="pt-1 fs-14 lh-24">Flagged content is reviewed by Aduca staff to determine whether it violates Terms of Service or Community Guidelines. If you have a question or technical issue, please contact our
                        <a href="contact.html" class="text-color hover-underline">Support team here</a>.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form method="post">
                    <div class="input-box">
                        <label class="label-text">Select Report Type</label>
                        <div class="form-group">
                            <div class="w-auto select-container">
                                <select class="select-container-select">
                                    <option value>-- Select One --</option>
                                    <option value="1">Inappropriate Course Content</option>
                                    <option value="2">Inappropriate Behavior</option>
                                    <option value="3">Aduca Policy Violation</option>
                                    <option value="4">Spammy Content</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Write Message</label>
                        <div class="form-group">
                            <textarea class="pl-3 form-control form--control" name="message" placeholder="Provide additional details here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="pt-2 text-right btn-box">
                        <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="ml-1 la la-arrow-right icon"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="insertLinkModal" tabindex="-1" role="dialog" aria-labelledby="insertLinkModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="insertLinkModalTitle">Insert Link</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form action="#">
                    <div class="input-box">
                        <label class="label-text">URL</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Url">
                            <i class="la la-link input-icon"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Text</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Text">
                            <i class="la la-pencil input-icon"></i>
                        </div>
                    </div>
                    <div class="pt-2 text-right btn-box">
                        <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Insert <i class="ml-1 la la-arrow-right icon"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="uploadPhotoModalTitle">Upload an Image</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="file-upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input" multiple>
                    <span class="file-upload-text"><i class="mr-2 la la-upload"></i>Drop files here or click to upload</span>
                </div><!-- file-upload-wrap -->
                <div class="pt-2 text-right btn-box">
                    <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="ml-1 la la-arrow-right icon"></i></button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->




<script type="text/javascript">
    // Function to open the first lecture when the page loads
    function openFirstLecture() {
        const firstLecture = document.querySelector('.lecture-title'); // Get the first lecture element
        if (firstLecture) {
            firstLecture.click(); // Trigger the click event on the first lecture
        }
    }

    // Function to handle lecture clicks and load content
    function viewLesson(videoUrl, vimeoUrl, textContent) {
        const video = document.getElementById("videoContainer");
        const text = document.getElementById("textLesson");
        const textContainer = document.createElement("div");

        if (videoUrl && videoUrl.trim() !== "") {
            video.classList.remove("d-none");
            text.classList.add("d-none");
            text.innerHTML = "";
            video.setAttribute("src", videoUrl);
        } else if (vimeoUrl && vimeoUrl.trim() !== "") {
            video.classList.remove("d-none");
            text.classList.add("d-none");
            text.innerHTML = "";
            video.setAttribute("src", vimeoUrl);
        } else if (textContent && textContent.trim() !== "") {
            video.classList.add("d-none");
            text.classList.remove("d-none");
            text.innerHTML = "";
            textContainer.innerText = textContent;
            textContainer.style.fontSize = "14px";
            textContainer.style.textAlign = "left";
            textContainer.style.paddingLeft = "40px";
            textContainer.style.paddingRight = "40px";
            text.appendChild(textContainer);
        }
    }

    // Add a click event listener to all lecture elements
    document.querySelectorAll('.lecture-title').forEach((lectureTitle) => {
        lectureTitle.addEventListener('click', () => {
            const videoUrl = lectureTitle.getAttribute('data-video-url');
            const vimeoUrl = lectureTitle.getAttribute('data-vimeo-url');
            const textContent = lectureTitle.getAttribute('data-content');
            viewLesson(videoUrl, vimeoUrl, textContent);
        });
    });

    // Open the first lecture when the page loads
    window.addEventListener('load', () => {
        openFirstLecture();
    });
</script>

@include('frontend.mycourse.body.footer')
</body>
</html>