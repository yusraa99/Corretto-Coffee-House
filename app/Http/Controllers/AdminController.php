<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\category_brand;
use App\Models\category_brands;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\Ordershipment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\Identity;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Receipt;

class AdminController extends Controller
{
    // Category Actions
    public function view_category()
    {
        $data=Category::all();
        $username=Auth::user()->name;
        return view('admin.category.viewAllCategory',compact('data','username'));
    }
    public function create_category()
    {
        $username=Auth::user()->name;
        return view('admin.category.createCategory',compact('username'));
    }
    public function create(Request $request)
    {
        $data=new Category();

        $data->category_name=$request->category;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function delete($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function edit_category($id)
    {
        $data=Category::findorFail($id);
        $username=Auth::user()->name;
        return view('admin.category.editCategory',compact('data','username'));
    }
    public function update_category_confirm(Request $request,$id)
    {
        $data=Category::find($id);
        $data->category_name=$request->category;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->with('message','Category Edited Successfully');
    }

    // Brand Actions
    public function view_brands()
    {
        $data=Brand::all();
        $username=Auth::user()->name;
        return view('admin.brand.viewAllBrand',compact('data','username'));
    }
    public function create_brand()
    {
        $username=Auth::user()->name;
        $data=Category::all();
        return view('admin.brand.createBrand',compact('data','username'));
    }
    public function createbrand(Request $request)
    {
        
        
        $data=new Brand();
        $category_brand=new category_brands();

        $data->brand_name=$request->brand;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('brand',$imagename);
        $data->brand_image=$imagename;

        $data->save();

        $category_id=Category::where('category_name', $request->category)->first()->id;
        $category_brand->category_id=$category_id;
        $brand_id=Brand::where('brand_name', $data->brand_name)->first()->id;
        $category_brand->brand_id=$brand_id;
        $category_brand->save();
            

        return redirect()->back()->with('message','Brand Added Successfully');
    }
    public function delete_brand($id)
    {
        $data=Brand::find($id);
        $data->delete();
        return redirect()->back()->with('message','Brand Deleted Successfully');
    }
    public function edit_brand($id)
    {
        $data=Brand::findorFail($id);
        $category=Category::all();
        $category_brand=$data->categories;
        $username=Auth::user()->name;
        return view('admin.brand.editBrand',compact('data','username','category','category_brand'));
    }
    public function update_brand_confirm(Request $request,$id)
    {
        $data=Brand::find($id);
        $category_id=Category::where('category_name', $request->category)->first()->id;
        
        $data->brand_name=$request->brand;

        if ($data->brand_image == null) {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('brand',$imagename);
            $data->brand_image=$imagename;
            $data->save();
        }
        
        $category_brand=new category_brands();
        //$category_id=Category::where('category_name', $request->category)->first()->id;
        $category_brand->brand_id=Brand::where('brand_name', $data->brand_name)->first()->id;
        $category_brand->category_id=$category_id;
       
        $category_brand->save();
        
        return redirect()->back()->with('message','Brand Edited Successfully');
    }

    // user Actions
    public function view_users()
    {   
        $data=User::all()->where('usertype',0);
        $username=Auth::user()->name;
        return view('admin.users.usersTabel',compact('data','username'));
    }
    public function view_user_details($id)
    {   
        $data=User::find($id)->where('usertype',0)->first();
        $username=Auth::user()->name;
        return view('admin.users.viewUserDetails',compact('data','username'));
    }
    public function edit_user_details($id)
    {
        $data=User::find($id)->where('usertype',0)->first();
        $username=Auth::user()->name;
        return view('admin.users.editUserDetails',compact('data','username'));
    }
    public function delete_user($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back()->with('message','User Deleted Successfully');
    }
    public function update_user_confirm(Request $request,$id)
    {
        $data=User::find($id);
        
        $data->name=$request->username;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->phone=$request->phone;

        if ($data->profile_photo_path == null) {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('user',$imagename);
            $data->profile_photo_path=$imagename;
        }

        $data->save();
        
        return redirect()->back()->with('message','User Edited Successfully');
    }

    // Products Actions
    public function view_products()
    {   
        
        $data=Product::all();
        $username=Auth::user()->name;
        return view('admin.product.viewProduct',compact('data','username'));
    }
    public function create_product()
    {
        $username=Auth::user()->name;
        $category=Category::all();
        $brand=Brand::all();
        return view('admin.product.createProduct',compact('username','category','brand'));
    }
    public function createproduct(Request $request)
    {
        $data=new Product();
        $data->title=$request->product;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->product_code=$request->productcode;
        
        $brand_id=Brand::where('brand_name', $request->brand)->first()->id;
        $category_id=Category::where('category_name', $request->category)->first()->id;
        $data->brand_id=$brand_id;
        $data->category_id=$category_id;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $data->image=$imagename;

        $data->save();
        
        return redirect()->back()->with('message','Product Added Successfully');
    }
    public function view_product_details(Request $request,$id)
    {
        
        $data=Product::find($id);

        $brand=Brand::find($data->brand_id)->brand_name;
        $category=Category::find($data->category_id)->category_name;
        $username=Auth::user()->name;

        return view('admin.product.viewProductDetail',compact('username','data','category','brand'));
    }
    public function edit_product_details($id)
    {
        $data=Product::find($id);
        $username=Auth::user()->name;
        $all_category=Category::all();
        $all_brand=Brand::all();
        return view('admin.product.editProductDetail',compact('data','username','all_category','all_brand'));
    }
    public function delete_product($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    public function update_product_confirm(Request $request,$id)
    {
        $data=Product::find($id);
        
        $data->title=$request->product;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->product_code=$request->productcode;
        
        $brand_id=Brand::where('brand_name', $request->brand)->first()->id;
        $category_id=Category::where('category_name', $request->category)->first()->id;
        $data->brand_id=$brand_id;
        $data->category_id=$category_id;

        if ($data->image == null) {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image=$imagename;
        }
        
        $data->save();
        
        return redirect()->back()->with('message','Product Edited Successfully');
    }

    // Blog Posts Actions
    public function view_brands_blogs()
    {
        $username=Auth::user()->name;
        $data=Post::all();
        return view('admin.blog.viewBlogPosts',compact('username','data'));
    }
    public function create_post()
    {
        $brand=Brand::all();
        $username=Auth::user()->name;
        return view('admin.blog.createPost',compact('username','brand'));
    }
    public function createpost(Request $request)
    {
        $data=new Post();

        $data->title=$request->title;
        $data->description=$request->description;
        $data->auther=$request->auther;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);
        $data->image=$imagename;

        $brand_id=Brand::where('brand_name', $request->brand)->first()->id;
        $data->brand_id=$brand_id;
        $data->save();

        return redirect()->back()->with('message','Post Added Successfully');
    }
    public function delete_post($id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back()->with('message','Post Deleted Successfully');

    }
    public function view_post_details($id)
    {
        $data=Post::find($id);
        $username=Auth::user()->name;
        return view('admin.blog.viewPostDetails',compact('username','data'));
    }
    public function edit_post($id)
    {
        $data=Post::find($id);
        $username=Auth::user()->name;
        $brand=Brand::all();
        return view('admin.blog.editPost',compact('username','data','brand'));
    }
    public function update_post_confirm(Request $request , $id)
    {
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->auther=$request->auther;

        if ($data->image == null) {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post',$imagename);
            $data->image=$imagename;
        }
        $brand_id=Brand::where('brand_name', $request->brand)->first()->id;
        $data->brand_id=$brand_id;
        $data->save();

        return redirect()->back()->with('message','Post Edited Successfully');
    }

    // Comments Actions
    public function view_comments()
    {
        $username=Auth::user()->name;
        $data=Comment::all();
        return view('admin.comment.viewComments',compact('username','data'));
    }
    public function delete_comment($id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect()->back()->with('message','Comment Deleted Successfully');
    }

    // Ordershipment Actions
    public function view_ordershipment()
    {
        $username=Auth::user()->name;
        $data=Ordershipment::all();
        return view('admin.ordershipment.viewOrderShipment',compact('username','data'));
    }
    public function create_ordershipment()
    {
        $username=Auth::user()->name;
        return view('admin.ordershipment.createOrderShipment',compact('username'));
    }
    public function createordershipment(Request $request)
    {
        $data=new Ordershipment();
        $data->company_name=$request->compname;
        $data->phone=$request->compphone;
        $data->email=$request->compemail;
        $data->day_work=$request->compwork;
        $data->save();

        return redirect()->back()->with('message','Ordershipment Added Successfully');
    }
    public function delete_ordershipment($id)
    {
        $data=Ordershipment::find($id);
        $data->delete();
        return redirect()->back()->with('message','Ordershipment Deleted Successfully');
    }
    public function edit_ordershipment($id)
    {
        $data=Ordershipment::find($id);
        $username=Auth::user()->name;
        return view('admin.ordershipment.editOrderShipment',compact('username','data'));
    }
    public function update_ordershipment_confirm(Request $request , $id)
    {
        $data=Ordershipment::find($id);
        $data->company_name=$request->compname;
        $data->phone=$request->compphone;
        $data->email=$request->compemail;
        $data->day_work=$request->compwork;
        $data->save();

        return redirect()->back()->with('message','Ordershipment Edited Successfully');
    }


    // Payment Actions
    public function view_payment()
    {
        $username=Auth::user()->name;
        $data=Payment::all();
        return view('admin.payment.viewPayment',compact('username','data'));
    }
    public function create_payment()
    {
        $username=Auth::user()->name;
        return view('admin.payment.createPayment',compact('username'));
    }
    public function createpayment(Request $request)
    {
        $data=new Payment();
        $data->payment_type=$request->paytype;
        $data->save();

        return redirect()->back()->with('message','Payment Type Added Successfully');
    }
    public function edit_payment($id)
    {
        $username=Auth::user()->name;
        $data=Payment::find($id);
        return view('admin.payment.editPayment',compact('username','data'));
    }
    public function update_payment_confirm(Request $request , $id)
    {
        $data=Payment::find($id);
        $data->payment_type=$request->paytype;
        $data->save();

        return redirect()->back()->with('message','Payment Type Edited Successfully');
    }
    public function delete_payment($id)
    {
        $data=Payment::find($id);
        $data->delete();
        return redirect()->back()->with('message','Payment Type Deleted Successfully');
    }

    // Feedback Actions
    public function view_feedback()
    {
        $username=Auth::user()->name;
        $data=Feedback::all();
        return view('admin.feedback.viewFeedback',compact('username','data'));
    }
    public function delete_feedback($id)
    {
        $data=Feedback::find($id);
        $data->delete();
        return redirect()->back()->with('message','Feedback Deleted Successfully');
    }

    // Receipt Actions
    public function view_receipts()
    {
        $username=Auth::user()->name;
        $data=Receipt::all();
        return view('admin.receipt.viewReceipt',compact('username','data'));
    }
    
    
}
