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
                            <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="price" type="number" placeholder="Enter price">
                                </div>
                                {{--<div class="form-group">
                                    <input class="form-control" name="quantity" min="0" type="number" placeholder="quantity">
                                </div>--}}
                                <div class="form-group">
                                    <select name="category" class="js-example-basic-multiple form-control" required>
                                        <option>Select category</option>
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="shopper" type="hidden"
                                           value="{{auth()->user()->id}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="description"
                                           placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="company" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    Choose Picture:<input type="file" name="image" required>
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