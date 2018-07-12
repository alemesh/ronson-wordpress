<?php
$footer_options = get_fields(184);
?>
<div class="fifth-section">
    <div class="main-holder">
        <div class="buttons">
            <?php if($footer_options['whatsapp_number'] != null){ ?>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $footer_options['whatsapp_number'];?>" class="mobile-hidden"><span class="phone-text"><?php if($footer_options['whatsapp_text_1'] != null){ echo $footer_options['whatsapp_text_1']; }?></span><span class="phon-number"><?php if($footer_options['whatsapp_text_2'] != null){ echo $footer_options['whatsapp_text_2']; }?></span><span class="mobile-phone"></span></a>
            <?php }?>
            <?php if($footer_options['floating_form_text_1'] != null){ ?>
            <a href="#" id="myBtn2" ><span><?php echo $footer_options['floating_form_text_1'];?> <span class="column"><?php if($footer_options['floating_form_text_2'] != null){ echo $footer_options['floating_form_text_2']; }?></span></span><span class="mail"></span></a>
            <?php }?>
            <?php if($footer_options['phone_number'] != null){ ?>
            <a href="tel:<?php echo $footer_options['phone_number'];?>"><span class="phone-text"><?php if($footer_options['phone_text'] != null){ echo $footer_options['phone_text']; }?></span><span class="phon-number"><?php echo $footer_options['phone_number'];?></span><span class="phone"></span></a>
            <?php }?>
        </div>
        <?php if($footer_options['title'] != null){ ?>
        <h3><?php echo $footer_options['title'];?></h3>
        <?php }?>
        <div class="social-section">
            <?php if($footer_options['facebook'] != null){ ?>
            <a href="<?php echo $footer_options['facebook'];?>" target="_blank"><span class="facebook"></span></a>
            <?php }?>
            <?php if( is_front_page() ) {?>
            <span class="button-mobile"><a href="#video-section"><span class="youtube"></span></a></span>
            <?php }else{?>
                <a href="<?php echo home_url('/');?>#video-section"><span class="youtube"></span></a>
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
            <?php if($footer_options['description'] != null){ ?>
                <?php echo $footer_options['description'];?>
            <?php }?>
        </div>

    </div>
</div>

</div>

<div class="footer">
    <!--<span class="label">Gofman creative</span>-->
    <div class="main-holder">
        <div class="logo-footer">
            <a href="<?php echo home_url('/');?>">
                <?php if($footer_options['logo'] != null){ ?>
                <img src="<?php echo $footer_options['logo'];?>" alt="">
                <?php }?>
            </a>
        </div>
        <div class="footer-description">
            <!--<p><strong>ופונקציונליות המבנים לא ישתנו.</strong>פיתוח הקרקע וסביבת הנכס, גם מבחינת סכמת הצבעים. יחד עם זאת, התכונות והפרטים הבסיסיים </p>-->

            <?php if($footer_options['copyrate'] != null){ ?>
                <?php echo $footer_options['copyrate'];?>
            <?php }?>
        </div>
    </div>
</div>

</div>

<!--<script src="js/scripts.min.js"></script>-->
<?php wp_footer(); ?>


</body>
</html>