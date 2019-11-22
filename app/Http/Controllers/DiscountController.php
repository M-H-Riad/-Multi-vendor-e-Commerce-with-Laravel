<?php

namespace App\Http\Controllers;

use App\category;
use App\discount;
use App\product;
use App\stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{

    private $check;

    public function __construct() {
        $this->check = 0;
    }

    public function dependValue(Request $request){


        $id = $request['value'];

        $item= DB::table('products')->select('name','price')->where('id',$id)->get()->first();

        /*echo "<pre>";
        print_r($item->price);
        exit();*/

        return "<input type='number' value='$item->price' name='price' id='oldPrice' class='form-control' disabled>";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $discount = discount::paginate(20);
        $product = product::where('shopper',$id)->get();

        return view('shopper.discount.discountlist',compact('discount','product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = product::where('shopper',$id)->get();

        return view('shopper.discount.addDiscount',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dis = discount::all();

        foreach ($dis as $pro){
            if ($pro->product == $request['product']){
                $this->check = 1;
            }
        }

        if ($this->check == 1){
            return Redirect()->back()->withErrors('Discount already exist.');
        }
        else{
            $this->validate(request(),[
                'product'=>'required|not_in:0',
                'discount'=>'required|not_in:0',
                'newPrice'=>'required|not_in:0',
            ]);

            $discount = new discount();

            $discount->product = $request['product'];
            $discount->discount = $request->get('discount');
            $discount->newPrice = $request->input('newPrice');

            $discount->save();
            return redirect()->back()->with('success','Discount Added Successfully.');

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(discount $discount)
    {
        $products = discount::find($discount->id);
        $pro = product::find($discount->product);
        return  view('shopper.discount.editDiscount',compact('products','pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, discount $discount)
    {
       /* echo "<pre>";
        print_r($request->all());
        exit();*/
        $this->validate($request, [
            'discount'=>'required',
            'newPrice'=> 'required'
        ]);

        $discount= discount::find($discount->id);

        $discount->discount = $request->get('discount');
        $discount->newPrice = $request->get('newPrice');
        $discount->save();

        $discount = discount::paginate(20);
        $product = product::where('shopper',$request['shopper'])->get();

        return view('shopper.discount.discountlist',compact('discount','product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(discount $discount)
    {
        $discount = discount::find($discount->id);
        $discount->delete();
        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
