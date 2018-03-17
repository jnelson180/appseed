
        <div class="sidebar" data-image="/static/assets/img/sidebar-5.jpg">
        
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
                Tip 2: you can also add an image using data-image tag
            -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.appseed.us" class="simple-text">
                        CT & AppSeed
                    </a>
                </div>
                <ul class="nav">
                    <li class="<?php echo ( 'dashboard' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?php echo ( 'user' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/user">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="<?php echo ( 'table' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/table">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="<?php echo ( 'typography' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/typography">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="<?php echo ( 'icons' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/icons">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="<?php echo ( 'notifications' === $segment ? 'active' : '' ); ?>">
                        <a class="nav-link" href="/notifications">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="/upgrade">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


