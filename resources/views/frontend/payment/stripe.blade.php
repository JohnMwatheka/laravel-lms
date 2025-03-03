@extends('frontend.master')
@section('home') 


<style>
 
    .StripeElement {
      box-sizing: border-box;
      height: 40px;
      padding: 10px 12px;
      border: 1px solid transparent;
      border-radius: 4px;
      background-color: white;
      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
      border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;}
    </style>
    <!-- /////////////////////////----------End CSS ------- ///////////////////////////// -->


<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="flex-wrap breadcrumb-content d-flex align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="text-white section__title">Stripe</h2>
            </div>
            <ul class="flex-wrap generic-list-item generic-list-item-white generic-list-item-arrow d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Stripe</li>
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
<form method="post" class="row" action="{{ route('payment') }}" enctype="multipart/form-data">
    @csrf

    <div class="input-box col-lg-6">
        <label class="label-text">First Name</label>
        <div class="form-group">
            <input class="form-control form--control" type="text" name="name" value="{{ Auth::user()->name }}">
            <span class="la la-user input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-6">
        <label class="label-text">Email</label>
        <div class="form-group">
            <input class="form-control form--control" type="email" name="email" value="{{ Auth::user()->email }}">
            <span class="la la-user input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-12">
        <label class="label-text">Address</label>
        <div class="form-group">
            <input class="form-control form--control" type="text" name="address" value="{{ Auth::user()->address }}">
            <span class="la la-envelope input-icon"></span>
        </div>
    </div><!-- end input-box -->
    <div class="input-box col-lg-12">
        <label class="label-text">Phone Number</label>
        <div class="form-group">
            <input id="phone" class="form-control form--control" type="tel" name="phone" value="{{ Auth::user()->phone }}">
        </div>
    </div><!-- end input-box -->
    
    
        

                    </div><!-- end card-body -->
                </div><!-- end card -->
<div class="card card-item">
    <div class="card-body">
        <h3 class="pb-3 card-title fs-22">Select Payment Method</h3>
        <div class="divider"><span></span></div>

        <div class="col-lg-12">
            <div class="p-40 border cart-totals">
                <div class="divider-2 mb-30">
                    <div class="table-responsive order_table checkout">
    <form action="" method="post" id="payment-form">
        @csrf
        <div class="form-row">
            <label for="card-element"> Credit or Debit Cart</label>

            <div id="card-element">
                {{-- // stripe element will be inserted here --}}
            </div>
            <div id="card-errors" role="alert"></div>
        </div>
        <button class="btn btn-primary">Submit Payment</button>
    </form>

                    </div>

                </div>

            </div>

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
         
      @foreach ($carts as $item) 
       
      <input type="hidden" name="sulg[]" value="{{ $item->options->slug }}">
      <input type="hidden" name="course_id[]" value="{{ $item->id }}">
      <input type="hidden" name="course_title[]" value="{{ $item->name }}">
      <input type="hidden" name="price[]" value="{{ $item->price }}">
      <input type="hidden" name="instructor_id[]" value="{{ $item->options->instructor }}">



    <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
        <a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}" class="media-img">
            <img src="{{ asset($item->options->image) }}" alt="Cart image">
        </a>
        <div class="media-body">
            <h5 class="pb-2 fs-15"><a href="{{ url('course/details/'.$item->id.'/'.$item->options->slug) }}">{{ $item->name }} </a></h5>
            <p class="text-black font-weight-semi-bold lh-18">${{ $item->price }}  </p>
        </div>
    </div><!-- end media -->
    @endforeach     
                         


                        </div><!-- end order-details-lists -->
                        <a href="{{ route('mycart') }}" class="btn-text"><i class="mr-1 la la-edit"></i>Edit</a>
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
                <span>${{ $cartTotal }}</span>
            </li>
            <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                <span class="text-black">Coupon Name:</span>
                <span> {{ session()->get('coupon')['coupon_name'] }}
                ( {{ session()->get('coupon')['coupon_discount'] }} %) </span>
            </li>

            <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                <span class="text-black">Coupon Dicount:</span>
                <span> ${{ session()->get('coupon')['discount_amount'] }}
                 </span>
            </li>

            <li class="d-flex align-items-center justify-content-between font-weight-bold">
                <span class="text-black">Total:</span>
                <span>${{ session()->get('coupon')['total_amount'] }}</span>
            </li>
        </ul>
            <input type="hidden" name="total" value="{{ $cartTotal}}">
           @else

           <ul class="generic-list-item generic-list-item-flash fs-15">
            
            <li class="d-flex align-items-center justify-content-between font-weight-bold">
                <span class="text-black">Total:</span>
                <span>${{ $cartTotal }}</span>
            </li>
            <input type="hidden" name="total" value="{{ $cartTotal}}">
        </ul>
               
           @endif            
                       
                        




                        <div class="pt-3 btn-box border-top border-top-gray">
                            <p class="mb-2 fs-14 lh-22">Aduca is required by law to collect applicable transaction taxes for purchases made in certain tax jurisdictions.</p>
                            <p class="mb-3 fs-14 lh-22">By completing your purchase you agree to these <a href="#" class="text-color hover-underline">Terms of Service.</a></p>
                            <button type="submit" class="btn theme-btn w-100">Proceed <i class="ml-1 la la-arrow-right icon"></i></button>
                            
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


<!-- /////////////////////////----------Start JavaScript  ------- ///////////////////////////// -->
<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51IUTWzALc6pn5BvMAUegqRHV0AAokjG7ZuV6RWcj5rxB9KCAwamgtWpw9T4maGAe34WmDkD6LSn1Yge3nzex6gYk004pILHsNh');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>










@endsection