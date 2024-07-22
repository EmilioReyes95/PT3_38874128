<!--navbar-->
<?php
    $session = session();
    $nombre=$session->get('nombre');
    $perfil=$session->get('perfil_id');
    ?>
<div class="row">
        <div class="col-1 bg-success logo text-center">
            <!--<img src="assets/img/ticktocklogo.jpg" class="img-fluid">-->
        </div>
        <div class="col-12  bg-body-tertiary" id="menu">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="<?php echo base_url('principal')?>">
                  <img src="<?php echo base_url('assets/img/ticktocklogo.jpg')?>" class="img-fluid" style="max-width: 100px;">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <?php if (session()->perfil_id == 1): ?>
                    <div class="btn btn-secondary active btnUser btn-sm">
                      <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
                  </div>
                  <a class="navbar-brand" href="#"></a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='principal'>Inicio</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='clientes'>Clientes</a>
                      </li>   
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='registro'>Agregar clientes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='edit'>Editar clientes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/logout');?>">Cerrar Sesion</a>
                      </li>
                  </ul>
                  <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>

               <?php elseif (session()->perfil_id == 2): ?>
                <div class="btn btn-info active btnUser btn-sm">
                      <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
                  </div>
               <!---Clientes que pueden comprar--->
               <a class="navbar-brand" href="#"></a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href='quienes_somos'>Quienes somos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href='acerca_de'>Acerca de Nosotros</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Catálogo
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="https://www.omegawatches.com/es/">Omega</a></li>
                          <li><a class="dropdown-item" href="https://www.casio.com/intl/watches/">Casio</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://www.swatch.com/es-ar/">Swatch</a></li>
                        </ul>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/logout');?>">Cerrar Sesion</a>
                      </li>
                  </ul>
                  <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                  <?php else:?> 
<!------------------------------------------------------Resto de usuarios---------------------------------------------------------->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href='quienes_somos'>Quienes somos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href='acerca_de'>Acerca de Nosotros</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='registro'>Registrarse</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='login'>Login</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Catálogo
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="https://www.omegawatches.com/es/">Omega</a></li>
                          <li><a class="dropdown-item" href="https://www.casio.com/intl/watches/">Casio</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://www.swatch.com/es-ar/">Swatch</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled bg-success text-warning" aria-disabled="true">Talentos Digitales</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    <?php endif;?>

                    </div>
              
        </div>
      </div>
  </div>
</nav>