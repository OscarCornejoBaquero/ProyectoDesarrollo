<?php headerAdmin($data);?>
<div style="padding-bottom: 1rem">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?=media()?>img/carrusel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=media()?>img/carrusel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=media()?>img/carrusel3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="contenedorSombra sombra" style="padding-bottom: 1rem">
    <h2 class="centradoSubTitulo" >Nuestros Productos</h2>
    <br>
    <h6 class="centradoSubTitulo" >¡Conoce nuestros productos más pedidos!</h6>
    <br id="principal" >
    <div class="container" >
        <div class="row" >
            <div class="col-md-3 " >
                <img src="<?=media()?>img/pro01.jpg" class="img-responsive fit-image tit" id="uno" alt="">
                <div id="contenido" class="centrarTextos">
                    <p>Precio: $10.00</p>
                </div>
            </div>
            <div class="col-md-3 " >
                <img src="<?=media()?>img/pro02.jpg" class="img-responsive fit-image tit" id="dos"  alt="">
                <div id="contenido2" class="centrarTextos">
                    <p>Precio: $14.00</p>
                </div>
            </div>
            <div class="col-md-3 " >
                <img src="<?=media()?>img/pro03.jpg" class="img-responsive fit-image" id="tres"  alt="">
                <div id="contenido3" class="centrarTextos">
                    <p>Precio: $18.00</p>
                </div>
            </div>
            <div class="col-md-3 " >
                <img src="<?=media()?>img/pro04.jpg" class="img-responsive fit-image" id="cuatro"  alt="">
                <div id="contenido4" class="centrarTextos">
                    <p>Precio: $20.00</p>
                </div>
            </div>


        </div>

    </div>
</div>
<section class="imagen-contacto">
    <div class="horarios">

        <h5>Horarios de Atención</h5>
        <br>
        <p>Lun - Vie</p>
        <p> 9am - 6:30pm</p>
        <br>
        <p>Sabados - Domingo</p>
        <p>10am - 5pm</p>
    </div>


</section>
<?php footerAdmin($data);?>

