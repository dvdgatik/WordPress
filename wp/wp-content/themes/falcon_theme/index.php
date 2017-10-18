<?php get_header(); //llamas al archivo header.php?>  
<section id="main">
        <div id="no-slide"> <!--Sirve para ocultar el slider a traves de este div y no directamente del slider-->
                <?php include(TEMPLATEPATH.'/slideshow.php'); ?>       
        </div>
        <section id="article_list">
        <?php query_posts("paged=$paged"); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <article>
                <img class="thumb" src="http://lorempixel.com/450/370/" alt="">
                <hgroup>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </hgroup>
                <div class="date"> <?php the_date(); ?> en <span><?php the_category(); ?></span></div>
                        <div class="extract"><?php the_excerpt(); ?></div>
            </article>

        <?php endwhile; else: ?>
        <h1>No se encontraron articulos</h1>
        <?php endif; ?>
            <div id="pagination">
                <p><?php next_posts_link('Post Siguientes ->')?>
                <?php previous_posts_link('<- Post Anteriores')?>
                </p>
            </div>
        </section>
<?php get_sidebar(); //llamas al archivo sidebar.php?>
    </section>
<?php get_footer(); //llamas al rchivo footer.php?>

