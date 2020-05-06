<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" onclick="page('page/inicio.php')">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                    <!-- dark Logo text -->
                    <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                    <!-- Light Logo text -->
                    <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">


                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                    <div class="dropdown-menu scale-up-left">
                        <ul class="mega-dropdown-menu row">

                            <li class="col-lg-3 m-b-30">

                                <h4 class="card-title">Almacenes Disponibles</h4>
                                <div class="demo-radio-button">
                                    <?php
                                    $curlHandler = curl_init();

                                    $data = array(
                                        'uid_usuario' => $_SESSION['uid_usuario']

                                    );

                                    curl_setopt_array($curlHandler, [
                                        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/useralmacen',
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLINFO_HEADER_OUT => true,

                                        CURLOPT_POST => true,

                                        CURLOPT_POSTFIELDS => $data,
                                    ]);

                                    $response = curl_exec($curlHandler);

                                    curl_close($curlHandler);

                                    $obj = json_decode($response);
                                    if (!isset($_SESSION['target_almacen'])) {
                                        $_SESSION['target_almacen'] = $obj[0]->{'codalmacen'};
                                        $_SESSION['descripcion_almacen'] = $obj[0]->{'descripcion'};
                                    }
                                    foreach ($obj as $key => $value) {
                                    ?>



                                        <input name="group1" type="radio" href="" <?php echo ($_SESSION['target_almacen'] == $value->{'codalmacen'}) ? 'checked="checked"' : ''; ?> id="<?php echo $value->{'codalmacen'}; ?>" onclick="actualizar(this.id,'<?php echo $value->{'descripcion'}; ?>')" />
                                        <label for="<?php echo $value->{'codalmacen'}; ?>"><?php echo $value->{'descripcion'}; ?></label>




                                    <?php
                                    }
                                    ?>


                                </div>

                            </li>

                        </ul>
                    </div>
                </li>

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">

                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" style="color:white;font-size:18px;" id="almacenSelect">Almacen: <?php echo $_SESSION['descripcion_almacen']; ?></a>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4>Administrador</h4>
                                    </div>
                                </div>
                            </li>
                            <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                
            </ul>
        </div>
    </nav>
</header>