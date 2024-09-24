@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3">User Profile</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="p-0 mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">

                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payment->name }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payment->email }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payment->phone }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payment->address }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Payment Type</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <strong>  {{ $payment->payment_type }}</strong> 
                                </div>
                            </div>
                            



                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">

                      
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Amount</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Ksh. {{ $payment->total_amount }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Invoice Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $payment->invoice_no }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Order Date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payment->order_date }} 
                                </div>
                            </div>                      
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if($payment->status == 'pending')
                                    <a href="{{ route('pending-confirm', $payment->id) }}" class="btn btn-lock btn-success" id="confirm">Confirm order</a>
                                        
                                    @elseif($payment->status =='confirm')
                                    <a href="" class="btn btn-lock btn-success">Confirm order</a>
                                    @endif 
                                </div>
                            </div>


                            
                        </div>
                
                    </div>



                </div>
            </div>
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <div class="table-responsive">
                                <table class="table" style="font-weight: 600;">
                                    <tbody>
                                        <tr>
                                            <td class="col-md-1">
                                                <label for="">Image</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Course Name</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Category</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Instructor</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Price</label>
                                            </td>
                                        </tr>


                                        @php
                                            $totalPrice = 0;
                                        @endphp
                                        @foreach ( $orderItem as $item )
                                            
                                        
                                            <tr>
                                                <td class="col-md-1">
                                                    <label><img src="{{ asset($item->course->course_image) }}" alt="" style="width:50px; height:50px;" class="rounded-circle"></label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label>{{ $item->course->course_name }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for="">{{ $item->course->category->category_name }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for="">{{ $item->instructor ->name }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> Ksh. {{ $item->price }}</label>
                                                </td>
                                            </tr>


                                            @php
                                                $totalPrice +=$item->price;
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="col-md-3">
                                                <strong>Total Price: ${{ $totalPrice }}</strong>
                                            </td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
