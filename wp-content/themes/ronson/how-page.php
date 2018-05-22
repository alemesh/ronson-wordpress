<?php
/**Template name: how_page */
get_header();
?>

    <div class="main">

        <div class="how-page">
            <div class="corner-bg"></div>

            <div class="third-section">
                <div class="title-section">
                    <p>פשוט מזה<span> אין!</span></p>
                </div>
                <div class="main-holder">
                    <div class="wrapper">
                        <ul>
                            <li id="item-1">
                                <div class="wrap-img">
                                    <img src="<?php bloginfo('template_url')?>/img/icon1.png" alt="">
                                </div>
                                <p class="text">אתם תיהנו מהשקעה בטוחה, יציבה ומניבה</p>
                            </li>
                            <li id="item-2">
                                <div class="wrap-img">
                                    <img src="<?php bloginfo('template_url')?>/img/icon2.png" alt="">
                                </div>
                                <p class="text">נדאג לכל הפרטים</p>
                            </li>
                            <li id="item-3">
                                <div class="wrap-img">
                                    <img src="<?php bloginfo('template_url')?>/img/icon3.png" alt="">
                                </div>
                                <p class="text">נסייע בנראות הסופית ובניהול הדירה</p>
                            </li>
                            <li id="item-4">
                                <div class="wrap-img">
                                    <img src="<?php bloginfo('template_url')?>/img/icon4.png" alt="">
                                </div>
                                <p class="text">נעזור לכם בבחירת הדירה</p>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="fourth-section2">
                <div class="main-holder">
                    <h3 class="title">חבילת שירות כוללת – ONE STOP SHOP</h3>
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
                                            <input type="submit" class="btn" value="שלח">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="wrap-fourch-section">
                            <div class="item-fourt-section">
                                <div class="img-fourtch-section">
                                    <img src="<?php bloginfo('template_url')?>/img/icon4.png" alt="">
                                </div>
                                <div class="desription-fourtch-section">
                                    <h4>נעזור לכם בבחירת הדירה </h4>
                                    <!--<p>הועניב היושבב שערש שמחויט - שלושע ותלברו חשלו שעותלשך וחאית נובש ערששף. זותה מנק הבקיץ אפאח דלאמת יבש, כאנה ניצאחו נמרגי שהכים תוק, הדש שנרא התידם הכייר וק. ליבם סולגק. בראיט ולחת צורק מונחף, בגורמי מגמש. תרבנך וסתעד לכנו סתשם השמה - לתכי מורגם</p>-->
                                    <p>לאחר שהתעניינתם בדירה להשקעה בפולין באחד מהפרויקטים של רונסון, אנחנו נבצע בדיקה מעמיקה
                                        ונאתר את הנכנס האטרקטיבי ביותר עבורכם.
                                    </p>
                                </div>
                            </div>
                            <div class="item-fourt-section">
                                <div class="img-fourtch-section">
                                    <img src="<?php bloginfo('template_url')?>/img/icon3.png" alt="">
                                </div>
                                <div class="desription-fourtch-section">
                                    <!--<h4>נחבר אתכם לחברת הפינישים להמשך עיצוב הדירה</h4>-->
                                    <h4>נסייע בנראות הסופית ובניהול הדירה</h4>
                                    <!--<p>הועניב היושבב שערש שמחויט - שלושע ותלברו חשלו שעותלשך וחאית נובש ערששף. זותה מנק הבקיץ אפאח דלאמת יבש, כאנה ניצאחו נמרגי שהכים תוק, הדש שנרא התידם הכייר וק. ליבם סולגק. בראיט ולחת צורק מונחף, בגורמי מגמש. תרבנך וסתעד לכנו סתשם השמה - לתכי מורגם</p>-->
                                    <p>בעזרת חברת הגימור, נשלים את העבודות הרלוונטיות ואת אבזור הנכס (לרוב הדירות מגיעות ריקות),
                                        על מנת להשביח את ערכו למקסימום. בנוסף, נאתר את חברת הניהול וננהל מולה מו"מ.
                                        חברות הניהול העובדות אתנו הן מהמובילות בפולין!
                                    </p>
                                </div>
                            </div>
                            <div class="item-fourt-section">
                                <div class="img-fourtch-section">
                                    <img src="<?php bloginfo('template_url')?>/img/icon2.png" alt="">
                                </div>
                                <div class="desription-fourtch-section">
                                    <!--<h4>נקשר אתכם לחברת הניהול</h4>-->
                                    <h4>נדאג לכל הפרטים</h4>
                                    <!--<p>הועניב היושבב שערש שמחויט - שלושע ותלברו חשלו שעותלשך וחאית נובש ערששף. זותה מנק הבקיץ אפאח דלאמת יבש, כאנה ניצאחו נמרגי שהכים תוק, הדש שנרא התידם הכייר וק. ליבם סולגק. בראיט ולחת צורק מונחף, בגורמי מגמש. תרבנך וסתעד לכנו סתשם השמה - לתכי מורגם</p>-->
                                    <p>נדאג להשלמת התהליך הפרוצדורלי והמשפטי, לרבות רישום הנכס בטאבו הפולני, בליווי עו"ד ישראלי-פולני ונוטריון פולני. בסוף התהליך, תהיו הבעלים החוקיים של הנכס בפולין.</p>
                                </div>
                            </div>
                            <div class="item-fourt-section">
                                <div class="img-fourtch-section">
                                    <img src="<?php bloginfo('template_url')?>/img/icon1.png" alt="">
                                </div>
                                <div class="desription-fourtch-section">
                                    <!--<h4>אתם תוכלו להנות מהשקעה יציבה ובטוחה</h4>-->
                                    <h4>אתם תיהנו מהשקעה בטוחה, יציבה ומניבה</h4>
                                    <!--<p>הועניב היושבב שערש שמחויט - שלושע ותלברו חשלו שעותלשך וחאית נובש ערששף. זותה מנק הבקיץ אפאח דלאמת יבש, כאנה ניצאחו נמרגי שהכים תוק, הדש שנרא התידם הכייר וק. ליבם סולגק. בראיט ולחת צורק מונחף, בגורמי מגמש. תרבנך וסתעד לכנו סתשם השמה - לתכי מורגם</p>-->
                                    <p>אתם תיהנו מנכס מניב בפולין, שמסומנת כיום כיעד פיננסי נחשב, עם כלכלה יציבה, מטבע חזק ומגוון הזדמנויות חדשות להשקעה. כל זאת, בתהליך פשוט וממוקד, ללא צורך לטוס לפולין.

                                        אנחנו הכתובת שלכם לכל שלבי התהליך – יש לכם תמיד עם מי לדבר!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php
get_footer();
?>
