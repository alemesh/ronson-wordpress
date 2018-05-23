<?php
/**Template name: contacts_page */
get_header();
$contact_page = get_fields();
$post_id = get_the_ID();
?>

    <div class="main">
        <div class="contacts-page" style="background-image: url(<?php if($contact_page['bacgroung'] != null){ echo $contact_page['bacgroung']; }?>)">
            <div class="corner-bg"></div>
            <div class="main-holder">

                <div class="wrap-contacts">
                    <div class="left-section">
                        <?php if($contact_page['left_section'] != null){ ?>
                        <div class="first-block">
                                <?php echo $contact_page['left_section'];?>
                        </div>
                        <?php }?>
                    </div>
                    <div class="right-section">
                        <div class="wrap-right-section">
                            <h3>צרו קשר</h3>
                            <p>רוצים שנחזור אליכם? השאירו פרטים ונדבר בהקדם</p>
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
                                    <input type="submit" class="btn" value="שלח">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

<?php
get_footer();
?>