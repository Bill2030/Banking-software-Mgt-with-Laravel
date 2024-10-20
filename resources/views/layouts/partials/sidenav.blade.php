<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading text-white">Main Menu</div>
            <a class="nav-link" href="{{ route('index') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="{{ route('customers.index') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                View Customers
            </a>
            <a class="nav-link" href="{{ route('customers.create') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Manage Customers
            </a>
            <a class="nav-link" href="{{ route('user.index') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                User Management
            </a>
            <a class="nav-link" href="{{ route('get.transactions') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Transactions
            </a>
            <a class="nav-link" href="{{ route('withdraw.transaction')}}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Withdrawals
            </a>
            <a class="nav-link" href="{{ route('deposit.transaction') }}">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Deposits
            </a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-book-open"></i></div>
                Profile Management
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                            <a class="nav-link" href="">Forgot Password</a>
                        </nav>
                    </div>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    </div>
                </nav>
            </div>
        </div>

    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{Auth::user()->name}}
    </div>
</nav>