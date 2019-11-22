@extends('shopper.layout.master')
@section('content')
    <!-- Container fluid Starts -->
   <div class="container-fluid">

       <!-- Top Bar Starts -->
       <div class="top-bar clearfix">
           <div class="row gutter">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="page-title">
                       <h3>Product list</h3>
                   </div>
               </div>
           </div>
       </div>
       <!-- Top Bar Ends -->

       <!-- Row starts -->
       <div class="row gutter">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="panel">

                   <table class="table table-bordered table-hover">
                       <tr style="background-color: #00B247">
                           <th class="text-center">Product</th>
                           <th class="text-center">Name</th>
                           <th class="text-center">Company</th>
                           <th class="text-center">Price</th>
                           <th class="text-center">Category</th>
                           <th class="text-center">Action</th>
                       </tr>
                       @foreach($products as $pro)
                           <tr>
                               <td class="text-center">
                                   <img src="/images/{{$pro->image}}" alt="None" style="width: 100px; height: 100px;">
                               </td>
                               <td class="text-center">{{$pro->name}}</td>
                               <td class="text-center">{{$pro->company}}</td>
                               <td class="text-center">{{$pro->price}}</td>
                               <td class="text-center">
                                    @foreach($category as $cat)
                                        @if($cat->id == $pro->category)
                                           {{$cat->name}}
                                        @endif
                                    @endforeach
                               </td>
                               <td>
                                   <a href="/product/{{$pro->id}}/edit" class="btn btn-warning">Update</a>
                                   <hr>
                                   <form method="post" action="{{ route('destroy_product',$pro->id)}}">
                                       {{ csrf_field() }}
                                       <input type="submit" class="btn btn-danger"
                                              onclick="return confirm('Are you sure want to delete this?')" value="Delete">
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   </table>

               </div>
           </div>
           <div class="pagination">
               {!! $products->render("pagination::bootstrap-4") !!}`
           </div>
       </div>

   </div>
@endsection