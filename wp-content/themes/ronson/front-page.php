<?php
get_header();
?>

    <div class="main">
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
                <h3>לפגישה וקבלת פרטים אודות דירות להשקעה בטוחה בפולין, השאירו פרטים</h3>
                <form action="form_processing.php" class="form form-validation" method="post">
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
                            <input type="submit" class="btn" value="שלח">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-best-sellers" style="background-image: url(<?php bloginfo('template_url')?>/img/bg-second-section.png)">
            <div class="main-holder">
                <h3>הנמכרים ביותר</h3>
                <div class="items">
                    <ul class="items-list">

                        <li>
                            <div class="hover-text" style="background-image: url(<?php bloginfo('template_url')?>/img/item1.png);">
                                <div class="hover-inner">
                                    <!--<h4><a href="http://ronson.pl/novakrolikarnia/en/" target="_blank"><strong>Nova Królikarnia</strong> Investment</a></h4>-->
                                    <h4><a href="#" class="myBtns"><strong>Nova Królikarnia</strong> Investment</a></h4>
                                </div>
                                <!--<a href="http://ronson.pl/novakrolikarnia/en/" target="_blank" class="hover-btn">לפרטים</a>-->
                                <a href="#" class="myBtns hover-btn">לפרטים</a>
                            </div>
                            <span class="image-item">
									<p class="bot-title">Nova Królikarnia</p>
                                <!--<p class="bot-description">Warszawa, Jaśminowa Street</p>-->
									<p class="bot-description">פרויקט מדהים מרכז פולין</p>
								</span>
                        </li>
                        <li>
                            <div class="hover-text" style="background-image: url(<?php bloginfo('template_url')?>/img/item6.png);">
                                <div class="hover-inner">
                                    <!--<h4><a href="http://ronson.pl/marina-miasto/en/" target="_blank"><strong>Miasto Marina</strong> Investment</a></h4>-->
                                    <h4><a href="#" class="myBtns"><strong>Miasto Marina</strong> Investment</a></h4>
                                </div>
                                <!--<a href="http://ronson.pl/marina-miasto/en/" target="_blank" class="hover-btn">לפרטים</a>-->
                                <a href="#" class="myBtns hover-btn">לפרטים</a>
                            </div>
                            <span class="image-item">
									<p class="bot-title">Miasto Marina</p>
                                <!--<p class="bot-description">Wrocław, ul. Na Grobli</p>-->
									<p class="bot-description">דירות מלון בוורצלאב עם הנוף היפה בפולין </p>
								</span>
                        </li>
                        <li>
                            <div class="hover-text" style="background-image: url(<?php bloginfo('template_url')?>/img/item3.png);">
                                <div class="hover-inner">
                                    <!--<h4><a href="http://ronson.pl/city-link/en" target="_blank"><strong>City Link</strong> Investment</a></h4>-->
                                    <h4><a href="#" class="myBtns"><strong>City Link</strong> Investment</a></h4>
                                </div>
                                <!--<a href="http://ronson.pl/city-link/en" target="_blank" class="hover-btn">לפרטים</a>-->
                                <a href="#" class="myBtns hover-btn">לפרטים</a>
                            </div>
                            <span class="image-item">
									<p class="bot-title">City Link</p>
                                <!--<p class="bot-description">Warszawa, 34 Skierniewicka Street</p>-->
									<p class="bot-description">פרויקט מדהים מרכז פולין</p>
								</span>
                        </li>
                        <li>
                            <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item7.jpg');">
                                <div class="hover-inner">
                                    <!--<h4><a href="http://grunwaldkwadrat.ronsondevelopment.com.pl/" target="_blank"><strong>Grunwald Kwadrat</strong> Investment</a></h4>-->
                                    <h4><a href="#" class="myBtns"><strong>Grunwald Kwadrat</strong> Investment</a></h4>
                                </div>
                                <!--<a href="http://grunwaldkwadrat.ronsondevelopment.com.pl/" target="_blank" class="hover-btn">לפרטים</a>-->
                                <a href="#" class="myBtns hover-btn">לפרטים</a>
                            </div>
                            <span class="image-item">
									<p class="bot-title">Grunwald Kwadrat</p>
                                <!--<p class="bot-description">Poznań, ul. Świerzawska 5</p>-->
									<p class="bot-description">עכשיו בפרי סייל!</p>
								</span>
                        </li>
                        <li>
                            <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item5.jpg');">
                                <div class="hover-inner">
                                    <!--<h4><a href="http://ronson.pl/miasto-moje/en/" target="_blank"><strong>Miasto Moje</strong> Investment</a></h4>-->
                                    <h4><a href="#" class="myBtns"><strong>Miasto Moje</strong> Investment</a></h4>
                                </div>
                                <!--<a href="http://ronson.pl/miasto-moje/en/" target="_blank" class="hover-btn">לפרטים</a>-->
                                <a href="#" class="myBtns hover-btn">לפרטים</a>
                            </div>
                            <span class="image-item">
									<h4 class="bot-title">Miasto Moje</h4>
                                <!--<p class="bot-description">Warszawa, 58 Marywilska Street</p>-->
									<p class="bot-description">פרויקט מדהים מרכז פולין</p>
								</span>
                        </li>
                    </ul>
                </div>
                <div class="video" id="video-section">
                    <!--<video src="img/Ronson_FINAL.mp4"></video>-->
                    <video class="video-controll mobile-hidden-video" id="videoPlayer" poster="<?php bloginfo('template_url')?>/img/video-play.png" onclick="this.paused ? this.play() : this.pause();">
                        <!--<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
                        <source  src="<?php bloginfo('template_url')?>/video/Ronson_FINAL.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <!--<source src="video/Ronson_FINAL.mp4" type='video/mp4'>-->
                        <!--<source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>-->
                        <!--<a href="img/Ronson_FINAL.mp4">Скачайте видео</a>-->
                    </video>
                    <video class="video-controll desctop-hidden-video" id="videoPlayer" poster="<?php bloginfo('template_url')?>/img/video-play.png" onclick="this.paused ? this.play() : this.pause();">
                        <!--<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
                        <source src="<?php bloginfo('template_url')?>/video/ronson.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <!--<source src="video/Ronson_FINAL.mp4" type='video/mp4'>-->
                        <!--<source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>-->
                        <!--<a href="img/Ronson_FINAL.mp4">Скачайте видео</a>-->
                    </video>
                </div>


            </div>
        </div>

        <div class="third-section">
            <div class="title-section">
                <p>פשוט מזה<span> אין!</span></p>
            </div>
            <div class="main-holder">
                <div class="wrapper">
                    <ul>
                        <li id="item-1">
                            <img src="<?php bloginfo('template_url')?>/img/icon1.png" alt="">
                            <p class="text">אתם תוכלו להנות מהשקעה יציבה ובטוחה </p>
                            <a href="/how.html">
                                <div class="wrap-span">
                                    <span class="button">לפרטים</span>
                                </div>
                            </a>
                        </li>
                        <li id="item-2">
                            <img src="<?php bloginfo('template_url')?>/img/icon2.png" alt="">
                            <p class="text">נקשר אתכם לחברת הניהול </p>
                            <a href="/how.html">
                                <div class="wrap-span">
                                    <span class="button">לפרטים</span>
                                </div>
                            </a>
                        </li>
                        <li id="item-3">
                            <img src="<?php bloginfo('template_url')?>/img/icon3.png" alt="">
                            <p class="text">נחבר אתכם לחברת הפינישים להמשך עיצוב הדירה </p>
                            <a href="/how.html">
                                <div class="wrap-span">
                                    <span class="button">לפרטים</span>
                                </div>
                            </a>
                        </li>
                        <li id="item-4">
                            <img src="<?php bloginfo('template_url')?>/img/icon4.png" alt="">
                            <p class="text">נעזור לכם בבחירת הדירה</p>
                            <a href="/how.html">
                                <div class="wrap-span">
                                    <span class="button">לפרטים</span>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

        </div>
        <div class="wrap-fourth-section">
            <!--<div class="main-holder">-->
            <!--</div>-->
            <div class="fourth-section">
                <h3><span>רונסון נדל”ן</span> - השקעה יציבה ובטוחה</h3>
                <article class="rd-projects">
                    <strong>11</strong>
                    שנות מסחר<br> בבורסה הפולנית
                </article>
                <article class="rd-exp-years">
                    <strong>20,000</strong>
                    לקוחות מרוצים
                </article>
                <article class="rd-completed">
                    <strong>20</strong>
                    שנות <br>ניסיון
                </article>
                <article class="rd-residents">
                    <strong>25</strong>
                    פרויקטים שהסתיימו/בנויים
                </article>
                <article class="rd-gpw-years">
                    <strong>12</strong>
                    פרויקטים<br> למכירה
                </article>
            </div>
        </div>
<?php
get_footer();
?>
