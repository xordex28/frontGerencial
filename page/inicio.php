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
                                <h3 class="m-b-0 font-light"> <?php OnClientes($_SESSION['target_almacen']); ?> </h3>
                                <h5 class="text-muted m-b-0">Clientes Activos</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">Productos Activos</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">Productos Inactivos</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">VENTAS DIARIAS ($)</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">VENTAS DIARIAS (BS)</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">VENTAS MES ($)</h5>
                            </div>
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
                                <h5 class="text-muted m-b-0">VENTAS MES (BS)</h5>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </div>
            <!-- Column -->
        </div>
        <div class="col-lg-12 col-md-12" style="display: grid;grid-row-gap: 10px;">
            <span>TOP PRODUCTOS MAS VENDIDOS</span>
            <!-- <button type="button" onclick="{$('#configTP').show();}">Configurar Producto</button> -->
            <div class="col-lg-12 col-md-12" id="configTP" style="display: block;">
                <span><strong>Fecha Desde:</strong> <input type="date" value="<?php echo _data_first_month_day(); ?>" name="" id="fecDTopProducto"></span>
                <span><b>Fecha Hasta:</b> <input type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fecHTopProducto"></span>
                <span><b>Top:</b> <select name="" id="topProducto">
                        <option value="1">#1</option>
                        <option value="5">#5</option>
                        <option value="10">#10</option>
                        <option value="20">#20</option>
                        <option value="50">#50</option>
                    </select></span>
                <span><button type="button" onclick="loadTopProductos()">Actualizar</button></span>
            </div>
            <div id="topPC">

            </div>
        </div>
        <input type="hidden" id="cod_Almacen" value="<?php echo $_SESSION['target_almacen']; ?>">

    </div>
</div>
=======

                <div class="col-lg-12 col-md-12">
            TOP PRODUCTOS MAS VENDIDOS
            <div class="col-lg-12 col-md-12">
            <span><strong>Fecha Desde:</strong> <input type="date" name="" id="fecDTopProducto"></span>
            <span><b>Fecha Hasta:</b> <input type="date" name="" id="fecHTopProducto"></span>
            <span><b>Top:</b> <select name="" id="topProducto">
                <option value="1">#1</option>
                <option value="5">#5</option>
                <option value="10">#10</option>
                <option value="20">#20</option>
                <option value="50">#50</option>
            </select></span>
            <span><button type="button" onclick="loadTopProductos()" >Actualizar</button></span>
        </div>
            <div id="topP"></div>
        </div>
        <input type="hidden" id="cod_Almacen" value="<?php echo $_SESSION['target_almacen']; ?>">


</div>  
</div>  
>>>>>>> eliezer
