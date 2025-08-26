<?php get_header(); ?>



<?php $front_page_banner = get_field('front_page_banner'); ?>

<!-- Front Page Top Banner -->
<section class="home-banner" style="background: url('<?php echo $front_page_banner['banner']['url']; ?>') !important;
    background-size: cover !important; 
    background-repeat: no-repeat !important;">
    <div class="mask-banner"></div>
    <div class="home-slide">
        <div class="rightSideBarHeader">
            <div class="rightSideBarHeader-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/right-side-banner1.png" alt="">
                </a>
                <br>
                <a href="#">
                    <span>Virtual Tour</span>
                </a>
            </div>
            <div class="rightSideBarHeader-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/right-side-banner2.png" alt="">
                </a>
                <br>
                <a href="#">
                    <span>Video</span>
                </a>
            </div>
            <div class="rightSideBarHeader-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/right-side-banner3.png" alt="">
                </a>
                <br>
                <a href="#">
                    <span>Photo</span>
                </a>
            </div>
        </div>
        <div class="slide-obj cover very-privileged">
            <div class="caption first center">
                <p class="title t1"><?php echo $front_page_banner['title1']; ?></p>
                <p class="title t2"><?php echo $front_page_banner['title2']; ?></p>
                <div class="hr hrhome">
                    <div class="line tt-center very-privileged-line"></div>
                </div>
                <p class="title t3 very-privileged-p3"><?php echo $front_page_banner['title3']; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- INDEX HOME BANNER -->




<?php $front_page_section1 = get_field('front_page_section_1'); ?>

<!-- Front Page Section 1 -->
<section class="content pdct center main-section1">
    <div class="inner">
        <div class="row  center">
            <div class="D-6 L-10 M-10">

                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $front_page_section1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $front_page_section1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>

                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $front_page_section1['content']; ?></p>
                </div>

                <br>

                <!-- <div class="aos divbdbutton" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?php echo $front_page_section1['button1']['url']; ?>" target="<?php echo $front_page_section1['button1']['target']; ?>" class="bdbutton bdbuttonContact bdbuttonContact-section1">
                        <?php echo $front_page_section1['button1']['title']; ?>
                    </a>

                    <a href="<?php echo $front_page_section1['button1']['url']; ?>" target="<?php echo $front_page_section1['button1']['target']; ?>" class="bdbuttonContact-section1-1100px">
                        <?php echo $front_page_section1['button1']['title']; ?>
                    </a>

                    <a href="<?php echo $front_page_section1['button2']['url']; ?>" target="<?php echo $front_page_section1['button2']['target']; ?>" class="bdbutton call" id="bdbutton-call2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/icon-phone2.png" id="bdbutton-call2-img">
                        <span id="bdbutton-call2-p"><?php echo $front_page_section1['button2']['title']; ?></span>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</section>




<?php $front_page_section2 = get_field('front_page_section_2'); ?>

<!-- Front Page Section 2 -->
<section class="content RESIDENCES-SECTION">
    <div class="container center">
        <div class="row center">
            <div class="D-12 L-12 M-12 overflow">
                <a href="javascript:slickCT('.oneslide','slickNext');" class="slide-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-prev2.png"></a>
                <a href="javascript:slickCT('.oneslide','slickPrev');" class="slide-next"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-next2.png"></a>
                <div class="oneslide">
                    <?php if (have_rows('front_page_section_2')) : while (have_rows('front_page_section_2')) : the_row(); ?>
                            <?php if (have_rows('front_page_section_2_image')) : while (have_rows('front_page_section_2_image')) : the_row();
                                    $image = get_sub_field('image');
                            ?>
                                    <div class="rwrap">
                                        <div class="inner">
                                            <div class="mask"></div>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="imghover">
                                        </div>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
            <div class="D-10 L-12 M-12">
                <div class="room-capt">
                    <p class="rcpt1"><?php echo $front_page_section2['sub_title']; ?></p>
                    <p class="rcpt2"><span class="head-title placeYouCallHome"><?php echo $front_page_section2['title']; ?></span></p>
                    <div class="ct"><?php echo $front_page_section2['content']; ?></div>
                    <br>
                    <a href="<?php echo $front_page_section2['button1']['url']; ?>" target="<?php echo $front_page_section2['button1']['target']; ?>" class="bdbutton explore-our-residences">
                        <?php echo $front_page_section2['button1']['title']; ?>
                    </a>
                    <a href="<?php echo $front_page_section2['button2']['url']; ?>" target="<?php echo $front_page_section2['button2']['target']; ?>" class="bdbutton private-viewing">
                        <?php echo $front_page_section2['button2']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-back">
        <div class="row-fluid slide-mock">
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms2.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms2.jpg"></div>
        </div>
    </div>
</section>



<?php $front_page_section_3 = get_field('front_page_section_3'); ?>

<!-- Front Page Section 3 -->
<section class="content pdct-nt center UNORDINARY-EXPERIENCES">
    <div class="inner">
        <div class="row">
            <div class="D-10 L-12 M-12 no-gap introbox">

                <div class="aos" data-aos="fade-up">
                    <p class="sub-title unOrdinary"><?php echo $front_page_section_3['sub_title']; ?></p>
                    <p class="head-title experiences"><?php echo $front_page_section_3['title']; ?></p>
                    <div class="hr">
                        <div class="line tt-center"></div>
                    </div>
                </div>

                <div class="row-fluid exrow">
                    <?php if (have_rows('front_page_section_3')) : while (have_rows('front_page_section_3')) : the_row(); ?>
                            <?php if (have_rows('front_page_section_3_item')) : while (have_rows('front_page_section_3_item')) : the_row();
                                    $image = get_sub_field('image');
                                    $button = get_sub_field('button');
                            ?>

                                    <div class="D-4 M-12 aos unOrdinary-item1" data-aos="fade-up" data-aos-delay="100">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        <p class="unOrdinaryHeaderContent left"><?php the_sub_field('title'); ?></p>
                                        <div class="unOrdinaryParagraph left"><?php the_sub_field('content'); ?></div>

                                        <p class="p3-unordinary">
                                            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="bdbutton">
                                                <?php echo $button['title']; ?>
                                            </a>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                    <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>




<?php $front_page_section_4 = get_field('front_page_section_4'); ?>

<!-- Front Page Section 4 -->
<section class="content pdct-top center AMENITIES">
    <div class="inner">
        <div class="row">
            <div class="D-11 M-12  introbox aos" data-aos="fade-up">
                <p class="sub-title"><?php echo $front_page_section_4['sub_title']; ?></p>
                <p class="head-title amenitiesHeader"><?php echo $front_page_section_4['title']; ?></p>
                <div class="hr">
                    <div class="line tt-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php if (have_rows('front_page_section_5')) :  while (have_rows('front_page_section_5')) : the_row(); 
    $button = get_sub_field('button_image');
?>

        <!-- Front Page Section 5 -->
        <section class="content center amenitiesImage">
            <div class="container center">
                <div class="row center">
                    <div class="D-12 L-12 M-12 overflow">
                        <a href="javascript:slickCT('.amenslide','slickNext');" class="slide-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-prev2.png"></a>
                        <a href="javascript:slickCT('.amenslide','slickPrev');" class="slide-next"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-next2.png"></a>
                        <div class="amenslide">

                            <?php if (have_rows('front_page_section_5_image')) :  while (have_rows('front_page_section_5_image')) : the_row();
                                    $image = get_sub_field('image');
                            ?>
                                    <div class="rwrap">
                                        <div class="inner">
                                            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="imghover">
                                            </a>
                                        </div>
                                    </div>
                            <?php endwhile;
                            endif; ?>

                        </div>
                    </div>

                    <div class="D-12 M-12 L-12 after-slide">
                        <div class="rwrap">
                            <div class="row-fluid left amenities">
                                <div class="D-5 M-12">
                                    <ul>
                                        <?php if (have_rows('content_1')) :  while (have_rows('content_1')) : the_row(); ?>
                                                <li><?php the_sub_field('text'); ?></li>
                                        <?php endwhile;
                                        endif; ?>
                                    </ul>
                                </div>
                                <div class="D-4 M-12">
                                    <ul>
                                        <?php if (have_rows('content_2')) :  while (have_rows('content_2')) : the_row(); ?>
                                                <li><?php the_sub_field('text'); ?></li>
                                        <?php endwhile;
                                        endif; ?>
                                    </ul>
                                </div>
                                <div class="D-3 M-12">
                                    <ul>
                                        <?php if (have_rows('content_3')) :  while (have_rows('content_3')) : the_row(); ?>
                                                <li><?php the_sub_field('text'); ?></li>
                                        <?php endwhile;
                                        endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-back top">
                <div class="row-fluid slide-mock-amen">
                    <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms.jpg"></div>
                    <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms2.jpg"></div>
                    <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms.jpg"></div>
                    <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/rooms2.jpg"></div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>





<?php $front_page_section_6 = get_field('front_page_section_6'); ?>

<!-- Front Page Section 6 integrated with LIFESTYLE -->
<!-- <section class="content pdct center NEIGHBOURHOOD">
    <div class="inner">
        <div class="row  left">
            <div class="D-7 L-12 T-12 M-12 margin-bottom-mobile aos" data-aos="fade-up">
                <img src="<?php echo $front_page_section_6['image']['url']; ?>" alt="<?php echo $front_page_section_6['image']['alt']; ?>">
            </div>
            <div class="D-5 L-12 T-12 M-12 introbox left aos center-right bangkok-most-luxurious" data-aos="fade-up" data-aos-delay="100">
                <div class="inner content">
                    <p class="sub-title bangkok-most-luxurious-item1"><?php echo $front_page_section_6['sub_title']; ?></p>
                    <p class="head-title bangkok-most-luxurious-item2"><?php echo $front_page_section_6['title']; ?></p>
                    <div class="bangkok-most-luxurious-item3">
                        <?php echo $front_page_section_6['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->




<?php $front_page_section_7 = get_field('front_page_section_7'); ?>
<?php if (have_rows('front_page_section_7')) : while (have_rows('front_page_section_7')) : the_row(); ?>

        <!-- Front Page Section 7 -->
        <section class="content pdct-nt center TOP-3-PICKS">
            <div class="inner">
                <div class="row">
                    <div class="D-10 L-12 M-12 no-gap  introbox">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $front_page_section_7['sub_title']; ?></p>
                            <p class="head-title top3picksHeaderLarge"><?php echo $front_page_section_7['title']; ?></p>
                            <div class="hr">
                                <div class="line tt-center"></div>
                            </div>
                        </div>

                        <div class="row-fluid exrow">
                            <?php if (have_rows('front_page_section_7_item')) : while (have_rows('front_page_section_7_item')) : the_row();
                                    $image = get_sub_field('image');
                                    $title_icon = get_sub_field('title_icon');
                            ?>
                                    <div class="D-4 T-12 M-12 aos" data-aos="fade-up" data-aos-delay="100">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" target="<?php echo $image['target']; ?>" class="imgFIT">
                                        <p class="top3picksHeader left">
                                            <img src="<?php echo $title_icon['url']; ?>"><?php the_sub_field('title'); ?>
                                        </p>
                                        <div class="top3picksParagraph left">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                        <br><br>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>





<?php $front_page_section_8 = get_field('front_page_section_8'); ?>
<?php if (have_rows('front_page_section_8')) : while (have_rows('front_page_section_8')) : the_row();
        $content_1 = get_sub_field('content_1');
        $content_2 = get_sub_field('content_2');
        $content_3 = get_sub_field('content_3');
        $content_4 = get_sub_field('content_4');
        $content_5 = get_sub_field('content_5');
        $content_6 = get_sub_field('content_6');
?>
        <!-- Front Page Section 8 -->
        <section class="content center MAGNOLIAS-MAP">
            <div class="inner">
                <div class="row">
                    <div class="D-10 L-12 M-12  introbox fixwr">
                        <div class="auto-wrap">
                            <img src="<?php echo $front_page_section_8['image']['url']; ?>" alt="<?php echo $front_page_section_8['image']['alt']; ?>" class="aos" data-aos="fade-up">
                            <div class="row-fluid mapwrap">

                                <div class="D-4 M-12 left mapcol">
                                    <?php if (have_rows('content_1')) : while (have_rows('content_1')) : the_row();
                                            $image_icon = get_sub_field('image_icon');
                                    ?>
                                            <div class=" maprow education aos" data-aos="fade-right" data-aos-delay="0" id="list-ed">
                                                <a href="javascript:toggleDefault('#list-ed','listActive');"></a>

                                                <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                                <p class="head-title educationHeader mapwrap-header1"><?php echo $content_1['title']; ?></p>
                                                <ol>

                                                    <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                            $text = get_sub_field('text');
                                                    ?>
                                                            <li><?php echo $text; ?></li>
                                                    <?php endwhile;
                                                    endif; ?>
                                                </ol>
                                            </div>
                                    <?php endwhile;
                                    endif; ?>


                                    <?php if (have_rows('content_2')) : while (have_rows('content_2')) : the_row();
                                            $image_icon = get_sub_field('image_icon');
                                    ?>
                                            <div class=" maprow hospital aos" data-aos="fade-right" data-aos-delay="100" id="list-ho">
                                                <a href="javascript:toggleDefault('#list-ho','listActive');"></a>

                                                <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                                <p class="head-title mapwrap-header2"><?php echo $content_2['title']; ?></p>
                                                <ol>
                                                    <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                            $text = get_sub_field('text');
                                                    ?>
                                                            <li><?php echo $text; ?></li>
                                                    <?php endwhile;
                                                    endif; ?>
                                                </ol>
                                            </div>
                                    <?php endwhile;
                                    endif; ?>




                                    <?php if (have_rows('content_3')) : while (have_rows('content_3')) : the_row();
                                            $image_icon = get_sub_field('image_icon');
                                    ?>
                                            <div class=" maprow business aos" data-aos="fade-right" data-aos-delay="200" id="list-bu">
                                                <a href="javascript:toggleDefault('#list-bu','listActive');"></a>

                                                <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                                <p class="head-title mapwrap-header3"><?php echo $content_3['title']; ?></p>
                                                <ol>

                                                    <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                            $text = get_sub_field('text');
                                                    ?>
                                                            <li><?php echo $text; ?></li>
                                                    <?php endwhile;
                                                    endif; ?>
                                                </ol>
                                            </div>
                                </div>
                        <?php endwhile;
                                    endif; ?>




                        <div class="D-4 M-12 left mapcol">

                            <?php if (have_rows('content_4')) : while (have_rows('content_4')) : the_row();
                                    $image_icon = get_sub_field('image_icon');
                            ?>
                                    <div class=" maprow shopping aos" data-aos="fade-right" data-aos-delay="0" id="list-sh">
                                        <a href="javascript:toggleDefault('#list-sh','listActive');"></a>

                                        <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                        <p class="head-title mapwrap-header4"><?php echo $content_4['title']; ?></p>
                                        <ol>

                                            <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ol>
                                    </div>
                            <?php endwhile;
                            endif; ?>


                            <?php if (have_rows('content_5')) : while (have_rows('content_5')) : the_row();
                                    $image_icon = get_sub_field('image_icon');
                            ?>
                                    <div class=" maprow office aos" data-aos="fade-right" data-aos-delay="100" id="list-of">
                                        <a href="javascript:toggleDefault('#list-of','listActive');"></a>

                                        <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                        <p class="head-title mapwrap-header5"><?php echo $content_5['title']; ?></p>
                                        <ol>

                                            <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>

                                        </ol>
                                    </div>
                            <?php endwhile;
                            endif; ?>


                        </div>


                        <?php if (have_rows('content_6')) : while (have_rows('content_6')) : the_row();
                                $image_icon = get_sub_field('image_icon');
                        ?>
                                <div class="D-4 M-12 left mapcol">
                                    <div class=" maprow hotel aos" data-aos="fade-right" data-aos-delay="0" id="list-ht">
                                        <a href="javascript:toggleDefault('#list-ht','listActive');"></a>

                                        <img src="<?php echo $image_icon['url']; ?>" alt="<?php echo $image_icon['alt']; ?>" class="img-magnolias-map">
                                        <p class="head-title mapwrap-header6"><?php echo $content_6['title']; ?></p>
                                        <ol>

                                            <?php if (have_rows('content')) : while (have_rows('content')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>

                                        </ol>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>





<!-- <?php $front_page_section_9 = get_field('front_page_section_9'); ?>  -->
<!-- <?php if (have_rows('front_page_section_9')) : while (have_rows('front_page_section_9')) : the_row(); ?> -->


        <!-- Front Page Section 9 -->

        <!-- <section class="content pdct center THROUGH-THE-LENS">
            <div class="inner">
                <div class="row">
                    <div class="D-10 L-12 M-12  introbox">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $front_page_section_9['sub_title']; ?></p>
                            <p class="head-title igtitle"><?php echo $front_page_section_9['title']; ?></p>
                            <div class="hr">
                                <div class="line tt-center"></div>
                            </div>
                        </div>
                        <div class="row-fluid instagram exrow">

                            <?php if (have_rows('front_page_section_9_image')) : while (have_rows('front_page_section_9_image')) : the_row();
                                    $image = get_sub_field('image');
                            ?>
                                    <div class="D-4 M-6 ins-img aos" data-aos="fade">
                                        <div class="like"><img src="<?php echo get_template_directory_uri(); ?>/images/inst-like.svg"></div>
                                        <a href="<?php echo $image['url']; ?>" target="<?php echo $image['target']; ?>">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

<!-- <?php endwhile;
endif; ?> -->




<?php get_footer(); ?>