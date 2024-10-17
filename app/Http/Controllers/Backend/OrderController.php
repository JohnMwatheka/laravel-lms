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
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;


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

    //Method for confiming pending orders from admin dashboard
    public function PendingToConfirm($payment_id){
        Payment::find($payment_id)->update(['status' => 'confirm']);
        $notification = array(
            'message' => 'Order Confrim Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.confirm.order')->with($notification);  

    }//End Method
    //Method to show all confirmed orders on admin dashboard
    public function AdminConfirmOrder(){

        $payment = Payment::where ('status','confirm')->orderBy('id','DESC')->get();
        return view('admin.backend.orders.confirm_orders',compact('payment'));
    }
    //End Method

    //Method to show all orders on instructor dashboard
    public function InstructorAllOrder() {

        $id = Auth::user()->id;
    
        $latestOrderItem = Order::where('instructor_id', $id)
            ->select('payment_id', DB::raw('MAX(id) as max_id'))
            ->groupBy('payment_id');
    
        $orderItem = Order::joinSub($latestOrderItem, 'latest_order', function($join) {
            $join->on('orders.id', '=', 'latest_order.max_id');
        })->orderBy('latest_order.max_id', 'DESC')->get();
    
        return view('instructor.orders.all_orders', compact('orderItem'));
    }//End method

    //Method to show order details on intructor page
    public function InstructorOrderDetails($payment_id){
        $payment = Payment::where('id',$payment_id)->first();
        $orderItem = Order::where('payment_id',$payment_id)->orderBy('id','DESC')->get();
        return view('instructor.orders.instructor_order_details',compact('payment','orderItem'));
    }//End Method

    //Method to show order details on intructor page
    public function InstructorOrderInvoice($payment_id){

        $payment = Payment::where('id',$payment_id)->first();
        $orderItem = Order::where('payment_id',$payment_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('instructor.orders.order_pdf',compact('payment','orderItem'))->setPaper('a4')->setOption([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');

    }//End Method


}
