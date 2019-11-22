@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <center>{{Session::get('success')}}</center>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <center> {{Session::get('error')}}</center>
    </div>
@endif