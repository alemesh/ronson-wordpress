<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Ronson</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon/favicon2.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

<!--	<link rel="stylesheet" href="--><?php //bloginfo('template_url')?><!--/css/main.min.css">-->




	<!-- Facebook Pixel Code -->

	<script>

!function(f,b,e,v,n,t,s)


        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?


            n.callMethod.apply(n,arguments):n.queue.push(arguments)};


            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';


            n.queue=[];t=b.createElement(e);t.async=!0;


            t.src=v;s=b.getElementsByTagName(e)[0];


            s.parentNode.insertBefore(t,s)}(window,document,'script',


            'https://connect.facebook.net/en_US/fbevents.js');


        fbq('init', '782731271921380');


        fbq('track', 'PageView');

	</script>

	<noscript>

		<img height="1" width="1"

			 src="https://www.facebook.com/tr?id=782731271921380&ev=PageView

&noscript=1"/>

	</noscript>

	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google AdWords: 808590525 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-808590525"></script>
	<script>
window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-808590525');
	</script>

    <?php wp_head(); ?>
</head>

<body>

	<div class="wraper">


		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<h3> השאירו פרטים</h3>
				<p>לפגישה וקבלת פרטים אודות דירות להשקעה בטוחה בפולין,</p>
				<form action="" class="form form-validation" method="post">
					<div class="form-row-wrap">
						<div class="form-row">
							<input name="name" class="form-control" required data-required="true" type="text" pattern="^[A-Zא-תa-z ]{1,50}$"  placeholder="*שם">
						</div>
						<div class="form-row">
							<input name="tel" class="form-control" required data-required="true" type="text" placeholder="*נייד" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
						</div>
						<div class="form-row">
							<input name="email" class="form-control" required type="email" placeholder="*דוא”ל">
						</div>
						<div class="form-row">
							<textarea class="form-control textarea" placeholder="תוכן הפנייה"></textarea>
						</div>
						<div class="form-row">
							<input type="submit" class="btn" value="שלח">
						</div>
					</div>
				</form>
			</div>

		</div>
		<div class="header">
			<div class="header-conteiner">
				<div class="logo">
					<a href="http://campaign.gofmans.co.il/ronson/">
						<img src="<?php bloginfo('template_url')?>/img/logo.png" alt="logo">
					</a>
				</div>
				<div class="info-section">
					<ul class="info-left">
						<li><a href="tel:03-6988888"><span class="head-hidden">או דברו איתנו: </span><span class="phon-number">03-6988888</span></a></li>
						<li class="head-hidden"><a href="#" id="myBtn">יש לכם שאלות? <span>לחצו</span></a></li>
						<li class="head-hidden hover-red"><a href="mailto:office@ronson.co.il"><span class="post-card"></span></a></li>
					</ul>
					<ul class="info-right">
						<li><a href="#">המועדפים עלי (0)</a></li>
						<li><a href="#"><span class="facebook"></span></a></li>
						<li><a href="#"><span class="youtube"></span></a></li>
					</ul>
				</div>
				<div class="nav-section" id="form-scrol">
					<a href="http://campaign.gofmans.co.il/ronson">
						<div class="floating-logo"></div>
					</a>
					<ul class="main-mnu">
						<li><a href="#">מיקום</a></li>
						<li><a href="#">אינדקס</a></li>
						<li><a href="why.html">למה פולין?</a></li>
						<li><a href="how.html">איך זה עובד?</a></li>
						<li><a href="blog.html">פרסומים</a></li>
						<li><a href="contacts.html">צרו קשר</a></li>
					</ul>
					<div class="togle-wrap">
						<a href="#" class="toggle-mnu hidden-md hidden-lg"><span></span></a>
					</div>
				</div>

			</div>
		</div>

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
					<form action="" class="form form-validation" method="post">
						<div class="form-row-wrap">
							<div class="form-row">
								<input name="name" class="form-control" required data-required="true" type="text" pattern="^[A-Zא-תa-z ]{1,50}$"  placeholder="*שם מלא">
							</div>
							<div class="form-row">
								<input name="tel" class="form-control" required data-required="true" type="text" placeholder="*טלפון" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
							</div>
							<div class="form-row">
								<input name="email" class="form-control" required type="email" placeholder="*דוא”ל">
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
                                <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item1.png');">
                                    <div class="hover-inner">
                                        <h4><a href="http://ronson.pl/novakrolikarnia" target="_blank"><strong>Nova Królikarnia</strong> Investment</a></h4>
                                    </div>
                                    <a href="http://ronson.pl/novakrolikarnia" target="_blank" class="hover-btn">לפרטים</a>
                                </div>
                                <!--<span class="image-item">-->
                                <!--<img src="img/item1.png" alt="">-->
                                <!--</span>-->
                                <span class="image-item">
									<p class="bot-title">Nova Królikarnia</p>
									<p class="bot-description">Warszawa, Jaśminowa Street</p>
								</span>
                            </li>
                            <li>
                                <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item2.jpg');">
                                    <div class="hover-inner">
                                        <h4><a href="http://ronson.pl/moko" target="_blank"><strong>Moko</strong> Investment</a></h4>
                                    </div>
                                    <a href="http://ronson.pl/moko" target="_blank" class="hover-btn">לפרטים</a>
                                </div>
                                <span class="image-item">
									<p class="bot-title">Moko</p>
									<p class="bot-description">Warszawa, 11 Magazynowa Street</p>
								</span>
                            </li>
                            <li>
                                <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item3.png');">
                                    <div class="hover-inner">
                                        <h4><a href="http://ronson.pl/city-link" target="_blank"><strong>City Link</strong> Investment</a></h4>
                                    </div>
                                    <a href="http://ronson.pl/city-link" target="_blank" class="hover-btn">לפרטים</a>
                                </div>
                                <span class="image-item">
									<p class="bot-title">City Link</p>
									<p class="bot-description">Warszawa, 34 Skierniewicka Street</p>
								</span>
                            </li>
                            <li>
                                <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item4.jpg');">
                                    <div class="hover-inner">
                                        <h4><a href="http://ronson.pl/espresso" target="_blank"><strong>Espresso</strong> Investment</a></h4>
                                    </div>
                                    <a href="http://ronson.pl/espresso" target="_blank" class="hover-btn">לפרטים</a>
                                </div>
                                <span class="image-item">
									<p class="bot-title">Espresso</p>
									<p class="bot-description">Warszawa, 57A Jana Kazimierza Street</p>
								</span>
                            </li>
                            <li>
                                <div class="hover-text" style="background-image: url('<?php bloginfo('template_url')?>/img/item5.jpg');">
                                    <div class="hover-inner">
                                        <h4><a href="http://ronson.pl/miasto-moje" target="_blank"><strong>Miasto Moje</strong> Investment</a></h4>
                                    </div>
                                    <a href="http://ronson.pl/miasto-moje" target="_blank" class="hover-btn">לפרטים</a>
                                </div>
                                <span class="image-item">
									<h4 class="bot-title">Miasto Moje</h4>
									<p class="bot-description">Warszawa, 58 Marywilska Street</p>
								</span>
                            </li>
                        </ul>
					</div>
					<div class="video">
						<!--<video src="img/Ronson_FINAL.mp4"></video>-->
						<video class="video-controll" poster="<?php bloginfo('template_url')?>/img/video.png">
							<!--<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
							<source src="<?php bloginfo('template_url')?>/video/Ronson_FINAL.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
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
							<li>
								<img src="<?php bloginfo('template_url')?>/img/icon1.png" alt="">
								<p class="text">אתם תוכלו להנות מהשקעה יציבה ובטוחה </p>
								<a href="#">
									<div class="wrap-span">
										<span class="button">לפרטים</span>
									</div>
								</a>
							</li>
							<li>
								<img src="<?php bloginfo('template_url')?>/img/icon2.png" alt="">
								<p class="text">נקשר אתכם לחברת הניהול </p>
								<a href="#">
									<div class="wrap-span">
										<span class="button">לפרטים</span>
									</div>
								</a>
							</li>
							<li>
								<img src="<?php bloginfo('template_url')?>/img/icon3.png" alt="">
								<p class="text">נחבר אתכם לחברת הפינישים להמשך עיצוב הדירה </p>
								<a href="#">
									<div class="wrap-span">
										<span class="button">לפרטים</span>
									</div>
								</a>
							</li>
							<li>
								<img src="<?php bloginfo('template_url')?>/img/icon4.png" alt="">
								<p class="text">נעזור לכם בבחירת הדירה</p>
								<a href="#">
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
            <div class="fifth-section">
                <div class="main-holder">
                    <div class="buttons">
						<a href="tel:03-6988888" class="mobile-hidden"><span class="phone-text">וואטס אפ עסקי</span><span class="phon-number">03-6988888</span><span class="mobile-phone"></span></a>
						<a href="#" id="myBtn2" ><span>כתבו  <span class="column">לנו</span></span><span class="mail"></span></a>
                        <a href="tel:03-6988888"><span class="phone-text">דברו איתנו</span><span class="phon-number">03-6988888</span><span class="phone"></span></a>
                    </div>
                    <h3>בקרו אותנו ב:</h3>
                    <div class="social-section">
                        <a href="#"><span class="facebook"></span></a>
                        <a href="#"><span class="youtube"></span></a>
                    </div>
                    <div class="nav">
                        <ul>
                            <li><a href="#">מיקום</a></li>
                            <li><a href="#">אינדקס</a></li>
							<li><a href="why.html">למה פולין?</a></li>
							<li><a href="how.html">איך זה עובד?</a></li>
							<li><a href="blog.html">פרסומים</a></li>
							<li><a href="contacts.html">צרו קשר</a></li>
                        </ul>
                    </div>
                    <div class="description">
                        <p>ההדמיות, ההנפשות והמודלים של המבנים המוצגים באתר www.ronson.co.il. דומים לאובייקט הסופי ככל שניתן, כלומר הם עשויים להיות שונים מהמקור, במראה המבנים בפועל, פיתוח הקרקע וסביבת הנכס, גם מבחינת סכמת הצבעים. יחד עם זאת, התכונות והפרטים הבסיסיים ופונקציונליות המבנים לא ישתנו.</p>
                    </div>

                </div>
            </div>

		</div>

        <div class="footer">
            <!--<span class="label">Gofman creative</span>-->
            <div class="main-holder">
                <div class="logo-footer">
                    <a href="http://campaign.gofmans.co.il/ronson">
                        <img src="<?php bloginfo('template_url')?>/img/logo-footer.png" alt="">
                    </a>
                </div>
                <div class="footer-description">
                    <!--<p><strong>ופונקציונליות המבנים לא ישתנו.</strong>פיתוח הקרקע וסביבת הנכס, גם מבחינת סכמת הצבעים. יחד עם זאת, התכונות והפרטים הבסיסיים </p>-->

					<p><strong>א.מ.ו.ר - פולין נדלן בע”מ</strong>
משווקת בלעדית של רונסון בישראל<br>
						טל: 03-6988888 | מייל: office@ronson.co.il<br>
						מגדל אלון 2, יגאל אלון 94, תל אביב, קומה 28, מיקוד 6789140</p>
                </div>
            </div>
        </div>

	</div>

<!--	<script src="--><?php //bloginfo('template_url')?><!--/js/scripts.min.js"></script>-->
    <?php wp_footer(); ?>
</body>
</html>
