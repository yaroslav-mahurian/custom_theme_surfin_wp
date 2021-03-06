<footer class="footer">
    <div class="container flex-column-center">

        <div class="footer-logo-wrapper">
            <a class="logo" href="#">
                <img width="16" src="<?php echo get_template_directory_uri()?>/img/logo/logo.svg" alt="">
            </a>
        </div>
        
        <div class="footer-nav-wrapper">
            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__link" href="#stories">Stories</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#events">Events</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#places">Places</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#boards">Boards</a>
                </li>
            
            </ul>
        </div>

        <div class="social">
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg" alt="">
            </a>
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg" alt="">
            </a>
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg" alt="">
            </a>
        </div>
    

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
