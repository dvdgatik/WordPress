  <footer>
        <section id='ft-swidgets'>
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>
        </section>
        <p id="copyright">My BLog Copyright @ 2014</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>