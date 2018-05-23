<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ronson
 */

get_header();
$single_page = get_fields();
$post_id = get_the_ID();
//var_dump($post);
$date = new DateTime($post->post_date);
?>





        <div class="main">


            <div class="single-page">
                <div class="bg-opasiti"></div>
                <div class="corner-bg"></div>
                <div class="main-holder">
                    <div class="slider-section">
                        <div class="variable-width">
                            <!--<div class="item">-->
                            <!--<img  src="img/blog/third-article-2.jpg"alt="#">-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="text-section">
                        <h1><?php the_title();?></h1>
                        <!--<span class="date-single">יולי 20, 2017<span> // </span>דה מרקר<span> // </span>ערן אזרן</span>-->
<!--                        <span class="date-single">ערן אזרן<span> // </span>דה מרקר<span> // </span>יולי 20, 2017</span>-->
                        <span class="date-single"><?php if($single_page['author'] != null){ echo $single_page['author']; ?><span> // </span><?php }?><?php if($single_page['redaction'] != null){ echo $single_page['redaction']; ?>  <span> // </span><?php }?> <?php echo $date->format('Y ,j F');?></span>

                        <div class="content">
                            <?php
                            while ( have_posts() ) :
                                the_post();

                                the_content();
//                                the_post_navigation();
?>


                            <?php
                            endwhile; // End of the loop.
                            ?>

                        </div>
                        <?php if($single_page['article_button'] != null){ ?>
                            <p class="link-url"><span class="link"><?php echo $single_page['article_button'];?></span>  <a href="<?php if($single_page['article_link'] != null){ echo $single_page['article_link']; }?>" target="_blank"><?php if($single_page['article_link'] != null){ echo $single_page['article_link']; }?></a></p>
                        <?php }?>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                    </div>

                </div>
            </div>





<?php

get_footer();
