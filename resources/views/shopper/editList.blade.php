@extends('shopper.layout.master')
@section('content')
    <!-- Container fluid Starts -->
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Update Product</h3>
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
                            <form action="{{route('update_product',$products->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" value="{{$products['name']}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="price" type="number" value="{{$products->price}}">
                                </div>
                                {{--<div class="form-group">
                                    <input class="form-control" name="quantity" min="0" type="number"
                                           value="{{$products->quantity}}">
                                </div>--}}
                                <div class="form-group">
                                    <select name="category" class="js-example-basic-multiple form-control" required>
                                        <option>Select category</option>
                                        @foreach($category as $cat)
                                            @if($products->category == $cat->id)
                                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                            @else
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="shopper" type="hidden"
                                           value="{{auth()->user()->id}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="description"
                                           value="{{$products->description}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="company"
                                           value="{{$products->company}}">
                                </div>
                                <div class="form-group">
                                    Choose New Picture: {{--<input type="file" name="image" value="{{$products->image}}"
                                                          required>--}}
                                    <input type="file" class="form-control" name="image"
                                           value="{{$products->image}}"/><img src="/images/{{$products->image}}"
                                                                           width="200" height="150" />

                                <input type="hidden" name="oldImage" value="{{$products->image}}">
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