@extends('admin.layout.master')
@section('content')

    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endguest

        @if(Auth::user()->role == 1)
            <script>window.location = "/customer";</script>
        @elseif(Auth::user()->role == 2)
            <script>window.location = "/shopper";</script>
        @endif
    </ul>

        <!-- Container fluid Starts -->

        <!-- Container fluid ends -->

    </div>
@endsection
