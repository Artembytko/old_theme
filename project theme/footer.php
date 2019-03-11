<?php ?>
<footer class="footer">
    <?php
    if ( is_active_sidebar( 'footer' ) ) : ?>
        <div id="footer-id" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'footer' ); ?>
        </div>
    <?php endif;
    ?>
    <p class="footer_desc desc"><span>Всі права застережено.</span>
При передруку наших матеріалів, посилання (для інтернету — гіперпосилання) на go-cpd.ml обов'язкове.</p>
</footer>
</footer>
<?php wp_footer(); ?>
</body>
</html>