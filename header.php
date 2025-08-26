<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <?php wp_head(); ?> -->
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="index, follow" />
    <title>MAGNOLIAS RATCHADAMRI BOULEVARD, The Art of Luxury Living</title>
    <meta name="description" content=" " />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/bootstrap3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/fancybox3.5.6/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/selectric.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/mcb/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/grid-system12.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/plugins/aos/aos.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/fonts/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/style.css" />


    <!-- Responsive -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/residences-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/one-bedroom-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/two-bedroom-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/services-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/facilities-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/lifestyle-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/gallery-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive/contact-responsive.css">
</head>

<body>
    
    <!-- Dropdown Menu -->
    <nav class="nav center transz navbar-section" style="">
        <div class="inner">
            <?php $logo = get_field('header_logo','option'); ?>
            <img src="<?php echo $logo['url']; ?>" class="menulogo">
            
            <a href="javascript:toggleMENU();"><img src="<?php echo get_template_directory_uri();?>/images/close-menu.png" class="closemenu"></a>
            <!-- <p class="topmenu">menu</p> -->
            <div class="menu-mob-layout">
                <ul class="navmenu">
                    <li><a href="front-page">HOME</a></li>
                    <li><a href="residences">RESIDENCES</a></li>
                    <li><a href="services">SERVICES</a></li>
                    <li><a href="facilities">FACILITIES</a></li>
                    <li><a href="lifestyle">LIFESTYLE</a></li>
                    <li><a href="gallery">GALLERY</a></li>
                    <li><a href="contact">CONTACT</a></li>
                </ul>
                <a href="<?php echo get_site_url(); ?>/contact" class="bdbutton mml">CONTACT US</a><br>
                <div class="lang mml">
                    <a href="javascript:;" class="first">THAI</a>
                    <a href="javascript:;" class="second">ENGLISH</a>
                </div><br>
                <a href="javascript:;" class="privacy mml">PRIVACY STATEMENT</a>
            </div>

            <a href="contact" target="blank" class="bdbutton bdbuttonContact bdbutton-expanded-menu1" style="left: 45%;">CONTACT AGENT</a>
            <a href="tel:+66021111111" class="bdbutton call bdbutton-expanded-menu2" id="bdbuttonCall2" style="left: 57%;"><img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/icon-phone2.png" id="bdbuttonCallImg2">
                <span id="bdbuttonCallParagraph2">CALL US</span>
            </a>

            <div class="lang hidden-M">
                <a href="javascript:;" class="first">THAI</a>
                <a href="javascript:;" style="padding-left: 9px;">ENGLISH</a>
            </div>
            <a href="javascript:;" class="privacy hidden-M">PRIVACY STATEMENT</a>

        </div>
    </nav>
    <!-- Dropdown Menu -->



    
    <!-- Header -->
    <header class="header center transz">
        <div class="inner">
            <div class="row">
                <div class="D-4 left mainmenu">
                    <a href="javascript:toggleMENU();" class="first">
                        <div class="bar">
                            <div class="line" class="first"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <span class="hideM">MENU</span>
                    </a>
                    <a href="<?php echo get_site_url(); ?>" class="hideM">HOME</a>
                </div>
                <div class="D-4 M-12 center">
                    <?php $logo = get_field('header_logo','option'); ?>
                        <img src="<?php echo $logo['url']; ?>" class="logo transz imgLOGO">
                    
                    <span class="flagResponsive" onclick="dropdownLanguageResponsive()">
                        <a href="javascript:;" class="flagButton">
                            <img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/uk-flag.png" alt=""> EN
                        </a>
                    </span>
                    <div class="dropdown-magnolias-responsive">
                        <a href="javascript:;" class="flagButton">
                            <img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/th-flag2.jpg" alt=""> TH
                        </a>
                    </div>
                </div>
                <div class="D-4 right topcontact">
                    <a href="contact" class="bdbutton cagent" target="blank">CONTACT US</a>
                    <a href="tel:+66021111111" class="bdbutton call" id="bdbuttonCall"><img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/icon-phone2.png" id="bdbuttonCallImg">
                        <p id="bdbuttonCallParagraph">(+66) 021 111 111</p>
                    </a>
                    <a href="tel:+66021111111" class="bdbutton cagent-Responsive">CONTACT US : <br> (+66) 021 111 111</a>
                    <a href="javascript:;" class="flagButton" onclick="dropdownLanguage()">
                        <img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/uk-flag.png" alt=""> EN
                    </a>

                    <div class="dropdown-magnolias">
                        <a href="javascript:;" class="flagButton">
                            <img src="<?php echo get_template_directory_uri();?>/images/New_Magnolia_Logo/th-flag2.jpg" alt=""> TH
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->