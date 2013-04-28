<header>
    <div class='navbar-wrapper'>
        <div class='container'>
            <div class='navbar navbar-inverse'>
                <nav class='navbar-inner' id='navmenu' role='navigation'>
                    <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav-menu' ) ); ?>
                    <ul class='nav'>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SECOND</a></li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>THIRD</a>
                            <ul class='dropdown-menu'>
                                <li><a href="#">First</a></li>
                                <li><a href="#">Second</a></li>
                                <li><a href="#">Third</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>