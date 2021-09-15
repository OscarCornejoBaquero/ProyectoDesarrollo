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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>
</body>
</html>
