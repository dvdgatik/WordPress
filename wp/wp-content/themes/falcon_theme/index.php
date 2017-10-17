<?php get_header(); //llamas al archivo header.php?>  
<section id="main">
        <div id="no-slide"> <!--Sirve para ocultar el slider a traves de este div y no directamente del slider-->
             <section id="slideshow">
                <div class="slide">
                    <img class="thumb" src="http://lorempixel.com/470/300/" alt="">
                    <article>
                        <hgroup><h2><a href="#">Titulo de nuestro articulo</a></h2>
                        <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nemo ratione dolorem modi? Voluptates, similique, neque. Molestias veritatis, excepturi repellat facilis iste! Cum ipsa, facere amet tempore doloribus itaque nemo!</p>
                        </hgroup> <!-- Para ni tener problemas de CEO-->
                    </article>
                </div>
                <div class="slide">
                    <img class="thumb" src="http://lorempixel.com/470/300/" alt="">
                    <article>
                        <hgroup><h2><a href="#">Titulo de nuestro articulo</a></h2>
                        <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis.</p>
                        </hgroup> <!-- Para ni tener problemas de CEO-->
                    </article>
                </div>
                <div class="slide">
                    <img class="thumb" src="http://lorempixel.com/470/300/" alt="">
                    <article>
                        <hgroup><h2><a href="#">Titulo de nuestro articulo</a></h2></hgroup> <!-- Para ni tener problemas de CEO-->
                        <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis.</p>
                    </article>
                </div>
             </section>         
        </div>
        <section id="article_list">
            <article>
                <img class="thumb" src="http://lorempixel.com/450/370/" alt="">
                <hgroup>
                    <h2><a href="">Titulo de nuestro articulo</a></h2>
                </hgroup>
                <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis.</p>
            </article>
            <article>
                <img class="thumb" src="http://lorempixel.com/450/370/" alt="">
                <hgroup>
                    <h2><a href="">Titulo de nuestro articulo</a></h2>
                </hgroup>
                <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis.</p>
            </article>
            <article>
                <img class="thumb" src="http://lorempixel.com/450/370/" alt="">
                <hgroup>
                    <h2><a href="">Titulo de nuestro articulo</a></h2>
                </hgroup>
                <p class="date">26 de diciembre de 2014 en <a href="#">Categoria 1</a></p>
                        <p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio culpa veritatis architecto totam, dolorum impedit voluptatum asperiores consectetur porro neque quis in ratione corrupti debitis! Nostrum dignissimos, esse perferendis.</p>
            </article>
            <div id="pagination">
                <p>
                <a href="#"><- Post Siguientes</a>
                <a href="#">Post Anteriores-></a>
                </p>
            </div>
        </section>
<?php get_sidebar(); //llamas al archivo sidebar.php?>
    </section>
<?php get_footer(); //llamas al rchivo footer.php?>
