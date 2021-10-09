<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ url('/product') }}"><i class="md md-home"></i>Product</a>
                </li>
                <li class="has-submenu">
                    <a href="{{ url('/order') }}"><i class="md md-home"></i>Order</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="md md-group"></i>Laporan</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('/laporan') }}">Laporan Total</a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan/customer') }}">Laporan Customer</a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan/agent') }}">Laporan Agent</a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan/item') }}">Laporan Item</a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan/category') }}">Laporan Kategori Produk</a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan/top') }}">Top 10</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu        -->
        </div>
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->