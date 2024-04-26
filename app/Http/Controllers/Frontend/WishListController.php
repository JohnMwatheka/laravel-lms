<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Intervention\Image\ImageManager;
use App\Models\Course;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;
use App\Models\User;

class WishListController extends Controller
{
    // Method to add course to wishlist
    public function AddToWishList(Request $request, $course_id){
        if (Auth::check()) {
            $exists = WishList::where('user_id',Auth::id())->where('course_id', $course_id)->first();

            if (!$exists) {
                WishList::insert([
                    'user_id' => Auth::id(),
                    'course_id' => $course_id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success' => 'Course Successfully added to your wishlist']);
            }else {
                return response()->json(['error' => 'This course is already on your wishlist']);
            }
        }
        else {
            return response()->json(['error' => 'Please login first']);
        }
    }//end method

    // method to dispalys all items on the wishlist

    public function AllWishlist(){
        return view('frontend.wishlist.all_wishlist');
    }//End method

   // Method to get all the wishlist courses
   public function GetWishlistCourse(){

    $wishlist = Wishlist::with('course')->where('user_id',Auth::id())->latest()->get();

    $wishQty =Wishlist::count();

    return response()->json(['wishlist' => $wishlist, 'wishQty'=> $wishQty]);


  }
// End Method

//   Method to remove course from wishlist
public function RemoveWishlistCourse($id){
    
    Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
        return response()->json(['success' => 'Successfully Course Remove']);
}
// Remove
}
