<?php

namespace App\Http\Controllers;

use App\discount;
use App\product;
use App\stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function welcome()
    {
        $product = DB::table('products')->orderBy('company', 'desc')->paginate(16);
        $stock = stock::all();
        $discount = discount::all();
        return view('front.index',compact('product','stock','discount'));
    }

    public function singleProductView($id)
    {
        $product = product::where('id',$id)->get()->first();
        $relProduct = DB::table('products')->where('category',$product->category)->paginate(4);

        return view('front.product-single',compact('product','relProduct'));
    }

    public function checkout(){
        return view('front.checkout');
    }

    public function check(){
        return view('front.check');
    }
}
