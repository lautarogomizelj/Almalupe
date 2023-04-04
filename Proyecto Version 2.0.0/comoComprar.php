<?php
    $paginaActual = "comoComprar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
    
    <link rel="stylesheet" href="CSS/config.css">

    <link rel="stylesheet" href="Templates/CSS/template_header.css">
    <link rel="stylesheet" href="Templates/CSS/template_header_responsive.css">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/comoComprar.css">
    
    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <title>Almalupe - Como comprar</title>
</head>
<body>
    
    <?php
        include 'Templates/PHP/template_header.php';
    ?>

    <div class="contenedorTextoCompra">
        <span class="subtitulo">
            ¿Cómo hacer tu compra Online?
        </span>

        <ol>
            <li>Elegí el producto que deseas comprar.</li>
            <li>Hace clic en el botón de "Agregar al carrito". Esto agregará el producto a tu carrito y te llevará al mismo.</li>
            <li>Podes seguir agregando otros productos al carrito o sino hace clic en "Iniciar Compra".</li>
            <li>Completá tus datos de contacto y haz clic en "Continuar".</li>
            <li>Ingresa la dirección a donde deseas recibir el producto. Luego hace clic en "Continuar".</li>
            <li>Selecciona el método de envío que desees y hace clic en "Continuar".</li>
            <li>
                Elegí el medio de pago.
                <ul>
                    <li>Una vez que hayas elegido el medio de pago, hace clic en "Continuar".</li>
                </ul>
            </li>
            <li>Finalmente en la página de Confirmación de compra podes revisar toda la información de la compra. Luego hace clic en "Continuar".</li>
            <li>Ahí serás redirigido a otra pantalla para que completes los datos sobre la forma de pago elegida. Después de confirmar la compra recibirás un correo de nuestra parte, ese no será un comprobante de pago.</li>
            <li>Una vez acreditado el pago, haremos el envío correspondiente de los productos que hayas comprado.</li>
        </ol>

        <!-- ------------------------------------------------------------ -->
        <span class="subtitulo">
            Métodos de Envío
        </span>

        <ol>
            <li>1. Motolinda y Correo Argentino</li>
            <li>
                2. Si elegiste la opción Correo Argentino

                <ul>
                    <li>
                        Envío a Domicilio
                        <ul>
                            <li>Tu compra la vas a recibir en tu domicilio en el transcurso de 5 a 7 días hábiles, siempre y cuando no haya demoras en el Correo. </li>
                            <li>El correo hará 1 visita y luego dejará el paquete 5 días hábiles en la sucursal más cercana.</li>
                        </ul>
                    </li>
                    <li>
                        Envío a Sucursal:
                        <ul>
                            <li>Una vez que el paquete llega a la sucursal, permanece 5 días hábiles.</li>
                            <li>Si nadie recibe el paquete, va a volver al origen (Linda de Alma).</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ol>

        <!-- ------------------------------------------------------------ -->

        <span class="subtitulo">
            Cambios y Devoluciones
        </span>

        <ol>
            <li>Podés cambiar cualquier producto adquirido en nuestra tienda online. Para hacerlo comunicate con nosotros, escribinos al privado de Instagram @lindadealma ó a nuestro mail lindadealma@gmail.com dentro de las 48hs. de recibido el producto.</li>
            <li>Los cambios podrán también realizarse personalmente en nuestro showroom ó contra envío. Los cargos de envío corren por cuenta del comprador. Solamente en caso de que el cambio sea por alguna falla o mal estado del producto o´error de Linda de Alma. No realizamos devolución de la compra.</li>
            <li>Es necesario para el cambio que el producto se encuentre sin uso, en perfectas condiciones y con sus etiquetas. De lo contrario Linda de Alma se reserva el derecho de cambio.</li>
            <li>Los cambios solo se realizan entre prendas de una misma temporada. </li>
            <li>Para más información escribinos a LindadeAlma@gmail.com</li>
        </ol>
    </div>





    <script src="Backend/JS/app.js"></script>
    <script src="Backend/JS/animacionesIndex.js"></script>
</body>
</html>