<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Corretto Coffee House
            
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="active">
                <a href="{{url('redirect')}}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Home</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Sections</p>
        <ul class="menu-list">
            <li class="--set-active-tables-html">
                <a href="{{url('view_users')}}">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    <span class="menu-item-label">Users</span>
                </a>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{url('view_products')}}">
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">All Products</span>
                </a>
            </li>
            
            <li>
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Brands</span>
                    <span class="icon"><i class="mdi mdi-plus"></i></span>
                </a>
                <ul>
                    <li>
                        <a href="{{url('view_brands')}}">
                            <span class="icon"><i class="mdi mdi-brand"></i></span>
                            <span class="menu-item-label">All Brands</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('view_brands_blogs')}}">
                            <span class="icon"><i class="mdi mdi-brand"></i></span>
                            <span class="menu-item-label">Brands Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('view_comments')}}">
                            <span class="icon"><i class="mdi mdi-comment"></i></span>
                            <span class="menu-item-label">Comments</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{url('view_category')}}">
                    <span class="icon"><i class="mdi mdi-shopping"></i></span>
                    <span class="menu-item-label">All Categories</span>
                </a>
            </li>
            
            <li class="--set-active-tables-html">
                <a href="{{url('view_ordershipment')}}">
                    <span class="icon"><i class="mdi mdi-truck-fast"></i></span>
                    <span class="menu-item-label">Orders Shipment</span>
                </a>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{url('view_receipts')}}">
                    <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>
                    <span class="menu-item-label">Orders Receipts</span>
                </a>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{url('view_payment')}}">
                    <span class="icon"><i class="mdi mdi-cash-multiple"></i></span>
                    <span class="menu-item-label">Payment</span>
                </a>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{url('view_feedback')}}">
                    <span class="icon"><i class="mdi mdi-tooltip-text"></i></span>
                    <span class="menu-item-label">FeedBacks</span>
                </a>
            </li>
        </ul>
    </div>
</aside>