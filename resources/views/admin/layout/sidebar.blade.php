<div class="vertical-nav">
    <!-- Collapse menu starts -->
    <button class="collapse-menu">
        <i class="icon-menu2"></i>
    </button>
    <!-- Collapse menu ends -->

    <!-- Current user starts -->
    <div class="user-details clearfix">
        <a href="profile.html" class="user-img">
            <img src="{{asset('admin/img/thumbs/Capture.PNG')}}" alt="User Info">
        </a>
        <h5 class="user-name">Mehedi</h5>
    </div>
    <!-- Current user ends -->

    <!-- Sidebar menu starts -->
    <ul class="menu clearfix">
        <li>
            <a href="index.php">
                <i class="icon-air-play"></i>
                <span class="menu-item">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="icon-head"></i>
                <span class="menu-item">Category</span>
                <span class="down-arrow"></span>
            </a>
            <ul>

                <li>
                    <a href='{{route('create_category')}}'>Create category</a>
                </li>
                <li>
                    <a href='{{ route('category') }}'>Category list</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#">
                <i class="icon-recycle"></i>
                <span class="menu-item">Verification</span>
                <span class="down-arrow"></span>
            </a>
            <ul>

                <li>
                    <a href='{{route('Pending_list')}}'>Pending list</a>
                </li>
                <li>
                    <a href='{{ route('Verified_list') }}'>Verified list</a>
                </li>


            </ul>
        </li>


    </ul>


</div>
