$(document).ready(function () {
    setCover();
    setSlide();
    
});


$(window).load(function () {
    setAOS();
    checkItem();
    // setTimeout(openPOP, 1000);
});
$(window).resize(function () {
    hidedropdownLanguageResponsive();
});
$(window).scroll(function () {
    checkScroll();
});

function setCover() {
    if ($('.cover').length) {
        $('.cover').each(function () {
            var bg_part = $(this).attr('data-src');
            $(this).css('background-image', 'url(' + bg_part + ')');
        });
    }
}
function toggleMENU() {
    $('.nav').toggleClass('active');
}
function checkScroll() {
    var scroll_top = $(window).scrollTop();
    if (scroll_top >= 100) {
        $('header').addClass('fix');
        // $('.mainmenu').addClass('addMarginMainMenu');
        // $('.topcontact').addClass('addMarginTopContact');
        // $('.imgLOGO').addClass('decreaseHEIGHT-IMG-LOGO');
    } else {
        $('header').removeClass('fix');
        // $('.mainmenu').removeClass('addMarginMainMenu');
        // $('.topcontact').removeClass('addMarginTopContact');
        // $('.imgLOGO').removeClass('decreaseHEIGHT-IMG-LOGO');
    }
}
function setAOS() {
    if ($('.aos').length) {
        //AOS.init({duration: 1000, disable:'mobile'});	
        AOS.init({ duration: 1000 });
    }
}
function setSlide() {
    if ($('.slide-mock').length) {
        $('.slide-mock').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: false,
            centerMode: true,
            centerPadding: '0px',
            slide: 'div',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, slidesToShow: 1 }
                }]
        });
    }
    if ($('.oneslide').length) {
        $('.oneslide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: true,
            slide: 'div',
            asNavFor: '.slide-mock',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, fade: false, slidesToShow: 1 }
                }]
        });
    }

    if ($('.slide-mock-res').length) {
        $('.slide-mock-res').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: false,
            centerMode: true,
            centerPadding: '0px',
            slide: 'div',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, slidesToShow: 1 }
                }]
        });
    }
    if ($('.resslide').length) {
        $('.resslide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: true,
            slide: 'div',
            asNavFor: '.slide-mock-res',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, fade: false, slidesToShow: 1 }
                }]
        });
    }

    if ($('.slide-mock-amen').length) {
        $('.slide-mock-amen').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: false,
            centerMode: true,
            centerPadding: '0px',
            slide: 'div',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, slidesToShow: 1 }
                }]
        });
    }
    if ($('.amenslide').length) {
        $('.amenslide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            dots: false,
            infinite: true,
            speed: 1000,
            fade: true,
            slide: 'div',
            asNavFor: '.slide-mock-amen',
            responsive: [
                {
                    breakpoint: 768,
                    settings: { fade: false, speed: 300, fade: false, slidesToShow: 1 }
                }]
        });
    }
}
function slickCT(div, action) {
    $(div).slick(action);
}
function toggleDefault(item, classes) {
    if ($(item).hasClass(classes)) {
        $(item).removeClass(classes);
    } else {
        classitem = "." + classes;
        $(classitem).removeClass(classes);
        $(item).toggleClass(classes);
    }
}





// My Code (WAII)
// function hoverbdButton() {
//     $('#bdbuttonCall').on('mouseover', function () {
//         $('#bdbuttonCallImg').attr('src', 'wp-content/themes/magnolias-theme/images/New_Magnolia_Logo/icon-phone.png');
//         $('#bdbuttonCallParagraph').css('color', 'white');
//         $(this).css('background-color', '#c9952b');

//     });

//     $('#bdbuttonCall').on('mouseout', function () {
//         $('#bdbuttonCallImg').attr('src', 'wp-content/themes/magnolias-theme/images/New_Magnolia_Logo/icon-phone2.png');
//         $('#bdbuttonCallParagraph').css('color', '#c9952b');
//         $(this).css('background-color', '');
//     });

//     $('#bdbuttonCall2').on('mouseover', function () {
//         $('#bdbuttonCallImg2').attr('src', 'wp-content/themes/magnolias-theme/images/New_Magnolia_Logo/icon-phone.png');
//         $('#bdbuttonCallParagraph2').css('color', 'white');
//         $(this).css('background-color', '#c9952b');

//     });

//     $('#bdbuttonCall2').on('mouseout', function () {
//         $('#bdbuttonCallImg2').attr('src', 'wp-content/themes/magnolias-theme/images/New_Magnolia_Logo/icon-phone2.png');
//         $('#bdbuttonCallParagraph2').css('color', '#c9952b');
//         $(this).css('background-color', '');
//     });

// }

// function myFancybox() {
//     $('.unit-layout-logo').fancybox({
//         protect: false,
//         buttons: [
//             'zoom',
//             'thumbs',
//             'close'
//         ],

//         // afterShow: function () {
//         //     $(".fancybox-image").wrap($("<a />", {
//         //         href: 'https://be.synxis.com/?&chain=24447&hotel=6776&SRC=30', //or your target link
//         //         target: "_blank"
//         //     }));
//         // }
//     });
// }



function openPOP() {
    // Version 3.5
    // $(".unit-layout-logo").fancybox().trigger('click');

    // Version 2.15
    // $.fancybox.open({
    //     'href': 'images/one-bedroom/unit-layout-logo.jpg',
    //     'target': 'images/one-bedroom/unit-layout-logo.jpg'
    // }, { 'closeBtn': false });
    // $('.fancybox-inner').css('cursor', 'pointer');
    // $('.fancybox-inner').bind('click', function () {
    //     parent.jQuery.fancybox.close();
    // });
}



function dropdownLanguage() {
    $('.dropdown-magnolias').toggleClass('dropdown-magnolias-display');
}

function dropdownLanguageResponsive() {
    $('.dropdown-magnolias-responsive').toggleClass('dropdown-magnolias-responsive-display');
}

function hidedropdownLanguageResponsive() {
    windowWidth = $(window).width();
    if(windowWidth >= 753){
        $('.dropdown-magnolias-responsive').removeClass('dropdown-magnolias-responsive-display');
    } 
}

function submitContact(action){
    //console.log(action);
    name=$('#ft_name').val();
    email=$('#ft_email').val();
    detail=$('#ft_detail').val();
    agree=$('#ft_agr').val();
    if(name==''){
        alert('Please input Name');
    }else if(email==''){
        alert('Please input email');
    }else if(!$.checkemail(email)){
        alert('Please enter a valid email address');
    }else if(detail==''){
        alert('please input detail');
    }else if(!$('#ft_agr').is(":checked")){
        alert('please confirm terms & codition');
    }else{
        //Send Data via Ajax
        dataAll='name='+name+'&email='+email+'&detail='+detail;
        $.ajax({
            type: 'POST',
            url: action,
            data: dataAll,
            success: function (data, status) {
                var response_brought = data.indexOf('Done');
                if (response_brought != -1)
                {
                    //Clear all form fields on success
                    alert('Thank You!');
                    setTimeout(function () {                        
                        location.reload();
                    }, 2000);
                } else
                {
                    //Display error message is the message is not sent
                    alert(data);
                }
            }
        });
    }
}
var emailfilter = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
$.checkemail = function (e) {
    var returnval = emailfilter.test(e);
    return returnval;
}
function checkItem(){
    if($('.gd').length){
        //console.log('grid');
        var $grid = $('.gd').isotope({
          filter: '*'
        });   
        $(document).on( 'click', '.filterbtn', function() {
          var filterValue = $(this).attr('data-filter');
          var $grid = $('.gd').isotope({
              filter: filterValue
            });
        });     
    }
}
$(function(){

})