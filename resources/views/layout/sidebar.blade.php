<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#complaints" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Complaints
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="complaints" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('complaints.index')}}">All Complaints</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> --}}
                    </nav>
                </div>

                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Computer" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="bi bi-pc-display-horizontal"></i></div>
                    Computers
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="Computer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('computer.index')}}">All Computers</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> --}}
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#switchh" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="bi bi-pc-horizontal"></i></div>
                    Switch
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="switchh" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('hpe.index')}}">All Switch</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> --}}
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#nvr" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    NVR
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="nvr" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('nvr.index')}}">All NVR</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> --}}
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cctv" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="bi bi-webcam"></i></div>
                    CCTV
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="cctv" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('cctv.index')}}">All CCTV</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> --}}
                    </nav>
                </div>



             
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Ajanta
        </div>
    </nav>
</div>