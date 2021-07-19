<?php require 'header.php' ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> Título del artículo</h2>
                <p class="fecha">1 de enero de 2021</p>
                <div class="thump">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur.</p>
                    <a href="#" class="continuar">Continuar Leyendo</a>
                </div>
            </article>
        </div>
        <div class="post">
            <article>
                <h2 class="titulo"> Título del artículo</h2>
                <p class="fecha">1 de enero de 2021</p>
                <div class="thump">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/2.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur.</p>
                    <a href="#" class="continuar">Continuar Leyendo</a>
                </div>
            </article>
        </div>

        <?php require 'paginacion.php'; ?>

    </div>

<?php require 'footer.php'; ?> 