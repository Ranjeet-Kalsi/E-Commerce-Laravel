<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $data = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('category', 'like', '%' . $query . '%')
            ->get();
        return view('search', ['products' => $data]);
    }

    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {

            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {

        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
}
