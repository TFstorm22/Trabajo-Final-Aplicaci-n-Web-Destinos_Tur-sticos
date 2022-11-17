<div id="fh5co-header">
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <h1 id="fh5co-logo"><a href="inicio">City Tours</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li class="{{ (Request::path() == 'home' || Request::path() == '') ? 'active' : '' }}">
                            <a href="/inicio">Inicio</a>
                        </li>
                        <li class="{{ (Request::path() == 'lugares') ? 'active' : '' }}">
                            <a href="/lugares">Lugares</a>
                        </li>
                        <li class="{{ (Request::path() == 'contact') ? 'active' : '' }}">
                            <a href="/contactanos">Contáctanos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
