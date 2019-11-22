<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*echo "<pre>";
        print_r($category);
        exit();*/
        $category= category::all();
        return view('admin.category.categorylist',compact('category'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name'=>'required',
            'status'=>'required',
        ]);

        $category= new category();
        $category->name= $request['name'];
        $category->status= $request['status'];
        $category->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {

       /* echo "<pre>";
        print_r($category->id);
        exit();*/

        $category = category::all()->where('id',$category->id)->first();

        return  view('admin.category.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        /*echo "<pre>";
        print_r($request->all());
        exit();*/
        $this->validate($request, [
            'name'=>'required',
            'status'=> 'required'
        ]);

        $category= category::find($category->id);

        $category->name = $request->get('name');
        $category->status = $request->get('status');
        $category->save();

        return redirect('category')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category = category::find($category->id);
        $category->delete();

        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
