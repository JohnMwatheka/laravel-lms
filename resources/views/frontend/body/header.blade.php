<header class="bg-white header-menu-area">
    <div class="py-1 header-top pr-150px pl-150px border-bottom border-bottom-gray">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14">
                            <li class="pr-3 mr-3 d-flex align-items-center border-right border-right-gray"><i class="mr-1 la la-phone"></i><a href="tel:00123456789"> (00) 123 456 789</a></li>
                            <li class="d-flex align-items-center"><i class="mr-1 la la-envelope-o"></i><a href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="flex-wrap header-widget d-flex align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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
                        <ul class="flex-wrap pl-3 ml-3 generic-list-item d-flex align-items-center fs-14 border-left border-left-gray">

     @auth
    <li class="pr-3 mr-3 d-flex align-items-center border-right border-right-gray"><i class="mr-1 la la-sign-in"></i><a href="{{ route('dashboard') }}"> Dashboard</a></li>
    <li class="d-flex align-items-center"><i class="mr-1 la la-user"></i><a href="{{ route('user.logout') }}"> Logout</a></li>

    @else

    <li class="pr-3 mr-3 d-flex align-items-center border-right border-right-gray"><i class="mr-1 la la-sign-in"></i><a href="{{ route('login') }}"> Login</a></li>
    <li class="d-flex align-items-center"><i class="mr-1 la la-user"></i><a href="{{ route('register') }}"> Register</a></li>

    @endauth




                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="bg-white header-menu-content pr-150px pl-150px">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ url('/') }}" class="logo"><img src="{{ asset('frontend/images/logo.png')}}" alt="logo" class="rounded-full" height="100" width="100"></a>
                            <div class="user-btn-action">
                                <div class="mr-2 shadow-sm search-menu-toggle icon-element icon-element-sm" data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="mr-2 shadow-sm off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm" data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="shadow-sm off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->

@php
    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
@endphp

<div class="col-lg-10">
    <div class="menu-wrapper">
        <div class="menu-category">
            <ul>
                <li>
                    <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                    <ul class="cat-dropdown-menu">
                       
                        @foreach ($categories as $cat)
        @php
        $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();    
        @endphp                
                        <li>
                            <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}<i class="la la-angle-right"></i></a>
                            <ul class="sub-menu">
                                @foreach ($subcategories as $subcat)
                                <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li> 
                                @endforeach
                            </ul>
                        </li> 
                        @endforeach
                        
                    </ul>
                </li>
            </ul>
        </div><!-- end menu-category -->
        <form method="post">
            <div class="mb-0 form-group">
                <input class="pl-3 form-control form--control" type="text" name="search" placeholder="Search for anything">
                <span class="la la-search search-icon"></span>
            </div>
        </form>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home  </a>
                    
                </li>
                <li>
                    <a href="#">courses <i class="la la-angle-down fs-12"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="course-grid.html">course grid</a></li>
                        <li><a href="course-list.html">course list</a></li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="#">blog  </a>
                    
                </li>
            </ul><!-- end ul -->
        </nav><!-- end main-menu -->


        <div class="mr-4 shop-cart">
            <ul>
                <li>
                    <p class="shop-cart-btn d-flex align-items-center">
                        <i class="la la-shopping-cart"></i>
                        <span class="product-count" id="cartQty">0</span>
                    </p>

                    <ul class="cart-dropdown-menu">
                        
                        <div id="miniCart">

                        </div>
                       <br><br>
                       
                        <li class="media media-card">
                            <div class="media-body fs-16">
                                <p class="text-black font-weight-semi-bold lh-18">Total: $<span class="cart-total" id="cartSubTotal"> </span>  </p>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('myCart') }}" class="btn theme-btn w-100">Go to cart <i class="ml-1 la la-arrow-right icon"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- end shop-cart -->
        <div class="nav-right-button">
            <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i class="mr-1 la la-user-plus"></i> Admission</a>
        </div><!-- end nav-right-button -->
    </div><!-- end menu-wrapper -->
</div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="shadow-sm off-canvas-menu-close main-menu-close icon-element icon-element-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html"><a href="{{ url('/') }}">Home  </a></a></li>
                </ul>
            </li>
            <li>
                <a href="#">Categories</a>
                <ul class="sub-menu">
                    
                    @foreach ($categories as $cat)
                    @php
                    $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();
                    @endphp
                                    <li>
                                        <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}<i class="la la-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            @foreach ($subcategories as $subcat)
                                            <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#">Student</a>
                <ul class="sub-menu">
                    @auth
                    <li class="pr-3 mr-3 d-flex align-items-center border-right border-right-gray">
                        <i class="mr-1 la la-sign-in"></i><a href="{{ route('dashboard') }}"> Dashboard</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="mr-1 la la-user"></i><a href="{{ route('user.logout') }}"> Logout</a>
                    </li>
                    @else
                    <li class="pr-3 mr-3 d-flex align-items-center border-right border-right-gray">
                        <i class="mr-1 la la-sign-in"></i><a href="{{ route('login') }}"> Login</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="mr-1 la la-user"></i><a href="{{ route('register') }}"> Register</a>
                    </li>
                    @endauth
                </ul>
            </li>
            <li>
                <a href="#">pages</a>
                <ul class="sub-menu">
                    
                        <li>
                            <p class="shop-cart-btn d-flex align-items-center">
                                <i class="la la-shopping-cart"></i>
                                <span class="product-count" id="cartQty">0</span>
                            </p>
        
                            <ul class="cart-dropdown-menu">
        
                                <div id="miniCart">
        
                                </div>
        
                                <br>
                                <li class="media media-card">
                                    <div class="media-body fs-16">
                                        <p class="text-black font-weight-semi-bold lh-18">Total: Ksh <span class="cart-total" id="cartSubTotal"></span> </p>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('myCart') }}" class="btn theme-btn w-100">Go to cart <i class="ml-1 la la-arrow-right icon"></i></a>
                                </li>
                            </ul>
                        </li>
                </ul>
            </li>
            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">blog full width </a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="shadow-sm off-canvas-menu-close cat-menu-close icon-element icon-element-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="course-grid.html">Development</a>
                <ul class="sub-menu">
                    @foreach ($categories as $cat)
                    @php
                    $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();
                    @endphp
                                <li>
                                    <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}<i class="la la-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        @foreach ($subcategories as $subcat)
                                        <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                </ul>
            </li>
            <li>
                <a href="course-grid.html">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="mr-3 flex-grow-1">
                <div class="mb-0 form-group">
                    <input class="pl-3 form-control form--control" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="shadow-sm search-bar-close icon-element icon-element-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
