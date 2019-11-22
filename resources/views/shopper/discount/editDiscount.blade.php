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
                            <form action="{{route('update_discount',$products->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <level>Old Price</level>
                                    <input class="form-control" id="price" name="price" type="hidden"
                                           value="{{$pro['price']}}">
                                    <input class="form-control"  type="number" value="{{$pro['price']}}" disabled>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="shopper" type="hidden" value="{{auth()->user()->id}}">
                                </div>

                                <div class="form-group">
                                    <level>Discount</level>
                                    <input class="form-control" name="discount" id="discount"
                                           value="{{$products->discount}}" type="number"
                                           min="1"
                                           oninput="calculate();">
                                </div>
                                <div class="form-group">
                                    <level>New Price</level>
                                    <input class="form-control" id="result" name="newPrice" type="hidden">
                                    <input class="form-control" id="result2" type="number" disabled>
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

    <script>

        $(document).ready(function () {
            var myBox1 = document.getElementById('price').value;
            var myBox2 = document.getElementById('discount').value;

            if (myBox1 != null){

                var myResult = (myBox1 * myBox2)/100;
                var newPrice = myBox1 - myResult;
                document.getElementById('result').value = newPrice;
                document.getElementById('result2').value = newPrice;
            }
        });
        function calculate() {
            var myBox1 = document.getElementById('price').value;
            var myBox2 = document.getElementById('discount').value;

            if (myBox1 != null){

                var myResult = (myBox1 * myBox2)/100;
                var newPrice = myBox1 - myResult;
                document.getElementById('result').value = newPrice;
                document.getElementById('result2').value = newPrice;
            }
            else {
                alert("No Product is Selected.");
            }

        }
    </script>
@endsection