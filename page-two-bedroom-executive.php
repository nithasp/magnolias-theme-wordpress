<?php get_header(); ?>


<?php $two_bedroom_executive_banner = get_field('two_bedroom_executive_banner'); ?>

<!--HOME BANNER-->
<section class="home-banner Magnolia-Website-two-bedroom" style="background: url('<?php echo $two_bedroom_executive_banner['banner']['url']; ?>') !important;
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



<?php $two_bedroom_executive_section_1 = get_field('two_bedroom_executive_section_1'); ?>


<!--2 Bedroom Section 1-->
<section class="content pdct center two-bedroom-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-7 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $two_bedroom_executive_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $two_bedroom_executive_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <!-- <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $two_bedroom_executive_section_1['content']; ?></p>
                </div> -->
            </div>
        </div>
    </div>
</section>



<?php $two_bedroom_executive_section_2 = get_field('two_bedroom_executive_section_2'); ?>
<?php if (have_rows('two_bedroom_executive_section_2')) :  while (have_rows('two_bedroom_executive_section_2')) : the_row();
        $two_bedroom_executive_section_2_unit_type = get_sub_field('two_bedroom_executive_section_2_unit_type');
        $two_bedroom_executive_section_2_content_1 = get_sub_field('two_bedroom_executive_section_2_content_1');
        $two_bedroom_executive_section_2_content_2 = get_sub_field('two_bedroom_executive_section_2_content_2');
        $two_bedroom_executive_section_2_content_3 = get_sub_field('two_bedroom_executive_section_2_content_3');

?>


        <!--2 Bedroom Section 2-->
        <section class="content center two-bedroom-section2">
            <div class="inner">
                <!-- <div class="row center">
                    <div class="D-7 L-10 M-10">
                        <div class="aos" data-aos="fade-up">
                            <p class="sub-title"><?php echo $two_bedroom_executive_section_2['sub_title']; ?></p>
                            <p class="head-title address"><?php echo $two_bedroom_executive_section_2['title']; ?></p>
                            <div class="hr sixty">
                                <div class="line tt-center"></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row two-bedroom-section2-item2">
                    <div class="D-12 T-12 aos two-bedroom-section2-item2-1" data-aos="fade-up">
                        <a href="<?php echo $two_bedroom_executive_section_2['two_bedroom_executive_section_2_logo']['url']; ?>" class="unit-layout-logo">
                            <img src="<?php echo $two_bedroom_executive_section_2['two_bedroom_executive_section_2_logo']['url']; ?>" alt="<?php echo $two_bedroom_executive_section_2['two_bedroom_executive_section_2_logo']['alt']; ?>">
                        </a>
                    </div>
                    <div class="D-12 T-12 aos two-bedroom-section2-item2-2" data-aos="fade-up">
                        <div class="two-bedroom-section2-item2-2-1">
                            <p><?php echo $two_bedroom_executive_section_2_unit_type['two_bedroom_executive_section_2_unit_type_title']; ?></p>
                        </div>
                        <div class="two-bedroom-section2-item2-2-2">
                            <img src="<?php echo $two_bedroom_executive_section_2_unit_type['two_bedroom_executive_section_2_unit_type_picture']['url']; ?>" alt="<?php echo $two_bedroom_executive_section_2_unit_type['two_bedroom_executive_section_2_unit_type_picture']['alt']; ?>">
                        </div>
                        <div class="two-bedroom-section2-item2-2-3">
                            <div class="row">
                                <div class="D-4 two-bedroom-section2-item2-2-3-item1-cover">
                                    <p class="two-bedroom-section2-item2-2-3-1"><?php echo $two_bedroom_executive_section_2_content_1['two_bedroom_executive_section_2_content_1-1']; ?></p>
                                    <span class="two-bedroom-section2-item2-2-3-1-1"><?php echo $two_bedroom_executive_section_2_content_1['two_bedroom_executive_section_2_content_1-2']; ?></span>
                                </div>
                                <div class="D-6 two-bedroom-section2-item2-2-3-item2-cover">
                                    <p class="two-bedroom-section2-item2-2-3-2"><?php echo $two_bedroom_executive_section_2_content_1['two_bedroom_executive_section_2_content_2-1']; ?></p>
                                    <span class="two-bedroom-section2-item2-2-3-2-1"><?php echo $two_bedroom_executive_section_2_content_1['two_bedroom_executive_section_2_content_2-2']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="two-bedroom-section2-item2-2-4">
                            <p><?php echo $two_bedroom_executive_section_2_content_2['two_bedroom_executive_section_2_content2_1']; ?></p>
                            <div class="row two-bedroom-section2-item2-2-4-row">
                                <?php if (have_rows('two_bedroom_executive_section_2_content_2')) :  while (have_rows('two_bedroom_executive_section_2_content_2')) : the_row();
                                        $two_bedroom_executive_section_2_content2_2 = get_sub_field('two_bedroom_executive_section_2_content2_2');
                                        $two_bedroom_executive_section_2_content2_4 = get_sub_field('two_bedroom_executive_section_2_content2_4');
                                ?>
                                        <div class="D-6 M-12 SM-12">
                                            <ul>
                                                <?php if (have_rows('two_bedroom_executive_section_2_content2_2')) :  while (have_rows('two_bedroom_executive_section_2_content2_2')) : the_row();
                                                        $text = get_sub_field('text');
                                                ?>
                                                        <li class="two-bedroom-section2-item2-2-4-li1"><span><?php echo $text; ?></span></li>
                                                <?php endwhile;
                                                endif; ?>
                                            </ul>
                                        </div>
                                        <div class="D-6 M-12 SM-12">
                                            <ul>
                                                <?php if (have_rows('two_bedroom_executive_section_2_content2_3')) :  while (have_rows('two_bedroom_executive_section_2_content2_3')) : the_row();
                                                        $text = get_sub_field('text');
                                                ?>
                                                        <li class="two-bedroom-section2-item2-2-4-li1"><span><?php echo $text; ?></span></li>
                                                <?php endwhile;
                                                endif; ?>
                                            </ul>
                                        </div>
                                        <div class="D-12 two-bedroom-section2-item2-2-4-3">
                                            <ul class="two-bedroom-section2-item2-2-4-3-ul">
                                                <li><?php echo $two_bedroom_executive_section_2_content2_4['title']; ?></li>
                                                <ul class="two-bedroom-sub-ul">
                                                    <?php if (have_rows('two_bedroom_executive_section_2_content2_4')) :  while (have_rows('two_bedroom_executive_section_2_content2_4')) : the_row(); ?>
                                                            <?php if (have_rows('content')) :  while (have_rows('content')) : the_row();
                                                                    $text = get_sub_field('text');
                                                            ?>
                                                                    <li><?php echo $text; ?></li>
                                                            <?php endwhile;
                                                            endif; ?>
                                                    <?php endwhile;
                                                    endif; ?>
                                                </ul>
                                            </ul>
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <div class="two-bedroom-section2-item2-2-5">
                            <a href="<?php echo $two_bedroom_executive_section_2_content_3['url']; ?>" target="<?php echo $two_bedroom_executive_section_2_content_3['target']; ?>" class="bdbutton">
                                <?php echo $two_bedroom_executive_section_2_content_3['title']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>




<!--2 Bedroom Section 3-->
<section class="content center amenitiesImage">
    <div class="container center">
        <div class="row center">
            <div class="D-12 L-12 M-12 overflow">
                <a href="javascript:slickCT('.amenslide','slickNext');" class="slide-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-prev2.png"></a>
                <a href="javascript:slickCT('.amenslide','slickPrev');" class="slide-next"><img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/new-next2.png"></a>
                <div class="amenslide">
                    <?php if (have_rows('two_bedroom_executive_section_3')) :  while (have_rows('two_bedroom_executive_section_3')) : the_row();
                            $image = get_sub_field('image');
                    ?>
                            <div class="rwrap">
                                <div class="inner">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="imghover">
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="slide-back top">
        <div class="row-fluid slide-mock-amen">
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/one-bedroom/slide-picture1.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/one-bedroom/slide-picture2.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/one-bedroom/slide-picture1.jpg"></div>
            <div class="D-4 transz cover" data-src="<?php echo get_template_directory_uri(); ?>/images/one-bedroom/slide-picture2.jpg"></div>
        </div>
    </div>
</section>



<?php $two_bedroom_executive_section_4 = get_field('two_bedroom_executive_section_4'); ?>

<!--2 Bedroom Section 4-->
<!-- <section class="content pdct center two-bedroom-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-5 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $two_bedroom_executive_section_4['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $two_bedroom_executive_section_4['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $two_bedroom_executive_section_4['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!--2 Bedroom Section 5-->
<!-- <section class="two-bedroom-section5 center">
    <div class="inner">
        <div class="row section5-row">
            <?php if (have_rows('two_bedroom_executive_section_5')) :  while (have_rows('two_bedroom_executive_section_5')) : the_row();
                    $image = get_sub_field('image');
            ?>
                    <div class="D-4 M-12 aos section5-item1" data-aos="fade-up">
                        <img src="<?php echo $image['url']; ?>" class="imgFIT" alt="<?php echo $image['alt']; ?>">
                        <p class="section5-item1-2"><?php the_sub_field('title'); ?></p>
                        <p class="section5-item1-3"><?php the_sub_field('content'); ?></p>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div> -->
</section>

<?php get_footer(); ?>



<script>
    $(document).ready(function() {
        twoBedRoomBox();
    });

    function twoBedRoomBox() {
        $('.unit-layout-logo').fancybox({
            protect: false,
            buttons: [
                'zoom',
                'thumbs',
                'close'
            ],

            // afterShow: function () {
            //     $(".fancybox-image").wrap($("<a />", {
            //         href: 'https://be.synxis.com/?&chain=24447&hotel=6776&SRC=30', //or your target link
            //         target: "_blank"
            //     }));
            // }
        });
    }
</script>