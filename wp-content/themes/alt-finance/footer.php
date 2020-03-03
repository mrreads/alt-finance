<footer class="footer">
    <div class="container">
        <?php wp_nav_menu(array(
        'theme_location' => 'footer_menu',
        'container' => null,
        'menu_class' => 'menu_footer'
        )); ?>
        
        <div class="tels">
            <a href="tel: +79999999999" class="footer-tel">+79999999999 - главный 1</a>
            <a href="tel: +79999999999" class="footer-tel">+79999999999 - главный 2</a>
            <a href="tel: +79999999999" class="footer-tel">+79999999999 - главный 3</a>
            <a href="tel: +79999999999" class="footer-tel">+79999999999 - главный 4</a>
            <a href="mailto: example@alt-finance.ru" class="footer-tel footer-mail">example@alt-finance.ru</a>
        </div>
    </div>

    <div class="copyright">
        <p class="copyright-paragraph">&copy Made by <a class="copyright-src" href="#">Prodigy IT</a> <a class="copyright-src" href="tel:+79778932275">(+7 977 893 22 75)</a></p>
    </div>

</footer>