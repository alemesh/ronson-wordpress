<?php
/**Template name: why_page */
get_header();
$why_page = get_fields();
$post_id = get_the_ID();
?>

    <div class="main">


        <div class="why-page" style="background-image: url(<?php if($why_page['bacground_1'] != null){ echo $why_page['bacground_1']; }?>)">
            <div class="corner-bg"></div>
            <?php if($why_page['background_2'] != null){?>
            <div class="layer-bg" style="background-image: url(<?php echo $why_page['background_2']; ?>)"></div>
            <?php }?>
            <?php if($why_page['background_3'] != null){?>
            <div class="layer-bg3" style="background-image: url(<?php echo $why_page['background_3']; ?>)"></div>
            <?php }?>
            <div class="layer-bg2"></div>
            <div class="layer-bg4-4-4" style="background-image: url(<?php bloginfo('template_url')?>/img/blog/bg-layer4-4-4.png)"></div>

            <div class="main-holder">

                <div class="text-section">
                    <?php if($why_page['title'] != null){ ?>
                    <h1><?php echo $why_page['title'];?></h1>
                    <?php }?>
                    <div class="description-why">
                    <?php if($why_page['description'] != null){ ?>
                        <?php echo $why_page['description'];?>
                    <?php }?>
                    </div>

                    <div class="content">

                        <?php
                        while ( have_posts() ) :
			            the_post();
                        the_content();
                        endwhile; // End of the loop.
                        ?>

                    </div>
                </div>

            </div>
        </div>
<?php
get_footer();
?>