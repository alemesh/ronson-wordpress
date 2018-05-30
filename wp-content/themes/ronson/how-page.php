<?php
/**Template name: how_page */
get_header();
$how_page = get_fields();
$post_id = get_the_ID();
$items_of_the_header_section = get_field('items_of_the_header_section', $post_id);
$items_of_the_second_section = get_field('items_of_the_second_section', $post_id);
?>

    <div class="main">

        <div class="how-page">
            <div class="corner-bg"></div>

            <div class="third-section">
                <?php if($how_page['title_of_the_header_section'] != null){ ?>
                <div class="title-section">
                    <p><?php echo $how_page['title_of_the_header_section'];?></p>
                </div>
                <?php }?>
                <div class="main-holder">
                    <div class="wrapper">
                        <ul>
                            <?php if (isset($items_of_the_header_section) && !empty($items_of_the_header_section)): ?>
                            <?php $counter = 1; ?>
                            <?php foreach ($items_of_the_header_section as $block): ?>
                            <li id="item-<?php echo $counter; ?>">
                                <div class="wrap-img">
                                    <img src="<?php echo $block['image'];?>" alt="">
                                </div>
                                <p class="text"><?php echo $block['title'];?></p>
                            </li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="fourth-section2">
                <div class="main-holder">
                    <?php if($how_page['the_title_of_the_second_section'] != null){ ?>
                    <h3 class="title"><?php echo $how_page['the_title_of_the_second_section'];?></h3>
                    <?php }?>
                    <div class="wrap-holder">
                        <div class="wrap-fourch-section-left-block">
                            <div class="wrap-content">
                                <div class="wrap-right-section">
                                    <p>לפגישה וקבלת פרטים אודות דירות </p>
                                    <p>להשקעה בטוחה בפולין, השאירו פרטים </p>
                                </div>
                                <form action="floating_form_sender.php" class="form form-validation" method="post">
                                    <div class="form-row-wrap">
                                        <input type="hidden" value="7674" name="ProjectID">
                                        <input type="hidden" value="zxc1204" name="Password">
                                        <div class="form-row">
                                            <input name="name" class="form-control" required data-required="true" type="text" pattern="^[A-Zא-תa-z ]{1,50}$"  placeholder="*שם">
                                        </div>
                                        <div class="form-row">
                                            <input name="tel" class="form-control" required data-required="true" type="text" placeholder="*נייד" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
                                        </div>
                                        <div class="form-row">
                                            <input name="email" class="form-control" type="email" placeholder="דוא”ל">
                                        </div>
                                        <div class="form-row hidden-textarea">
                                            <textarea name="description" class="form-control textarea" placeholder="תוכן הפנייה"></textarea>
                                        </div>
                                        <div class="form-row">
                                            <input type="submit" data-action="sendErmailFloatingForm" class="btn" value="שלח">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="wrap-fourch-section">
                            <?php if (isset($items_of_the_second_section) && !empty($items_of_the_second_section)): ?>
                            <?php foreach ($items_of_the_second_section as $block): ?>
                            <div class="item-fourt-section">
                                <div class="img-fourtch-section">
                                    <img src="<?php echo $block['image'];?>" alt="">
                                </div>
                                <div class="desription-fourtch-section">
                                    <h4><?php echo $block['title'];?></h4>
                                    <?php echo $block['description'];?>
                                </div>
                            </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php
get_footer();
?>
