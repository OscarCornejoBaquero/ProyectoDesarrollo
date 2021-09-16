

<footer class="footer" style="padding-top: 2px; border-top: 1px solid #adb5bd;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 centrado_responsive">
                <img class="formatoLogo" src="<?=media()?>img/logo.png" alt="">
            </div>
            <div class=" col-md-3 ">
                <div class="abs-center">
                    <a href="#"><i class="fab fa-facebook-f formatolink" ></i></a>
                    <a href="#"><i class="fab fa-instagram formatolink" style="padding-left: 3rem;"></i></a>
                </div>
            </div>
            <div class="col-md-3 abs-center">
                <p style="text-align: center">Carrera Ing. de Software - Facultad de Ciencas Físicas y Matemáticas
                </p>
            </div>

            <div class=" col-md-3 abs-center centrado_responsive">
                <ul>
                    <h6 style="text-align: center"> Sobre el Equipo de Desarrollo</h6>
                    <li><a class="formatolink" >Baque Reyes Cristi </a>
                    <li><a class="formatolink" >Cornejo Baquero Oscar </a></li>
                    <li><a class="formatolink" >Vargas Mendez Kimberly</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>
<script type="text/javascript">
    const base_url = "<?= base_url()?>";
</script>

<script type="text/javascript" src="<?= media();?>js/functions_admin.js"></script>

<!-- Archivo para la ejecucion del archivo de funciones roles-->
<script src="<?= media(); ?>js/<?= $data['page_functions_js']; ?>"></script>
<?php
require_once ("scripts.php");
?>
</body>
</html>
