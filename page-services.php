<?php get_header(); ?>



<?php $services_banner = get_field('services_banner'); ?>

<!--HOME BANNER-->
<section class="home-banner Magnolia-Website-services" style="background: url('<?php echo $services_banner['banner']['url']; ?>') !important;
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
<!--HOME BANNER-->



<?php $services_section_1 = get_field('services_section_1'); ?>

<!-- Services Section 1 -->
<section class="content pdct center services-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $services_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $services_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $services_section_1['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if (have_rows('services_section_2')) :  while (have_rows('services_section_2')) : the_row();
        $services_section_2_1 = get_sub_field('services_section_2_1');
        $services_section_2_2 = get_sub_field('services_section_2_2');
?>
        <!-- Services Section 2 -->
        <section class="content center services-section2">
            <div class="inner">
                <div class="row services-section2-row1">
                    <div class="D-6 T-12 L-12 services-section2-item1">
                        <img src="<?php echo $services_section_2_1['image']['url']; ?>" alt="<?php echo $services_section_2_1['image']['alt']; ?>" class="services-section2-item1-1 aos" data-aos="fade-up">
                        <div class="D-12 services-section2-item1-1 aos" data-aos="fade-up">
                            <?php echo $services_section_2_1['content']; ?>
                        </div>
                    </div>
                    <div class="D-6 T-12 L-12 services-section2-item2">
                        <div class="services-section2-item2-1">
                            <div class="D-12 services-section2-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_2_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_2_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_2_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $services_section_2_2['image']['url']; ?>" alt="<?php echo $services_section_2_2['image']['alt']; ?>" class="services-section2-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>



<?php $services_section_3 = get_field('services_section_3'); ?>

<!-- Services Section 3 -->
<section class="content center services-section3">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $services_section_3['url']; ?>" alt="<?php echo $services_section_3['alt']; ?>">
            </div>
        </div>
    </div>
</section>


<?php $services_section_4 = get_field('services_section_4'); ?>

<!-- Services Section 4 -->
<section class="content pdct center services-section4">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-12 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $services_section_4['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $services_section_4['title']; ?></p>
                    <!-- <div class="hr sixty">
                            <div class="line tt-center"></div>
                        </div> -->
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $services_section_4['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if (have_rows('services_section_5')) :  while (have_rows('services_section_5')) : the_row();
        $services_section_5_pc = get_sub_field('services_section_5_pc');
?>

        <?php if (have_rows('services_section_5_pc')) :  while (have_rows('services_section_5_pc')) : the_row();
                $services_section_5_pc_row_1 = get_sub_field('services_section_5_pc_row_1');
                $services_section_5_pc_row_2 = get_sub_field('services_section_5_pc_row_2');
        ?>

                <!-- Services Section 5 PC -->
                <section class="content pdct center services-section5-PC">
                    <div class="inner">
                        <div class="row services-section5-row1">
                            <div class="D-7 services-section5-item1">
                                <img src="<?php echo $services_section_5_pc_row_1['image']['url']; ?>" alt="<?php echo $services_section_5_pc_row_1['image']['alt']; ?>" class="aos" data-aos="fade-up">
                            </div>
                            <div class="D-5 services-section5-item2">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_5_pc_row_1['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_5_pc_row_1['title']; ?></p>
                                </div>
                                <img src="<?php echo $services_section_5_pc_row_1['image2']['url']; ?>" alt="<?php echo $services_section_5_pc_row_1['image2']['url']; ?>" class="aos" data-aos="fade-up">
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_5_pc_row_1['content']; ?>
                                </div>
                            </div>
                        </div>


                        <div class="row services-section5-row2">
                            <div class="D-5 services-section5-item2">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_5_pc_row_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_5_pc_row_2['title']; ?></p>
                                </div>
                                <img src="<?php echo $services_section_5_pc_row_2['image']['url']; ?>" alt="<?php echo $services_section_5_pc_row_2['image']['alt']; ?>" class="aos" data-aos="fade-up">
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_5_pc_row_2['content']; ?>
                                </div>
                            </div>
                            <div class="D-7 services-section5-item1">
                                <img src="<?php echo $services_section_5_pc_row_2['image2']['url']; ?>" alt="<?php echo $services_section_5_pc_row_2['image2']['alt']; ?>" class="aos" data-aos="fade-up">
                            </div>

                        </div>
                    </div>
                </section>
        <?php endwhile;
        endif; ?>
<?php endwhile;
endif; ?>




<?php if (have_rows('services_section_5')) :  while (have_rows('services_section_5')) : the_row();
        $services_section_5_tablet_mobile = get_sub_field('services_section_5_tablet_mobile');
?>

        <?php if (have_rows('services_section_5_tablet_mobile')) :  while (have_rows('services_section_5_tablet_mobile')) : the_row();
                $services_section_5_tablet_mobile_row_1 = get_sub_field('services_section_5_tablet_mobile_row_1');
                $services_section_5_tablet_mobile_row_2 = get_sub_field('services_section_5_tablet_mobile_row_2');
        ?>
                <!-- Services Section 5 1200px TABLET MOBILE -->
                <section class="content pdct center services-section5-1200PX">
                    <div class="inner">
                        <div class="row services-section5-row1">
                            <div class="D-12 services-section5-item1">
                                <img src="<?php echo $services_section_5_tablet_mobile_row_1['image']['url']; ?>" alt="<?php echo $services_section_5_tablet_mobile_row_1['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                                <div class="D-12 services-section5-item2">
                                    <div class="aos" data-aos="fade-up">
                                        <p class="sub-title"><?php echo $services_section_5_tablet_mobile_row_1['sub_title']; ?></p>
                                        <p class="head-title address"><?php echo $services_section_5_tablet_mobile_row_1['title']; ?></p>
                                    </div>
                                    <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                        <?php echo $services_section_5_tablet_mobile_row_1['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row services-section5-row2">
                            <div class="D-12 services-section5-item1">
                                <img src="<?php echo $services_section_5_tablet_mobile_row_2['image']['url']; ?>" alt="<?php echo $services_section_5_tablet_mobile_row_2['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                                <div class="D-12 services-section5-item2">
                                    <div class="aos" data-aos="fade-up">
                                        <p class="sub-title"><?php echo $services_section_5_tablet_mobile_row_2['sub_title']; ?></p>
                                        <p class="head-title address"><?php echo $services_section_5_tablet_mobile_row_2['title']; ?></p>
                                    </div>
                                    <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                        <?php echo $services_section_5_tablet_mobile_row_2['content']; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
        <?php endwhile;
        endif; ?>
<?php endwhile;
endif; ?>




<?php $services_section_6 = get_field('services_section_6'); ?>

<!-- Services Section 6 -->
<!-- <section class="content center services-section6">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 services-section6-item1 aos" data-aos="fade-up">
                <?php echo $services_section_6; ?>
            </div>
        </div>
    </div>
</section> -->




<?php if (have_rows('services_section_7')) :  while (have_rows('services_section_7')) : the_row();
        $services_section_7_1 = get_sub_field('services_section_7_1');
        $services_section_7_2 = get_sub_field('services_section_7_2');
?>
        <!-- Services Section 7 -->
        <section class="content center services-section7">
            <div class="inner">
                <div class="row services-section2-row1">
                    <div class="D-6 T-12 L-12 services-section2-item1">
                        <img src="<?php echo $services_section_7_1['image']['url']; ?>" alt="<?php echo $services_section_7_1['image']['alt']; ?>" class="services-section2-item1-1 aos" data-aos="fade-up">
                        <div class="D-12 services-section2-item1-1 aos" data-aos="fade-up">
                            <?php echo $services_section_7_1['content']; ?>
                        </div>
                    </div>
                    <div class="D-6 T-12 L-12 services-section2-item2">
                        <div class="services-section2-item2-1">
                            <div class="D-12 services-section2-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_7_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_7_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers boulevard-offers-section7" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_7_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $services_section_7_2['image']['url']; ?>" alt="<?php echo $services_section_7_2['image']['alt']; ?>" class="services-section2-item1-1 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>



<!-- Services Section 8 PC -->
<?php if (have_rows('services_section_8')) :  while (have_rows('services_section_8')) : the_row();
        $services_section_8_pc = get_sub_field('services_section_8_pc');
?>

        <?php if (have_rows('services_section_8_pc')) :  while (have_rows('services_section_8_pc')) : the_row();
                $services_section_8_pc_row_1 = get_sub_field('services_section_8_pc_row_1');
                $services_section_8_pc_row_2 = get_sub_field('services_section_8_pc_row_2');
        ?>

                
                <section class="content pdct center services-section5-PC">
                    <div class="inner">
                        <div class="row services-section5-row1">
                            <div class="D-7 services-section5-item1">
                                <img src="<?php echo $services_section_8_pc_row_1['image']['url']; ?>" alt="<?php echo $services_section_8_pc_row_1['image']['alt']; ?>" class="aos" data-aos="fade-up">
                            </div>
                            <div class="D-5 services-section5-item2">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_8_pc_row_1['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_8_pc_row_1['title']; ?></p>
                                </div>
                                <img src="<?php echo $services_section_8_pc_row_1['image2']['url']; ?>" alt="<?php echo $services_section_8_pc_row_1['image2']['url']; ?>" class="aos" data-aos="fade-up">
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_8_pc_row_1['content']; ?>
                                </div>
                            </div>
                        </div>


                        <div class="row services-section5-row2">
                            <div class="D-5 services-section5-item2">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $services_section_8_pc_row_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $services_section_8_pc_row_2['title']; ?></p>
                                </div>
                                <img src="<?php echo $services_section_8_pc_row_2['image']['url']; ?>" alt="<?php echo $services_section_8_pc_row_2['image']['alt']; ?>" class="aos" data-aos="fade-up">
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $services_section_8_pc_row_2['content']; ?>
                                </div>
                            </div>
                            <div class="D-7 services-section5-item1">
                                <img src="<?php echo $services_section_8_pc_row_2['image2']['url']; ?>" alt="<?php echo $services_section_8_pc_row_2['image2']['alt']; ?>" class="aos" data-aos="fade-up">
                            </div>

                        </div>
                    </div>
                </section>
        <?php endwhile;
        endif; ?>
<?php endwhile;
endif; ?>









<!-- Services Section 8 1200px TABLET MOBILE -->
<?php if (have_rows('services_section_8')) :  while (have_rows('services_section_8')) : the_row();
        $services_section_8_tablet_mobile = get_sub_field('services_section_8_tablet_mobile');
?>

        <?php if (have_rows('services_section_8_tablet_mobile')) :  while (have_rows('services_section_8_tablet_mobile')) : the_row();
                $services_section_8_tablet_mobile_row_1 = get_sub_field('services_section_8_tablet_mobile_row_1');
                $services_section_8_tablet_mobile_row_2 = get_sub_field('services_section_8_tablet_mobile_row_2');
        ?>
                <!-- Services Section 8 1200px TABLET MOBILE -->
                <section class="content pdct center services-section5-1200PX">
                    <div class="inner">
                        <div class="row services-section5-row1">
                            <div class="D-12 services-section5-item1">
                                <img src="<?php echo $services_section_8_tablet_mobile_row_1['image']['url']; ?>" alt="<?php echo $services_section_8_tablet_mobile_row_1['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                                <div class="D-12 services-section5-item2">
                                    <div class="aos" data-aos="fade-up">
                                        <p class="sub-title"><?php echo $services_section_8_tablet_mobile_row_1['sub_title']; ?></p>
                                        <p class="head-title address"><?php echo $services_section_8_tablet_mobile_row_1['title']; ?></p>
                                    </div>
                                    <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                        <?php echo $services_section_8_tablet_mobile_row_1['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row services-section5-row2">
                            <div class="D-12 services-section5-item1">
                                <img src="<?php echo $services_section_8_tablet_mobile_row_2['image']['url']; ?>" alt="<?php echo $services_section_8_tablet_mobile_row_2['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                                <div class="D-12 services-section5-item2">
                                    <div class="aos" data-aos="fade-up">
                                        <p class="sub-title"><?php echo $services_section_8_tablet_mobile_row_2['sub_title']; ?></p>
                                        <p class="head-title address"><?php echo $services_section_8_tablet_mobile_row_2['title']; ?></p>
                                    </div>
                                    <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                        <?php echo $services_section_8_tablet_mobile_row_2['content']; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
        <?php endwhile;
        endif; ?>
<?php endwhile;
endif; ?>







<?php get_footer(); ?>