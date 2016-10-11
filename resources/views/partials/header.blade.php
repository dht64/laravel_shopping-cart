
<!--Navbar-->
<nav class="navbar navbar-fixed-top navbar-dark bg-primary">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a href="{{ url('/') }}" class="navbar-brand"><i class="fa fa-angellist"></i> Laravel Shop</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">Features<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Pricing</a>
                </li>

                <li class="nav-item dropdown pull-xs-right">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::check() ? Auth::user()->name : 'User' }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        @if(Auth::check())
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                            <a class="dropdown-item" href="">Another action</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>
                            <a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>
                        @endif
                    </div>
                </li>

                <li class="nav-item pull-xs-right {{ Session::has('cart') ? 'active' : ''}}">
                    <a href="{{ route('product.shoppingCart') }}" class="nav-link"><i class="fa fa-shopping-cart"></i> Shopping Cart <span class="tag red">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
                </li>
            </ul>
            <!--Search form-->
            <form class="form-inline" style="margin-right: 20px;">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->