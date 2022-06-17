<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('backend/img/brand/logo.png') }}" class="navbar-brand-img">
            </a>
            <h3 class="sidebar-brand-text text-primary text-bold">ESPORT</h3>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <h6 class="navbar-heading p-0 text-muted mt-3">Admin Panel</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{request() -> is ('home') ? 'active' : ''}}" href="home" role="button" aria-expanded="true"
                            aria-controls="navbar-dashboards">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                    </li>
                </ul >
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">Content</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{request() -> is ('slider') ? 'active' : ''}}" href="/slider" role="button" aria-expanded="true"
                            aria-controls="navbar-dashboards">
                            <i class="fas fa-sliders-h text-primary"></i>
                            <span class="nav-link-text">Slider</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request() -> is ('tournament') ? 'active' : '' }}"
                            href="/tournament" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="fas fa-calendar-alt text-primary"></i>
                            <span class="nav-link-text">Event Tournament</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request() -> is ('count') ? 'active' : '' }}"
                            href="/count" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="fas fa-clock text-primary"></i>
                            <span class="nav-link-text">Countdown</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request() -> is ('blog') ? 'active' : '' }}"
                            href="/blog" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="fas fa-blog text-primary"></i>
                            <span class="nav-link-text">Esport blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request() -> is ('sponsor') ? 'active' : '' }}"
                            href="/sponsor" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="fas fa-store text-primary"></i>
                            <span class="nav-link-text">Sponsor</span>
                        </a>
                    </li>   
                    
                </ul>
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">Setting</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request() -> is ('setting') ? 'active' : '' }}"
                            href="/setting" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="fas fa-cog text-primary"></i>
                            <span class="nav-link-text">Page setting</span>
                        </a>
                    </li>
                </ul>
                <!-- <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">Participant</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-team" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-team">
                          <i class="fas fa-gamepad text-primary"></i>
                          <span class="nav-link-text">Data Pemain</span>
                        </a>
                        <div class="collapse show" id="navbar-team">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{request() -> is ('team') ? 'active' : ''}}" href="/team" role="button" aria-expanded="true"
                                    aria-controls="navbar-dashboards">
                                    <i class="fas fa-users text-primary"></i>
                                    <span class="nav-link-text">Team </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-dashboards" role="button" aria-expanded="true"
                                    aria-controls="navbar-dashboards">
                                    <i class="fas fa-user text-primary"></i>
                                    <span class="nav-link-text">User</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-dashboards" role="button" aria-expanded="true"
                                    aria-controls="navbar-dashboards">
                                    <i class="fas fa-file text-primary"></i>
                                    <span class="nav-link-text">Register</span>
                                </a>
                            </li>

                          </ul>
                        </div>
                      </li>
                    
                    

                    
                </ul> -->
            </div>
        </div>
    </div>
</nav>
