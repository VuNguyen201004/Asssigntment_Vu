<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="index.html">
                <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            homepage
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Category <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            @foreach ($categoriesForMenu as $item)
                                <li><a href=""><?= $item['nam']?></a></li>
                            @endforeach
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a href="{{ url('auth/login') }}" class="btn btn-primary">Đăng nhập
                        <i class="ti-angle-down ml-1"></i>
                    </a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ url('auth/logout') }}">Thoát</a>

                    </div>
            </div>

        </nav>
    </div>
</header>
