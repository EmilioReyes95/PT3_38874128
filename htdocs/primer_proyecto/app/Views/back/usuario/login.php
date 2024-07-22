<!--====================================================INGRESAR============================================================-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Inicio de Sesión</h2>
                </div>
                

                <div class="card-body">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?=session()->getFlashdata('msg')?>
                    </div>
                    <?php endif;?>
                    <form method="post" action="<?php echo base_url('enviarlogin') ?>">
                        <div class="form-group">
                            <label for="usuario">Correo Electrónico</label>
                            <input type="text" class="form-control" name="email" placeholder="Ingresa tu usuario o correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="mantener-sesion">
                            <label class="form-check-label" for="mantener-sesion">Mantener sesión iniciada</label>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                        <div class="text-center">
                            <p>¿No tienes una cuenta? <a href="<?php echo base_url('/registro') ?>">Regístrate aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================================================INGRESAR============================================================-->
