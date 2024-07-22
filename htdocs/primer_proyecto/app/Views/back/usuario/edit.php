<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Editar</h2>
                
                
                <?php $validation = \Config\Services::validation(); ?>    
                <form method="post" action="<?php echo base_url('enviar-form') ?>">
                    <?=csrf_field();?>
                    
                    <?php if(!empty (session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                    <?php endif; ?>
                    <?php if(!empty (session()->getFlashdata('success'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('success');?>
                </div>
                    <?php endif; ?>
                <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
                        <!--Error-->
                        <?php if($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombre'); ?>
                            </div>
                        <?php }?>
                        </div>
                
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido">
                        <!--Error-->
                        <?php if($validation->getError('apellido')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('apellido'); ?>
                            </div>
                        <?php }?>
                        </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" name="edad" placeholder="Ingresa tu edad"> -->
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu usuario">
                        <!--Error-->
                        <?php if($validation->getError('usuario')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('usuario'); ?>
                            </div>
                        <?php }?>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo electrónico">
                        <!--Error-->
                        <?php if($validation->getError('email')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                            </div>
                        <?php }?>
                        
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
                        <!--Error-->
                        <?php if($validation->getError('pass')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('pass'); ?>
                            </div>
                        <?php }?>
                        </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                            <button type="reset" class="btn btn-secondary">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>