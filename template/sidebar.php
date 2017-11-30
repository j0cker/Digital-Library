<?PHP
?>

<aside class="sidebar">
    <div class="scroll-wrapper scrollbar-inner" style="position: relative;"><div class="scrollbar-inner scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 486px;">

        <div class="user">
            <div class="user__info" data-toggle="dropdown">
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

    </div><div class="scroll-element scroll-x scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 88px;"></div></div></div><div class="scroll-element scroll-y scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="height: 397px; top: 0px;"></div></div></div></div>
</aside>