<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-map">
            <?php the_field('google_map'); ?>
        </div>
        <!-- /.footer-map -->
        <div class="footer-contacts">
            <div class="footer-contacts__title">как нас найти?</div>
            <a class="footer-contacts__adress" href="<?php the_field('google_maps_link'); ?>"><?php the_field('adress'); ?></a>
            <a href="tel:<?php the_field('phone'); ?>" class="footer-contacts__phone"><?php the_field('phone'); ?></a>
            <a href="mailto:<?php the_field('e-mail'); ?>" class="footer-contacts__email"><?php the_field('e-mail'); ?></a>
            <div class="footer-contacts-btn">
                <a href="#" class="action-btn">Записаться</a>
            </div>
        </div>
        <!-- /.footer-contacts -->
    </div>
    <!-- /.container -->
    <div class="copyright"><?php echo date('Y'); ?>© <?php echo get_home_url(); ?></div>
    <?php wp_footer(); ?>
</footer>
<!-- /#footer.footer -->
<div class="modal">
    <div class="modal__window">
        <a href="#" class="close">X</a>
        <!-- <label for="name">Имя</label>
        <input type="text" class="modal-input modal-input__name" name="name" placeholder="Ваше имя" required />
        <label for="phone">Телефон</label>
        <input type="tel" class="modal-input modal-input__phone" name="phone" placeholder="Ваш телефон" value="+380" pattern="^\(\s+)?\(?(17|25|29|33|44)\)?(\s+)?[0-9]{3}-?[0-9]{2}-?[0-9]{2}$" required />
        <input type="submit" value="Отправить" class="action-btn modal__btn" /> -->
        <?php echo do_shortcode(apply_filters('the_content',  '[contact-form-7 id="6" title="main_form"]')); ?>
    </div>
</div>
<div class="agrement">
    <div class="agrement__text">
        Продолжая использовать сайт. Вы даете свое согласие на использования
        cookie для хранения данных.
    </div>
    <a href="#" class="action-btn agrement-btn">принять</a>
</div>

</body>

</html>