<container id="nav-container">
            <h1 id="logo"><a href=" / ">KASA</a></h1>
            <div id="toggleBtn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="navbar">
                <ul>
                    <li><a href="javascript:void(0)" onclick="openNav()">Products</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Deals</a></li>
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register')
                    }}">Register</a></li>
                    @else
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" datatoggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span
                    class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                    <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logoutform').submit();">
                    Logout
                    </a>
                    <form id="logout-form" action="{{
                    route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                    </li>
                    </ul>
                    @endif
                    <li><a href="javascript:void(0);" onclick="openCart();">Cart <span class="cart-nav-count">{{ count((array) session('cart')) }}</span></a></li>
                        <div id="cart-container">
                            <div class="cart-count">
                                <i class="fa fa-shopping-cart" style="color:var(--secondarybkg)"></i> 
                                <span>{{ count((array) session('cart')) }}</span>
                            </div>
                            @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                            <div class="cart-total">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                            <div class="cart-products">
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <img src="{{ $details['image'] }}"/>
                                        </div>
                                    
                                        <div class="cart-product-description">
                                            <div class="cart-product-name">
                                                <h4>{{ $details['name'] }}</h4>
                                            </div>
                                            <div class="cart-product-price-quantity">
                                                <div class="cart-product-price">
                                                    <span>${{ $details['price'] }}</span>
                                                </div>
                                                <div class="cart-product-quantity">
                                                    <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>  
                            <div class="cart-view-all">
                                <a href="{{ route('cart') }}">View all</a>
                            </div>
                        <div class="closecart-container">
                            <span onclick="closeCart()">close</span>
                        </div>
                    </div>
                </ul>
            </nav>
        </container>   
        <div id="prod-nav">
            <div class="cat-container">
                <div class="categories">
                    <a href="/shop">All</a>
                    <a href="kitchen.php">Kitchen</a>
                    <a href="living.php">Living</a>
                    <a href="bedroom">Bedroom</a>
                    <a href="study">Study</a>
                    <a href="bathroom">Bathroom</a>
                    <a href="outdoors">Outdoors</a>
                </div>
            </div>
            <div class="closenav-container">
                <span onclick="closeNav()">close</span>
            </div>
        </div> 
