<?php
session_start();
include('../arch/kpi.php');
?>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h5 class="m-b-0 font-lgiht"><?php OnClientes($_SESSION['target_almacen']); ?></h5>
                                <h5 class="text-muted m-b-0">Clientes Activos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h5 class="m-b-0 font-light"> On:<?php OnProductos($_SESSION['target_almacen']); ?> | Off:<?php OffProductos($_SESSION['target_almacen']); ?></h5>
                                <h5 class="text-muted m-b-0">Productos Activos | Inactivos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h5 class="m-b-0 font-lgiht">
                                    BsS: <?php SalesDayBs($_SESSION['target_almacen']); ?> | $: <?php SalesDayDls($_SESSION['target_almacen']); ?>
                                </h5>
                                <h5 class="text-muted m-b-0">
                                    VENTAS DIARIAS (BsS / $)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h5 class="m-b-0 font-lgiht">BsS: <?php SalesMonthBs($_SESSION['target_almacen']); ?> | $: <?php SalesMonthDls($_SESSION['target_almacen']); ?></h5>
                                <h5 class="text-muted m-b-0">VENTAS MES (BsS / $)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h5 class="m-b-0 font-lgiht">BsS: <?php documentsExpiredBs($_SESSION['target_almacen']); ?> | $: <?php documentsExpiredDls($_SESSION['target_almacen']); ?></h5>
                                <h5 class="text-muted m-b-0">DOCUMENTOS VENCIDOS (BsS / $)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12" style=" margin-bottom:10px;padding:5px;  ">
                <h3 class="col-lg-12 col-md-12 card-title">TOP PRODUCTOS MAS VENDIDOS</h3>
                <div id="configTopPC">
                    <!-- <button type="button" onclick="{$('#configTP').show();}">Configurar Producto</button> -->
                    <div style="display:flex;justify-content: space-between; ">
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Desde:</span><input class="form-control" type="date" value="<?php echo _data_first_month_day(); ?>" name="" id="fecDTopProducto">
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span> Hasta:</span><input class="form-control" type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fecHTopProducto">
                        </span>

                        <span class="col-lg-3 col-md-3">
                            <span>Top:</span> <select class="form-control" name="" id="topProducto">
                                <option value="5">#5</option>
                                <option value="10" selected="selected">#10</option>
                                <option value="20">#20</option>
                                <option value="50">#50</option>
                            </select>
                        </span>
                        <button class="btn btn-outline-dark col-lg-3 col-md-3 form-control" type="button" onclick="loadTopProductos()">Actualizar</button>
                    </div>
                    <div style="display:flex;justify-content: space-between;">
                        <span class="col-lg-3 col-md-3">
                            <span>Linea:</span>
                            <select class="form-control" id="lineaTopProducto" onchange="getSubLinea(this.value)">
                                <option value="">...</option>
                                <?php
                                $linea = getLinea();
                                $linea = json_decode($linea);

                                foreach ($linea as $key => $value) {
                                ?>
                                    <option value="<?php echo $value->codigo; ?>"><?php echo $value->descripcion; ?></option>
                                <?php
                                }
                                ?>
                                </option>
                            </select>
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Sub Linea:</span> <select class=" form-control" name="" id="subLineaTopProducto">
                                <option value="">...</option>
                                <?php
                                $subLinea = getSublinea('');
                                $subLinea = json_decode($subLinea);

                                foreach ($subLinea as $key => $value) {

                                ?>
                                    <option value="<?php echo $value->codigo; ?>"><?php echo $value->descripcion; ?></option>
                                <?php
                                }
                                ?>
                                </option>
                            </select>
                        </span>
                        <span class="col-lg-6 col-md-6">

                        </span>
                    </div>
                </div>
                <div id="topPC" class="col-lg-10 col-md-10 row" style="display:flex;justify-content: space-between;">

                </div>
            </div>
            <div class="col-lg-12 col-md-12 row" style=" margin:0px;padding:5px;  ">
                <h3 class="col-lg-12 col-md-12 card-title">TOP CLIENTES CON MAS COMPRAS</h3>
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
                                <option value="5">#5</option>
                                <option value="10" selected="selected">#10</option>
                                <option value="20">#20</option>
                                <option value="50">#50</option>
                            </select>
                        </span>
                        <button class="btn btn-outline-dark col-lg-3 col-md-3 form-control" type="button" onclick="loadTopClientes()">Actualizar</button>
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
                <div id="topCC" class="col-lg-10 col-md-10" style="display:flex;justify-content: space-between;">
                    <div class="lds-load ">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 row" style=" margin:0px;padding:5px;  ">
                <h3 class="col-lg-12 col-md-12 card-title">TOP VENDEDORES CON MAS VENTAS</h3>
                <div id="configTopVendedores">
                    <!-- <button type="button" onclick="{$('#configTP').show();}">Configurar Producto</button> -->
                    <div style="display:flex;justify-content: space-between; ">
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Desde:</span>
                            <input class=" form-control" type="date" value="<?php echo _data_first_month_day(); ?>" name="" id="fecDTopVendedor">
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Fecha Hasta:</span>
                            <input class="form-control" type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fecHTopVendedor">
                        </span>
                        <span class="col-lg-3 col-md-3">
                            <span>Top:</span>
                            <select class="form-control" id="topVendedor">
                                <option value="5">#5</option>
                                <option value="10" selected="selected">#10</option>
                                <option value="20">#20</option>
                                <option value="50">#50</option>
                            </select>
                        </span>
                        <button class="btn btn-outline-dark col-lg-3 col-md-3 form-control" type="button" onclick="loadTopVendedores()">Actualizar</button>
                    </div>
                    <div style="display:flex;justify-content: space-between;">
                        <span class="col-lg-3 col-md-3">
                            <span>Moneda:</span>
                            <select class="form-control" id="monedaTopVendedor">
                                <option value="BsS">BsS</option>
                                <option value="$">$</option>
                            </select>
                        </span>
                        <span class="col-lg-9 col-md-9">

                        </span>
                    </div>

                </div>
                <div id="topCV" class="col-lg-10 col-md-10" style="display:flex;justify-content: space-between;">

                </div>
            </div>
        </div>
        <input type="hidden" id="cod_Almacen" value="<?php echo $_SESSION['target_almacen']; ?>">

    </div>
</div>

<script>
</script>

<style>
    .lds-load {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-load div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #000;
        animation: lds-load 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
    }

    .lds-load div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
    }

    .lds-load div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
    }

    .lds-load div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
    }

    @keyframes lds-load {
        0% {
            top: 8px;
            height: 64px;
        }

        50%,
        100% {
            top: 24px;
            height: 32px;
        }
    }
</style>