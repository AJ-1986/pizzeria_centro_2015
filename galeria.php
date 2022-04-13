<!DOCTYPE html>

<html lang="pl">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Jesteśmy pierwszą pizzerią w Kętrzynie. Istniejemy od 1998 roku. W naszej ofercie posiadamy: pizze, makarony z pieca, dania z grilla oraz bogatą kuchnię azjatycką." />
        <meta name="keywords" content="pizzeria centro, centro Pizza, Kętrzyn, pizzeria centro Ketrzyn, pizza ketrzyn" />
        <meta name="author" content="proxweb.pl" />
        <title>Pizzeria Centro - Galeria</title>        
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Amita&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Capriola&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href="lightbox.css" rel="stylesheet" type="text/css" />        
    </head>
    <body>        
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function ($) {
            
                var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,$Opacity:2}
                ];
            
                var jssor_1_options = {
                  $AutoPlay: true,
                  $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };
            
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 900);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });

            //<![CDATA[
           (function() {
           ///// CONFIGURATION VARIABLES:
           var name             = ".sq";
           var menu_top_limit       = 400;
           var menu_top_margin    = 25;
           var menu_shift_duration = 500;
           var menuYloc = null;
           ///////////////////////////////////

              $(window).scroll(function() 
              {
                var scrolledDistance = $(document).scrollTop();
        
                $(name).each(function () {
                  var parent = $(this).offsetParent();
                  var parentTopOffset = parent.offset().top;
                  var parentHeight = parent.height();
                  var boxHeight = $(this).height();
          
                  var position = Math.max(
                    0,
                    Math.min(
                      scrolledDistance - parentTopOffset + menu_top_margin,
                      parentHeight - boxHeight
                    )
                  );
          
                  $(this).animate({
                    top: position
                  }, {duration:menu_shift_duration,queue:false});
                });
              });
           })();
           //]]>          
        </script>
        <div class="sq">
            <p class="box">
            <b>Zamówienia:</b><br /> niedziela - czwartek od 11:00 do 23:00, piątek - sobota od 12:00 do 24:00.<br /><br />
            <b>Telefon kontaktowy:</b><br /><strong class="box">(89) 751-51-27<br/>(89) 751-55-48</strong><br /><br />
            Chcesz wiedzieć więcej o aktualnych promocjach? Obserwuj nas. Zapraszamy!<br />
            <a href="https://www.facebook.com/PizzeriaCentroKetrzyn" target="_blank"><img src="img/fc_b.png" alt="Polub nas na Facebook-u" style="border: 0px" /></a>  
            </p>
        </div>
        <div class="main_page">
            <div class="top_menu">       
                <div class="logo"><img src="img/logo_centro.png" alt="Pizzeria Centro Logo" /></div>
                <?php include "menu.php"; ?>                
                <div class="slogan1">Tradycyjna <strong class="slogan1">PIZZA</strong> włoska.</div>                
            </div>
            <div class="main_slider">
            <!-- -------------------- SLIDER ------------------------ -->
                  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 500px; overflow: hidden; visibility: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 500px; overflow: hidden;">
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="img/slider1.jpg" alt="slider1" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="img/slider2.jpg" alt="slider2" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="img/slider3.jpg" alt="slider3" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="img/slider4.jpg" alt="slider4" />
                        </div>                          
                    </div>
                <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
                        <!-- bullet navigator item prototype -->
                        <div data-u="prototype" style="width:16px;height:16px;"></div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora12l" style="top:123px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora12r" style="top:123px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>        
                </div>    
            <!-- ------------------------------------------------------->
            </div>
            <div class="text_area">
                <h1 class="m_title">Galeria</h1>
                <div class="galeria">
                    <a href="galeria/full1.jpg" data-lightbox="roadtrip"><img src="galeria/min1.jpg" alt="galeria"></a>
                    <a href="galeria/full2.jpg" data-lightbox="roadtrip"><img src="galeria/min2.jpg" alt="galeria"></a>
                    <a href="galeria/full3.jpg" data-lightbox="roadtrip"><img src="galeria/min3.jpg" alt="galeria"></a><br />
                    <a href="galeria/full4.jpg" data-lightbox="roadtrip"><img src="galeria/min4.jpg" alt="galeria"></a>
                    <a href="galeria/full5.jpg" data-lightbox="roadtrip"><img src="galeria/min5.jpg" alt="galeria"></a>
                    <a href="galeria/full6.jpg" data-lightbox="roadtrip"><img src="galeria/min6.jpg" alt="galeria"></a><br />
                    <a href="galeria/full7.jpg" data-lightbox="roadtrip"><img src="galeria/min7.jpg" alt="galeria"></a>
                    <a href="galeria/full8.jpg" data-lightbox="roadtrip"><img src="galeria/min8.jpg" alt="galeria"></a>
                    <a href="galeria/full9.jpg" data-lightbox="roadtrip"><img src="galeria/min9.jpg" alt="galeria"></a><br />
                    <a href="galeria/full10.jpg" data-lightbox="roadtrip"><img src="galeria/min10.jpg" alt="galeria"></a>
                    <a href="galeria/full11.jpg" data-lightbox="roadtrip"><img src="galeria/min11.jpg" alt="galeria"></a>
                    <a href="galeria/full12.jpg" data-lightbox="roadtrip"><img src="galeria/min12.jpg" alt="galeria"></a><br />
                    <a href="galeria/full13.jpg" data-lightbox="roadtrip"><img src="galeria/min13.jpg" alt="galeria"></a>
                    <a href="galeria/full14.jpg" data-lightbox="roadtrip"><img src="galeria/min14.jpg" alt="galeria"></a>
                    <a href="galeria/full15.jpg" data-lightbox="roadtrip"><img src="galeria/min15.jpg" alt="galeria"></a><br />
                    <a href="galeria/full16.jpg" data-lightbox="roadtrip"><img src="galeria/min16.jpg" alt="galeria"></a>
                    <a href="galeria/full17.jpg" data-lightbox="roadtrip"><img src="galeria/min17.jpg" alt="galeria"></a>
                    <a href="galeria/full18.jpg" data-lightbox="roadtrip"><img src="galeria/min18.jpg" alt="galeria"></a><br />
                    <a href="galeria/full19.jpg" data-lightbox="roadtrip"><img src="galeria/min19.jpg" alt="galeria"></a>
                    <a href="galeria/full20.jpg" data-lightbox="roadtrip"><img src="galeria/min20.jpg" alt="galeria"></a>
                    <a href="galeria/full21.jpg" data-lightbox="roadtrip"><img src="galeria/min21.jpg" alt="galeria"></a><br />
                </div>
            </div>
            <div class="footer">
                <p class="footer">&copy Copyright pizzeriacentroketrzyn.pl 2015</p>
            </div>
            <div class="spacer"></div>                                 
        </div>
    </body>
</html>
