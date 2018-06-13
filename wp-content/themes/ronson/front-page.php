<?php
get_header();
$home_page = get_fields();
$post_id = get_the_ID();
$the_items_of_the_best_sellers_section = get_field('the_items_of_the_best_sellers_section', $post_id);
$the_items_of_the_third_sections = get_field('the_items_of_the_third_sections', $post_id);
$investments = get_field('investments', $post_id);
?>

    <div class="main">
        <div class="home-header" style="background-image: url(<?php if($home_page['background_first_section'] != null){ echo $home_page['background_first_section']; }?>)">
            <div class="rectangle-left"></div>
            <div class="rectangle-right"></div>
            <?php if($home_page['label'] != null){ ?>
            <span class="label"><?php echo $home_page['label'];?></span>
            <?php }?>
            <div class="content">
                <div class="title">
                    <?php if($home_page['title'] != null){ ?>
                    <h1><?php echo $home_page['title'];?></h1>
                    <?php }?>
                    <?php if($home_page['title-2'] != null){ ?>
                    <p><?php echo $home_page['title-2'];?></p>
                    <?php }?>
                </div>
                <?php if($home_page['title-3'] != null){ ?>
                <div class="red-label">
                    <p><?php echo $home_page['title-3'];?></p>
                </div>
                <?php }?>
            </div>

            <div class="form-hold">
                <h3><?php if($home_page['the_title_of_the_contact_form'] != null){ echo $home_page['the_title_of_the_contact_form']; }?></h3>
<!--                --><?php //echo do_shortcode('[contact-form-7 id="205" title="Home contact form" html_class="form form-validation"]');?>
                <form action="" class="form form-validation" method="post">
                    <div class="form-row-wrap">
                        <input type="hidden" value="7674" name="ProjectID">
                        <input type="hidden" value="zxc1204" name="Password">
                        <div class="form-row">
                            <input name="name" class="form-control" required data-required="true" type="text" pattern="^[A-Zא-תa-z ]{1,50}$"  placeholder="*שם מלא">
                        </div>
                        <div class="form-row">
                            <input name="tel" class="form-control" required data-required="true" type="text" placeholder="*טלפון" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
                        </div>
                        <div class="form-row">
                            <input name="email" class="form-control" type="email" placeholder="דוא”ל">
                        </div>
                        <div class="form-row wrap-btn">
                            <input type="submit" data-action="sendermail" class="btn" value="שלח">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-best-sellers" style="background-image: url(<?php if($home_page['background_of_the_section_best_sellers'] != null){ echo $home_page['background_of_the_section_best_sellers']; }?>)">
            <div class="main-holder">
                <?php if($home_page['the_title_of_the_section_best_sellers'] != null){ ?>
                <h3><?php echo $home_page['the_title_of_the_section_best_sellers'];?></h3>
                <?php }?>
                <div class="items">
                    <ul class="items-list">
                        <?php if (isset($the_items_of_the_best_sellers_section) && !empty($the_items_of_the_best_sellers_section)): ?>
                        <?php foreach ($the_items_of_the_best_sellers_section as $block): ?>
                        <li>
                            <div class="hover-text" style="background-image: url(<?php echo $block['image'];?>);">
                                <div class="hover-inner">
                                    <h4><a href="#" class="myBtns"><?php echo $block['title'];?></a></h4>
                                </div>
                                <a href="#" class="myBtns hover-btn"><?php echo $block['button'];?></a>
                            </div>
                            <span class="image-item">
									<p class="bot-title"><?php echo $block['title-2'];?></p>
									<p class="bot-description"><?php echo $block['description'];?></p>
                                <?php if($block['description_red_color'] != null){ ?>
                                    <p class="bot-description red-color"><?php echo $block['description_red_color'];?></p>
                                <?php }?>
								</span>
                        </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="video" id="video-section">
                    <?php if($home_page['video_desktop'] != null){ ?>
                    <!--<video src="img/Ronson_FINAL.mp4"></video>-->
                    <video class="video-controll mobile-hidden-video" id="videoPlayer" <?php if($home_page['poster_for_video_section'] != null){ ?>poster="<?php echo $home_page['poster_for_video_section'];?>"<?php }?> onclick="this.paused ? this.play() : this.pause();">
                        <!--<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
                        <source  src="<?php echo $home_page['video_desktop'];?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <!--<source src="video/Ronson_FINAL.mp4" type='video/mp4'>-->
                        <!--<source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>-->
                        <!--<a href="img/Ronson_FINAL.mp4">Скачайте видео</a>-->
                    </video>
                    <?php }?>
                    <?php if($home_page['video_mobile'] != null){ ?>
                    <video class="video-controll desctop-hidden-video" id="videoPlayer" <?php if($home_page['poster_for_video_section'] != null){ ?>poster="<?php echo $home_page['poster_for_video_section'];?>"<?php }?> onclick="this.paused ? this.play() : this.pause();">
                        <!--<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
                        <source src="<?php echo $home_page['video_mobile'];?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <!--<source src="video/Ronson_FINAL.mp4" type='video/mp4'>-->
                        <!--<source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>-->
                        <!--<a href="img/Ronson_FINAL.mp4">Скачайте видео</a>-->
                    </video>
                    <?php }?>

                </div>


            </div>
        </div>

        <div class="third-section">
            <?php if($home_page['the_title_of_the_third_section'] != null){ ?>
            <div class="title-section">
                <p><?php echo $home_page['the_title_of_the_third_section'];?></p>
            </div>
            <?php }?>
            <div class="main-holder">
                <div class="wrapper">
                    <ul>
                        <?php if (isset($the_items_of_the_third_sections) && !empty($the_items_of_the_third_sections)): ?>
                        <?php $counter = 1; ?>
                        <?php foreach ($the_items_of_the_third_sections as $block): ?>
                        <li id="item-<?php echo $counter; ?>">
                            <img src="<?php echo $block['image'];?>" alt="">
                            <p class="text"><?php echo $block['description'];?></p>
                            <a href="<?php echo home_url('/');?><?php echo $block['the_link_of_the_button'];?>">
                                <div class="wrap-span">
                                    <span class="button"><?php echo $block['the_text_of_the_button'];?></span>
                                </div>
                            </a>
                        </li>
                            <?php $counter++;?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>

        </div>
        <div class="wrap-fourth-section">
            <!--<div class="main-holder">-->
            <!--</div>-->
            <div class="fourth-section">
                <?php if($home_page['the_title_of_the_fourth_section'] != null){ ?>
                <h3><?php echo $home_page['the_title_of_the_fourth_section'];?></h3>
                <?php }?>

                <?php if (isset($investments) && !empty($investments)): ?>
                    <?php $counter = 1; ?>
                        <?php foreach ($investments as $block): ?>
                        <article class="<?php echo fourth_section_counter($counter); ?>">
                            <strong><?php echo $block['amount'];?></strong>
                            <?php echo $block['description'];?>
                        </article>
                        <?php $counter++;?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
<?php
get_footer();
?>
