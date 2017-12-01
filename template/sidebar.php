<?PHP
?>

<aside class="sidebar">
    <div class="scrollbar-inner" style="position: relative;">
        <div class="scrollbar-inner" style="margin-bottom: 0px; margin-right: 0px;">

        <div class="user">

            <!--data-toggle="dropdown"-->
            <div ng-click="bienvenido()" class="user__info">
                <div>
                    <div style="text-align: center;" class="user__name">Bienvenid@</div>
                </div>
            </div>
        

            <!--
            <div class="dropdown-menu">
                <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">View Profile</a>
                <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">Settings</a>
                <a class="dropdown-item" href="http://byrushan.com/projects/super-admin/app/2.0/">Logout</a>
            </div>
            -->

        </div>

        <ul class="navigation">
    
            <li  ng-click="area()" id="{{ key+1 }}" ng-repeat="(key,x) in areas" class="navigation__sub @@variantsactive">
                <a href="http://byrushan.com/projects/super-admin/app/2.0/"><i class="zmdi zmdi-view-week"></i> {{ x }}</a>

                <!--
                <ul>
                    <li class="@@sidebaractive"><a href="http://byrushan.com/projects/super-admin/app/2.0/hidden-sidebar.html">Hidden Sidebar</a></li>
                    <li class="@@boxedactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/boxed-layout.html">Boxed Layout</a></li>
                    <li class="@@hiddensidebarboxedactive"><a href="http://byrushan.com/projects/super-admin/app/2.0/hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                </ul>
                -->

            </li>

        </ul>

    </div>
</div>
</aside>