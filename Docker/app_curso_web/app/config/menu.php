<?php
$token = (isset($_SESSION['token']) ? "?token=" . $_SESSION['token'] : "");
require_once("../model/recordset.php");
$rs = new recordset();
?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=$hosted;?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Curso Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$hosted;?>/<?=$_SESSION['usu_foto'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['nome_usu'];?></a>
        </div>
      </div>      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>            
          </li>          
          <li class="nav-item has-treeview <?= ($sess == "SYS" ? "menu-open" : ""); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Sistema
                <i class="fas fa-angle-left right"></i>                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $hosted; ?>/view/sys_pg_empresa.php?token=<?= $_SESSION['token']; ?>"
                    class="nav-link <?= ($pag == "sys_pg_empresa.php" ? "active" : ""); ?>">
                    <i class="fas fa-city nav-icon"></i>
                    <p>Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?= $hosted; ?>/view/sys_pg_departamento.php?token=<?= $_SESSION['token']; ?>"
                      class="nav-link <?= ($pag == "sys_pg_departamento.php" ? "active" : ""); ?>">
                      <i class="fas fa-building"></i>
                      <p>Departamento</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?= $hosted; ?>/view/sys_pg_usuario.php?token=<?= $_SESSION['token']; ?>"
                      class="nav-link <?= ($pag == "sys_pg_usuario.php" ? "active" : ""); ?>">
                      <i class="fas fa-users-cog nav-icon"></i>
                      <p>Usuario</p>
                  </a>
              </li>
          </ul>
          <!-- /.Sistema -->
          </li>          
          <li class="nav-header">Fun&ccedil;&otilde;es</li>                    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Ensino
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aluno</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Curso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matricula</p>
                </a>
              </li>
            </ul>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
