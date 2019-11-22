@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="row gutter">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h3>Create Category</h3>
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
                            <div class="form-group">
                            </div>
                            <div class="form-group">

                            </div>
                            <form action="{{route('store_category')}}" method="POST">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <select class="form-control" name="status">
                                <option value=0>Status</option>
                                <option value=1>On</option>
                                <option value=2>Off</option>
                            </select>

                            <div class="form-group">

                            </div>

                            <center>
                                <input type="submit" value="Add Category" class="btn btn-info btn-lg">
                            </center>
                            </form>
                        </div>
                        <div class="col-sm-3"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Row ends -->
@endsection
