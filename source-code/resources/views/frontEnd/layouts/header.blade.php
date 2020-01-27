<header id="header">
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        {{-- Syara logo --}}
                        <a href="{{url('/')}}"><img style="width:300px"  src="{{asset('frontEnd/images/home/syara-logo-transparent.png')}}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            {{-- Home url  --}}
                             <li><a href="{{url('/')}}" class="active">Home</a></li>
                             {{-- Shop url --}}
                            <li class="dropdown"><a href="{{url('/list-products')}}">Shop<i class="fa fa-angle-down"></i></a></li>
                            {{-- Cart url --}}
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            {{-- Auth Check : provides logout and login depending on user status from Laravel itself --}}
                            @if(Auth::check())
                            {{-- Shows "My Account page if the user is logged in only + logout button" --}}
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                            {{-- Shows Login only if the user isnt logged in and makes the my account page invisible --}}
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>