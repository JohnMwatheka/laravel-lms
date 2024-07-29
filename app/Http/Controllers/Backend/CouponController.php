<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\SubCategory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class CouponController extends Controller
{
    //Method to fetch all coupons in admin panel
    public function AdminAllCoupon(){
        $coupon = Coupon::latest()->get();
        return view('admin.backend.coupon.coupon_all', compact('coupon'));
    }
    //End method

    //Method to add coupon from the admin dashboard
    public function AdminAddCoupon(){

        return view('admin.backend.coupon.coupon_add');
    }
    // End method

    //Method to store coupon
    public function AdminStoreCoupon(Request $request){

        Coupon::insert([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message'=> 'Coupon cretaed successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.coupon')->with($notification);
    }
    //End method

    //Method to allow editin of a coupon
    public function AdminEditCoupon($id){


        $coupon =Coupon::find($id);
        return view('admin.backend.coupon.coupon_edit',compact('coupon'));
    }

    //End method\


    //Method to update edited coupon
    public function AdminUpdateCoupon(Request $request){

        $coupon_id = $request->id;

        Coupon::find($coupon_id)->update([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message'=> 'Coupon updated successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.coupon')->with($notification);

    }
    //End method

    //Method to delete coupon
    public function AdminDeleteCoupon($id){

        Coupon::find($id)->delete();

        $notification = array(
            'message'=> 'Coupon updated successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);


    }
    //End method
}
