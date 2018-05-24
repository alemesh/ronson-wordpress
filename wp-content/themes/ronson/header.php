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
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url')?>/img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <!--    <link rel="stylesheet" href="css/main.min.css">-->

    <style>
        /* Pagination */
        .pagination {
            clear:both;
            position:relative;
            font-size:11px; /* Pagination text size */
            line-height:13px;
            float:right; /* Pagination float direction */
        }

        .pagination span, .pagination a {
            display:block;
            float:left;
            margin: 2px 2px 2px 0;
            padding:6px 9px 5px 9px;
            text-decoration:none;
            width:auto;
            color:#fff; /* Pagination text color */
            background: #555; /* Pagination non-active background color */
            -webkit-transition: background .15s ease-in-out;
            -moz-transition: background .15s ease-in-out;
            -ms-transition: background .15s ease-in-out;
            -o-transition: background .15s ease-in-out;
            transition: background .15s ease-in-out;
        }

        .pagination a:hover{
            color:#fff;
            background: #6AAC70; /* Pagination background on hover */
        }

        .pagination .current{
            padding:6px 9px 5px 9px;
            background: #6AAC70; /* Current page background */
            color:#fff;
        }
    </style>


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
        <?php if( is_page_template('thanks-page.php') ){?>
        fbq('track', 'Lead');
        <?php }?>

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
<?php
$header_options = get_fields(171);

?>
<div class="wraper">


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <!--<h3> השאירו פרטים</h3>-->
            <!--<p>לפגישה וקבלת פרטים אודות דירות להשקעה בטוחה בפולין,</p>-->
            <h3>צרו קשר</h3>
            <p>רוצים שנחזור אליכם? השאירו פרטים ונדבר בהקדם</p>
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
                    <div class="form-row">
                        <textarea name="description" class="form-control textarea" placeholder="תוכן הפנייה"></textarea>
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
                <a href="/">
                    <?php if($header_options['logo'] != null){ ?>
                    <img src="<?php echo $header_options['logo'];?>" alt="logo">
                    <?php }?>
                </a>
            </div>
            <div class="info-section">
                <ul class="info-left">
                    <?php if($header_options['phone_number'] != null){ ?>
                    <li><a href="tel:<?php echo $header_options['phone_number'];?>"><span class="head-hidden"><?php if($header_options['phone_text'] != null){ echo $header_options['phone_text']; }?></span><span class="phon-number"><?php echo $header_options['phone_number'];?></span></a></li>
                    <?php }?>
                    <?php if($header_options['contact_text'] != null){ ?>
                    <li class="head-hidden"><a href="#" id="myBtn"><?php echo $header_options['contact_text'];?></a></li>
                    <?php }?>
                    <?php if($header_options['mail'] != null){ ?>
                    <li class="head-hidden hover-red"><a href="mailto:<?php echo $header_options['mail'];?>"><span class="post-card"></span></a></li>
                    <?php }?>
                </ul>
                <ul class="info-right">
                    <!--<li><a href="#">המועדפים עלי (0)</a></li>-->
                    <?php if($header_options['facebook_links'] != null){ ?>
                    <li><a href="<?php echo $header_options['facebook_links'];?>" target="_blank"><span class="facebook"></span></a></li>
                    <?php }?>
                    <?php if( is_front_page() ) {?>
                    <li class="button-mobile"><a href="#video-section"><span class="youtube"></span></a></li>
                    <?php }else{?>
                    <li><a href="/#video-section"><span class="youtube"></span></a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="nav-section" id="form-scrol">
                <a href="/">
                    <div class="floating-logo" style="background-image: url(img/logo2.png)"></div>
                </a>

                <?php
                wp_nav_menu(array(
                    'container' => 'false',
                    //The location that we want to bring
                    'theme_location'=>'menu-1',
                    //Location displays the HTML markup menu
                    'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>',
                    //Specify the class for the menu
                    'menu_class'=>'main-mnu',//changing styles called class="nav-in" to class='sub-menu'
                    'menu_id'=>''
//				'depth'=>'0'
                    //                        'walker'=> new Menu_Walker_header
                ));
                ?>



                <div class="togle-wrap">
                    <a href="#" class="toggle-mnu hidden-md hidden-lg"><span></span></a>
                </div>
            </div>

        </div>
    </div>