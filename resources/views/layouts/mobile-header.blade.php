
<div class="container">
    <div id="sidebar" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="pd_toggle_logo">
            <a href="index_wines.html">
            <img src="/images/wins/toggle_wines.png" alt="img">
            </a>
        </div>
        <div id="toggle_close">&times;</div>
        <div id='cssmenu'>
            <ul>
                <li>
                    <form method="get" action="{{ route("search") }}">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" value="{{ request()->keyword }}" name="keyword">
                        <button class="btn search_btn bg-main color-white"><i class="fas fa-search"></i></button>
                    </form>
                </li>
                <li>
                    <a href="index_wines.html"> Home</a>
                </li>
                <li class='has-sub'>
                    <a href='#'> Pages</a>
                    <ul>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="compare.html">Compare</a></li>
                        <li><a href="shoping_cart.html">Shoping Cart</a></li>
                        <li><a href="order_tracking.html">Order Tracking</a></li>
                        <li><a href="coming_soon.html">Coming Soon 1</a></li>
                        <li><a href="coming_soon_update.html">Coming Soon 2</a></li>
                        <li><a href="error.html">404 Error</a></li>
                    </ul>
                </li>
                <li class='has-sub'>
                    <a href='#'>Wines</a>
                    <ul>
                        <li><a href="javascript:;">Winery</a></li>
                        <li><a href="javascript:;">Fratelli Wines</a></li>
                        <li><a href="javascript:;">Big Banyan Merlot </a></li>
                    </ul>
                </li>
                <li class='has-sub'>
                    <a href='#'>Shop</a>
                    <ul>
                        <li><a href="product-grid-view.html">Product grid view</a></li>
                        <li><a href="wins_single-product.html">Wins Single Product 01</a></li>
                        <li><a href="wins_single-product2.html">Wins Single Product 02</a></li>
                        <li><a href="wins_single-product3.html">Wins Single Product 03</a></li>
                        <li><a href="wins_single-product4.html">Wins Single Product 04</a></li>
                        <li><a href="wins_single-product5.html">Wins Single Product 05</a></li>
                    </ul>
                </li>
                <li class='has-sub'>
                    <a href='#'>Blog</a>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_full_width.html">Blog Full Width</a></li>
                        <li><a href="blog_grid.html">Blog Grid</a></li>
                        <li><a href="blog_list.html">Blog List</a></li>
                        <li><a href="blog_single_sidebar.html">Blog Single</a></li>
                    </ul>
                </li>
                <li><a href="contact_us.html"> Contact</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Login</a></li>
            </ul>
            <div class="share_link">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
