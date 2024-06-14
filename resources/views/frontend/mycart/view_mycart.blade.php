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
                    <th scope="col">Product Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
            <div class="flex-wrap pt-4 d-flex align-items-center justify-content-between">
                <form method="post">
                    <div class="mb-2 input-group">
                        <input class="pl-3 form-control form--control" type="text" name="search" placeholder="Coupon code">
                        <div class="input-group-append">
                            <button class="btn theme-btn">Apply Code</button>
                        </div>
                    </div>
                </form>
                <a href="#" class="mb-2 btn theme-btn">Update Cart</a>
            </div>
        </div>
        <div class="ml-auto col-lg-4">
            <div class="p-4 bg-gray rounded-rounded mt-40px">
                <h3 class="pb-3 fs-18 font-weight-bold">Cart Totals</h3>
                <div class="divider"><span></span></div>
                <ul class="pb-4 generic-list-item">
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Subtotal:</span>
                        <span>$44.99</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Total:</span>
                        <span>$44.99</span>
                    </li>
                </ul>
                <a href="checkout.html" class="btn theme-btn w-100">Checkout <i class="ml-1 la la-arrow-right icon"></i></a>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->



@endsection
