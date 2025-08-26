<?php get_header(); ?>


<?php $gallery_banner = get_field('gallery_banner'); ?>

<!--HOME BANNER-->
<section class="home-banner Magnolia-Website-Residences" style="background:url('<?php echo $gallery_banner['banner']['url']; ?>') !important;
    background-size:cover !important;
    background-repeat:no-repeat !important;">
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



<?php $gallery_section_1 = get_field('gallery_section_1'); ?>

<!--Gallery Section 1-->
<section class="content pdct center gallery-section1">
    <div class="inner">
        <div class="row  center">
            <div class="D-8 L-10 M-10 SM-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $gallery_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $gallery_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $gallery_section_1['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $gallery_section_2 = get_field('gallery_section_2'); ?>

<!--Gallery Section 2-->
<section class="content pdct center gallery-section2">
    <div class="inner">
        <div class="row">
            <div class="D-12 L-10 M-10 gallery-section2-item1 aos filtergroup" data-aos="fade-up">
                <div>
                    <a href="javascript:;" class="gallery-section2-item1-1 filterbtn" data-filter=".<?php echo strtolower($gallery_section_2['gallery_section_2_1']); ?>"><?php echo $gallery_section_2['gallery_section_2_1']; ?></a>
                </div>
                <div>
                    <a href="javascript:;" class="gallery-section2-item1-2 filterbtn" data-filter=".<?php echo strtolower($gallery_section_2['gallery_section_2_2']); ?>"><?php echo $gallery_section_2['gallery_section_2_2']; ?></a>
                </div>
                <div>
                    <a href="javascript:;" class="gallery-section2-item1-3 filterbtn" data-filter=".<?php echo strtolower($gallery_section_2['gallery_section_2_3']); ?>"><?php echo $gallery_section_2['gallery_section_2_3']; ?></a>
                </div>
                <div>
                    <a href="javascript:;" class="gallery-section2-item1-4 filterbtn" data-filter=".<?php echo strtolower($gallery_section_2['gallery_section_2_4']); ?>"><?php echo $gallery_section_2['gallery_section_2_4']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>




<!--Gallery Section 3-->
<section class="content center gallery-section3">
    <div class="inner gallery-section3-inner">
        <div class="row gd">
            <?php if (have_rows('gallery_section_3')) : while (have_rows('gallery_section_3')) : the_row(); 
                $image = get_sub_field('image');
            ?>
                    <div class="D-4 L-6 SM-12 <?php the_sub_field('filter');?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="" >
                    </div>
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section>



<!--Gallery Section 4-->
<section class="content center gallery-section4">
    <div class="inner">
        <div class="row">
            <div class="aos" data-aos="fade-up">
                <ul class="gallery-section4-item1">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>