<div class="fifth-section">
    <div class="main-holder">
        <div class="buttons">
            <a href="https://api.whatsapp.com/send?phone=97236988888" class="mobile-hidden"><span class="phone-text">וואטס אפ עסקי</span><span class="phon-number">03-6988888</span><span class="mobile-phone"></span></a>
            <a href="#" id="myBtn2" ><span>כתבו  <span class="column">לנו</span></span><span class="mail"></span></a>
            <a href="tel:03-6988888"><span class="phone-text">דברו איתנו</span><span class="phon-number">03-6988888</span><span class="phone"></span></a>
        </div>
        <h3>בקרו אותנו ב:</h3>
        <div class="social-section">
            <a href="https://www.facebook.com/RonsonIsrael/" target="_blank"><span class="facebook"></span></a>
            <?php if( is_front_page() ) {?>
            <span class="button-mobile"><a href="#video-section"><span class="youtube"></span></a></span>
            <?php }else{?>
                <a href="/#video-section"><span class="youtube"></span></a>
            <?php }?>
        </div>
        <div class="nav">

            <?php
            wp_nav_menu(array(
                'container' => 'false',
                //The location that we want to bring
                'theme_location'=>'menu-2',
                //Location displays the HTML markup menu
                'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>',
                //Specify the class for the menu
                'menu_class'=>'',//changing styles called class="nav-in" to class='sub-menu'
                'menu_id'=>''
//				'depth'=>'0'
                //                        'walker'=> new Menu_Walker_header
            ));
            ?>
        </div>
        <div class="description">
            <p>ההדמיות, ההנפשות והמודלים של המבנים המוצגים באתר www.ronson.co.il. דומים לאובייקט הסופי ככל שניתן, כלומר הם עשויים להיות שונים מהמקור, במראה המבנים בפועל, פיתוח הקרקע וסביבת הנכס, גם מבחינת סכמת הצבעים. יחד עם זאת, התכונות והפרטים הבסיסיים ופונקציונליות המבנים לא ישתנו.</p>
        </div>

    </div>
</div>

</div>

<div class="footer">
    <!--<span class="label">Gofman creative</span>-->
    <div class="main-holder">
        <div class="logo-footer">
            <a href="/">
                <img src="<?php bloginfo('template_url')?>/img/logo-footer2.png" alt="">
            </a>
        </div>
        <div class="footer-description">
            <!--<p><strong>ופונקציונליות המבנים לא ישתנו.</strong>פיתוח הקרקע וסביבת הנכס, גם מבחינת סכמת הצבעים. יחד עם זאת, התכונות והפרטים הבסיסיים </p>-->

            <p>
                <!--<strong>א.מ.ו.ר - פולין נדלן בע”מ</strong>-->
                <!--משווקת בלעדית של רונסון בישראל<br>-->
                טל: 03-6988888 | מייל: office@ronson.co.il<br>
                מגדל אלון 2, יגאל אלון 94, תל אביב, קומה 28, מיקוד 6789140</p>
        </div>
    </div>
</div>

</div>

<!--<script src="js/scripts.min.js"></script>-->
<?php wp_footer(); ?>


</body>
</html>