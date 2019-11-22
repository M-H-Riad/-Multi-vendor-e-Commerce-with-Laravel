@extends('admin.layout.master')
@section('content')
    <!-- Top Bar Starts -->
    <div class="top-bar clearfix">
        <div class="row gutter">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="page-title">
                    <h3>Update Category</h3>
                </div>
            </div>

        </div>
    </div>
    <!-- Top Bar Ends -->
    <div class="container-fluid">

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

                            <form method="post" action="{{route('update_category',$category->id)}}" >
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="title">Category Name:</label>
                                    <input type="text" class="form-control" name="name" value={{$category->name}} />
                                </div>
                                <div class="form-group">
                                    <select name="status">
                                        <option value="0">Select Status</option>
                                        @if($category->status == 1)
                                            <option value="1" selected>On</option>
                                            <option value="2">Off</option>
                                        @endif
                                        @if($category->status == 2)
                                            <option value="1" >On</option>
                                            <option value="2" selected>Off</option>
                                        @endif
                                    </select>
                                </div>

                                <input type="submit" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="col-sm-3"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection