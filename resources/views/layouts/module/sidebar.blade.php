<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="POS" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">BULLEBALI STORE</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/jo.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Bullebali</a>
            </div>
        </div>
​
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('home')}}" class="nav-link">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Manajemen Master
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="nav-link">
                                <p>Kategori</p>
                            </a>
                        </li>
                                <li class="nav-item">
                                <a href="{{ route('produk.index') }}" class="nav-link">
                                <p>Produk</p>
                            </a>
                        </li></li>
                                <li class="nav-item">
                                <a href="{{ route('customers.index') }}" class="nav-link">
                                <p>Customer</p>
                            </a>
                        </li>  
                    </ul>
                <li class="nav-item has-treeview">
                    <a href='#' class="nav-link">
                                <i class="nav-icon fa fa-server">
                                </i>
                        <p>
                        Transaksi
                                <i class="right fa fa-angle-left">
                                </i>
                        </p>   
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <p>Booking</p>
                            </a>
                        </li>
                                <li class="nav-item">
                                <a href="{{ route('return.index') }}" class="nav-link">
                                <p>Return</p>
                                </a>
                                </li>
                    </ul>
                </li>
                    <li class="nav-item has-treeview">
                              <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="nav-icon fa fa-sign-out"></i>
                            <p>
                                {{ __('Logout') }}
                            </p>
                            </a>
​                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </li>
                </li>
            </ul>
        </nav>
    </div>
</aside>