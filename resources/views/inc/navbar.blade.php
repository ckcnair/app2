@section('navbar')
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">CompanyName</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapseContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapseContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="./about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Product 1</a>
                            <a class="dropdown-item" href="#">Product 1</a>
                            <a class="dropdown-item" href="#">Product 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Product 1</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="./contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        @show