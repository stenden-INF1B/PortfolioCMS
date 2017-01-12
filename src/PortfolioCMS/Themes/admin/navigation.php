<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../assets/admin/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="overzicht" class="simple-text">
                    Portfolio Beheer
                </a>
            </div>

            <ul class="nav">
                <li <?php if ($isOnAdminPage == 'overzicht') {?>class="active"<?php } ?>>
                    <a href="./overzicht">
                        <i class="fa fa-list"></i>
                        <p>Gebruikers</p>
                    </a>
                </li>
                <li <?php if ($isOnAdminPage == 'portfolio') {?>class="active"<?php } ?>>
                    <a href="./portfolio">
                        <i class="fa fa-user-circle-o"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li <?php if ($isOnAdminPage == 'thema') {?>class="active"<?php } ?>>
                    <a href="./thema">
                        <i class="fa fa-cube"></i>
                        <p>Thema</p>
                    </a>
                </li>
                <li <?php if ($isOnAdminPage == 'cijferregistratie') {?>class="active"<?php } ?>>
                    <a href="./cijferregistratie">
                        <i class="fa fa-area-chart"></i>
                        <p>Cijferregistratie</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="overzicht">Gebruikers</a>
                </div>
                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                <i class="fa fa-user"></i> "Gebruiker"
                            </a>
                        </li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="../logout">
                                <i class="fa fa-sign-out"></i> Uitloggen
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>