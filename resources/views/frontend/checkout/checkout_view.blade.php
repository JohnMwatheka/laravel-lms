@extends('frontend.master')
@section('home') 

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="flex-wrap breadcrumb-content d-flex align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="text-white section__title">Checkout</h2>
            </div>
            <ul class="flex-wrap generic-list-item generic-list-item-white generic-list-item-arrow d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Checkout</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="cart-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="pb-3 card-title fs-22">Billing Details</h3>
                        <div class="divider"><span></span></div>


                        <form method="post" action="" class="row" enctype="multipart/form-data">
                            @csrf

                            <div class="input-box col-lg-6">
                                <label class="label-text">First Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="name"  value="{{ Auth::user()->name }}">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" value="{{ Auth::user()->email }} ">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="address" value="{{ Auth::user()->address }}">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input id="phone" class="form-control form--control" type="tel" name="phone" value="{{ Auth::user()->phone }}">
                                </div>
                            </div><!-- end input-box -->
                            
                            <!-- end btn-box -->
                        



                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="pb-3 card-title fs-22">Select Payment Method</h3>
                        <div class="divider"><span></span></div>
                        <div class="payment-option-wrap">
                            <div class="payment-tab is-active">
                                <div class="payment-tab-toggle">
                                    <input checked="" id="bankTransfer" name="Cash_delivery" type="radio" value="handcash">
                                    <label for="bankTransfer">Direct payment</label>
                                </div>

                                <div class="payment-tab-toggle">
                                    <input checked="" id="bankTransfer" name="Cash_delivery" type="radio" value="stripe">
                                    <label for="bankTransfer">Stripe payment</label>
                                </div>
                                
                            </div><!-- end payment-tab -->
                            
                            
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="pb-3 card-title fs-22">Order Details</h3>
                        <div class="divider"><span></span></div>
                        <div class="order-details-lists">
                            
                            
                            @foreach ( $carts as $item)

                                <input type="hidden" name="slug[]" value="{{ $item->options->slug }}" >
                                <input type="hidden" name="course_id[]" value="{{ $item->id }}" >
                                <input type="hidden" name="course_title[]" value="{{ $item->name}}" >
                                <input type="hidden" name="price[]" value="{{ $item->price }}" >
                                <input type="hidden" name="instructor_id[]" value="{{ $item->options->instructor }}" >




                                <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
                                    <a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}" class="media-img">
                                        <img src="{{ asset($item->options->image) }}" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="pb-2 fs-15"><a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}">{{ $item->name }}</a></h5>
                                        <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">{{ $item->price }}</span></p>
                                    </div>
                                </div><!-- end media -->
                            @endforeach

                            


                        </div><!-- end order-details-lists -->
                        <a href="{{ route('myCart') }}" class="btn-text"><i class="mr-1 la la-edit"></i>Edit</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="pb-3 card-title fs-22">Order Summary</h3>
                        <div class="divider"><span></span></div>


                        @if (Session::has('coupon'))
                            <ul class="generic-list-item generic-list-item-flash fs-15">
                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="text-black">SubTotal:</span>
                                    <span>Ksh. {{ $cartTotal }}</span>
                                </li>


                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="text-black">Coupon Name:</span>
                                    <span>{{ session()->get('coupon')['coupon_name'] }} ({{ session()->get('coupon')['coupon_discount' ] }} %)</span>
                                </li>

                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="text-black">Coupon Discount:</span>
                                    <span> {{ session()->get('coupon')['discount_amount'] }} </span>
                                </li>


                                <li class="d-flex align-items-center justify-content-between font-weight-bold">
                                    <span class="text-black">Total:</span>
                                    <span>Ksh. {{ session()->get('coupon')['total_amount'] }}</span>
                                </li>
                            </ul>
                            <input type="hidden" name="total" value="{{ $cartTotal }}">
                        @else

                            <ul class="generic-list-item generic-list-item-flash fs-15">

                                <li class="d-flex align-items-center justify-content-between font-weight-bold">
                                    <span class="text-black">Total:</span>
                                    <span>Ksh. {{ $cartTotal }}</span>
                                </li>
                            </ul>
                            <input type="hidden" name="total" value="{{ $cartTotal }}">

                        @endif
                        


                        <div class="pt-3 btn-box border-top border-top-gray">
                            <p class="mb-2 fs-14 lh-22">Aduca is required by law to collect applicable transaction taxes for purchases made in certain tax jurisdictions.</p>
                            <p class="mb-3 fs-14 lh-22">By completing your purchase you agree to these <a href="#" class="text-color hover-underline">Terms of Service.</a></p>
                            <button  type="submit" class="btn theme-btn w-100">Proceed<i class="ml-1 la la-arrow-right icon"></i></button>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</form>
</section>
<!-- ================================
       END CONTACT AREA
================================= -->

@endsection