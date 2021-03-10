<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>UMI</title>


    <link rel="shortcut icon" href="favicon1.ico">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- You can override default styles in your CSS.-->
    <link rel="stylesheet" href="jquery/dist/jquery.frame-carousel.min.css">

    <script type="text/javascript" src="jquery/dist/jquery.frame-carousel.min.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
     <div class="mob-menu">
         <img src="img/icons/menu-icon.png" height="30px" width="30px">
     </div>
        <div class="row">
            <div class="col-md-7 hosting">
            <div class="logo-mobile">
                    <img src="img/logo.png">
            </div>
                <div class="mob-content">

                    <div class="hostA">
                    </div>

                    <div class="hostB">
                    </div>

                    <div class="hostC" style="z-index: 2; left: 40%">
                    </div>

                    <div class="hostD" style="position: relative;right:80px;top: -620px; z-index: 1;">
                    </div>

                    <div class="hostE" style="z-index: 2; left: 40%">
                    </div>

                    <div class="hostF" style="position: relative;right: 80px;top: -620px; z-index: 1;">
                    </div>

                    <div class="hostG" style="z-index: 2; left: 40%;">
                    </div>

                    <div class="desktop" style="position: relative;top: -610px;  right: 200px; z-index: 1; ">
                    </div>

                </div>
            </div>

            <div class="col-md-5 logo-content" style="z-index: 99999; pointer-events: all">
            <div class="menu-open">
                <img src="img/icons/menu-close.png" height="30px" width="30px">
            </div>
                <div class="logo">
                    <img src="img/logo.png">
                </div>
                <div class="scanner">
                    <h2>HOW IT WORKS</h2>

                    <button class="btn btn-info navbar-btn1" onclick='clickButton1()'>Quick Setup</button>
                    <button class="btn btn-info navbar-btn2" onclick='clickButton2()'>Create & Verify</button>
                    <button class="btn btn-info navbar-btn3" onclick='clickButton3()'>Share Data</button>
                    <button class="btn btn-info navbar-btn4" onclick='clickButton4()'>Request Data</button>
                    <button class="btn btn-info navbar-btn5" onclick='clickButton5()'>UaaS:Booking.com</button>
                </div>
                <div class="icons">
                    <a href=""><img src="img/apple.png"></a>
                    <a href=""><img src="img/android.png"></a>
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="jquery/dist/jquery.frame-carousel.min.js"></script>
    <script>
        $('button').on('click', function() {
            $('button').removeClass('activebtn');
              $('button').css('pointer-events','all');
            $(this).addClass('activebtn');
              $(this).css('pointer-events','none');
        });


        function clickButton1() {
            for (var i = 1; i < 100; i++)
                  window.clearInterval(i);
            $(".mob-content").animate({left :'0%'});

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            $('.hostB').hide('fast');
            $('.hostC').hide('fast');
            $('.hostD').hide('fast');
            $('.hostE').hide('fast');
            $('.hostF').hide('fast');
            $('.hostG').hide('fast');
            $('.desktop').hide('fast');


            $('.hostA').show();
            $('.hostA').frameCarousel({
                frame: 'img/cover.png',
                boundingBox: {
                    // left: '32.8%',//'6.5%',
                    // top: '15.6%',//'12.2%',
                    // width: '54%',//'86.8%',
                    // height: '70%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 2500,

                images: [
                    'img/1.png',
                    'img/2.png',
                    'img/3.png',
                    'img/4.png',
                    'img/5.png',

                ]


            });
        }

        function clickButton2() {
            for (var i = 1; i < 100; i++)
                  window.clearInterval(i);

            // $(".mob-content").css('left', '0%');
             $(".mob-content").animate({left :'0%'});

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }


            $('.hostA').hide('fast');
            $('.hostC').hide('fast');
            $('.hostD').hide('fast');
            $('.hostE').hide('fast');
            $('.hostF').hide('fast');
            $('.hostG').hide('fast');
            $('.desktop').hide('fast');


            $('.hostB').show();
            $('.hostB').frameCarousel({
                frame: 'img/cover.png',
                boundingBox: {
                    // left: '32.8%',//'6.5%',
                    // top: '15.6%',//'12.2%',
                    // width: '54%',//'86.8%',
                    // height: '70%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 2500,

                images: ['img/cv/home.png',
                    'img/cv/1.png',
                    'img/cv/2.png',
                    'img/cv/3.png',
                    'img/cv/4.png',
                    'img/cv/5.png',
                    'img/cv/after5.png',
                    'img/cv/6.png',
                    'img/cv/7.png',
                    'img/cv/8.png',
                    'img/cv/9.png',
                    'img/cv/10.png',
                    'img/cv/after10.png',
                    'img/cv/11.png',
                    'img/cv/12.png',
                    'img/cv/13.png',
                    'img/cv/14.png',

                ]


            });
        }

        function clickButton3() {
            for (var i = 1; i < 100; i++)
                  window.clearInterval(i);

            $(".mob-content").css('position', 'relative');
            $(".mob-content").animate({
                left: '25%'
            });
            

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            $('.hostA').hide();
            $('.hostB').hide();
            $('.hostE').hide();
            $('.hostF').hide();
            $('.hostG').hide();
            $('.desktop').hide();

            $('.hostC').show();
            $('.hostD').show();



            $('.hostC').frameCarousel({
                frame: 'img/black.png',
                boundingBox: {
                    // left: '3.5%',//'6.5%',
                    // top: '13.4%',//'12.2%',
                    // width: '57%',//'86.8%',
                    // height: '72%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454,
                    height: 618
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: false,
                autoplayInterval: 4000,

                images: [
                    'img/cv/home.png',
                    'img/white/1.png',
                    'img/white/4.png',
                    'img/white/5.png',


                ]


            });
            
            $('.hostD').frameCarousel({
                frame: 'img/white.png',
                boundingBox: {
                    // left: '32.8%',//'6.5%',
                    // top: '15.6%',//'12.2%',
                    // width: '54%',//'86.8%',
                    // height: '70%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454,
                    height: 575
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 4000,

                images: ['img/cv/home.png',
                    'img/black/1.png',
                    'img/black/2.png',
                    'img/black/3.png',
                    'img/black/4.png',
                    'img/black/6.png',
                    'img/black/7.png',




                ]


            });

            $('.hostC').css('opacity', '0');
            $(".mob-content").css('position', 'relative');
            $(".mob-content").animate({
                left: '25%'
            });
            var runonce = false;
            var runOnceC = false;
            var shareinterval = setInterval(function() {
              
                var image = $('.hostD .fc-image-masked.active').css('background-image');

                var imageC = $('.hostC .fc-image-masked.active').css('background-image');

                var whitemob = $('.hostD').css('display');
                var reqwhitemob = $('.hostF').css('display');

                if ((image === 'url("http://umi.e-commerce-hongkong.com/img/black/4.png")' || image === 'url(http://umi.e-commerce-hongkong.com/img/black/4.png)') && runonce == false) {
                    runonce = true;
                    console.log('frameCarouselD');
                    var frameCarouselD = $('.hostD').data('frameCarousel');
                    console.log(frameCarouselD);
                    frameCarouselD.stop();

                    var frameCarouselC = $('.hostC').data('frameCarousel');
                    frameCarouselC.play();
                    
                    // $('.hostC').css('opacity','1');
                    $('.hostC').animate({
                        opacity: '1'
                    });
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '0%'
                    });
                } else if ((imageC === 'url("http://umi.e-commerce-hongkong.com/img/white/4.png")' || imageC === 'url(http://umi.e-commerce-hongkong.com/img/white/4.png)') && runOnceC==false) {
                  console.log('ckwear interval');

                  clearInterval(shareinterval);
                  var frameCarouselC = $('.hostC').data('frameCarousel');
                  frameCarouselC.stop();

                  setTimeout(function(){

                      $('.hostC').css('opacity', '0');
                       $(".mob-content").animate({
                        left: '25%'
                    });
                     var frameCarouselD = $('.hostD').data('frameCarousel');
                    frameCarouselD.goto(5);
                    var frameCarouselC = $('.hostC').data('frameCarousel');
                    frameCarouselC.goto(3);
                  },3000);

                   setTimeout(function(){
                       $('.hostC').css('opacity', '1');
                        $('.hostD').css('opacity', '0');
                         $(".mob-content").animate({
                        left: '0%'
                    });
                  },6000);

                   setTimeout(function(){
                    clearInterval(shareinterval);
                    $('.navbar-btn3').css('pointer-events','all');
                    $('.navbar-btn3').click();
                  },9000);



                  

                 



                }else if (image === 'url("http://umi.e-commerce-hongkong.com/img/cv/home.png")' || image === 'url(http://umi.e-commerce-hongkong.com/img/cv/home.png)') {

                    $('.hostC').css('opacity', '0');
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '25%'
                    });
                } else if (whitemob === 'none') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '0%'
                    });
                    clearInterval(shareinterval);
                    console.log('share interval stopped');

                } else if (reqwhitemob === 'inline-block') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '25%'
                    });
                    clearInterval(shareinterval);
                    console.log('share interval stopped');

                } else if (reqwhitemob === 'block') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '25%'
                    });
                    clearInterval(shareinterval);
                    console.log('share interval stopped');

                }
            }, 500);

        }

        function clickButton4() {
            for (var i = 1; i < 100; i++)
                  window.clearInterval(i);

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            $('.hostA').hide();
            $('.hostB').hide();
            $('.hostC').hide();
            $('.hostD').hide();
            $('.hostG').hide();
            $('.desktop').hide();

            $('.hostE').show();
            $('.hostF').show();

            $('.hostE').frameCarousel({
                frame: 'img/black.png',
                boundingBox: {
                    // left: '3.5%',//'6.5%',
                    // top: '13.4%',//'12.2%',
                    // width: '57%',//'86.8%',
                    // height: '72%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454,
                    height: 618
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: false,
                autoplayInterval: 4000,

                images: ['img/cv/home.png',
                    'img/request/8.png',
                    'img/request/5.png',
                  




                ]


            });


            $('.hostF').frameCarousel({
                frame: 'img/white.png',
                boundingBox: {
                    // left: '32.8%',//'6.5%',
                    // top: '15.6%',//'12.2%',
                    // width: '54%',//'86.8%',
                    // height: '70%'//'75.3%'
                    left: '32%',
                    top: '14.6%',
                    width: '54.5%',
                    height: '70%'
                },
                frameSize: [{
                    width: 454,
                    height: 575
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 4000,

                images: ['img/cv/home.png',
                    'img/request/1.png',
                    'img/request/2.png',
                    'img/request/3.png',
                    'img/request/6.png',
                    'img/request/4.png',
                    'img/request/7.png'
                ]


            });


            $('.hostE').css('opacity', '0');
            $(".mob-content").css('position', 'relative');
            $(".mob-content").css('left', '25%');

            var openOnceE = false;
            var requestinterval = setInterval(function() {
                var requestimage = $('.hostF .fc-image-masked.active').css('background-image');
                console.log(requestimage);
                var requestimageE = $('.hostE .fc-image-masked.active').css('background-image');

                var rwhitemob = $('.hostF').css('display');
                console.log(rwhitemob);

                if ((requestimage === 'url("http://umi.e-commerce-hongkong.com/img/request/4.png")' || requestimage === 'url(http://umi.e-commerce-hongkong.com/img/request/4.png)') && openOnceE==false) {
                  var frameCarouselF = $('.hostF').data('frameCarousel');
                  openOnceE = true;
                    
                    frameCarouselF.stop();
                    var frameCarouselE = $('.hostE').data('frameCarousel');
                    //frameCarouselE.options.autoplayInterval = 4000;
                    frameCarouselE.play();
                    console.log(frameCarouselE);

                    $('.hostE').animate({
                        opacity: '1'
                    });
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '0%'
                    });

                }else if (requestimageE === 'url("http://umi.e-commerce-hongkong.com/img/request/5.png")' || requestimageE === 'url(http://umi.e-commerce-hongkong.com/img/request/5.png)') {
                  clearInterval(requestinterval);
                  setTimeout(function(){

                      $('.hostE').css('opacity', '0');
                       $(".mob-content").animate({
                        left: '25%'
                    });
                      var frameCarouselF = $('.hostF').data('frameCarousel');
                      frameCarouselF.goto(6);
                    },3000);

                  //  setTimeout(function(){
                  //      $('.hostC').css('opacity', '1');
                  // },6000);

                   setTimeout(function(){
                    $('.navbar-btn4').css('pointer-events','all');
                    $('.navbar-btn4').click();
                  },6000);

                }else if (requestimage === 'url("http://umi.e-commerce-hongkong.com/img/request/6.png")' || requestimage === 'url(http://umi.e-commerce-hongkong.com/img/request/6.png)') {
                    $('.hostE').animate({
                        opacity: '0'
                    });
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '25%'
                    });
                } else if (requestimage === 'url("http://umi.e-commerce-hongkong.com/img/cv/home.png")' || requestimage === 'url(http://umi.e-commerce-hongkong.com/img/cv/home.png)') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '25%'
                    });
                    console.log('Home Found');
                }


                if (rwhitemob === 'none') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '0%'
                    });
                    clearInterval(requestinterval);
                    console.log('request interval stopped');

                }

            }, 500);



        }

        function clickButton5() {
            for (var i = 1; i < 100; i++)
                  window.clearInterval(i);

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            $('.hostA').hide();
            $('.hostB').hide();
            $('.hostC').hide();
            $('.hostD').hide();
            $('.hostE').hide();
            $('.hostF').hide();



            $('.hostG').show();
            $('.desktop').show();
            $(".mob-content").css('position', 'relative');
            $(".mob-content").animate({
                left: '15%'
            });

            $('.hostG').frameCarousel({
                frame: 'img/black.png',
                boundingBox: {
                    left: '3.5%', //'6.5%',
                    top: '13.4%', //'12.2%',
                    width: '57%', //'86.8%',
                    height: '72%' //'75.3%'
                },
                frameSize: [{
                    width: 454,
                    height: 618
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: false,
                autoplayInterval: 4000,

                images: ['img/cv/home.png',
                    'img/umiapp/3.png',
                    'img/umiapp/2.png',
                    'img/umiapp/3.png',
                    'img/umiapp/4.png',
                    'img/umiapp/3.png',
                    'img/umiapp/6.png',
                    'img/umiapp/7.png'

                ]


            });

            $('.desktop').frameCarousel({
                frame: 'img/desktop.png',
                boundingBox: {
                    left: '32.8%', //'6.5%',
                    top: '15.6%', //'12.2%',
                    width: '54%', //'86.8%',
                    height: '70%' //'75.3%'
                },
                frameSize: [{
                    top: -502,
                    width: 489,
                    height: 575
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 4000,

                images: [
                    'img/desktop/1index.png',
                    'img/desktop/2loginpopup.png',
                    'img/desktop/3personal.png',
                    'img/desktop/4personal_fille.png',
                    'img/desktop/5_payment.png',
                    'img/desktop/6_paymentfilled.png',
                    'img/desktop/7bookingcomplete.png',
                ]


            });

            $('.hostG').css('opacity', '0');
            $(".mob-content").css('position', 'relative');
            $(".mob-content").animate({
                left: '15%'
            });
            var runOnceDesktop = false;
            var runOnceG = false;
            var binterval = setInterval(function() {

                var bimage = $('.desktop .fc-image-masked.active').css('background-image');

                var bimageG1 = $('.hostG .fc-image-masked.active').css('background-image');
                console.log(bimage);

                var whitemob = $('.hostG').css('display');
                console.log(whitemob);

                if ((bimage === 'url("http://umi.e-commerce-hongkong.com/img/desktop/2loginpopup.png")' || bimage === 'url(http://umi.e-commerce-hongkong.com/img/desktop/2loginpopup.png)') && runOnceDesktop==false) {
                  runOnceDesktop = true;
                  var frameCarouselDesktop = $('.desktop').data('frameCarousel');
                    console.log(frameCarouselDesktop);
                    frameCarouselDesktop.stop();

                   setTimeout(function(){
                    $('.hostG').animate({opacity: '1'});
                    if ( $(window).width() > 992 ) {

                    $(".mob-content").animate({
                        left: '0%'
                    });
                    }
                    var frameCarouselG = $('.hostG').data('frameCarousel');
                    frameCarouselG.play();
                    

                   }, 3000);
                }else if ((bimageG1 === 'url("http://umi.e-commerce-hongkong.com/img/umiapp/2.png")' || bimageG1 === 'url(http://umi.e-commerce-hongkong.com/img/umiapp/2.png)') && runOnceG==false) {
                  runOnceG = true;
                  var frameCarouselG = $('.hostG').data('frameCarousel');
                    frameCarouselG.stop();
                    var frameCarouselDesktop = $('.desktop').data('frameCarousel');

                   setTimeout(function(){
                    $('.hostG').animate({opacity: '0'});
                    $(".mob-content").animate({
                    left: '15%'
                 });

                    frameCarouselDesktop.goto(2);
                     frameCarouselG.goto(3);
                    
                   }, 3000);

                   setTimeout(function(){
                       
                        $('.hostG').animate({
                          opacity: '1'
                        });
                         if ( $(window).width() > 992 ) {

                                $(".mob-content").animate({
                                    left: '0%'
                                });
                        }
                    },6000);

                   setTimeout(function(){
                        frameCarouselG.goto(4);
                        
                    },9000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(3);
                        
                    },12000);

                   setTimeout(function(){
                        
                         $('.hostG').animate({
                          opacity: '0'
                        });
                         $(".mob-content").animate({
                left: '15%'
            });
                        
                    },14000);

                   setTimeout(function(){
                     frameCarouselG.goto(5);
                        frameCarouselDesktop.goto(4);
                        
                    },15000);

                   setTimeout(function(){
                        
                         $('.hostG').animate({
                          opacity: '1'
                        });
                         if ( $(window).width() > 992 ) {

                                $(".mob-content").animate({
                                    left: '0%'
                                });
                        }
                    },18000);

                   setTimeout(function(){
                        frameCarouselG.goto(6);
                        
                    },21000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(5);
                        
                    },24000);

                   setTimeout(function(){
                        frameCarouselG.goto(5);
                         $('.hostG').animate({
                          opacity: '0'
                        });
                         $(".mob-content").animate({
                left: '15%'
            });
                    },25000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(6);
                        
                    },27000);

                   setTimeout(function(){
                        $('.navbar-btn5').click();
                    },29000);
                }


                if (whitemob === 'none') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").animate({
                        left: '0%'
                    });
                    clearInterval(binterval);
                    console.log('Book interval stopped');

                }

            }, 500);



        }

 if ( $(window).width() > 736 ) {
       $('button.navbar-btn5').click();
   }
        
        $('.mob-menu').on('click',function(){
        $('.logo-content').show();
         });

        $('.menu-open').on('click',function(){
        $('.logo-content').hide();

        });
        
         if ( $(window).width() < 736 ) {

             if ($('.navbar-btn3').hasClass('activebtn')) {
                   $('.mob-content').attr('style','margin-left:25% !important');
                 }else{
                   $('.mob-content').attr('style','margin:auto !important');
             }



                $('.mob-menu').on('click',function(){
                    $('.logo-content').show();
                 });

                $('.menu-open').on('click',function(){
                        $('.logo-content').hide();

                    });

               $('button').on('click',function(){
                    $('.logo-content').hide();

                });

                  

                   
                   $('.navbar-btn2').on('click',function(){
                    $('.logo-content').css('top','-692px');
                   });


                   $('.navbar-btn1').on('click',function(){
                    $('.logo-content').css('top','-667px');
                   });
                   

                   $(document).on('click','.navbar-btn5',function(e){

                      $('.mob-content').attr('style','margin-left:65% !important');

                  });

                   $('.navbar-btn3').on('click',function(){
                      $('.mob-content').attr('style','margin-left:25% !important');
                     });

                   $('.navbar-btn4').on('click',function(){
                      $('.mob-content').attr('style','margin-left:25% !important');
                     });

                   $('.navbar-btn1').on('click',function(){
                      $('.mob-content').attr('style','margin-left:0% !important');
                     });

                   $('.navbar-btn2').on('click',function(){
                      $('.mob-content').attr('style','margin-left:0% !important');
                     });

                    // $('.navbar-btn1').click();

                 $(document).ready(function(){
				            
                  
				            // $('.hostA').hide();

                //             var frameCarousel = $('.hostG').data('frameCarousel');
				            // if (frameCarousel != 'undefined' && frameCarousel != undefined) {
				            //     frameCarousel.destroy();
				            // }

				            // var frameCarousel = $('.desktop').data('frameCarousel');
				            // if (frameCarousel != 'undefined' && frameCarousel != undefined) {
				            //     frameCarousel.destroy();
				            // }
		              //       $('.navbar-btn5').click(); 
		              for (var i = 1; i < 100; i++)
                  window.clearInterval(i);

            var frameCarousel = $('.hostA').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostB').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostC').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostD').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostE').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostF').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }
            var frameCarousel = $('.hostG').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            var frameCarousel = $('.desktop').data('frameCarousel');
            if (frameCarousel != 'undefined' && frameCarousel != undefined) {
                frameCarousel.destroy();
            }

            $('.hostA').hide();
            $('.hostB').hide();
            $('.hostC').hide();
            $('.hostD').hide();
            $('.hostE').hide();
            $('.hostF').hide();



            $('.hostG').show();
            $('.desktop').show();
            $(".mob-content").css('position', 'relative');
            $(".hostG").css('left', '-35%');

$('.mob-content').attr('style','margin-left:50% !important');
$('.navbar-btn5').addClass('activebtn');
            $('.hostG').frameCarousel({
                frame: 'img/black.png',
                boundingBox: {
                    left: '3.5%', //'6.5%',
                    top: '13.4%', //'12.2%',
                    width: '57%', //'86.8%',
                    height: '72%' //'75.3%'
                },
                frameSize: [{
                    width: 454,
                    height: 618
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: false,
                autoplayInterval: 4000,

                images: ['img/cv/home.png',
                    'img/umiapp/3.png',
                    'img/umiapp/2.png',
                    'img/umiapp/3.png',
                    'img/umiapp/4.png',
                    'img/umiapp/3.png',
                    'img/umiapp/6.png',
                    'img/umiapp/7.png'

                ]


            });

            $('.desktop').frameCarousel({
                frame: 'img/desktop.png',
                boundingBox: {
                    left: '32.8%', //'6.5%',
                    top: '15.6%', //'12.2%',
                    width: '54%', //'86.8%',
                    height: '70%' //'75.3%'
                },
                frameSize: [{
                    top: -502,
                    width: 489,
                    height: 575
                }],
                controlsPosition: {
                    top: '45%'
                },
                autoplay: true,
                autoplayInterval: 4000,

                images: [
                    'img/desktop/1index.png',
                    'img/desktop/2loginpopup.png',
                    'img/desktop/3personal.png',
                    'img/desktop/4personal_fille.png',
                    'img/desktop/5_payment.png',
                    'img/desktop/6_paymentfilled.png',
                    'img/desktop/7bookingcomplete.png',
                ]


            });

            $('.hostG').css('opacity', '0');
            $(".mob-content").css('position', 'relative');
            $(".mob-content").css('left', '15%');
            var runOnceDesktop = false;
            var runOnceG = false;
            var binterval = setInterval(function() {

                var bimage = $('.desktop .fc-image-masked.active').css('background-image');

                var bimageG1 = $('.hostG .fc-image-masked.active').css('background-image');
                console.log(bimage);

                var whitemob = $('.hostG').css('display');
                console.log(whitemob);

                if ((bimage === 'url("http://umi.e-commerce-hongkong.com/img/desktop/2loginpopup.png")' || bimage === 'url(http://umi.e-commerce-hongkong.com/img/desktop/2loginpopup.png)') && runOnceDesktop==false) {
                  runOnceDesktop = true;
                  var frameCarouselDesktop = $('.desktop').data('frameCarousel');
                    console.log(frameCarouselDesktop);
                    frameCarouselDesktop.stop();

                   setTimeout(function(){
                    $('.hostG').animate({opacity: '1'});
                    if ( $(window).width() > 992 ) {

                    $(".mob-content").css('left', '0%');
                    }
                    var frameCarouselG = $('.hostG').data('frameCarousel');
                    frameCarouselG.play();
                    

                   }, 3000);
                }else if ((bimageG1 === 'url("http://umi.e-commerce-hongkong.com/img/umiapp/2.png")' || bimageG1 === 'url(http://umi.e-commerce-hongkong.com/img/umiapp/2.png)') && runOnceG==false) {
                  runOnceG = true;
                  var frameCarouselG = $('.hostG').data('frameCarousel');
                    frameCarouselG.stop();
                    var frameCarouselDesktop = $('.desktop').data('frameCarousel');

                   setTimeout(function(){
                    $('.hostG').animate({opacity: '0'});
                    $(".mob-content").css('left', '15%');

                    frameCarouselDesktop.goto(2);
                     frameCarouselG.goto(3);
                    
                   }, 3000);

                   setTimeout(function(){
                       
                        $('.hostG').animate({
                          opacity: '1'
                        });
                         if ( $(window).width() > 992 ) {

                              $(".mob-content").css('left', '0%');
                        }
                    },6000);

                   setTimeout(function(){
                        frameCarouselG.goto(4);
                        
                    },9000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(3);
                        
                    },12000);

                   setTimeout(function(){
                        
                         $('.hostG').animate({
                          opacity: '0'
                        });
                        $(".mob-content").css('left', '15%');
                        
                    },14000);

                   setTimeout(function(){
                     frameCarouselG.goto(5);
                        frameCarouselDesktop.goto(4);
                        
                    },15000);

                   setTimeout(function(){
                        
                         $('.hostG').animate({
                          opacity: '1'
                        });
                         if ( $(window).width() > 992 ) {

                                $(".mob-content").css('left', '0%');
                        }
                    },18000);

                   setTimeout(function(){
                        frameCarouselG.goto(6);
                        
                    },21000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(5);
                        
                    },24000);

                   setTimeout(function(){
                        frameCarouselG.goto(5);
                         $('.hostG').animate({
                          opacity: '0'
                        });
                         $(".mob-content").css('left', '15%');
                    },25000);

                   setTimeout(function(){
                        frameCarouselDesktop.goto(6);
                        
                    },27000);

                   setTimeout(function(){
                        $('.navbar-btn5').click();
                    },29000);
                }


                if (whitemob === 'none') {
                    $(".mob-content").css('position', 'relative');
                    $(".mob-content").css('left', '0%');
                    clearInterval(binterval);
                    console.log('Book interval stopped');

                }

            }, 500);


		                    
		               
                    });

   
     
           }



           if($(window).width()>736 && $(window).width()<992){
           		$('.logo-content').css('top','-570px');
           		  $('.navbar-btn5').on('click',function(){
                    $('.logo-content').css('top','-570px');
                   });


                   $('.navbar-btn4').on('click',function(){
                    $('.logo-content').css('top','-592px');
                   });
                   

                   $('.navbar-btn3').on('click',function(){
                    $('.logo-content').css('top','-592px');
                   });

                    $('.navbar-btn1').on('click',function(){
                    $('.logo-content').css('top','0px');
                   });

                   $('.navbar-btn2').on('click',function(){
                    $('.logo-content').css('top','0px');
                   }); 
           }

			           

    </script>
    <style>
        .fc-controls {
            display: none;
        }

        .fc-pagination {
            display: none;
        }

        .backbutton {
            cursor: pointer;
        }

        .hosttt {
            position: fixed;
        }
    </style>

</body>

</html>