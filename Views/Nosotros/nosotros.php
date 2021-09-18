<?php headerFront($data);?>

<div style="padding :1rem">
</div>



<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>

                <img loading="lazy" src="<?=media()?>img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                Pastelería Veros'cakes
            </blockquote>
            <p>
                Somos una empresa familiar dedicada a la venta de pasteles, postres, cupcakes y bocaditos la cual fue fundada en 2018, dedicada a brindar el mejor sabor, decoración, experiencia y calidad en servicio.
                Hemos tenido la oportunidad de formar parte de los momentos más importantes de nuestros clientes desde la celebración del primer año de sus hijos, los bautizos, primeras comuniones, graduaciones y muchos momentos que valen la pena recordar, brindándoles con cariño todos nuestros productos.
            </p>

            <p>
                “Gracias por dejarnos ser parte de sus días”
                Veros'cakes
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h2>Más Sobre Nosotros</h2>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="<?=media()?>img/icono1.svg" alt="Icono seguridad" loading="lazy" style="color: #EA899A">
            <h4>Seguridad</h4>
            <p>
                Todas las compras que realizas con nosotros tienen una garantia de entrega.
                Nuestro prestigio nos precede, ponemos a tu disposición la mayor seguridad en tus
                comprar en nuestro local y en los pedidos a domicilio.
            </p>
        </div>
        <div class="icono">
            <img src="<?=media()?>img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h4>Precio</h4>
            <p>
                Contamos con los mejores precios del mercado nuestros productos son preparados con
                ingredientes de alta calidad, para brindarles a nuestros clientes la mejor experiencia.
            </p>
        </div>
        <div class="icono">
            <img src="<?=media()?>img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h4>A Tiempo</h4>
            <p>
                Necesitas un producto para una determinada fecha, despreocupate nosotros nos encargamos
                que tu pedido este a tiempo y de la mejor manera en la puerta de tu hogar.
            </p>
        </div>
    </div>
</section>




<div style="padding :1rem">
</div>


<?php footerAdmin($data);?>


