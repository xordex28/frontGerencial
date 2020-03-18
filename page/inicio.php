<?php
   session_start(); 
   include('../arch/kpi.php');
?>
<div class="page-wrapper">
<div class="container-fluid">
  <br>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">  <?php OnClientes($_SESSION['target_almacen']); ?> </h3>
                                        <h5 class="text-muted m-b-0">Clientes Activos</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php OnProductos($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">Productos Activos</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php OffProductos($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">Productos Inactivos</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php SalesDayDls($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">VENTAS DIARIAS ($)</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php SalesDayBs($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">VENTAS DIARIAS (BS)</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                      <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php SalesMonthDls($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">VENTAS MES ($)</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php SalesMonthBs($_SESSION['target_almacen']); ?></h3>
                                        <h5 class="text-muted m-b-0">VENTAS MES (BS)</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <input type="hidden" id="cod_Almacen" value="<?php echo $_SESSION['target_almacen'];?>">
                <div id="topP"></div>
</div>  
</div>  