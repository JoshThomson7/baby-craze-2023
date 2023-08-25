<footer class="footer" role="contentinfo">

    <div class="max__width">

        <div class="footer-cols">

            <?php
            while (have_rows('footer_menus', 'options')) : the_row();

                $footer_menu = get_sub_field('footer_menu');
                $footer_menu_2 = get_sub_field('footer_menu_2');
            ?>
                <div class="footer-col">

                    <?php if ($footer_menu) : ?>
                        <div class="footer-menu">
                            <div class="footer-menu__heading">
                                <h5><?php echo $footer_menu->name; ?></h5>
                                <span class="menu-dropdown"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="footer-menu__items">
                                <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
                            </div>
                        </div>
                    <?php endif; ?>



                    <?php if ($footer_menu_2) : ?>
                        <div class="footer-menu footer-menu--2">
                            <div class="footer-menu__heading">
                                <h5><?php echo $footer_menu_2->name; ?></h5>
                                <span class="menu-dropdown"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="footer-menu__items">
                                <?php wp_nav_menu(array('menu' => $footer_menu_2->name, 'container' => false)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        </div>

        <div class="footer-legal">
            <?php wp_nav_menu(array('menu' => 'Legal', 'container' => false)); ?>
        </div>

        <div class="subfooter">
            <div class="subfooter--left">
                <small>&copy;<?php date('Y'); ?> <?php bloginfo('name') ?>. The Baby Craze is a trading name of The Baby Craze Limited (Company number 1234567).<br />
                The Baby Craze is authorised and regulated by the Amazon Conduct Authority (12345).</small>
            </div><!-- subfooter--left -->

            <div class="subfooter--right">
                <!-- <small><a href="http://www.fl1.digital" target="_blank">Powered by TWS</a></small> -->
            </div><!-- subfooter--left -->
        </div><!-- subfooter -->
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>