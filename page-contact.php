<?php get_header(); ?>


<?php $contact_banner = get_field('contact_banner'); ?>

<!-- Contact Banner -->
<section class="home-banner Magnolia-Website-Contact" style="background: url('<?php echo $contact_banner['banner']['url']; ?>') !important;
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
        <div class="slide-obj cover">

        </div>
    </div>
</section>



<?php if (have_rows('contact_section_1')) : while (have_rows('contact_section_1')) : the_row();
        $contact_section_1_1 = get_sub_field('contact_section_1_1');
        $contact_section_1_2 = get_sub_field('contact_section_1_2');
        $contact_section_1_3 = get_sub_field('contact_section_1_3');
        $contact_section_1_4 = get_sub_field('contact_section_1_4');
        $contact_section_1_5 = get_sub_field('contact_section_1_5');
?>

        <!-- Contact Section 1 -->
        <!-- <section class="content center contact-section1">
            <div class="inner">
                <div class="row">
                    <div class="D-12 aos center contact-section1-item1" data-aos="fade-up">
                        <p class="contact-section1-p1"><?php echo $contact_section_1_1; ?></p>
                        <p class="contact-section1-p2"><?php echo $contact_section_1_2; ?></p>
                    </div>
                </div>
                <div class="contact-section1-item2 aos" data-aos="fade-up">
                    <span class="contact-section1-item2-1">
                        <img src="<?php echo $contact_section_1_3['image']['url']; ?>" alt="<?php echo $contact_section_1_3['image']['alt']; ?>" class="contact-section1-item2-img1"><?php echo $contact_section_1_3['text']; ?>
                    </span>
                    <span class="contact-section1-item2-2">
                        <img src="<?php echo $contact_section_1_4['image']['url']; ?>" alt="<?php echo $contact_section_1_4['image']['alt']; ?>" class="contact-section1-item2-img2"><?php echo $contact_section_1_4['text']; ?>
                    </span>
                    <span class="contact-section1-item2-3">
                        <img src="<?php echo $contact_section_1_5['image']['url']; ?>" alt="<?php echo $contact_section_1_5['image']['alt']; ?>" class="contact-section1-item2-img3"><?php echo $contact_section_1_5['text']; ?>
                    </span>
                </div>
            </div>
        </section> -->
<?php endwhile;
endif; ?>





<?php $contact_section_2 = get_field('contact_section_2'); ?>

<!-- Contact Section 2 -->
<section class="content pdct center contact-section2">
    <div class="inner">
        <div class="row center">
            <div class="D-9 L-10 M-12">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $contact_section_2['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $contact_section_2['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                    <?php echo $contact_section_2['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section 3 -->

<!-- <section class="content center contact-section3">
    <div class="inner">
        <div class="D-7 L-12 footer-form aos" data-aos="fade-up">
            <p class="head-title footer-header">NOW AVAILABLE</p>
            <form name="available">
                <div class="form-wrap bd left">
                    <label>Full Name</label>
                    <input type="text" name="name" id="name" class="contact-section3-input1">
                </div>

                <div class="form-wrap bd left">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="contact-section3-input2">
                </div>

                <div class="form-wrap bd left">
                    <label>Phone Number</label>
                    <input type="text" name="phone-number" id="phone-number" class="contact-section3-input3">
                </div>

                <div class="form-wrap bd left">
                        <label>Subject :</label>
                        <span class="radio-form1"><input type="radio" name="register" class="radio-form1-radiobox"><span class="radio-form1-radiotext">Register</span></span>
                        <span class="radio-form2"><input type="radio" name="register" class="radio-form2-radiobox"><span class="radio-form2-radiotext">Book a Tour</span></span>
                        <span class="radio-form3"><input type="radio" name="register" class="radio-form3-radiobox"><span class="radio-form3-radiotext">Other</span></span>
                    </div>

                <div class="form-wrap bd left radiobox-custom">
                    <label>Subject :</label>
                    <div class="radio-form1-1"><input type="radio" name="register" class="radio-form1-1-radiobox"><span class="radio-form1-1-radiotext">Register</span></div>
                    <div class="radio-form2-1"><input type="radio" name="register" class="radio-form2-1-radiobox"><span class="radio-form2-1-radiotext">Book a Tour</span></div>
                    <div class="radio-form3-1"><input type="radio" name="register" class="radio-form3-1-radiobox"><span class="radio-form3-1-radiotext">Other</span></div>
                </div>




                <div class="form-wrap bd mb left">
                    <label class="det">Message</label>
                    <textarea type="text" name="detail" id="detail" rows="8"></textarea>
                </div>


                <div class="form-wrap left accept iAgree-contact-form aos" data-aos="fade-up">
                    <label class="container">
                        <span class="iAgree">I Agree with the General Terms & Conditions
                            <br>
                            of the protection of
                            the privacy declaration.</span>
                        <input type="checkbox">
                        <span class="checkmark iAgree-contact-checkmark"></span>
                    </label>
                </div>


                <a href="javascript:;" class="submit bdbutton submitFooter submit-contact-us-button aos" data-aos="fade-up">SUBMIT</a>
                </p>
            </form>
        </div>
    </div>
</section> -->




<?php $contact_section_4 = get_field('contact_section_4'); ?>

<!-- Contact Section 4 -->
<!-- <section class="content center contact-section4">
    <div class="inner">
        <div class="row">
            <div class="D-6 L-12 content-section4-item1 aos" data-aos="fade-up">
                <?php echo $contact_section_4; ?>
            </div>
        </div>
    </div>
</section> -->



<?php if (have_rows('contact_section_5')) : while (have_rows('contact_section_5')) : the_row();
        $contact_section_5_1 = get_sub_field('contact_section_5_1');
        $contact_section_5_2 = get_sub_field('contact_section_5_2');
        $contact_section_5_3 = get_sub_field('contact_section_5_3');
?>

        <!-- Contact Section 5 -->
        <!-- <section class="content center contact-section5">
            <div class="inner">
                <div class="aos" data-aos="fade-up">
                    <span class="contact-section1-item2-1">
                        <img src="<?php echo $contact_section_5_1['image']['url']; ?>" alt="<?php echo $contact_section_5_1['image']['alt']; ?>" class="contact-section1-item2-img1"><?php echo $contact_section_5_1['text']; ?>
                    </span>
                    <span class="contact-section1-item2-2">
                        <img src="<?php echo $contact_section_5_2['image']['url']; ?>" alt="<?php echo $contact_section_5_2['image']['alt']; ?>" class="contact-section1-item2-img1"><?php echo $contact_section_5_2['text']; ?>
                    </span>
                    <span class="contact-section1-item2-3">
                        <img src="<?php echo $contact_section_5_3['image']['url']; ?>" alt="<?php echo $contact_section_5_3['image']['alt']; ?>" class="contact-section1-item2-img1"><?php echo $contact_section_5_3['text']; ?>
                    </span>
                </div>
            </div>
        </section> -->
<?php endwhile;
endif; ?>


<?php get_footer(); ?>