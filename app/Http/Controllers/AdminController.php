<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller

{
    //
    public function view_dashboard()
    {

        return view('admin.dashboard');

    }

    public function users_view(){
        $data=User::all();
        return view('admin.users', compact('data'));

    }
        public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function delete_user($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('message','users is deleted Successfully');
    }
    public function view_product()
    {
            $users=User::where('usertype','0')->get();
            return view('admin.product',compact('users'));
            // return view('admin.product');

    }

    public function add_product(Request $request)
    {

        $product=new Product;
        $product->title=$request->title;
        $product->description=$request->description ;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->dic_price;
        $product->user_id=$request->user_id;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message', 'Product added Successfully');
    }
    public function show_product(){
        return view('admin.show_product');
    }
}
