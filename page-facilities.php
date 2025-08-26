<?php get_header(); ?>


<?php $facilities_banner = get_field('facilities_banner'); ?>

<!-- Facilities Banner -->
<section class="home-banner Magnolia-Website-facilities" style="background: url('<?php echo $facilities_banner['banner']['url']; ?>') !important;
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



<?php $facilities_section_1 = get_field('facilities_section_1'); ?>

<!-- Facilities Section 1 -->
<section class="content pdct center facilities-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $facilities_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $facilities_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $facilities_section_1['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if (have_rows('facilities_section_2')) : while (have_rows('facilities_section_2')) : the_row();
        $facilities_section_2_1 = get_sub_field('facilities_section_2_1');
        $facilities_section_2_2 = get_sub_field('facilities_section_2_2');
?>

        <!-- Facilities Section 2 -->
        <section class="content center facilities-section2">
            <div class="inner">
                <div class="row">
                    <div class="D-6 T-12 facilities-section2-item1">
                        <img src="<?php echo $facilities_section_2_1['image']['url']; ?>" alt="<?php echo $facilities_section_2_1['image']['alt']; ?>" class="facilities-section2-item1-1 aos" data-aos="fade-up">
                        <div class="facilities-section2-item1-2 aos" data-aos="fade-up">
                            <?php echo $facilities_section_2_1['content']; ?>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section2-item2">
                        <div class="facilities-section2-item2-1 aos" data-aos="fade-up">
                            <p><?php echo $facilities_section_2_2['sub_title']; ?></p>
                            <p><?php echo $facilities_section_2_2['title']; ?></p>
                            <?php echo $facilities_section_2_2['content']; ?>
                        </div>
                        <img src="<?php echo $facilities_section_2_2['image']['url']; ?>" alt="<?php echo $facilities_section_2_2['image']['alt']; ?>" class="aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>



<?php $facilities_section_3 = get_field('facilities_section_3'); ?>

<!-- Facilities Section 3 -->
<section class="content center facilities-section3">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $facilities_section_3['url']; ?>" alt="<?php echo $facilities_section_3['alt']; ?>">
            </div>
        </div>
    </div>
</section>




<?php $facilities_section_4 = get_field('facilities_section_4'); ?>

<!-- Facilities Section 4 -->
<section class="content pdct center facilities-section4">
    <div class="inner">
        <div class="row center">
            <div class="D-7 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $facilities_section_4['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $facilities_section_4['title']; ?></p>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $facilities_section_4['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if (have_rows('facilities_section_5')) : while (have_rows('facilities_section_5')) : the_row();
        $facilities_section_5_1 = get_sub_field('facilities_section_5_1');
        $facilities_section_5_2 = get_sub_field('facilities_section_5_2');
        $facilities_section_5_3 = get_sub_field('facilities_section_5_3');
        $facilities_section_5_4 = get_sub_field('facilities_section_5_4');
?>
        <!-- Facilities Section 5 -->
        <section class="content center facilities-section5">
            <div class="inner">
                <div class="row facilities-section5-row1">
                    <div class="D-6 T-12 facilities-section5-item1">
                        <img src="<?php echo $facilities_section_5_1['image']['url']; ?>" alt="<?php echo $facilities_section_5_1['image']['alt']; ?>" class="facilities-section5-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $facilities_section_5_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $facilities_section_5_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $facilities_section_5_1['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section5-item2">
                        <div class="facilities-section5-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_5_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $facilities_section_5_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $facilities_section_5_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_5_2['image']['url']; ?>" alt="<?php echo $facilities_section_5_2['image']['alt']; ?>" class="facilities-section5-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>


                <div class="row facilities-section5-row2">
                    <div class="D-6 T-12 facilities-section5-item3">
                        <img src="<?php echo $facilities_section_5_3['image']['url']; ?>" alt="<?php echo $facilities_section_5_3['image']['alt']; ?>" class="facilities-section5-item3-1 aos" data-aos="fade-up">
                        <div class="D-12 facilities-section5-item3-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $facilities_section_5_3['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $facilities_section_5_3['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $facilities_section_5_3['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section5-item4">
                        <div class="facilities-section5-item4-1">
                            <div class="D-10 L-12 facilities-section5-item4-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_5_4['sub_title']; ?>
                                        <p class="head-title address"><?php echo $facilities_section_5_4['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $facilities_section_5_4['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_5_4['image']['url']; ?>" alt="<?php echo $facilities_section_5_4['image']['alt']; ?>" class="facilities-section5-item4-2 aos" data-aos="fade-up">
                    </div>
                </div>

            </div>
        </section>
<?php endwhile;
endif; ?>



<?php $facilities_section_6 = get_field('facilities_section_6'); ?>

<!-- Facilities Section 6 -->
<section class="content center facilities-section6">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 facilities-section6-item1 aos" data-aos="fade-up">
                <?php echo $facilities_section_6; ?>
            </div>
        </div>
    </div>
</section>



<?php $facilities_section_7 = get_field('facilities_section_7'); ?>

<!-- Facilities Section 7 -->
<section class="content center facilities-section7">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $facilities_section_7['url']; ?>" alt="<?php echo $facilities_section_7['alt']; ?>">
            </div>
        </div>
    </div>
</section>




<?php $facilities_section_8 = get_field('facilities_section_8'); ?>

<!-- Facilities Section 8 -->
<section class="content center facilities-section8">
    <div class="inner">
        <div class="row">
            <div class="D-8 L-10 T-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $facilities_section_8['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $facilities_section_8['title']; ?>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $facilities_section_8['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if (have_rows('facilities_section_9')) : while (have_rows('facilities_section_9')) : the_row();
        $facilities_section_9_1 = get_sub_field('facilities_section_9_1');
        $facilities_section_9_2 = get_sub_field('facilities_section_9_2');
        $facilities_section_9_3 = get_sub_field('facilities_section_9_3');
        $facilities_section_9_4 = get_sub_field('facilities_section_9_4');
?>
        <!-- Facilities Section 9 -->
        <section class="content center facilities-section9">
            <div class="inner">
                <div class="row facilities-section5-row1">
                    <div class="D-6 T-12 facilities-section5-item1">
                        <img src="<?php echo $facilities_section_9_1['image']['url']; ?>" alt="<?php echo $facilities_section_9_1['image']['alt']; ?>" class="facilities-section5-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $facilities_section_9_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $facilities_section_9_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $facilities_section_9_1['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section5-item2">
                        <div class="facilities-section5-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_9_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $facilities_section_9_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $facilities_section_9_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_9_2['image']['url']; ?>" alt="<?php echo $facilities_section_9_2['image']['alt']; ?>" class="facilities-section5-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>

                <div class="row facilities-section5-row2">
                    <div class="D-6 T-12 facilities-section5-item3">
                        <img src="<?php echo $facilities_section_9_3['image']['url']; ?>" alt="<?php echo $facilities_section_9_3['image']['alt']; ?>" class="facilities-section5-item3-1 aos" data-aos="fade-up">
                        <div class="D-12 facilities-section5-item3-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $facilities_section_9_3['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $facilities_section_9_3['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $facilities_section_9_3['content']; ?>
                            </div>
                        </div>
                    </div>

                    <div class="D-6 T-12 facilities-section5-item4">
                        <div class="facilities-section5-item4-1">
                            <div class="D-10 L-12 facilities-section5-item4-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_9_4['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $facilities_section_9_4['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $facilities_section_9_4['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_9_4['image']['url']; ?>" alt="<?php echo $facilities_section_9_4['image']['alt']; ?>" class="facilities-section5-item4-2 aos" data-aos="fade-up">
                    </div>
                </div>

            </div>
        </section>
<?php endwhile;
endif; ?>



<?php $facilities_section_10 = get_field('facilities_section_10'); ?>

<!-- Facilities Section 10 -->
<section class="content center facilities-section10">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 facilities-section10-item1 aos" data-aos="fade-up">
                <?php echo $facilities_section_10; ?>
            </div>
        </div>
    </div>
</section>



<?php $facilities_section_11 = get_field('facilities_section_11'); ?>

<!-- Facilities Section 11 -->
<section class="content center facilities-section11">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $facilities_section_11['url']; ?>" alt="<?php echo $facilities_section_11['alt']; ?>">
            </div>
        </div>
    </div>
</section>



<?php $facilities_section_12 = get_field('facilities_section_12'); ?>

<!-- Facilities Section 12 -->
<section class="content center facilities-section8">
    <div class="inner">
        <div class="row">
            <div class="D-8 T-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $facilities_section_12['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $facilities_section_12['title']; ?></p>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $facilities_section_12['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php if (have_rows('facilities_section_13')) : while (have_rows('facilities_section_13')) : the_row();
        $facilities_section_13_1 = get_sub_field('facilities_section_13_1');
        $facilities_section_13_2 = get_sub_field('facilities_section_13_2');
?>

        <!-- Facilities Section 13 -->
        <!-- <section class="content center facilities-section13">
            <div class="inner">
                <div class="row facilities-section13-row1">
                    <div class="D-6 T-12 facilities-section13-item1">
                        <img src="<?php echo $facilities_section_13_1['image']['url']; ?>" alt="<?php echo $facilities_section_13_1['image']['alt']; ?>" class="facilities-section13-item1-1 aos" data-aos="fade-up">
                        <div class="D-12 facilities-section13-item1-1 aos" data-aos="fade-up">
                            <?php echo $facilities_section_13_1['content']; ?>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section13-item2">
                        <div class="facilities-section13-item2-1">
                            <div class="D-12 facilities-section13-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_13_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $facilities_section_13_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $facilities_section_13_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_13_2['image']['url']; ?>" alt="<?php echo $facilities_section_13_2['image']['alt']; ?>" class="facilities-section13-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section> -->
<?php endwhile;
endif; ?>


<?php $facilities_section_14 = get_field('facilities_section_14'); ?>

<!-- Facilities Section 14 -->
<!-- <section class="content center facilities-section14">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $facilities_section_14['url']; ?>" alt="<?php echo $facilities_section_14['alt']; ?>">
            </div>
        </div>
    </div>
</section> -->



<?php $facilities_section_15 = get_field('facilities_section_15'); ?>

<!-- Facilities Section 15 -->
<!-- <section class="content center facilities-section15">
    <div class="inner">
        <div class="row">
            <div class="D-8 L-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $facilities_section_15['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $facilities_section_15['title']; ?></p>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $facilities_section_15['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php if (have_rows('facilities_section_16')) : while (have_rows('facilities_section_16')) : the_row();
        $facilities_section_16_1 = get_sub_field('facilities_section_16_1');
        $facilities_section_16_2 = get_sub_field('facilities_section_16_2');
        $facilities_section_16_3 = get_sub_field('facilities_section_16_3');
        $facilities_section_16_4 = get_sub_field('facilities_section_16_4');
?>
        <!-- Facilities Section 16 -->
        <!-- <section class="content center facilities-section16">
            <div class="inner">
                <div class="row facilities-section16-row1">
                    <div class="D-6 T-12 facilities-section16-item1">
                        <img src="<?php echo $facilities_section_16_1['image']['url']; ?>" alt="<?php echo $facilities_section_16_1['image']['alt']; ?>" class="facilities-section5-item1-1 aos" data-aos="fade-up">
                        <div class="D-12 facilities-section16-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $facilities_section_16_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $facilities_section_16_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $facilities_section_16_1['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="D-6 T-12 facilities-section16-item2">
                        <div class="facilities-section16-item2-1">
                            <div class="D-10 L-12 facilities-section16-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $facilities_section_16_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $facilities_section_16_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $facilities_section_16_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $facilities_section_16_2['image']['url']; ?>" alt="<?php echo $facilities_section_16_2['image']['url']; ?>" class="facilities-section16-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section> -->
<?php endwhile;
endif; ?>

<?php get_footer(); ?>