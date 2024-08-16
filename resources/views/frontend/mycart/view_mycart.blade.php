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
                <h2 class="text-white section__title">Shopping Cart</h2>
            </div>
            <ul class="flex-wrap generic-list-item generic-list-item-white generic-list-item-arrow d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Shopping Cart</li>
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
<section class="cart-area section-padding">
    <div class="container">
        <div class="table-responsive">
            <table class="table generic-table">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Course Details</th>
                    <th scope="col">Price</th> 
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="cartPage">
               
                
                </tbody>
            </table>
            <div class="flex-wrap pt-4 d-flex align-items-center justify-content-between"> 

                @if(Session::has('coupon'))

                @else 
              
                    {{-- {{ json_encode(Session::get('coupon'), JSON_PRETTY_PRINT) }} --}} 

                <form  action="#">
                    <div class="mb-2 input-group" id="couponField">
                        <input class="pl-3 form-control form--control" type="text"  id="coupon_name" placeholder="Coupon code">
                        <div class="input-group-append">
                            
                      <a type="submit" onclick="applyCoupon()" class="btn theme-btn">Apply Code</a>      
                        </div>
                    </div>
                </form>
               @endif

                
                
            </div>
        </div>
        <div class="ml-auto col-lg-4">
            <div class="p-4 bg-gray rounded-rounded mt-40px" id="couponCalField">
                
               
            </div>
            <a href="{{ route('checkout') }}" class="btn theme-btn w-100">Checkout <i class="ml-1 la la-arrow-right icon"></i></a>
        </div>
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->







@endsection
