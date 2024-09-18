<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderConfirm;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Course;
use App\Models\Course_goal;
use App\Models\CourseSection;
use App\Models\CourseLecture;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //Method to show all pending orders on admin dashboard
    public function AdminPendingOrder(){

        $payment = Payment::where ('status','pending')->orderBy('id','DESC')->get();
        return view('admin.backend.orders.pending_orders',compact('payment'));
    }
    //End Method

    //Method to show order details on admin page
    public function AdminOrderDetails($payment_id){

        $payment = Payment::where('id',$payment_id)->first();
        $orderItem = Order::where('payment_id',$payment_id)->orderBy('id','DESC')->get();

        return view('admin.backend.orders.admin_order_details',compact('payment', 'orderItem'));

    }//End Method
}
