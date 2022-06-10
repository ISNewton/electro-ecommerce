<?php

namespace App\Http\Controllers;

use App\Models\Admin\Order;
use App\Models\Model\Admin\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
        $orders = Order::count();
        $users = User::count();
        $earnings = Order::where('status',2)->sum('total');
        $recent_orders = Order::with('user')->latest()->limit(5)->get();
        //dd($resent_orders);
        return view('admin.pages.index',compact('orders','users','earnings','recent_orders'));
    }
    //
    /* public function login () {
        Fortify::authenticateUsing(function (Request $req) {
            $validation = $req->validate([
                'email'     => 'required|email',
                'password'  => 'required|string'
            ]);
            
    
            $admin = Admin::where('email',$req->email)->first();
    
            if($admin && Hash::check($req->password,$admin->password)) {
                //return $admin;
                return $admin;
            }
            //return Redirect()->back()->with('error','Creadintials error');
            //return redirect()->url('/');

     
        });
        return redirect()->route('dashboard');
    }
 */

    public function logout() {
        Auth::logout();
        return Redirect()->route('login_form');
    }

    public function update_password(Request $req) {

        $req->validate([
            'oldpassword'       => 'required|string|min:8',
            'newpassword'       => 'required|string|min:8',
            'confirmPassword'   => 'required|string|min:8',
        ]);
        
        $req_password = $req->oldpassword;

        $new_password = $req->newpassword;
        $confirm_password = $req->confirmPassword;


        

        if(Hash::check($req_password,Auth::user()->password)) {
            return back()->with('msg',[
                'msg' =>  'Password is incorrect',
                'type' => 'error'
            ]);
        }
        

        if($new_password !== $confirm_password) {
            return back()->with('msg',[
                'msg' => 'new password does not match',
                'type' => 'error'
            ]);
        }

            $user = User::find(Auth::id());
            $user->password = Hash::make($new_password);
            $user->save();
            Auth::logout();
            return redirect('/')->with('msg',[
                'msg' => 'Password changed successfully',
                'type' => 'success'
            ]);
        
    }
    
    
}
