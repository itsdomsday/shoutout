<nav>
                  <a class="navbar-brand" href="#">
                        <img src="https://w7.pngwing.com/pngs/227/383/png-transparent-franklin-marshall-college-youtube-logo-youtube-blue-text-trademark.png" height="65" width="85" style="margin-left: 10px;   border-radius: 50%;" alt=""
                        loading="lazy" style="border-radius: 50%" />
                    </a>
                    <strong style="float: right; margin-top: 18px; margin-right: 5px"><h1>ShoutOut!</h1></strong> 
                    </br>
                    </br>
                    <h2>Places</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Friends</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Marketplace</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Groups</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Most Recent</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Events</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Favorites</h4></span>
                        </a>
                    </li>
                    </ul>


                    <h2>Menu</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Statistics</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Dashboard</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Documents</h4></span>
                        </a>
                    </li>
                    </ul>

                    
                    <h2>Other</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Settings</h4></span>
                        </a>
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                        <a href="{{ route('logout') }}" onlick="event.preventDefault();this.closest('form').submit();">
                        <i class="fas fa-server"></i>
                        <span><h4>{{ __('Log Out') }}</h4></span>
                        </a>
                        </form>
                    </li>
                    </ul>
                  </nav>