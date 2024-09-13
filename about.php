
<?php
require_once "db_fake.php";

function showAbout($vend = null){
    $vendedores = getVendedores();
    $selectedVend = getVendedorById($vend);

    require_once "templates/header.php";
    ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-4 ">
            <h3 class="mb-4 text-center text-light">Nuestros Expertos</h3>
            <div class="card list-group">
                <?php foreach ($vendedores as $id => $vendedor) { ?>
                <a href="about/<?php echo $vendedor->id ?>" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo $vendedor->imagen ?>" alt="Imagen de <?php echo $vendedor->nombre ?>"
                            class="rounded-circle me-3" style="width: 100px; height: 90px;">
                        <div>
                            <h6 class="mb-0"><?php echo $vendedor->nombre ?></h6>
                            <small class="text-muted"><?php echo $vendedor->rol ?></small>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>

        <div class="col-md-8">
            <?php if (isset($selectedVend)) { ?>
            <div class="card" style="width: 50%;">
                <img class="card-img-top" src="<?php echo $selectedVend->imagen ?>" alt="Imagen del vendedor">
                <div class="card-body">
                    <p class="card-text"><?php echo $selectedVend->nombre ?></p>
                    <p class="card-text"><?php echo $selectedVend->rol ?></p>
                    <p class="card-text"><?php echo $selectedVend->email ?></p>
                    <p class="card-text"><?php echo $selectedVend->antiguedad ?></p>
                    <a href="about" class="btn btn-primary mt-3">Volver a Expertos</a>
                </div>
            </div>
            <?php } else { ?>
            <div class="col-md-8 mt-5 alert alert-info" role="alert">
                <p>Seleccione un vendedor de la lista para ver más detalles y comuníquese con el que le agrade más.
                    Estaremos felices de atender cualquier inquietud.</p>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php 
    require_once "templates/footer.php"; 
}
?>
