<div class="container">
    <div class="card">
  <div class="card-header">
    LISTA CLIENTES
</div>
  <div class="card-body">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
      

    </tr>
  </thead>
  <tbody>
 <?php foreach($datos as $dato): ?>
<tr>
    
    <th scope="row"><?php echo $dato['nombre']; ?></th>
    <td ><?php echo $dato['apellido']; ?></td>
    <td><?php echo $dato['usuario']; ?></td>
    <td><?php echo $dato['email']; ?></td>
    
    


    <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
    
</div>