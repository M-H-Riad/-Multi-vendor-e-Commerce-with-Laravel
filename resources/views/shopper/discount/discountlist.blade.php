@extends('shopper.layout.master')
@section('content')
    <!-- Container fluid Starts -->
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Product list(stock)</h3>
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
                            <th class="text-center">Old Price</th>
                            <th class="text-center">Discount</th>
                            <th class="text-center">New Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @foreach($discount as $item)
                            @foreach($product as $pro)
                                @if($pro->id == $item->product)
                                    <tr>
                                        <td class="text-center">
                                            <img src="/images/{{$pro->image}}" alt="None" style="width: 100px; height: 100px;">
                                        </td>
                                        <td class="text-center">
                                            {{$pro->name}}
                                        </td>
                                        <td class="text-center">{{$pro->price}}</td>
                                        <td class="text-center">{{$item->discount}}</td>
                                        <td class="text-center">{{$item->newPrice}}</td>
                                        <td>
                                            <a href="/discount/{{$item->id}}/edit" class="btn btn-warning">Update</a>
                                            <hr>
                                            <form method="post" action="{{ route('destroy_discount',$item->id)}}">
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger"
                                                       onclick="return confirm('Are you sure want to delete Stock?')" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>

                </div>
            </div>
            <div class="pagination">
                {!! $discount->render("pagination::bootstrap-4") !!}`
            </div>
        </div>

    </div>
@endsection