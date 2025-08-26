<?php get_header(); ?>

<?php $lifestyle_banner = get_field('lifestyle_banner'); ?>

<!-- Lifestyle Banner -->
<section class="home-banner Magnolia-Website-Lifestyle" style="background:url('<?php echo $lifestyle_banner['banner']['url']; ?>') !important;
background-size:cover !important;
background-repeat:no-repeat !important;
">
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



<?php $lifestyle_section_1 = get_field('lifestyle_section_1'); ?>

<!-- Lifestyle Section 1 -->
<section class="content pdct center lifestyle-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_1['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<?php if (have_rows('lifestyle_section_14')) : while (have_rows('lifestyle_section_14')) : the_row();
        $lifestyle_section_14_item_1 = get_sub_field('lifestyle_section_14_item_1');
        $lifestyle_section_14_item_2 = get_sub_field('lifestyle_section_14_item_2');
?>

        <!-- Lifestyle Section 14 -->
        <section class="content center facilities-section5 lifestyle-section10">
            <div class="inner">
                <div class="row facilities-section5-row1 lifestyle-section10-row1">
                    <div class="D-6 L-12 facilities-section5-item1 lifestyle-section10-item1">
                        <img src="<?php echo $lifestyle_section_14_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_14_item_1['image']['alt']; ?>" class="facilities-section5-item1-1 lifestyle-section10-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2 lifestyle-section10-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_14_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_14_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_14_item_1['content']; ?>
                            </div>
                            <!-- <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_14_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_14_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_14_item_1['button']['title']; ?>
                                    </a>
                                </p> -->
                        </div>
                    </div>
                    <div class="D-6 L-12 facilities-section5-item2 lifestyle-section10-item2">
                        <div class="facilities-section5-item2-1 lifestyle-section10-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1 lifestyle-section10-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $lifestyle_section_14_item_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $lifestyle_section_14_item_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $lifestyle_section_14_item_2['content']; ?>
                                </div>
                                <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_14_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_14_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_14_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <img src="<?php echo $lifestyle_section_14_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_14_item_2['image']['alt']; ?>" class="facilities-section5-item2-2 lifestyle-section10-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>





<?php if (have_rows('lifestyle_section_15')) : while (have_rows('lifestyle_section_15')) : the_row();
        $lifestyle_section_15_item_1 = get_sub_field('lifestyle_section_15_item_1');
        $lifestyle_section_15_item_2 = get_sub_field('lifestyle_section_15_item_2');
?>

        <!-- Lifestyle Section 15 -->
        <section class="content center facilities-section5 lifestyle-section10">
            <div class="inner">
                <div class="row facilities-section5-row1 lifestyle-section10-row1">
                    <div class="D-6 L-12 facilities-section5-item1 lifestyle-section10-item1">
                        <img src="<?php echo $lifestyle_section_15_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_15_item_1['image']['alt']; ?>" class="facilities-section5-item1-1 lifestyle-section10-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2 lifestyle-section10-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_15_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_15_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_15_item_1['content']; ?>
                            </div>
                            <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_15_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_15_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_15_item_1['button']['title']; ?>
                                    </a>
                                </p>
                        </div>
                    </div>
                    <div class="D-6 L-12 facilities-section5-item2 lifestyle-section10-item2">
                        <div class="facilities-section5-item2-1 lifestyle-section10-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1 lifestyle-section10-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $lifestyle_section_15_item_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $lifestyle_section_15_item_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $lifestyle_section_15_item_2['content']; ?>
                                </div>
                                <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_15_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_15_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_15_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <img src="<?php echo $lifestyle_section_15_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_15_item_2['image']['alt']; ?>" class="facilities-section5-item2-2 lifestyle-section10-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>






<?php $lifestyle_section_7 = get_field('lifestyle_section_7'); ?>

<!-- Lifestyle Section 7 -->
<section class="content pdct center lifestyle-section7">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_7['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_7['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_7['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>





<?php if (have_rows('lifestyle_section_2_pc')) : while (have_rows('lifestyle_section_2_pc')) : the_row();
        $lifestyle_section_2_pc_item_1 = get_sub_field('lifestyle_section_2_pc_item_1');
        $lifestyle_section_2_pc_item_2 = get_sub_field('lifestyle_section_2_pc_item_2');
?>

        <!-- Lifestyle Section 2 PC-->
        <section class="content pdct center lifestyle-section2-PC">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_2_pc_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_2_pc_item_1['image']['alt']; ?>" class="aos" data-aos="fade-up">
                    </div>
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_2_pc_item_1['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_2_pc_item_1['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_2_pc_item_1['image2']['url']; ?>" alt="<?php echo $lifestyle_section_2_pc_item_1['image2']['url']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_2_pc_item_1['content']; ?>
                            <p><?php echo $lifestyle_section_2_pc_item_1['content2']; ?></p>
                            <p class="p3-lifestyle-button single-time-button">
                                <a href="<?php echo $lifestyle_section_2_pc_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_2_pc_item_1['button']['target']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_2_pc_item_1['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_2_pc_item_2['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_2_pc_item_2['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_2_pc_item_2['image2']['url']; ?>" alt="<?php echo $lifestyle_section_2_pc_item_2['image2']['alt']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_2_pc_item_2['content']; ?>
                            <p><?php echo $lifestyle_section_2_pc_item_2['content2']; ?></p>
                            <p class="p3-lifestyle-button single-time-button">
                                <a href="<?php echo $lifestyle_section_2_pc_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_2_pc_item_2['button']['target']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_2_pc_item_2['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_2_pc_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_2_pc_item_2['image']['url']; ?>" class="aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>




<?php if (have_rows('lifestyle_section_2_mobile_tablet')) : while (have_rows('lifestyle_section_2_mobile_tablet')) : the_row();
        $lifestyle_section_2_mobile_tablet_item_1 = get_sub_field('lifestyle_section_2_mobile_tablet_item_1');
        $lifestyle_section_2_mobile_tablet_item_2 = get_sub_field('lifestyle_section_2_mobile_tablet_item_2');
?>

        <!-- Lifestyle Section 2 1200px Mobile Tablet -->
        <section class="content pdct center lifestyle-section2-1200px services-section5-1200PX lifestyle-tablet-1200px">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_2_mobile_tablet_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_2_mobile_tablet_item_1['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_2_mobile_tablet_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_2_mobile_tablet_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_2_mobile_tablet_item_1['content']; ?>
                                <p><?php echo $lifestyle_section_2_mobile_tablet_item_1['content2']; ?></p>
                                <p class="p3-lifestyle-button single-time-button">
                                    <a href="<?php echo $lifestyle_section_2_mobile_tablet_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_2_mobile_tablet_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_2_mobile_tablet_item_1['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_2_mobile_tablet_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_2_mobile_tablet_item_2['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_2_mobile_tablet_item_2['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_2_mobile_tablet_item_2['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_2_mobile_tablet_item_2['content']; ?>
                                <p><?php echo $lifestyle_section_2_mobile_tablet_item_2['content2']; ?></p>
                                <p class="p3-lifestyle-button single-time-button">
                                    <a href="<?php echo $lifestyle_section_2_mobile_tablet_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_2_mobile_tablet_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_2_mobile_tablet_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php if (have_rows('lifestyle_section_4_pc')) : while (have_rows('lifestyle_section_4_pc')) : the_row();
        $lifestyle_section_4_pc_item_1 = get_sub_field('lifestyle_section_4_pc_item_1');
        $lifestyle_section_4_pc_item_2 = get_sub_field('lifestyle_section_4_pc_item_2');
?>

        <!-- Lifestyle Section 4 PC-->
        <section class="content pdct center lifestyle-section2-PC">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_4_pc_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_4_pc_item_1['image']['alt']; ?>" class="aos" data-aos="fade-up">
                    </div>
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_4_pc_item_1['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_4_pc_item_1['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_4_pc_item_1['image2']['url']; ?>" alt="<?php echo $lifestyle_section_4_pc_item_1['image2']['alt']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_4_pc_item_1['content']; ?>
                            <p><?php echo $lifestyle_section_4_pc_item_1['content2']; ?></p>
                            <p><?php echo $lifestyle_section_4_pc_item_1['content3']; ?></p>
                            <p class="p3-lifestyle-button">
                                <a href="<?php echo $lifestyle_section_4_pc_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_4_pc_item_1['button']['target']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_4_pc_item_1['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_4_pc_item_2['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_4_pc_item_2['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_4_pc_item_2['image2']['url']; ?>" alt="<?php echo $lifestyle_section_4_pc_item_2['image']['alt']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_4_pc_item_2['content']; ?>
                            <p><?php echo $lifestyle_section_4_pc_item_2['content2']; ?></p>
                            <p><?php echo $lifestyle_section_4_pc_item_2['content3']; ?></p>
                            <p class="p3-lifestyle-button">
                                <a href="<?php echo $lifestyle_section_4_pc_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_4_pc_item_2['button']['alt']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_4_pc_item_2['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_4_pc_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_4_pc_item_2['image']['url']; ?>" class="aos" data-aos="fade-up">
                    </div>

                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php if (have_rows('lifestyle_section_4_mobile_tablet')) : while (have_rows('lifestyle_section_4_mobile_tablet')) : the_row();
        $lifestyle_section_4_mobile_tablet_item_1 = get_sub_field('lifestyle_section_4_mobile_tablet_item_1');
        $lifestyle_section_4_mobile_tablet_item_2 = get_sub_field('lifestyle_section_4_mobile_tablet_item_2');
?>

        <!-- Lifestyle Section 4 1200px Mobile Tablet -->
        <section class="content pdct center lifestyle-section4-1200px services-section5-1200PX lifestyle-tablet-1200px">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_4_mobile_tablet_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_4_mobile_tablet_item_1['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_4_mobile_tablet_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_4_mobile_tablet_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_4_mobile_tablet_item_1['content']; ?>
                                <p><?php echo $lifestyle_section_4_mobile_tablet_item_1['content2']; ?></p>
                                <p><?php echo $lifestyle_section_4_mobile_tablet_item_1['content3']; ?></p>
                                <p class="p3-lifestyle-button">
                                    <a href="<?php echo $lifestyle_section_4_mobile_tablet_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_4_mobile_tablet_item_1['button']['alt']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_4_mobile_tablet_item_1['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_4_mobile_tablet_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_4_mobile_tablet_item_2['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_4_mobile_tablet_item_2['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_4_mobile_tablet_item_2['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_4_mobile_tablet_item_2['content']; ?>
                                <p><?php echo $lifestyle_section_4_mobile_tablet_item_2['content2']; ?></p>
                                <p><?php echo $lifestyle_section_4_mobile_tablet_item_2['content3']; ?></p>
                                <p class="p3-lifestyle-button">
                                    <a href="<?php echo $lifestyle_section_4_mobile_tablet_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_4_mobile_tablet_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_4_mobile_tablet_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php if (have_rows('lifestyle_section_6_pc')) : while (have_rows('lifestyle_section_6_pc')) : the_row();
        $lifestyle_section_6_pc_item_1 = get_sub_field('lifestyle_section_6_pc_item_1');
        $lifestyle_section_6_pc_item_2 = get_sub_field('lifestyle_section_6_pc_item_2');
?>

        <!-- Lifestyle Section 6 PC -->
        <section class="content pdct center lifestyle-section2-PC">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_6_pc_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_6_pc_item_1['image']['alt']; ?>" class="aos" data-aos="fade-up">
                    </div>
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_6_pc_item_1['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_6_pc_item_1['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_6_pc_item_1['image2']['url']; ?>" alt="<?php echo $lifestyle_section_6_pc_item_1['image2']['alt']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_6_pc_item_1['content']; ?>
                            <p><?php echo $lifestyle_section_6_pc_item_1['content2']; ?></p>
                            <p><?php echo $lifestyle_section_6_pc_item_1['content3']; ?></p>
                            <p class="p3-lifestyle-button">
                                <a href="<?php echo $lifestyle_section_6_pc_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_6_pc_item_1['button']['target']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_6_pc_item_1['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-5 services-section5-item2 lifestyle-item2">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $lifestyle_section_6_pc_item_2['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $lifestyle_section_6_pc_item_2['title']; ?></p>
                        </div>
                        <img src="<?php echo $lifestyle_section_6_pc_item_2['image2']['url']; ?>" alt="<?php echo $lifestyle_section_6_pc_item_2['image2']['alt']; ?>" class="aos lifestyle-image-small" data-aos="fade-up">
                        <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $lifestyle_section_6_pc_item_2['content']; ?>
                            <p class=""><?php echo $lifestyle_section_6_pc_item_2['content2']; ?></p>
                            <p class="p3-lifestyle-button single-time-button">
                                <a href="<?php echo $lifestyle_section_6_pc_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_6_pc_item_2['button']['target']; ?>" class="bdbutton">
                                    <?php echo $lifestyle_section_6_pc_item_2['button']['title']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="D-7 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_6_pc_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_6_pc_item_2['image']['alt']; ?>" class="aos" data-aos="fade-up">
                    </div>

                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>




<?php if (have_rows('lifestyle_section_6_mobile_tablet')) : while (have_rows('lifestyle_section_6_mobile_tablet')) : the_row();
        $lifestyle_section_6_mobile_tablet_item_1 = get_sub_field('lifestyle_section_6_mobile_tablet_item_1');
        $lifestyle_section_6_mobile_tablet_item_2 = get_sub_field('lifestyle_section_6_mobile_tablet_item_2');
?>

        <!-- Lifestyle Section 6 1200px Mobile Tablet -->
        <section class="content pdct center lifestyle-section6-1200px services-section5-1200PX lifestyle-tablet-1200px">
            <div class="inner">
                <div class="row services-section5-row1 lifestyle-row1">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_6_mobile_tablet_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_6_mobile_tablet_item_1['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_6_mobile_tablet_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_6_mobile_tablet_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_6_mobile_tablet_item_1['content']; ?>
                                <p><?php echo $lifestyle_section_6_mobile_tablet_item_1['content2']; ?></p>
                                <p><?php echo $lifestyle_section_6_mobile_tablet_item_1['content3']; ?></p>
                                <p class="p3-lifestyle-button">
                                    <a href="<?php echo $lifestyle_section_6_mobile_tablet_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_6_mobile_tablet_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_6_mobile_tablet_item_1['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row services-section5-row2 lifestyle-row2">
                    <div class="D-12 services-section5-item1 lifestyle-item1">
                        <img src="<?php echo $lifestyle_section_6_mobile_tablet_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_6_mobile_tablet_item_2['image']['alt']; ?>" class="aos services-section5-item1-1" data-aos="fade-up">
                        <div class="D-12 services-section5-item2 lifestyle-item2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_6_mobile_tablet_item_2['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_6_mobile_tablet_item_2['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_6_mobile_tablet_item_2['content']; ?>
                                <p class=""><?php echo $lifestyle_section_6_mobile_tablet_item_2['content2']; ?></p>
                                <p class="p3-lifestyle-button single-time-button">
                                    <a href="<?php echo $lifestyle_section_6_mobile_tablet_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_6_mobile_tablet_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_6_mobile_tablet_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>



<?php $lifestyle_section_19 = get_field('lifestyle_section_19'); ?>

<!-- Lifestyle Section 19 -->
<section class="content pdct center lifestyle-section19">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_19['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_19['title']; ?></p>
                    <!-- <div class="hr sixty">
                            <div class="line tt-center"></div>
                        </div> -->
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_19['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>





<?php $lifestyle_section_18 = get_field('lifestyle_section_18'); ?>

<!-- Lifestyle Section 18 -->
<section class="content pdct center lifestyle-section18">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_18['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_18['title']; ?></p>
                    <!-- <div class="hr sixty">
                            <div class="line tt-center"></div>
                        </div> -->
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_18['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>









<?php if (have_rows('lifestyle_section_16')) : while (have_rows('lifestyle_section_16')) : the_row();
        $lifestyle_section_16_item_1 = get_sub_field('lifestyle_section_16_item_1');
        $lifestyle_section_16_item_2 = get_sub_field('lifestyle_section_16_item_2');
?>

        <!-- Lifestyle Section 16 -->
        <section class="content center facilities-section5 lifestyle-section10">
            <div class="inner">
                <div class="row facilities-section5-row1 lifestyle-section10-row1">
                    <div class="D-6 L-12 facilities-section5-item1 lifestyle-section10-item1">
                        <img src="<?php echo $lifestyle_section_16_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_16_item_1['image']['alt']; ?>" class="facilities-section5-item1-1 lifestyle-section10-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2 lifestyle-section10-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_16_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_16_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_16_item_1['content']; ?>
                            </div>
                            <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_16_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_16_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_16_item_1['button']['title']; ?>
                                    </a>
                                </p>
                        </div>
                    </div>
                    <div class="D-6 L-12 facilities-section5-item2 lifestyle-section10-item2">
                        <div class="facilities-section5-item2-1 lifestyle-section10-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1 lifestyle-section10-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $lifestyle_section_16_item_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $lifestyle_section_16_item_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $lifestyle_section_16_item_2['content']; ?>
                                </div>
                                <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_16_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_16_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_16_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <img src="<?php echo $lifestyle_section_16_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_16_item_2['image']['alt']; ?>" class="facilities-section5-item2-2 lifestyle-section10-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>




<?php if (have_rows('lifestyle_section_17')) : while (have_rows('lifestyle_section_17')) : the_row();
        $lifestyle_section_17_item_1 = get_sub_field('lifestyle_section_17_item_1');
        $lifestyle_section_17_item_2 = get_sub_field('lifestyle_section_17_item_2');
?>

        <!-- Lifestyle Section 17 -->
        <section class="content center facilities-section5 lifestyle-section10" style="margin-top:30px;">
            <div class="inner">
                <div class="row facilities-section5-row1 lifestyle-section10-row1">
                    <div class="D-6 L-12 facilities-section5-item1 lifestyle-section10-item1">
                        <img src="<?php echo $lifestyle_section_17_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_17_item_1['image']['alt']; ?>" class="facilities-section5-item1-1 lifestyle-section10-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2 lifestyle-section10-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_17_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_17_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_17_item_1['content']; ?>
                            </div>
                            <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_17_item_1['button']['url']; ?>" target="<?php echo $lifestyle_section_17_item_1['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_17_item_1['button']['title']; ?>
                                    </a>
                                </p>
                        </div>
                    </div>
                    <div class="D-6 L-12 facilities-section5-item2 lifestyle-section10-item2">
                        <div class="facilities-section5-item2-1 lifestyle-section10-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1 lifestyle-section10-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $lifestyle_section_17_item_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $lifestyle_section_17_item_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $lifestyle_section_17_item_2['content']; ?>
                                </div>
                                <p class="lifestyle-bdbutton" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo $lifestyle_section_17_item_2['button']['url']; ?>" target="<?php echo $lifestyle_section_17_item_2['button']['target']; ?>" class="bdbutton">
                                        <?php echo $lifestyle_section_17_item_2['button']['title']; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <img src="<?php echo $lifestyle_section_17_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_17_item_2['image']['alt']; ?>" class="facilities-section5-item2-2 lifestyle-section10-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>









<!-- ----------------------------------------------------------------------------------------------------------- -->



<?php $lifestyle_section_3 = get_field('lifestyle_section_3'); ?>

<!-- Lifestyle Section 3 -->
<!-- <section class="content center lifestyle-section3">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 content-section4-item1 aos" data-aos="fade-up">
                <?php echo $lifestyle_section_3; ?>
            </div>
        </div>
    </div>
</section> -->









<?php $lifestyle_section_5 = get_field('lifestyle_section_5'); ?>

<!-- Lifestyle Section 5 -->
<!-- <section class="content center lifestyle-section5">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 content-section4-item1 aos" data-aos="fade-up">
                <?php echo $lifestyle_section_5; ?>
            </div>
        </div>
    </div>
</section> -->

















<?php $lifestyle_section_8 = get_field('lifestyle_section_8'); ?>

<!-- Lifestyle Section 8 -->
<!-- <section class="content center lifestyle-section8">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $lifestyle_section_8['url']; ?>" alt="<?php echo $lifestyle_section_8['alt']; ?>">
            </div>
        </div>
    </div>
</section> -->



<?php $lifestyle_section_9 = get_field('lifestyle_section_9'); ?>

<!-- <section class="content pdct center lifestyle-section9">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_9['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_9['title']; ?></p>
                    <div class="hr sixty">
                            <div class="line tt-center"></div>
                        </div> 
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_9['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php if (have_rows('lifestyle_section_10')) : while (have_rows('lifestyle_section_10')) : the_row();
        $lifestyle_section_10_item_1 = get_sub_field('lifestyle_section_10_item_1');
        $lifestyle_section_10_item_2 = get_sub_field('lifestyle_section_10_item_2');
?>

        <!-- Lifestyle Section 10 -->
        <!-- <section class="content center facilities-section5 lifestyle-section10">
            <div class="inner">
                <div class="row facilities-section5-row1 lifestyle-section10-row1">
                    <div class="D-6 L-12 facilities-section5-item1 lifestyle-section10-item1">
                        <img src="<?php echo $lifestyle_section_10_item_1['image']['url']; ?>" alt="<?php echo $lifestyle_section_10_item_1['image']['alt']; ?>" class="facilities-section5-item1-1 lifestyle-section10-item1-1 aos" data-aos="fade-up">
                        <div class="D-11 facilities-section5-item1-2 lifestyle-section10-item1-2">
                            <div class="aos" data-aos="fade-up">
                                <p class="sub-title"><?php echo $lifestyle_section_10_item_1['sub_title']; ?></p>
                                <p class="head-title address"><?php echo $lifestyle_section_10_item_1['title']; ?></p>
                            </div>
                            <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                <?php echo $lifestyle_section_10_item_1['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="D-6 L-12 facilities-section5-item2 lifestyle-section10-item2">
                        <div class="facilities-section5-item2-1 lifestyle-section10-item2-1">
                            <div class="D-10 L-12 facilities-section5-item2-1-1 lifestyle-section10-item2-1-1">
                                <div class="aos" data-aos="fade-up">
                                    <p class="sub-title"><?php echo $lifestyle_section_10_item_2['sub_title']; ?></p>
                                    <p class="head-title address"><?php echo $lifestyle_section_10_item_2['title']; ?></p>
                                </div>
                                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                                    <?php echo $lifestyle_section_10_item_2['content']; ?>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $lifestyle_section_10_item_2['image']['url']; ?>" alt="<?php echo $lifestyle_section_10_item_2['image']['alt']; ?>" class="facilities-section5-item2-2 lifestyle-section10-item2-2 aos" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </section> -->
<?php endwhile;
endif; ?>



<?php $lifestyle_section_11 = get_field('lifestyle_section_11'); ?>

<!-- Lifestyle Section 11 -->
<!-- <section class="content pdct center lifestyle-section11">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_11['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_11['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_11['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php $lifestyle_section_12 = get_field('lifestyle_section_12'); ?>

<!-- Lifestyle Section 12 -->
<!-- <section class="content center lifestyle-section12">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <img src="<?php echo $lifestyle_section_12['url']; ?>" alt="<?php echo $lifestyle_section_12['alt']; ?>">
            </div>
        </div>
    </div>
</section> -->



<?php $lifestyle_section_13 = get_field('lifestyle_section_13'); ?>

<!-- Lifestyle Section 13 -->
<!-- <section class="content pdct center lifestyle-section13">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $lifestyle_section_13['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $lifestyle_section_13['title']; ?></p>
                    <div class="hr sixty">
                            <div class="line tt-center"></div>
                        </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $lifestyle_section_13['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->














<?php get_footer(); ?>