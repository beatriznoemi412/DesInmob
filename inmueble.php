<?php
require_once 'db_fake.php';

function showInmuebleById($id){
  require_once 'templates/header.php';
 
  $inmueble = getInmuebleById($id);
  
  if (!empty($inmueble)) {
    ?>
    <main class="inmueble container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo $inmueble->imagen ?>" class="img-fluid" alt="Inmueble">
        </div>
        <div class="col-md-6">
          <h3 class="mb-4 text-light"><?php echo $inmueble->titulo ?></h3>
          <p class="lead text-light"><?php echo $inmueble->otraDescripcion ?></p>
          <a href="inmuebles" class="btn btn-outline-primary">Volver</a>
        </div>
      </div>
    </main>
    <?php
  } else {
    echo "Inmueble no encontrado.";
  }

  require_once "templates/footer.php";
}
?>
