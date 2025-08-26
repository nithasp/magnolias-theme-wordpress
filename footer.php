<!-- FOOTER -->
<footer>
    <div class="inner">
        <div class="row">
            <div class="D-4 L-5 T-5 D-left-4 M-12 M-left-0 center footer-form aos" data-aos="fade-up">
                <p class="head-title footer-header">NOW AVAILABLE</p>
                <form name="available">
                    <div class="form-wrap bd left">
                        <label>Name</label>
                        <input type="text" name="name" id="ft_name">
                    </div>

                    <div class="form-wrap bd left">
                        <label>Email</label>
                        <input type="text" name="email" id="ft_email">
                    </div>

                    <p class="inOrderForUs">IN ORDER FOR US TO TAILOR OUR OFFER SPECIFICALLY
                        TO YOUR NEEDS, PLEASE LET US KNOW WHICH LEVEL
                        YOU ARE INTERESTED IN OR HOW MANY ROOMS
                        YOU WILL NEED.</p>
                    <p>


                        <div class="form-wrap bd mb left">
                            <label class="det">Detail</label>
                            <textarea type="text" name="detail" id="ft_detail" rows="8"></textarea>
                        </div>


                        <div class="form-wrap left accept">
                            <label class="container">
                                <span class="iAgree">I Agree with the General Terms & Conditions
                                    <br>
                                    of the protection of
                                    the privacy declaration.</span>
                                <input type="checkbox" name"agr" id="ft_agr">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <a href="javascript:submitContact('<?php echo get_template_directory_uri(); ?>/includes/contact-script.php');" class="submit bdbutton submitFooter">SUBMIT</a>
                    </p>
                </form>
            </div>

            <div class="D-4 L-2 T-3 D-right-4 M-12 M-right-0 left footer-item1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/logo-footer-new.png" class="logo-footer aos" data-aos="fade-up">
                <ul class="footmenu aos" data-aos="fade-up" data-aos-delay="100">
                    <li><a href="front-page">HOME</a></li>
                    <li><a href="residences">RESIDENCES</a></li>
                    <li><a href="services">SERVICES</a></li>
                    <li><a href="facilities">FACILITIES</a></li>
                    <li><a href="lifestyle">LIFESTYLE</a></li>
                    <li><a href="gallery">GALLERY</a></li>
                    <li><a href="contact">CONTACT</a></li>
                </ul>
                <div class="aos" data-aos="fade-up" data-aos-delay="200">
                    <p class="foot-head">ENQUIRIES</p>
                    <p class="foot-tel"><a href="tel:081-408-1185">+66 81 408 1185</a><br><a href="mailto:info@mrb.com">info@mrb.com</a></p>
                    <a href="javascript:;" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="javascript:;" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/Compass-footer3.png" class="compasslogo aos" data-aos="fade-up">
            <!-- <div class="copyright aos" data-aos="fade-up" data-aos-delay="300">&copy; <?php echo date('Y'); ?>
                    Magnolias Rachdamri | <a href="javascript:;" class="terms-of-use">Terms of Use</a></div> -->

            <div class="copyright aos" data-aos="fade-up" data-aos-delay="300">Copyright © 2020 Compass Hospitality. <span class="all-rights-reserved">All Rights Reserved</span></div>
        </div>
    </div>
</footer>


<script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/jquery-1.10.2.min.js"></script>

<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/parallax.js-1.5.0/parallax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/jquery.selectric.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/mcb/jquery.mCustomScrollbar.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/jquery.appear.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/aos/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/slick/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/plugins/fancybox3.5.6/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/setting.js"></script>



<script>
    $(document).ready(function() {
        hoverbdButton();
    });

    function hoverbdButton() {
        $('#bdbuttonCall').on('mouseover', function() {
            $('#bdbuttonCallImg').attr('src', '<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/icon-phone.png');
            $('#bdbuttonCallParagraph').css('color', 'white');
            $(this).css('background-color', '#c9952b');

        });

        $('#bdbuttonCall').on('mouseout', function() {
            $('#bdbuttonCallImg').attr('src', '<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/icon-phone2.png');
            $('#bdbuttonCallParagraph').css('color', '#c9952b');
            $(this).css('background-color', '');
        });

        $('#bdbuttonCall2').on('mouseover', function() {
            $('#bdbuttonCallImg2').attr('src', '<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/icon-phone.png');
            $('#bdbuttonCallParagraph2').css('color', 'white');
            $(this).css('background-color', '#c9952b');

        });

        $('#bdbuttonCall2').on('mouseout', function() {
            $('#bdbuttonCallImg2').attr('src', '<?php echo get_template_directory_uri(); ?>/images/New_Magnolia_Logo/icon-phone2.png');
            $('#bdbuttonCallParagraph2').css('color', '#c9952b');
            $(this).css('background-color', '');
        });
    }
</script>


</body>

</html>