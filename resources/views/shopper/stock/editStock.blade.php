@extends('shopper.layout.master')
@section('content')
    <!-- Container fluid Starts -->
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Add Product</h3>
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
                            <form action="{{route('update_stock',$products->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <level>Old Stock</level>
                                    <input class="form-control" name="old" type="hidden" value="{{$products['stock']}}">
                                    <input class="form-control"  type="number" value="{{$products['stock']}}" disabled>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="shopper" type="hidden" value="{{auth()->user()->id}}">
                                </div>

                                <div class="form-group">
                                    <level>Add New Stock</level>
                                    <input class="form-control" name="new" type="number" min="0">
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

    </div>
@endsection