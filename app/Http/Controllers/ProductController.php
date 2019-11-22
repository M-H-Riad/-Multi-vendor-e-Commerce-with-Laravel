<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = DB::table('products')->where('shopper',$id)->paginate(10);
        $category = category::all();
        return view('shopper.productList',compact('products','category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = category::all();
        return view('shopper.addProduct',compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*echo "<pre>";
        print_r($request->all());
        exit();*/


        $request->validate([
            'name'=>'required',
            'price'=>'required',
            /*'quantity'=>'required',*/
            'shopper'=>'required',
            'category'=>'required',
            'description'=>'required',
            'company'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('./images', $fileName);
        }

        $product = new product();

        $product->name = $request['name'];
        $product->price= $request['price'];
        /*$product->quantity= $request['quantity'];*/
        $product->category= $request['category'];
        $product->shopper= $request['shopper'];
        $product->description= $request['description'];
        $product->company= $request['company'];
        $product->image= $fileName;

        $product->save();

        return redirect()->back()->with('success','Image uploaded successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $category = category::all();
        $products = product::where('id',$product['id'])->get()->first();

        return view('shopper.editList',compact('products','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $newImage = $request->file('image');

        if ($newImage != null){

            $request->validate([
                'name'=>'required',
                'price'=>'required',
                /*'quantity'=>'required',*/
                'shopper'=>'required',
                'category'=>'required',
                'description'=>'required',
                'company'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $fileName = $newImage->getClientOriginalName();
            $newImage->move('./images', $fileName);

            $product = product::find($product->id);

            $product->name = $request['name'];
            $product->price= $request['price'];
            /*$product->quantity= $request['quantity'];*/
            $product->category= $request['category'];
            $product->shopper= $request['shopper'];
            $product->description= $request['description'];
            $product->company= $request['company'];
            $product->image= $fileName;

            $product->save();

            $category = category::all();
            $products = DB::table('products')->where('shopper',$request['shopper'])->paginate(10);
            return view('shopper.productList',compact('products','category'))->with('success','Image uploaded successfully');

        }
        else{

            $request->validate([
                'name'=>'required',
                'price'=>'required',
               /* 'quantity'=>'required',*/
                'shopper'=>'required',
                'category'=>'required',
                'description'=>'required',
                'company'=>'required',
            ]);

            $product = product::find($product->id);

            $product->name = $request['name'];
            $product->price= $request['price'];
           /* $product->quantity= $request['quantity'];*/
            $product->category= $request['category'];
            $product->shopper= $request['shopper'];
            $product->description= $request['description'];
            $product->company= $request['company'];
            $product->image= $request['oldImage'];

            $product->save();

            $category = category::all();
            $products = DB::table('products')->where('shopper',$request['shopper'])->paginate(10);
            return view('shopper.productList',compact('products','category'))->with('success','Image uploaded successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product = product::find($product->id);
        $product->delete();

        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
