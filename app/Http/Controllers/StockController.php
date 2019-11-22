<?php

namespace App\Http\Controllers;

use App\product;
use App\stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    private $check;

    public function __construct() {
        $this->check = 0;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $stock = stock::paginate(20);
        $product = product::where('shopper',$id)->get();
        /*echo "<pre>";
        print_r($product);
        exit();*/
        return view('shopper.stock.stockList',compact('stock','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $product = product::where('shopper',$id)->get();

        return view('shopper.stock.addStock',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = stock::all();

        foreach ($stock as $pro){
            if ($pro->product == $request['product']){
                $this->check = 1;
            }
        }

        if ($this->check == 1){
           return Redirect()->back()->withErrors('Stock already exist.');
        }
        else{
            $this->validate(request(),[
                'product'=>'required|not_in:0',
                'stock'=>'required',
            ]);

            $stock = new stock();

            $stock->product = $request['product'];
            $stock->stock= $request['stock'];
            $stock->sold= $request['sold'];

            $stock->save();
            return redirect()->back()->with('success','Stock added successfully');
        }





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
       /* echo "<pre>";
        print_r($stock->id);
        exit();*/
        $products = stock::find($stock->id);
        return  view('shopper.stock.editStock',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
       /* echo "<pre>";
        print_r($request->all());
        exit();*/


        $new = $request['new'];

        $stocks = stock::find($stock->id);
        if ($new){
            $stocks->stock = $request['old'] + $request['new'];
            $stocks->save();
        }
        else{
            $stocks->stock = $request['old'];
            $stocks->save();
        }



        $stock = stock::paginate(10);
        $product = product::where('shopper',$request['shopper'])->get();

        return view('shopper.stock.stockList',compact('stock','product'))->with('success','Stock Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        $stock = stock::find($stock->id);
        $stock->delete();

        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
