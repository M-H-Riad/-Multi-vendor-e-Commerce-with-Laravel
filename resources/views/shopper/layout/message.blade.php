@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <center>{{Session::get('success')}}</center>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <center> {{Session::get('error')}}</center>
    </div>
@endif
@if($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
           <center> <li >{{ $error }}</li></center>
        @endforeach
    </ul>
@endif

