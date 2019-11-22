@extends('admin.layout.master')
@section('content')

    <!-- Top Bar Starts -->
    <div class="top-bar clearfix">
        <div class="row gutter">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="page-title">
                    <h3>Category List</h3>
                </div>
            </div>

        </div>
    </div>
    <!-- Top Bar Ends -->
    <div class="container">

        <div>

            <div class="row gutter">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Row Starts -->
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-heading">
                                    <h4>Category List</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead class="bg-success">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($category as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>
                                                        <a href="/category/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form method="post" action="{{ route('destroy_category',$item->id)}}">
                                                            {{ csrf_field() }}
                                                            <input type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure want to delete this?')" value="Delete">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row Ends -->
                </div>
            </div>
        </div>
    </div>


@endsection
