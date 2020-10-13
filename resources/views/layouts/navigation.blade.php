<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                    <img alt="image" class="rounded-circle" src="{{asset('img/SELogo.jpg')}}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{auth()->user()->name}}<b class="caret"></b></span>
                        <!-- <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> -->
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <!-- <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li> -->
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="">
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Setting</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="index.html"><i class="fa fa-briefcase"></i>Products</a></li>
                    <li><a href="dashboard_2.html"><i class="fa fa-users"></i>Customers</a></li>
                    <li><a href="dashboard_3.html"><i class="fa fa-users"></i>Sellers</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-fw fa-rupee"></i> <span class="nav-label">Transactions</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="index.html">All Transactions</a></li>
                    <li class=""><a href="index.html">Balance Sheet</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span class="nav-label">Sales</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="index.html">All Transactions</a></li>
                    <li class=""><a href="index.html">Balance Sheet</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
