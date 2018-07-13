<?php
/**Template name: about_page */
get_header();
$why_page = get_fields();
$post_id = get_the_ID();
$second_section = get_field('second_section', $post_id);
$video_section_left_block = get_field('video_section_left_block', $post_id);
?>


        <div class="main">
            <div class="why-page about" style="background-image: url(<?php bloginfo('template_url')?>/img/blog/why-bg2.png)">
                <div class="layer-bg2"></div>
                <div class="layer-red" style="background-image: url(<?php bloginfo('template_url')?>/img/about/bg-lier2.png)"></div>
                <div class="main-holder">
                    <div class="text-section">
                        <h1><?php the_title();?></h1>
                        <div class="content">
                            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                            <?php the_content();?>
                            <?php }
                            }?>
                        </div>
                    </div>

                </div>

                <div class="icons-block">
                    <div class="main-holder">
                        <ul>
                            <?php if (isset($second_section) && !empty($second_section)): ?>
                                <?php foreach ($second_section as $block): ?>

                                    <li>
                                        <div class="wrap-img">
                                            <img src="<?php echo $block['image'];?>" alt="">
                                        </div>
                                        <div class="wrap-text">
                                            <p><?php echo $block['title'];?></p>
                                        </div>

                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="video-block">
                    <div class="main-holder">
                        <?php if($why_page['video_section_title'] != null){ ?>
                            <h3><?php echo $why_page['video_section_title'];?></h3>
                        <?php }?>
                        <div class="wrap-block">
                            <div class="icons-left-block">
                                <ul class="responsive-about">
                                    <?php if (isset($video_section_left_block) && !empty($video_section_left_block)): ?>
                                        <?php foreach ($video_section_left_block as $block): ?>
                                    <li>
                                        <div class="wrap-img">
                                            <img src="<?php echo $block['image'];?>" alt="">
                                        </div>
                                        <div class="wrap-text">
                                            <p><?php echo $block['title'];?></p>
                                        </div>
                                    </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="video" id="video-section">
                                <video class="video-controll mobile-hidden-video" id="videoPlayer" controls playsinline autoplay poster="<?php if($why_page['video_poster'] != null){ echo $why_page['video_poster']; }?>">
                                    <source  src="<?php if($why_page['video_desctop'] != null){ echo $why_page['video_desctop']; }?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>

                                </video>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="black-section">
                    <div class="main-holder">
                        <div class="wrap-section">
                            <div class="left-block">
                                <?php if($why_page['fourth_section_left_block'] != null){ ?>
                                    <?php echo $why_page['fourth_section_left_block'];?>
                                <?php }?>
                            </div>
                            <div class="right-block">
                                <div class="wrap-text">
                                    <?php if($why_page['fourtch_section_right_block'] != null){ ?>
                                        <?php echo $why_page['fourtch_section_right_block'];?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>












<?php
get_footer();
?>