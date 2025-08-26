<?php get_header(); ?>



<?php $residences_banner = get_field('residences_banner'); ?>

<!--RESIDENCES TOP BANNER-->
<section class="home-banner Magnolia-Website-Residences" style="background: url('<?php echo $residences_banner['banner']['url']; ?>') !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;">
    <!-- <div class="mask-banner"></div> -->
    <div class="home-slide">
        <div class="rightSideBarHeader-residences">
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
        <div class="slide-obj cover"></div>
    </div>
</section>



<?php $residences_section_1 = get_field('residences_section_1'); ?>

<!--RESIDENCES SECTION 1-->
<section class="content pdct center">
    <div class="inner">
        <div class="row  center">
            <div class="D-7 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $residences_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $residences_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $residences_section_1['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>









<?php if (have_rows('residences_section_2')) :  while (have_rows('residences_section_2')) : the_row();
        $content_row_1 = get_sub_field('content_row_1');
        $content_row_2 = get_sub_field('content_row_2');
?>


        <!--RESIDENCES SECTION 2-->
        <section class="content center RESIDENCES-CONTENT">
            <div class="inner">
                <!-- row1 -->
                <?php if (have_rows('content_row_1')) :  while (have_rows('content_row_1')) : the_row(); ?>
                        <div class="row RESIDENCES-CONTENT-row1">
                            <div class="D-7 L-12 RESIDENCES-CONTENT-item1-1 aos" data-aos="fade-up">
                                <img src="<?php echo $content_row_1['image']['url']; ?>" class="bedroom-img-1" alt="">
                                <div class="bottomBarMedia">
                                    <span class="bottomBarMedia-item1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media1.png" alt=""><br>
                                        <span class="bottomBarMedia-span1">Virtual Tour</span>
                                    </span>
                                    <span class="bottomBarMedia-item2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media2.png" alt=""><br>
                                        <span class="bottomBarMedia-span2">Video</span>
                                    </span>
                                    <span class="bottomBarMedia-item3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media3.png" alt=""><br>
                                        <span class="bottomBarMedia-span3">Photo</span>
                                    </span>
                                </div>
                            </div>
                            <div class="D-5 L-12 RESIDENCES-CONTENT-item1-2 aos" data-aos="fade-up">
                                <p class="head-title"><?php echo $content_row_1['title']; ?></p>
                                <p class="sub-title"><?php echo $content_row_1['sub_title']; ?></p>
                                <p class="RESIDENCES-CONTENT-item1-2-p3">
                                    <?php echo $content_row_1['content']; ?>
                                </p>

                                <div class="row RESIDENCES-CONTENT-item1-2-row one-bedroom-suit-row">
                                    <div class="D-6 SM-6 ul1">
                                        <ul>
                                            <?php if (have_rows('sub_content_1')) :  while (have_rows('sub_content_1')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div class="D-6 SM-6 ul2">
                                        <ul>
                                            <?php if (have_rows('sub_content_2')) :  while (have_rows('sub_content_2')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <!-- <div class="D-4 SM-4 ul3">
                                        <ul>
                                            <?php if (have_rows('sub_content_3')) :  while (have_rows('sub_content_3')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div> -->
                                </div>
                                <p class="RESIDENCES-CONTENT-item1-2-4">
                                    <a href="<?php echo $content_row_1['button']['url']; ?>" target="<?php echo $content_row_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $content_row_1['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>



                <!-- row2 -->
                <?php if (have_rows('content_row_2')) :  while (have_rows('content_row_2')) : the_row(); ?>
                        <div class="row RESIDENCES-CONTENT-row2">
                            <div class="D-5 L-12 RESIDENCES-CONTENT-item1-2 aos" data-aos="fade-up">
                                <p class="head-title"><?php echo $content_row_2['title']; ?></p>
                                <p class="sub-title"><?php echo $content_row_2['sub_title']; ?></p>
                                <p class="RESIDENCES-CONTENT-item1-2-p3">
                                    <?php echo $content_row_2['content']; ?>
                                </p>

                                <div class="row RESIDENCES-CONTENT-item1-2-row two-bedroom-suit-row">
                                    <div class="D-6 SM-6 ul1">
                                        <ul>
                                            <?php if (have_rows('sub_content_1')) :  while (have_rows('sub_content_1')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div class="D-6 SM-6 ul2">
                                        <ul>
                                            <?php if (have_rows('sub_content_2')) :  while (have_rows('sub_content_2')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <!-- <div class="D-4 SM-4 ul3">
                                        <ul>
                                            <?php if (have_rows('sub_content_3')) :  while (have_rows('sub_content_3')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div> -->
                                </div>

                                <p class="RESIDENCES-CONTENT-item1-2-4">
                                    <a href="<?php echo $content_row_2['button']['url']; ?>" target="<?php echo $content_row_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $content_row_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>

                            <div class="D-7 L-12 RESIDENCES-CONTENT-item1-1 aos Bedroom-suit-2-pic" data-aos="fade-up">
                                <img src="<?php echo $content_row_2['image']['url']; ?>" class="bedroom-img-2" alt="">
                                <div class="bottomBarMedia">
                                    <span class="bottomBarMedia-item1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media1.png" alt=""><br>
                                        <span class="bottomBarMedia-span1">Virtual Tour</span>
                                    </span>
                                    <span class="bottomBarMedia-item2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media2.png" alt=""><br>
                                        <span class="bottomBarMedia-span2">Video</span>
                                    </span>
                                    <span class="bottomBarMedia-item3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media3.png" alt=""><br>
                                        <span class="bottomBarMedia-span3">Photo</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </section>
<?php endwhile;
endif; ?>





<?php $residences_section_3 = get_field('residences_section_3'); ?>

<!--RESIDENCES SECTION 3-->
<!-- <section class="content center residences-section3">
    <div class="inner">
        <div class="row center">
            <div class="D-7 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $residences_section_3['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $residences_section_3['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $residences_section_3['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php if (have_rows('residences_section_4')) :  while (have_rows('residences_section_4')) : the_row();
        $content_row_1 = get_sub_field('content_row_1');
        $content_row_2 = get_sub_field('content_row_2');
?>

        <!--RESIDENCES SECTION 4-->
        <section class="content center RESIDENCES-CONTENT">
            <div class="inner">

                <!-- row1 -->
                <?php if (have_rows('content_row_1')) :  while (have_rows('content_row_1')) : the_row(); ?>
                        <div class="row RESIDENCES-CONTENT-row1">
                            <div class="D-7 L-12 RESIDENCES-CONTENT-item1-1 aos" data-aos="fade-up">
                                <img src="<?php echo $content_row_1['image']['url']; ?>" class="bedroom-img-1" alt="<?php echo $content_row_1['image']['alt']; ?>">
                                <div class="bottomBarMedia">
                                    <span class="bottomBarMedia-item1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media1.png" alt=""><br>
                                        <span class="bottomBarMedia-span1">Virtual Tour</span>
                                    </span>
                                    <span class="bottomBarMedia-item2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media2.png" alt=""><br>
                                        <span class="bottomBarMedia-span2">Video</span>
                                    </span>
                                    <span class="bottomBarMedia-item3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media3.png" alt=""><br>
                                        <span class="bottomBarMedia-span3">Photo</span>
                                    </span>
                                </div>
                            </div>
                            <div class="D-5 L-12 RESIDENCES-CONTENT-item1-2 aos" data-aos="fade-up">
                                <p class="head-title"><?php echo $content_row_1['title']; ?></p>
                                <p class="sub-title"><?php echo $content_row_1['sub_title']; ?></p>
                                <p class="RESIDENCES-CONTENT-item1-2-p3"><?php echo $content_row_1['content']; ?></p>

                                <div class="row RESIDENCES-CONTENT-item1-2-row one-bedroom-suit-row">
                                    <div class="D-6 SM-6 ul1">
                                        <ul>
                                            <?php if (have_rows('sub_content_1')) :  while (have_rows('sub_content_1')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div class="D-6 SM-6 ul2">
                                        <ul>
                                            <?php if (have_rows('sub_content_2')) :  while (have_rows('sub_content_2')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <!-- <div class="D-4 SM-4 ul3">
                                        <ul>
                                            <?php if (have_rows('sub_content_3')) :  while (have_rows('sub_content_3')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div> -->
                                </div>
                                <p class="RESIDENCES-CONTENT-item1-2-4">
                                    <a href="<?php echo $content_row_1['button']['url']; ?>" target="<?php echo $content_row_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $content_row_1['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>




                <!-- row2 -->
                <?php if (have_rows('content_row_2')) :  while (have_rows('content_row_2')) : the_row(); ?>
                        <div class="row RESIDENCES-CONTENT-row2">
                            <div class="D-5 L-12 RESIDENCES-CONTENT-item1-2 aos" data-aos="fade-up">
                                <p class="head-title"><?php echo $content_row_2['title']; ?></p>
                                <p class="sub-title"><?php echo $content_row_2['sub_title']; ?></p>
                                <p class="RESIDENCES-CONTENT-item1-2-p3"><?php echo $content_row_2['content']; ?></p>

                                <div class="row RESIDENCES-CONTENT-item1-2-row two-bedroom-suit-row">
                                    <div class="D-6 SM-6 ul1">
                                        <ul>
                                            <?php if (have_rows('sub_content_1')) :  while (have_rows('sub_content_1')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div class="D-6 SM-6 ul2">
                                        <ul>
                                            <?php if (have_rows('sub_content_2')) :  while (have_rows('sub_content_2')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <!-- <div class="D-4 SM-4 ul3">
                                        <ul>
                                            <?php if (have_rows('sub_content_3')) :  while (have_rows('sub_content_3')) : the_row();
                                                    $text = get_sub_field('text');
                                            ?>
                                                    <li><?php echo $text; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div> -->
                                </div>

                                <p class="RESIDENCES-CONTENT-item1-2-4">
                                    <a href="<?php echo $content_row_2['button']['url']; ?>" target="<?php echo $content_row_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $content_row_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>

                            <div class="D-7 L-12 RESIDENCES-CONTENT-item1-1 aos Bedroom-suit-2-pic" data-aos="fade-up">
                                <img src="<?php echo $content_row_2['image']['url']; ?>" class="bedroom-img-2" alt="<?php echo $content_row_1['image']['url']; ?>">
                                <div class="bottomBarMedia">
                                    <span class="bottomBarMedia-item1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media1.png" alt=""><br>
                                        <span class="bottomBarMedia-span1">Virtual Tour</span>
                                    </span>
                                    <span class="bottomBarMedia-item2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media2.png" alt=""><br>
                                        <span class="bottomBarMedia-span2">Video</span>
                                    </span>
                                    <span class="bottomBarMedia-item3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images\residences\media3.png" alt=""><br>
                                        <span class="bottomBarMedia-span3">Photo</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php $residences_section_5 = get_field('residences_section_5'); ?>

<!--RESIDENCES SECTION 5-->
<section class="residences-paragraph center">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-8 T-11 aos" data-aos="fade-up">
                <div class="residences-paragraph-content">
                    <?php echo $residences_section_5; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<!--RESIDENCES SECTION 6-->
<section class="residence-grid-images center">
    <div class="inner">
        <div class="row">
            <div class="D-10 L-12">
                <div class="row residence-grid-images-row1 aos" data-aos="fade-up">
                    <?php if (have_rows('residences_section_6')) :  while (have_rows('residences_section_6')) : the_row();
                            $image = get_sub_field('image');
                            $content = get_sub_field('content');
                    ?>
                            <div class="D-4 M-6 SM-12 residence-grid-images-row1-item1">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <p><?php echo $content; ?></p>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>