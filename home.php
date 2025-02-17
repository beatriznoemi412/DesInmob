<?php
function home() {
    require_once "templates/header.php";
    ?>
<main class="container mt-5 d-flex justify-content-around">
    
    <section class="icono mb-4 p-3">
        <img class="iconos" src="./images/candado.png" alt="candado">
        <h2 class="text-center text-light">SEGURIDAD</h2>
        <p class="text-center text-light">En M & M Servicios Inmobiliarios, nos tomamos la seguridad muy en serio. Todas nuestras
            propiedades están ubicadas en zonas seguras y cuentan con sistemas de seguridad avanzados para garantizar la
            tranquilidad de nuestros clientes.</p>
    </section>

    <section class="icono mb-4 p-3">
        <img class="iconos" src="./images/pesos.png" alt="Pesos">
        <h2 class="text-center text-light">PRECIO</h2>
        <p class="text-center text-light">Ofrecemos precios competitivos y ajustados al mercado, asegurando que obtienes el mejor
            valor por tu inversión. Con nosotros, encontrarás propiedades de lujo a precios accesibles.</p>
    </section>

    <section class="icono mb-4 p-3">
        <img class="iconos" src="./images/clock.png" alt="Reloj">
        <h2 class="text-center text-light">A TIEMPO</h2>
        <p class="text-center text-light">Sabemos que tu tiempo es valioso. Por eso, nos comprometemos a ofrecer un servicio rápido
            y eficiente, asegurando que encuentres la propiedad perfecta en el menor tiempo posible.</p>
    </section>

</main>
<?php 
    require_once "templates/footer.php"; 
}