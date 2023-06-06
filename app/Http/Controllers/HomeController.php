<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\Ordershipment;
use App\Models\Payment;
use App\Models\Post;
use App\Models\product_orders;
use App\Models\ProductsReview;
use App\Models\Receipt;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        $username=Auth::user()->name;

        if ($usertype =='1') {
            
            return view('admin.home',compact('username'));
        }
        else {
            $product=Product::paginate(4);
            $brand=Brand::all();
            $post=Post::paginate(4);
            $user_id=Auth::user();
            return view('home.userpage',compact('user_id','product','brand','post'));
        }
    }

    public function index()
    {
        //$product=Product::all();
        $product=Product::paginate(4);
        $post=Post::paginate(4);
        $brand=Brand::all();
        return view('home.userpage',compact('product','brand','post'));
    }
    public function logout()
    {
        return view('home.logout');
    }
    public function product_details($id)
    {
        $product=Product::find($id);
        $products=Product::paginate(4);
        return view('home.product.productDetails',compact('product','products'));
    }
    public function product_all()
    {
        $product=Product::all();
        $brand=Brand::all();
        $category=Category::all();
        return view('home.product.allProduct',compact('product','brand','category'));
    }
    public function all_product_brand($id)
    {
        $category=Category::all();
        $brand=Brand::find($id);
        $all_brand=Brand::all();
        return view('home.product.allProductBrand',compact('brand','category','all_brand'));
    }
    public function products_review(Request $request,$id)
    {
        if(Auth::id())
        {
            $data=new ProductsReview();

            $user_id=User::where('name', $request->author)->first()->id;
        
            $data->user_id=$user_id;
            $data->product_id=$id;
            $data->body=$request->comment;

            $data->save();
            $product=Product::find($id);
            $products=Product::paginate(4);
            return view('home.product.productDetails',compact('product','products'));
        }
        else
        {
            return redirect('login');
        }
        //$product=Product::find($id);
        
    }

    public function all_product_category($id)
    {
        $category=Category::find($id);
        $brand=Brand::all();
        $all_category=Category::all();
        return view('home.product.allProductCategory',compact('brand','category','all_category'));
    }

    public function contact()
    {
        return view('home.contact.contactPage');
    }
    public function add_feedback(Request $request)
    {
        
        if(Auth::id())
        {
            $data=new Feedback();
            $user_id=User::where('name', $request->username)->first()->id;
            $data->user_id=$user_id;
            $data->message=$request->message;
            $data->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }



    public function about()
    {
        return view('home.about.aboutPage');
    }
    public function blog()
    {
        $category=Category::all();
        $brand=Brand::all();
        $post=Post::all();
        return view('home.blog.blogPage',compact('category','brand','post'));
    }
    public function all_post_brand($id)
    {
        $brand=Brand::find($id);
        $all_brand=Brand::all();
        return view('home.blog.brandBlogPage',compact('brand','all_brand'));
    }
    public function post_details($id)
    {
        $post=Post::find($id);
        $brand=Brand::all();
        return view('home.blog.postDetails',compact('post','brand'));
    }
    public function post_comment(Request $request,$id)
    {
        
        if(Auth::id())
        {
            $post=Post::find($id);
            $data=new Comment();
            $user_id=User::where('name', $request->author)->first()->id;
            $data->user_id=$user_id;
            $data->post_id=$id;
            $data->body=$request->comment;
            $data->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

   
    public function cart_user()
    {
        if(Auth::id())
        {
            $user=Auth::user()->id;
            $username=Auth::user();
            
            $data=Payment::all();
            $shipment=Ordershipment::all();
            $order= Order::where('user_id', $user)->first();
            $order_id= Order::where('user_id', $user)->first()->id;
            $product_order= product_orders::where('order_id', $order_id)->first();
            $product= Product::where('id', $product_order->product_id)->first();
            $receipt=Receipt::where('user_id', $user)->first();
            //return redirect('cart');
            return view('home.cart.viewCart',compact('shipment','data','username','product_order','order','user','product','receipt'));
        }
        else
        {
            return redirect('login');
        }
        //return view('home.cart.viewCart');
    }
    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user()->id;
            $username=Auth::user()->name;
            
            $product_order=new product_orders();
            $order=new Order();
            $product= Product::where('id',$id)->first()->price;
            $discount= Product::where('id',$id)->first()->discount_price;
            $order->user_id= $user;
            $order->quantity=$request->quantity;
            $order->total_price=$request->quantity*($product-$discount);
            $order->save();
            $product_order->order_id=$order->id;
            $product_order->product_id=$id;
            $product_order->save();
            return redirect('cart');
            //return view('home.cart.viewCart',compact('product_order','order','username'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function checkout(Request $request, $id)
    {
        if(Auth::id())
        {
            $username=Auth::user();
            $order= Order::where('user_id',$id)->get();
            $pay=Payment::where('payment_type',$request->pay)->first()->id;
            $ship=Ordershipment::where('company_name',$request->shipment)->first()->id;
            //dd($ship);
            $receipt=new Receipt();
            $receipt->user_id=$id;
            $receipt->payment_id=$pay;
            $receipt->ordershipment_id=$ship;
            $receipt->status='accept';
            $receipt->save();
            return view('home.cart.checkout',compact('order','username','receipt'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function delete_order($id)
    {
        $order= Order::find($id);
        $order->delete();
        return redirect()->back();
    }
   
}
