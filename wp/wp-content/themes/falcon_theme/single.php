<?php get_header(); //llamas al archivo header.php?>  
<section id="main">
        <section id="article_list">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <article>
                <!--<img class="thumb" src="http://lorempixel.com/450/370/" alt="">-->
                <div class="thumb"><a href="<?php the_permalink();?>">
                    <?php if (has_post_thumbnail()) {the_post_thumbnail('list_articles_thumbs'); //medida a utilizar
                    } ?>
                </a></div>
                <hgroup>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </hgroup>
                <div class="date"> <?php the_date(); ?> en <span><?php the_category(); ?></span></div>
                        <div class="extract"><?php the_content(); ?></div>
            </article>

        <?php endwhile; else: ?>
        <h1>No se encontraron articulos</h1>
        <?php endif; ?>
        <div id="comentarios">
            <h3>Comentarios</h3>
            <div id="caja_comentarios">
                <?php comments_template(); ?>
            </div>
        </div>
        </section>
<?php get_sidebar(); //llamas al archivo sidebar.php?>
    </section>
<?php get_footer(); //llamas al rchivo footer.php?>
