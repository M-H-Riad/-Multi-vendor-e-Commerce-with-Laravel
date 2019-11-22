@extends('shopper.layout.master')
@section('content')

    <script>
        $(document).ready(function () {
            $('.product').change(function () {
                if ($(this).val() != '') {
                    var value = $(this).val();
                    var _token = $('input[name="_token"]').val();


                    $.ajax({
                        url: '/depend',
                        type: "post",
                        data: { value: value, _token: _token},
                        success: function (result) {
                            $('#price').html(result);
                        }
                    })
                }
            });
        });
    </script>
    <script>
        function calculate() {
            var myBox1 = document.getElementById('oldPrice').value;
            var myBox2 = document.getElementById('discount').value;

            if (myBox1 != null){

                var myResult = (myBox1 * myBox2)/100;
                var newPrice = myBox1 - myResult;
                document.getElementById('newPrice').value = newPrice;
                document.getElementById('newPrice2').value = newPrice;
            }
            else {
                alert("No Product is Selected.");
            }

        }
    </script>


    <!-- Container fluid Starts -->
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Add Discount</h3>
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
                            <form action="{{route('store_discount')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <select name="product" id="product" class="form-control product" data-dependent="price">
                                        <option value=0>Select Product</option>
                                        @foreach($product as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="price">

                                </div>

                                <div class="form-group">
                                    <input class="form-control" id="discount" name="discount" min="1" type="number"
                                           placeholder="Enter Discount" oninput="calculate();">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="newPrice" type="hidden" name="newPrice">
                                    <input class="form-control" id="newPrice2" type="number" name="newPrice"
                                           placeholder="No Product Selected" disabled>
                                </div>
                                <center>
                                    <input type="submit" value="Add Discount" class="btn btn-info btn-lg">
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