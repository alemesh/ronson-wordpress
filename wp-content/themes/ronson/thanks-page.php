<?php
/**Template name: thanks_page */
get_header();
?>

    <div class="main thanks-page">
        <div class="home-header" style="background-image: url(<?php bloginfo('template_url')?>/img/background-header2.png)">
            <div class="rectangle-left"></div>
            <div class="rectangle-right"></div>
            <span class="label">Gofman creative</span>
            <div class="content">
                <div class="title">
                    <h1>רונסון נדל”ן</h1>
                    <p>כבר 20 שנה בונים את פולין</p>
                </div>
                <div class="red-label">
                    <p>השיגו תשואות גבוהות בהשקעה נמוכה!</p>
                </div>
            </div>

            <div class="form-hold">
                <h3 class="thanks-hidden">לפגישה וקבלת פרטים אודות דירות להשקעה בטוחה בפולין, השאירו פרטים</h3>
                <h3 class="thanks-page-visible">תודה!  פרטיך התקבלו בהצלחה.</h3>
                <form action="form_processing.php" class="form form-validation  success-form" method="post">
                    <div class="success-msg">
                        <p>תודה!  פרטיך התקבלו בהצלחה.</p>
                    </div>
                    <div class="form-row-wrap">
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
                            <input type="submit" class="btn" value="שלח">
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php
get_footer();
?>

