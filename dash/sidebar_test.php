    <?php

if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
  header("location: login.php");
  exit;
}
?>


    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="logo.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">OESVICA</p>
          <p class="app-sidebar__user-designation">Deptto de Nomina</p>
        </div>
      </div>
      <ul class="app-menu">
        <?php
          
      $tipo = $_SESSION['tipo'];
      if ($tipo == 1 || $tipo == 2) {
        ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-check"></i><span class="app-menu__label">Conceptos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a class="treeview-item" href="#" onclick="page('page/tb_prueba.php')" rel="noopener"><i class="icon fa fa-circle-o"></i>Gestion</a></li>
            
          </ul>
        </li>
        <?php
      }
        ?>



<?php
          
      $tipo = $_SESSION['tipo'];
      if ($tipo == 1 || $tipo == 2) {
        ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Asignacion-Bonos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a class="treeview-item" href="#" onclick="page('page/tb_asignacion_bonos.php')" rel="noopener"><i class="icon fa fa-circle-o"></i>Gestion</a></li>

            <li class="treeview" ><a class="treeview-item" href="#" rel="noopener"><i class="icon fa fa-circle-o"></i><span>Reporte Asig-Cliente</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="">
                
            <li><a class="treeview-item" href="reportes/reporte_asignacion.php" target="_blank" type="POST" rel="noopener"><i class="icon fa fa-circle-o"></i>PDF</a> 

              <li><a class="treeview-item" href="reportes/reporte_asignacion_excel.php"  rel="noopener"><i class="icon fa fa-circle-o"></i>Excel</a> 

              </ul>

            </li>


          </ul>
        </li>
    <?php
      }
        ?>

<?php
          
      $tipo = $_SESSION['tipo'];
      if ($tipo == 1 || $tipo == 2) {
        ?>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calculator"></i><span class="app-menu__label">Calculo de Bonos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a class="treeview-item" href="#" onclick="page('page/calculo.php')" rel="noopener"><i class="icon fa fa-circle-o"></i>Gestion Quincenal</a></li>

            <li><a class="treeview-item" href="#" onclick="page('page/calculoSemanal.php')" rel="noopener"><i class="icon fa fa-circle-o"></i>Gestion Semanal</a></li>


          </ul>
        </li>

            <?php
      }
        ?>

<?php
          
      $tipo = $_SESSION['tipo'];
      if ($tipo >= 1 ) {
        ?>

          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Revision de Fichas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a class="treeview-item" href="reportes/reporte_profit_vs_ibarti.php" rel="noopener"><i class="icon fa fa-circle-o"></i>Reporte</a></li>

          </ul>
        </li>
    <?php
      }
        ?>

      </ul>

                                    
        <!--
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
      </ul>
    -->
  </aside>