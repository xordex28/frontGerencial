<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <?php echo $_SESSION['nombre']; ?> </a>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">


                                <li> <a class="has-arrow waves-effect waves-dark" onclick="page('page/inicio.php')" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">DASHBOARD </span></a>

                </li>
             

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-dropbox"></i><span class="hide-menu">INVENTARIO </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a onclick="page('page/list_inventario.php')">Listado</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">CLIENTES</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a onclick="page('page/list_clientes.php')">Listado</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">CUENTAS X COBRAR</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a onclick="page('page/list_cxc.php')">Listado </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu">PROVEEDORES</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a onclick="page('page/list_proveedores.php')">Listado</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">CUENTAS X PAGAR</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a onclick="page('page/list_cxp.php')">Listado</a></li>
                    </ul>
                </li>



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">

        <!-- item--><a href="login.php?logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
        <!-- End Bottom points-->
    </aside>