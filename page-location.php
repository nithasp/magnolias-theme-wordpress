<?php get_header(); ?>




<?php $location_banner = get_field('location_banner');?>

<!--Location Banner-->
<section class="home-banner Magnolia-Website-location" style="background:url('<?php echo $location_banner['banner']['url']; ?>') !important;
    background-size:cover !important;
    background-repeat: no-repeat !important;
">
    <!-- <div class="mask-banner"></div> -->
    <div class="home-slide">
        <!-- <div class="rightSideBarHeader-residences">
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
            </div> -->
        <div class="slide-obj cover"></div>
    </div>
</section>



<?php $location_section_1 = get_field('location_section_1'); ?>

<!--1 Location Section 1-->
<section class="content pdct center location-section1">
    <div class="inner">
        <div class="row center">
            <div class="D-7 L-10 M-10">
                <div class="aos" data-aos="fade-up">
                    <p class="sub-title"><?php echo $location_section_1['sub_title']; ?></p>
                    <p class="head-title address"><?php echo $location_section_1['title']; ?></p>
                    <div class="hr sixty">
                        <div class="line tt-center"></div>
                    </div>
                </div>
                <div class="aos boulevard-offers" data-aos="fade-up" data-aos-delay="100">
                <?php echo $location_section_1['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php $location_section_2 = get_field('location_section_2'); ?>

<!--1 Location Section 2 MAP-->
<section class="content center location-section3">
    <div class="inner">
        <div class="aos" data-aos="fade-up">
            <img src="<?php echo $location_section_2['image']['url']; ?>" alt="<?php echo $location_section_2['image']['alt']; ?>">
        </div>
    </div>
</section>



<?php $location_section_3 = get_field('location_section_3'); ?>

<!--1 Location Section 3-->
<section class="content center location-section3">
    <div class="inner">
        <div class="row">
            <div class="D-12 aos" data-aos="fade-up">
                <p class="location-section3-p1"><?php echo $location_section_3['location_section_3_1']; ?></p>
                <p class="location-section3-p2"><?php echo $location_section_3['location_section_3_2']; ?></p>
            </div>
        </div>
    </div>
</section>




<!-- Google Map -->
<!-- <script>
        function createMap() {
            var opts = {
                center: {
                    lat: 13.742809,
                    lng: 100.540153,
                },
                zoom: 17,
                styles: [{
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [{
                        "hue": "#ffaa00"
                    }, {
                        "saturation": "-33"
                    }, {
                        "lightness": "10"
                    }]
                }, {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9c5e18"
                    }]
                }, {
                    "featureType": "landscape.natural.terrain",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "saturation": "-23"
                    }, {
                        "gamma": "2.01"
                    }, {
                        "color": "#f2f6f6"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "saturation": "-14"
                    }]
                }],
                maxZoom: 20,
                minZoom: 0,
                mapTypeId: 'roadmap',
            };


            opts.clickableIcons = true;
            opts.disableDoubleClickZoom = false;
            opts.draggable = true;
            opts.keyboardShortcuts = true;
            opts.scrollwheel = true;



            var map = new google.maps.Map(document.getElementById('map'), opts);


            (function() {
                var markerOptions = {
                    map: map,
                    position: {
                        lat: 13.742653,
                        lng: 100.540153,
                    }
                };
                var marker = new google.maps.Marker(markerOptions);


            })();
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1ZW4mSO_b2gv0WzGoP2z_4eZVC_g6G3A&callback=createMap" async defer></script> -->

<?php get_footer(); ?>