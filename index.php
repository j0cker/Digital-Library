<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Librería Digital</title>

        <!-- Vendor styles -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/jquery.scrollbar.css">
        <link rel="stylesheet" href="css/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">


        <!-- Javascript -->
        <!-- Vendors -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollbar.min.js"></script>
        <script src="js/jquery-scrollLock.min.js"></script>

        <script src="js/salvattore.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/curvedLines.js"></script>
        <script src="js/jquery.vmap.min.js"></script>
        <script src="js/jquery.vmap.world.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.peity.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="js/curved-line.js"></script>
        <script src="js/line.js"></script>
        <!--<script src="js/dynamic.js"></script>-->
        <script src="js/chart-tooltips.js"></script>
        <script src="js/other-charts.js"></script>
        <!--<script src="js/jqvmap.js"></script>-->

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <style>
            [data-columns]::before{display:block;visibility:hidden;position:absolute;font-size:1px;}
        </style>
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader" style="display: none;">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="">Librería Digital</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="http://byrushan.com/projects/super-admin/app/2.0/" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="http://byrushan.com/projects/super-admin/app/2.0/" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Messages

                                <div class="actions">
                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <img src="img/1-1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <img src="img/2-1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <img src="img/3-1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <img src="img/4-1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <img src="img/5-1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="http://byrushan.com/projects/super-admin/app/2.0/" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notifications

                                <div class="actions">
                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <div class="scroll-wrapper listview__scroll scrollbar-inner" style="position: relative;"><div class="listview__scroll scrollbar-inner scroll-content" style="height: 350px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/1-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/2-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/3-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/4-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/5-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/1-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/2-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                        <img src="img/3-1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="http://byrushan.com/projects/super-admin/app/2.0/" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Tasks</div>

                            <div class="listview listview--hover">
                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">HTML5 Validation Report</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Google Chrome Extension</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Social Intranet Projects</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Bootstrap Admin Template</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Youtube Client App</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="view-more">View all Tasks</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="http://byrushan.com/projects/super-admin/app/2.0/" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="http://byrushan.com/projects/super-admin/app/2.0/">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="http://byrushan.com/projects/super-admin/app/2.0/" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item theme-switch">
                                Theme Switch

                                <div class="btn-group btn-group--colors mt-2 d-block" data-toggle="buttons">
                                    <label class="btn active border-0" style="background-color: #772036"><input type="radio" value="1" autocomplete="off" checked=""></label>
                                    <label class="btn border-0" style="background-color: #273C5B"><input type="radio" value="2" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #174042"><input type="radio" value="3" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #383844"><input type="radio" value="4" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #49423F"><input type="radio" value="5" autocomplete="off"></label>

                                    <br>

                                    <label class="btn border-0" style="background-color: #5e3d22"><input type="radio" value="6" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #234d6d"><input type="radio" value="7" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #3b5e5e"><input type="radio" value="8" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #0a4c3e"><input type="radio" value="9" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #7b3d54"><input type="radio" value="10" autocomplete="off"></label>
                                </div>
                            </div>
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/" class="dropdown-item">Clear Local Storage</a>
                        </div>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="hours">10</span>
                        <span class="min">07</span>
                        <span class="sec">48</span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scroll-wrapper scrollbar-inner" style="position: relative;"><div class="scrollbar-inner scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 486px;">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="img/8-1.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">View Profile</a>
                            <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">Settings</a>
                            <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="http://byrushan.com/projects/super-admin/app/2.0/index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub @@variantsactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="http://byrushan.com/projects/super-admin/app/2.0/hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li class="@@boxedactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/boxed-layout.html">Boxed Layout</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="@@typeactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

                        <li class="@@widgetactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li class="@@normaltableactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/html-table.html">HTML Table</a></li>
                                <li class="@@datatableactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/data-table.html">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@formactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li class="@@formelementactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/form-elements.html">Basic Form Elements</a></li>
                                <li class="@@formcomponentactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/form-components.html">Form Components</a></li>
                                <li class="@@formvalidationactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@uiactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                            <ul>
                                <li class="@@colorsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/colors.html">Colors</a></li>
                                <li class="@@cssanimationsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/css-animations.html">CSS Animations</a></li>
                                <li class="@@buttonsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/buttons.html">Buttons</a></li>
                                <li class="@@iconsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/icons.html">Icons</a></li>
                                <li class="@@listviewactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/listview.html">Listview</a></li>
                                <li class="@@toolbarsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/toolbars.html">Toolbars</a></li>
                                <li class="@@cardsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/cards.html">Cards</a></li>
                                <li class="@@alertactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/alerts.html">Alerts</a></li>
                                <li class="@@badgesactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/badges.html">Badges</a></li>
                                <li class="@@breadcrumbsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/breadcrumbs.html">Bredcrumbs</a></li>
                                <li class="@@jumbotronactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/jumbotron.html">Jumbotron</a></li>
                                <li class="@@navsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/navs.html">Navs</a></li>
                                <li class="@@paginationactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/pagination.html">Pagination</a></li>
                                <li class="@@progressactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/progress.html">Progress</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@componentsactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li class="@@carouselactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/carousel.html">Carousel</a></li>
                                <li class="@@collapseactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/collapse.html">Collapse</a></li>
                                <li class="@@dropdownsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/dropdowns.html">Dropdowns</a></li>
                                <li class="@@modalsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/modals.html">Modals</a></li>
                                <li class="@@popoveractive"><a href="http://byrushan.com/projects/super-admin/app/2.0/popover.html">Popover</a></li>
                                <li class="@@tabsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/tabs.html">Tabs</a></li>
                                <li class="@@tooltipsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/tooltips.html">Tooltips</a></li>
                                <li class="@@notificationsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/notifications-alerts.html">Notifications &amp; Alerts</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@chartsactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                            <ul>
                                <li class="@@flotchartsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/flot-charts.html">Flot</a></li>
                                <li class="@@otherchartsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/other-charts.html">Other Charts</a></li>
                            </ul>
                        </li>

                        <li class="@@calendaractive"><a href="http://byrushan.com/projects/super-admin/app/2.0/calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

                        <li class="@@photogalleryactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                        <li class="navigation__sub @@samplepagesactive">
                            <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                            <ul>
                                <li class="@@profileactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/profile-about.html">Profile</a></li>
                                <li class="@@messagesactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/messages.html">Messages</a></li>
                                <li class="@@contactsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/contacts.html">Contacts</a></li>
                                <li class="@@groupsactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/groups.html">Groups</a></li>
                                <li class="@@pricingtablesactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/pricing-tables.html">Pricing Tables</a></li>
                                <li class="@@invoiceactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/invoice.html">Invoice</a></li>
                                <li class="@@todoactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/todo-lists.html">Todo Lists</a></li>
                                <li class="@@notesactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/notes.html">Notes</a></li>
                                <li class="@@loginactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/login.html">Login &amp; SignUp</a></li>
                                <li class="@@lockscreenactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/lockscreen.html">Lockscreen</a></li>
                                <li class="@@lockscreenactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/404.html">404</a></li>
                                <li class="@@emptyactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/empty.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><div class="scroll-element scroll-x scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 88px;"></div></div></div><div class="scroll-element scroll-y scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="height: 397px; top: 0px;"></div></div></div></div>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique SuperAdmin web app experience!</small>
                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>987,459</h2>
                                <small>Total Leads Recieved</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">6,4,8,6,5,6,7,8,3,5,9</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="12" width="2.694545454545455" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="4" width="2.6945454545454535" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="12" width="2.6945454545454535" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="4" width="2.6945454545454552" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="24" width="2.6945454545454623" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="0" width="2.6945454545454552" height="36"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>356,785K</h2>
                                <small>Total Website Clicks</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">4,7,6,2,5,3,8,6,6,4,8</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="18" width="2.694545454545455" height="18"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="4.5" width="2.6945454545454552" height="31.5"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="9" width="2.6945454545454535" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="27" width="2.6945454545454535" height="9"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="13.5" width="2.6945454545454552" height="22.5"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="22.5" width="2.6945454545454552" height="13.5"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="0" width="2.6945454545454552" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="9" width="2.6945454545454552" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="9" width="2.6945454545454623" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="18" width="2.6945454545454552" height="18"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="0" width="2.6945454545454552" height="36"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>$58,778</h2>
                                <small>Total Sales Orders</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">9,4,6,5,6,4,5,7,9,3,6</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="0" width="2.694545454545455" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="12" width="2.6945454545454535" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="16" width="2.6945454545454535" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="0" width="2.6945454545454623" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="24" width="2.6945454545454552" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="12" width="2.6945454545454552" height="24"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>214</h2>
                                <small>Total Support Tickets</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">5,6,3,9,7,5,4,6,5,6,4</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="16" width="2.694545454545455" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="24" width="2.6945454545454535" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="0" width="2.6945454545454535" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="16" width="2.6945454545454623" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="20" width="2.6945454545454552" height="16"></rect></svg>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="http://byrushan.com/projects/super-admin/app/2.0/">Homepage</a>

                        <a class="nav-link" href="http://byrushan.com/projects/super-admin/app/2.0/">Company</a>

                        <a class="nav-link" href="http://byrushan.com/projects/super-admin/app/2.0/">Support</a>

                        <a class="nav-link" href="http://byrushan.com/projects/super-admin/app/2.0/">News</a>

                        <a class="nav-link" href="http://byrushan.com/projects/super-admin/app/2.0/">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

    
<div class="flot-tooltip"></div><div class="jqvmap-label" style="display: none;"></div><div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"><div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div></div></body></html>