<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\DecreseCouponLimitation;
use App\Jobs\SendOrderEmail;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Newsletter;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use App\Models\Admin\Section;
use App\Models\Admin\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //



    public function index() {

        $featured = Section::with('products')->latest()->limit(3)->find(1);

        $on_sale = Section::with('products')->latest()->limit(3)->find(2);

        $top_rated = Section::with('products')->latest()->limit(3)->find(3);

        $main_slider = Section::with('products')->latest()->limit(4)->find(4);

        $best_sellers = Section::with('products')->latest()->limit(6)->find(5);

        $best_sellers_main_product = Section::with('products')->latest()->limit(1)->find(5);

        $categories_main = Category::with('subcategories')->latest()->limit(6)->get();

        $televisions = Subcategory::with('products')->find(1);

        $cell_phones = Subcategory::with('products')->find(9);
        
        $brands = Brand::all();



        return view('user.pages.index',compact('featured',
                                                'on_sale',
                                                'top_rated',
                                                'main_slider',
                                                'best_sellers',
                                                'best_sellers_main_product',
                                                'televisions',
                                                'categories_main',
                                                'cell_phones',
                                                'brands',
    ));
    }

    public function display_login_page() {

        if(Auth::check()) {
            return redirect()->route('my_account');
        }

        return view('user.auth.login');
    }


    public function display_my_account_page() {

        if(Auth::check()) {

            return view('user.auth.my_account');
        }

        return redirect()->route('login');
    }


    public function display_checkout_page(Request $request) {

        if(!Auth::check()) {
            return redirect()->route('login')->with('msg',[
                'type' => 'error',
                'msg' => 'Login / register please'
            ]);
        }


        if(!$request->session()->get('cart')) {

            return redirect()->route('home')->with('msg',[
                'type' => 'error',
                'msg' => 'Add products to your cart please'
            ]);
        }

        return view('user.pages.checkout');
    }


    public function display_category_page($id) {

        $category = Category::with('subcategories','products')->findOrFail($id);
        return view('user.pages.category',compact('category'));
    }

    public function display_subcategory_page($id) {

        $subcategory = Subcategory::with('category','products')->findOrFail($id);

        return view('user.pages.subcategory',compact('subcategory'));
    }

    public function logout() {

        Auth::logout();

        return redirect()->route('home');
    }


    public function update_profile(Request $request) {

        $validation = $request->validate([
            'name'  => 'string|max:50',
            'email' => 'email:filter',
        ]);

        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back();
    }


    public function place_order(Request $request) {
        if ($request->session()->get('cart')) {
            $request->validate([

            'country'         => 'required|string|max:50',
            'first_address'   => 'required|string|max:255',
            'second_address'  => 'nullable|string|max:255',
            'city'            => 'required|string|max:50',
            'state'           => 'required|string|max:50',
            'zip_code'        => 'required|integer|max:999999',
            'terms'           => 'required',
            'order_comment'  => 'nullable|string|max:255'

        ]);

            $order = new Order;

            $order->country = $request->country;
            $order->first_address = $request->first_address;
            $order->second_address = $request->second_address;
            $order->city = $request->city;
            $order->state = $request->state;
            $order->zip_code = $request->zip_code;
            $order->comment = $request->order_comment;
            $order->status = 0;
            $order->user_id = Auth::id();
            $order->subtotal = $request->session()->get('subtotal');
            $order->total = $request->session()->get('total');
            $order->save();


            foreach ($request->session()->get('cart') as $product) {
                $arr[$product['id']] = [
                    'price'     => $product['product']->price,
                    'quantity'  => $product['quantity']
                ];
            }
            $order->products()->attach($arr);

            $pro = Product::find($product['id']);

            $pro->product_quantity -= $product['quantity'];
            
            $pro->save();

            if($request->session()->get('coupon')) {
              dispatch(new DecreseCouponLimitation($request->session()->get('coupon')['code']));
            }
            dispatch(new SendOrderEmail);

            $request->session()->pull('cart');
            $request->session()->pull('total');
            $request->session()->pull('coupon');
        }

        return redirect()->route('home')->with('msg',[
            'msg' => 'Order placed successfully',
            'type' => 'success'
        ]);

    }


    public function signup_email_subsription(Request $request) {

         $request->validate([
            'email'  => 'required|email:filter|unique:newsletters'
        ]);

        $subs = new Newsletter;
        $subs->email = $request->email;
        $subs->save();

        return back()->with('msg',[
            'msg' => 'Email added successfully',
            'type' => 'success'
        ]);

    }

    public function track_order(Request $request) {

        $request->validate([
            'order_id'  => 'required|integer',
            'email'     => 'required|email:filter'
        ]);

        $order = Order::with('products','user')->find($request->order_id);

        if($order && $order->user->email == $request->email) {
            return view('user.pages.order_details',compact('order'));
        }

        return back()->with('msg',[
            'msg' => 'Wrong order ID/Email',
            'type' => 'error'
        ]);

    }
}
