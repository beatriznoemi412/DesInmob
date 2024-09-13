<?php
require_once 'db_fake.php';

function showInmuebles(){
    require_once 'templates/header.php';
    ?>
 
    <main class="container mt-5">
        <section class="row justify-content-around">

            <?php 
            $inmuebles = getInmuebles();
            foreach($inmuebles as $index => $inmueble) : 
            ?>
            <div class="card mb-4 col-md-5" style="max-width: 27rem;">
              <img src="<?php echo $inmueble->imagen ?>" class="card-img-top" alt="Inmueble">
              <div class="card-body">
                <h5 class="card-title"><?php echo $inmueble->titulo ?></h5>
                <p class="card-text"><?php echo $inmueble->descripcion ?></p>
                <p class="card-text"><?php echo $inmueble->precio ?> U$S</p>
                <a href="inmueble/<?php echo $index ?>" class="btn btn-outline-primary">Ver Propiedad</a>
              </div>
            </div>
            <?php endforeach ?>

        </section>
    </main>
    <?php
    require_once 'templates/footer.php';
}
