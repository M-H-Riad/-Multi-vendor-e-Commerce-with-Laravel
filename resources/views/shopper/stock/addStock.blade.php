@extends('shopper.layout.master')
@section('content')
    <!-- Container fluid Starts -->
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Add Stock</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Ends -->

        <!-- Row starts -->
        <div class="row gutter">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel">

                    <div class="panel-body">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <form action="{{route('store_stock')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <select name="product" class="js-example-basic-multiple form-control" required>
                                        <option value=0>Select Product</option>
                                        @foreach($product as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="stock" min="0" type="number"
                                           placeholder="Enter Quantity/Stock">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="sold" value=0>
                                </div>
                                <center>
                                    <input type="submit" value="Add Product" class="btn btn-info btn-lg">
                                </center>

                                <div class="col-sm-3"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row ends -->


    </div>
@endsection