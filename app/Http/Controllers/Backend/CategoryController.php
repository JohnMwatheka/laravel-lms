<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    //method for the categories
    public function AllCategory(){
        $category = Category::latest()->get();
        return view('admin.backend.category.all_category', compact('category'));
    }
    //End method


    //Method to add category
    public function AddCategory(){
        return view('admin.backend.category.add_category');
    }
    //End method


    //Method to resize selected image to 370 x 260
    public function StoreCategory(Request $request){

        if($request->file('image')){
            $manager = new ImageManager(new Driver());
            $image = $request->file('image'); // Assign the uploaded file to $image variable
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image); // Use $image instead of $request->file('image')
            $img = $img->resize(370, 260);

            $img->toJpeg(80)->save(base_path('public/upload/category/' . $name_gen));
            $save_url = 'upload/category/' . $name_gen; // Add a missing slash in the save URL

            Category::insert([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)), // rewrites the category name in lower case in the database
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message'=> 'Category Inserted successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('all.category')->with($notification);
    }



    //Method  to redirect to edit category page
    public function EditCategory($id){

        $category = Category::find($id);
        return view('admin.backend.category.edit_category', compact('category'));


    }
    //End method


    // Method to allow editing of a category
    public function UpdateCategory(Request $request){
        $cat_id = $request->id;

        if($request->file('image')){

            $manager = new ImageManager(new Driver());
            $image = $request->file('image'); // Assign the uploaded file to $image variable
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image); // Use $image instead of $request->file('image')
            $img = $img->resize(370, 260);

            $img->toJpeg(80)->save(base_path('public/upload/category/' . $name_gen));
            $save_url = 'upload/category/' . $name_gen; // Add a missing slash in the save URL

            Category::find($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)), // rewrites the category name in lower case in the database
                'image' => $save_url,
            ]);
            $notification = array(
                'message'=> 'Category  updated with image successfully',
                'alert-type' =>'success',
            );
            return redirect()->route('all.category')->with($notification);
        }
         else
         //To update category without image
          {
            Category::find($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)), // rewrites the category name in lower case in the database

            ]);
            $notification = array(
                'message'=> 'Category  updated without image successfully',
                'alert-type' =>'success',
            );
            return redirect()->route('all.category')->with($notification);
        }//end else

    }//End method


    //Method to delete the category
    public function DeleteCategory($id){
        $item = Category::find($id);
        $img = $item->image;
        unlink($img);

        Category::find($id)->delete();
          $notification = array
          (
            'message'=> 'Category  updated without image successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
    //End method


    ///All Subcategory method

    public function AllSubCategory(){
        $subcategory = SubCategory::latest()->get();
        return view('admin.backend.subcategory.all_subcategory', compact('subcategory'));

    }//End method


    //method to add redirect to add subcategory page.
    public function AddSubCategory(){

        $category = Category::latest()->get();
        return view('admin.backend.subcategory.add_subcategory',compact('category'));

    }//end method





    //Method to store subcategories
    public function StoreSubCategory(Request $request){


            SubCategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)), // rewrites the category name in lower case in the database

            ]);

        $notification = array(
            'message'=> 'SubCategory Inserted successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('all.subcategory')->with($notification);
    }




}
