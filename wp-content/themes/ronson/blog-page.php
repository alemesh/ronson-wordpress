<?php
/**Template name: blog_page */
get_header();
$blog_page = get_fields();
$post_id = get_the_ID();
?>

    <div class="main">
        <div class="blog-page">
            <div class="corner-bg"></div>
            <div class="main-holder">
                <div class="title-section">
                    <div class="contacts-block">
                        <div class="title">
                            <?php if($blog_page['the_title_of_the_left_block'] != null){ ?>
                            <h3><?php echo $blog_page['the_title_of_the_left_block'];?></h3>
                            <?php }?>
                        </div>
                        <div class="contacts">
                            <?php if($blog_page['description_of_the_left_block'] != null){ ?>
                                <?php echo $blog_page['description_of_the_left_block'];?>
                            <?php }?>
                        </div>
                    </div>
                    <div class="text-block">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            the_content();
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>

            <div class="item-section">
                <div class="main-holder">
                    <div class="items">



<!--                        --><?php
//                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
//
//                        $args = array(
//                            'posts_per_page' => 2,
//                            'paged' => $paged
//                        );
//                        $custom_query = new WP_Query( $args );
//
//                        while($custom_query->have_posts()) :
//                            $custom_query->the_post();
//                            the_title();
//                            echo '<br>';
//                            ?>
<!---->
<!--                        --><?php //endwhile; ?>
<!---->
<!--                        --><?php
//
//                        the_posts_pagination();
//                        ?>






                                    <?php
                                    $args = array(
                                'numberposts' => 5,
                                'category' => 0,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => array(),
                                'exclude' => array(),
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            );
                            $posts = get_posts($args);
                            $counter = 0;
                            foreach ($posts as $post) {
                                setup_postdata($post);
                                $single_id = $post->ID;
                                $blog_singles = get_fields($single_id);
                            //var_dump($post);
                                $date = new DateTime($post->post_date);

                                ?>

                        <div class="item">
                            <div class="image">
                                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail(); ?>" alt=""></a>
                            </div>
                            <div class="text-block">
                                <div class="wrap">
                                    <h4><?php the_title();?></h4>
                                    <div class="date-block">
                                        <!--<p>מרץ 12, 2018<span> // </span>BIZportal  </p>-->
                                        <!--<p>מרץ 12, 2018<span> // </span>BIZportal  <span> // </span>נועם בראל  </p>-->
                                        <p><?php if($blog_singles['author'] != null){ echo $blog_singles['author']; ?><span> // </span><?php }?><?php if($blog_singles['redaction'] != null){ echo $blog_singles['redaction']; ?>  <span> // </span><?php }?> <?php echo $date->format('Y ,j F');?></p>
                                    </div>
                                    <div class="description">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <a href="<?php the_permalink();?>" class="button"><span>לכתבה המלאה</span></a>
                            </div>
                        </div>
                                <?php
                            }
                                    wp_reset_postdata();
                                    ?>

                    </div>
                </div>

            </div>

            <div class="nav-section">



                <!--<div class="main-holder">-->
                <!--<ul>-->
                <!--<li><a href="#" class="prev"></a></li>-->
                <!--<li><a href="#" class="page current">1</a></li>-->
                <!--<li><a href="#" class="page">2</a></li>-->
                <!--<li><a href="#" class="page">3</a></li>-->
                <!--<li><a href="#" class="page">4</a></li>-->
                <!--<li><a href="#" class="page">5</a></li>-->
                <!--<li><a href="#" class="page">6</a></li>-->
                <!--<li><a href="#" class="page">7</a></li>-->
                <!--<li><a href="#" class="page">8</a></li>-->
                <!--<li><a href="#" class="page">9</a></li>-->
                <!--<li><a href="#" class="page">10</a></li>-->
                <!--<li><a href="#" class="next"></a></li>-->
                <!--</ul>-->
                <!--</div>-->
            </div>

        </div>


<?php
get_footer();
?>