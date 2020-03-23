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
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12" style=" margin-bottom:10px;padding:5px; border:1px solid; ">
                <h3 class="col-lg-12 col-md-12 card-title">TOP PRODUCTOS MAS VENDIDOS</h3>
                <div id="configTopPC">
                    <!-- <button type="button" onclick="{$('#configTP').show();}">Configurar Producto</button> -->
                    <div style="display:flex;justify-content: space-between; ">
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Desde:</span><input class="form-control" type="date" value="<?php echo _data_first_month_day(); ?>" name="" id="fecDTopProducto">
                        </span >
                        <span class="col-lg-3 col-md-3">
                            <span> Hasta:</span><input class="form-control" type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fecHTopProducto">
                        </span>

                        <span class="col-lg-3 col-md-3">
                            <span>Top:</span> <select class="form-control" name="" id="topProducto">
                                <option value="1">#1</option>
                                <option value="5">#5</option>
                                <option value="10">#10</option>
                                <option value="20">#20</option>
                                <option value="50">#50</option>
                            </select>
                        </span>
                        <button class="col-lg-3 col-md-3 form-control" type="button" onclick="loadTopProductos()">Actualizar</button>
                    </div>

                </div>
                <div id="topPC" class="col-lg-10 col-md-10 row">

                </div>
            </div>
            <div class="col-lg-12 col-md-12 row" style=" margin:0px;padding:5px; border:1px solid; ">
                <h3 class="col-lg-12 col-md-12 card-title">TOP VENTAS DE CLIENTES</h3>
                <div id="configTopCliente">
                    <!-- <button type="button" onclick="{$('#configTP').show();}">Configurar Producto</button> -->
                    <div style="display:flex;justify-content: space-between; ">
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Desde:</span>
                            <input class=" form-control" type="date" value="<?php echo _data_first_month_day(); ?>" name="" id="fecDTopCliente">
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Hasta:</span>
                            <input class="form-control" type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fecHTopCliente">
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Top:</span>
                            <select class="form-control" id="topCliente">
                                <option value="1">#1</option>
                                <option value="5">#5</option>
                                <option value="10">#10</option>
                                <option value="20">#20</option>
                                <option value="50">#50</option>
                            </select>
                        </span>
                        <button class="col-lg-3 col-md-3 form-control" type="button" onclick="loadTopClientes()">Actualizar</button>
                    </div>
                    <div style="display:flex;justify-content: space-between;">
                        <span class="col-lg-3 col-md-3">
                            <span>Zona:</span>
                            <select class="form-control" id="zonaTopCliente">
                                <option value="">...</option>
                                <?php
                                $zonas = getZona();
                                $zonas = json_decode($zonas);

                                foreach ($zonas as $key => $value) {

                                ?>
                                    <option value="<?php echo $value->codigo; ?>"><?php echo $value->descripcion; ?></option>
                                <?php
                                }
                                ?>
                                </option>
                            </select>
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Canal:</span> <select class=" form-control" name="" id="canalTopCliente">
                                <option value="">...</option>
                                <?php
                                $canal = getCanal();
                                $canal = json_decode($canal);

                                foreach ($canal as $key => $value) {

                                ?>
                                    <option value="<?php echo $value->codigo; ?>"><?php echo $value->descripcion; ?></option>
                                <?php
                                }
                                ?>
                                </option>
                            </select>
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Moneda:</span>
                            <select class="form-control" id="monedaTopCliente">
                                <option value="BsS">BsS</option>
                                <option value="$">$</option>
                            </select>
                        </span>
                        <span class="col-lg-3 col-md-3">

                        </span>
                    </div>

                </div>
                <div id="topCC" class="col-lg-10 col-md-10">

                </div>
            </div>
        </div>
        <input type="hidden" id="cod_Almacen" value="<?php echo $_SESSION['target_almacen']; ?>">

    </div>
</div>

<script>
    function mostrarConfig(id, metodo) {
        if (metodo) {

            $("#" + id).addClass("bounce");
        } else {

            $("#" + id).addClass("fadeOutDown");
        }
    }
</script>