<div class="vertical-nav">
    <!-- Collapse menu starts -->
    <button class="collapse-menu">
        <i class="icon-menu2"></i>
    </button>
    <!-- Collapse menu ends -->

    <!-- Current user starts -->
    <div class="user-details clearfix">
        <a href="#" class="user-img">
            <img src="{{asset('admin/img/thumbs/Capture.PNG')}}" alt="User Info">

        </a>
        <h5 class="user-name">Mehedi</h5>
    </div>
    <!-- Current user ends -->

    <!-- Sidebar menu starts -->
    <ul class="menu clearfix">
        <li>
            <a href="/shopper">
                <i class="icon-air-play"></i>
                <span class="menu-item">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="icon-head"></i>
                <span class="menu-item">Product</span>
                <span class="down-arrow"></span>
            </a>
            <ul>

                <li>
                    <a href='{{url('addProduct')}}'>Add Product</a>
                </li>
                <li>
                    <a href='{{ route('product',auth()->user()->id) }}'>Product list</a>
                </li>


            </ul>
        </li>
        <li>
            <a href="#">
                <i class="icon-database"></i>
                <span class="menu-item">Stock</span>
                <span class="down-arrow"></span>
            </a>
            <ul>

                <li>
                    <a href='{{route('stock_create',auth()->user()->id)}}'>Add Stock</a>
                </li>
                <li>
                    <a href='{{ route('stock',auth()->user()->id) }}'>Product list(Stock)</a>
                </li>


            </ul>
        </li>

        <li>
            <a href="#">
                <i class="icon-database"></i>
                <span class="menu-item"> Discount</span>
                <span class="down-arrow"></span>
            </a>
            <ul>

                <li>
                    <a href='{{route('discount_create',auth()->user()->id)}}'>Add Discount</a>
                </li>
                <li>
                    <a href='{{ route('discount',auth()->user()->id) }}'>Check Discount</a>
                </li>


            </ul>
        </li>


    </ul>


</div>
