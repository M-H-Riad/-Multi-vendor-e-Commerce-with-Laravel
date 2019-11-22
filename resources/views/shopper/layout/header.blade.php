<header>

    <!-- Logo starts -->
    <a href="/shopper" class="logo">
        <img class="im-responsive" src="{{asset('admin/img/shopownerlogo.PNG')}}" alt="Shop Owner Dashboard" />
    </a>
    <!-- Logo ends -->

    <!-- Header actions starts -->
    <ul id="header-actions" class="clearfix">

        <li class="list-box user-admin hidden-xs dropdown">
            <div class="admin-details">
                <div class="name">Mehedi</div>
                <div class="designation">System Admin</div>
            </div>
            <a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-user"></i>
            </a>
            <ul class="dropdown-menu sm">
                <li class="dropdown-content">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        <li>
            <button type="button" id="toggleMenu" class="toggle-menu">
                <i class="collapse-menu-icon"></i>
            </button>
        </li>
    </ul>
    <!-- Header actions ends -->

</header>