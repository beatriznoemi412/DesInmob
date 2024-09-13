<?php
function getInmuebles(){
    $in1 = new stdClass();
    $in1 ->imagen ="images/casaLago.jpg";
    $in1 -> titulo = 'Casa de Lujo en el Lago';
    $in1 -> descripcion ="Descubre el lugar perfecto para relajarte y disfrutar de la 
    naturaleza en esta espectacular casa frente al lago. Ubicada en un entorno tranquilo
     y sereno, esta propiedad combina el confort moderno con la belleza natural, 
     creando un refugio ideal para quienes buscan paz y tranquilidad.";
    $in1 -> otraDescripcion="Esta exquisita casa frente al lago ofrece un diseño de planta abierta, cuenta con 
     una cocina equipada con electrodomésticos de alta gama y una isla central perfecta para preparar 
     comidas y socializar. La sala de estar dispone de una chimenea moderna y amplios ventanales que 
     proporcionan vistas impresionantes del lago. La casa incluye una espaciosa suite principal con baño
     privado y acceso directo al jardín, una oficina y un sistema de automatización del hogar que controla la iluminación, la temperatura y 
     la seguridad desde un solo dispositivo.";
    $in1 -> precio = '550000';

    $in2 = new stdClass();
    $in2 ->imagen ="images/residencia.jpg";
    $in2 -> titulo = 'Casa de Lujo Moderna';
    $in2 -> descripcion =" Líneas limpias, formas geométricas y un diseño minimalista que 
    enfatiza la simplicidad y la funcionalidad. Grandes ventanales de vidrio permiten la 
    entrada de luz natural y ofrecen vistas panorámicas.";
    $in2 -> otraDescripcion ="Esta moderna residencia ofrece una distribución espaciosa, la casa cuenta con una cocina gourmet equipada con 
    electrodomésticos de última generación, una sala de estar con sistema de entretenimiento integrado 
    y una suite principal con baño en suite y vestidor. Además, dispone de un sistema de climatización 
    eficiente, paneles solares para una mayor sostenibilidad, y un sistema de seguridad avanzado para 
    garantizar la tranquilidad de sus residentes. Los amplios ventanales no solo permiten una abundante 
    entrada de luz natural, sino que también brindan impresionantes vistas del entorno.";
    $in2 -> precio = '750000';

    $in3 = new stdClass();
    $in3 ->imagen ="images/casa_enla_sierra.jpg";
    $in3 -> titulo = 'Casa en la Sierra';
    $in3 -> descripcion ="Propiedad exclusiva que combina elegancia con la belleza natural 
    del entorno serrano. Estas viviendas se diseñan para ofrecer un refugio tranquilo y 
    sofisticado, manteniendo un fuerte vínculo con la naturaleza circundante";
    $in3 -> otraDescripcion="Esta propiedad exclusiva ofrece una experiencia de vida lujosa con una 
    cocina gourmet con electrodomésticos de alta gama, una sala de estar con techos altos y grandes 
    ventanales que proporcionan vistas panorámicas del paisaje montañés. Además, cuenta con un sistema de calefacción eficiente, un spa privado para relajación 
    y bienestar, y una terraza al aire libre ideal para disfrutar del entorno natural. Con un enfoque
    en la comodidad y la sofisticación, esta propiedad garantiza un refugio apacible sin renunciar
    a la elegancia y la funcionalidad.";
    $in3 -> precio = '650000';

    $in4 = new stdClass();
    $in4 ->imagen ="images/pool-house.jpg";
    $in4 -> titulo = 'Casa Lujosa con piscina';
    $in4 -> descripcion ="Una casa lujosa con piscina es una propiedad diseñada para ofrecer 
    un estilo de vida de alta gama, combinando el confort interior con un espacio exterior 
    espectacular. Este tipo de vivienda se caracteriza por su diseño sofisticado, acabados 
    de alta calidad, y una piscina que se convierte en el centro de la vida social y de relajación.";
    $in4 -> otraDescripcion ="Diseñada para ofrecer una experiencia de vida sin igual, la propiedad 
    cuenta con interiores espaciosos y acabados de primera calidad que incluyen una cocina gourmet, 
    una sala de estar con ventanales de piso a techo y un sistema de climatización avanzado. La piscina 
    privada, rodeada de una terraza con áreas de estar y comedor al aire libre, sirve como el punto 
    focal para el entretenimiento y la relajación. Con características adicionales como un spa 
    integrado, un sistema de iluminación ambiental y un gimnasio.";
    $in4 -> precio = '950000';

    $inmuebles = [$in1, $in2, $in3, $in4];
    return $inmuebles;
}
function getInmuebleById($id){
    $inmuebles = getInmuebles();
    $inmueble = $inmuebles[$id]; 
    return $inmueble;
}
function getVendedores(){
    $vend1 = new stdClass();
    $vend1 -> id = 1;
    $vend1 -> imagen = "images/vend1.jpg";
    $vend1 -> nombre = "Agustín Castro" ;
    $vend1 -> rol = "Gerente de Propiedades";
    $vend1 -> email ="desarrollo_agustin@gmail.com";
    $vend1 -> antiguedad = "15 años en la empresa";

    $vend2 = new stdClass();
    $vend2 -> id = 2;
    $vend2 -> imagen = "images/vend2.jpg";
    $vend2 -> nombre = "Pamela Sosa" ;
    $vend2 -> rol = "Gerente de Ventas";
    $vend2 -> email ="desarrollo_pamela@gmail.com";
    $vend2 -> antiguedad = "18 años en la empresa";

    $vend3 = new stdClass();
    $vend3 -> id = 3;
    $vend3 -> imagen = "images/vend3.jpg";
    $vend3 -> nombre = "Juan Arce" ;
    $vend3 -> rol = "Agente";
    $vend3 -> email ="desarrollo_juan@gmail.com";
    $vend3 -> antiguedad = "9 años en la empresa";

    $vend4 = new stdClass();
    $vend4 -> id = 4;
    $vend4 -> imagen = "images/vend4.jpg";
    $vend4 -> nombre = "Carmen Lopez" ;
    $vend4 -> rol = "Agente";
    $vend4 -> email ="desarrollo_carmen@gmail.com";
    $vend4 -> antiguedad = "7 años en la empresa";

    $vendedores=[$vend1, $vend2, $vend3, $vend4];
    return $vendedores;
}
function getVendedorById($id) {
    $vendedores = getVendedores();

    foreach ($vendedores as $vendedor) {
        if ($vendedor->id == $id) {
        return $vendedor;
        }
    }

    return null;
}
