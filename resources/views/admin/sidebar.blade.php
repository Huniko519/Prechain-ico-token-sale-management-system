<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="{{Auth('admin')->User()->dashboard_style}}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
            <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth('admin')->User()->name }}
                        </span>
                    </a>
                </div>
            </div>
           
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.trx') }}">
                        <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                        <p>Transactions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kyclist') }}">
                        <i class="fas fa-list-alt" aria-hidden="true"></i>
                        <p>KYC List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('userlist') }}">
                        <i class="fas fa-users-cog" aria-hidden="true"></i>
                        <p>User List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('stages') }}">
                        <i class=" fas fa-coins" aria-hidden="true"></i>
                        <p>ICO/STO Stage</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('settings') }}">
                        <i class=" fas fa-cog" aria-hidden="true"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
