<!DOCTYPE html>

<html lang="pl">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Jesteśmy pierwszą pizzerią w Kętrzynie. Istniejemy od 1998 roku. W naszej ofercie posiadamy: pizze, makarony z pieca, dania z grilla oraz bogatą kuchnię azjatycką." />
        <meta name="keywords" content="pizzeria centro, centro Pizza, Kętrzyn, pizzeria centro Ketrzyn, pizza ketrzyn" />
        <meta name="author" content="proxweb.pl" />
        <title>Pizzeria Centro - Pizza</title>        
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Amita&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Capriola&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
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
            <!-- ------------------------------------------------------- -->
            </div>
            <div class="text_area">
                <h1 class="m_title">Menu: Pizza</h1>                
                <table>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="3" style="text-align: center; font-weight: bold; background-color: #ff6a00; color: #000"><b>Rozmiar:</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="font-weight: bold; background-color: #ff6a00; color: #000">Ø 31</td>
                        <td style="font-weight: bold; background-color: #ff6a00; color: #000">Ø 41</td>
                        <td style="font-weight: bold; background-color: #ff6a00; color: #000">Ø 51</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">1.</td>
                        <td class="biala" style="font-weight: bold">MARGARITA</td>
                        <td class="biala">14.00</td>
                        <td class="biala">20.00</td>
                        <td class="biala">28.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">2.</td>
                        <td style="font-weight: bold">NAPOLI</td>
                        <td>24.00</td>
                        <td>34.00</td>
                        <td>42.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, sardynki (anchois), oliwki</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">3.</td>
                        <td class="biala" style="font-weight: bold">FUNGHI</td>
                        <td class="biala">16.00</td>
                        <td class="biala">24.00</td>
                        <td class="biala">32.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, pieczarki</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">4.</td>
                        <td style="font-weight: bold">PROSCIUTTO</td>
                        <td>17.00</td>
                        <td>26.00</td>
                        <td>35.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, szynka</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">5.</td>
                        <td class="biala" style="font-weight: bold">CAMPAGNOLA</td>
                        <td class="biala">19.00</td>
                        <td class="biala">28.00</td>
                        <td class="biala">36.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, pieczarki, szynka</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">6.</td>
                        <td style="font-weight: bold">SALAME</td>
                        <td>18.00</td>
                        <td>26.00</td>
                        <td>35.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, salami</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">7.</td>
                        <td class="biala" style="font-weight: bold">CAPRICCIOSA</td>
                        <td class="biala">25.00</td>
                        <td class="biala">34.00</td>
                        <td class="biala">43.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, pieczarki, tuńczyk, salami, szynka</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">8.</td>
                        <td style="font-weight: bold">TOSCANA</td>
                        <td>20.00</td>
                        <td>29.00</td>
                        <td>38.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, szynka, salami</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">9.</td>
                        <td class="biala" style="font-weight: bold">SPINACI</td>
                        <td class="biala">16.00</td>
                        <td class="biala">24.00</td>
                        <td class="biala">32.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, papryka, oliwki, cebula, sardynki (anchois)</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">10.</td>
                        <td style="font-weight: bold">DIAVOLO</td>
                        <td>25.00</td>
                        <td>34.00</td>
                        <td>43.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, papryka, oliwki, cebula, sardynki (anchois)</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">11.</td>
                        <td class="biala" style="font-weight: bold">CIPOLLA</td>
                        <td class="biala">16.00</td>
                        <td class="biala">24.00</td>
                        <td class="biala">32.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, cebula, czosnek</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">12.</td>
                        <td style="font-weight: bold">TONNO</td>
                        <td>18.00</td>
                        <td>27.00</td>
                        <td>36.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, tuńczyk</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">13.</td>
                        <td class="biala" style="font-weight: bold">CALZONE SPEZIALE (ZAWIJANA)</td>
                        <td class="biala">25.00</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, szpinak, szynka, pieczarki, tuńczyk</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">14.</td>
                        <td style="font-weight: bold">VALENTINO</td>
                        <td>22.00</td>
                        <td>30.00</td>
                        <td>39.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, papryka, pieczarki, jajko, tuńczyk</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">15.</td>
                        <td class="biala" style="font-weight: bold">PARADISO</td>
                        <td class="biala">19.00</td>
                        <td class="biala">28.00</td>
                        <td class="biala">36.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, szynka, jajka</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">16.</td>
                        <td style="font-weight: bold">MAFIOZO</td>
                        <td>22.00</td>
                        <td>30.00</td>
                        <td>39.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, bekon, papryka peperoni</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">17.</td>
                        <td class="biala" style="font-weight: bold">VULCANO</td>
                        <td class="biala">19.00</td>
                        <td class="biala">28.00</td>
                        <td class="biala">37.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, cebula, papryka peperoni</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">18.</td>
                        <td style="font-weight: bold">MONA LISA</td>
                        <td>26.00</td>
                        <td>36.00</td>
                        <td>45.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, szpinak, pieczarki, szynka, tuńczyk, salami</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">19.</td>
                        <td class="biala" style="font-weight: bold">PRIMA VERA</td>
                        <td class="biala">19.00</td>
                        <td class="biala">28.00</td>
                        <td class="biala">38.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, szynka, ananas</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">20.</td>
                        <td style="font-weight: bold">SCAMPI</td>
                        <td>25.00</td>
                        <td>35.00</td>
                        <td>44.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, krewetki</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">21.</td>
                        <td class="biala" style="font-weight: bold">VEGETARISH</td>
                        <td class="biala">19.00</td>
                        <td class="biala">29.00</td>
                        <td class="biala">38.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, papryka, cebula, pieczarki, oliwki</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">22.</td>
                        <td style="font-weight: bold">SANTA CRUZ</td>
                        <td>25.00</td>
                        <td>35.00</td>
                        <td>44.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, owoce morza</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">23.</td>
                        <td class="biala" style="font-weight: bold">SICILIA</td>
                        <td class="biala">24.00</td>
                        <td class="biala">32.00</td>
                        <td class="biala">41.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Pomidor w plasterkach, ser, cebula, mozzarella</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">24.</td>
                        <td style="font-weight: bold">DEPOSITO</td>
                        <td>18.00</td>
                        <td>26.00</td>
                        <td>35.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, pieczarki, kukurydza</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">25.</td>
                        <td class="biala" style="font-weight: bold">CARNEVELE</td>
                        <td class="biala">25.00</td>
                        <td class="biala">34.00</td>
                        <td class="biala">44.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos pomidorowy, ser, suszone pomidory, oliwki, salami, cebula</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">26.</td>
                        <td style="font-weight: bold">BECON</td>
                        <td>20.00</td>
                        <td>29.00</td>
                        <td>39.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5">Sos, ser, bekon, cebula</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">27.</td>
                        <td class="biala" style="font-weight: bold">BERRETTO</td>
                        <td class="biala">27.00</td>
                        <td class="biala">35.00</td>
                        <td class="biala">44.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, tuńczyk, krewetki, cebula</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">28.</td>
                        <td style="font-weight: bold">AMERICANA</td>
                        <td>20.00</td>
                        <td>28.00</td>
                        <td>38.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, bekon, jajko</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">29.</td>
                        <td class="biala" style="font-weight: bold">FORNO</td>
                        <td class="biala">21.00</td>
                        <td class="biala">30.00</td>
                        <td class="biala">39.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, szynka, ananas, brzoskwinia</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">30.</td>
                        <td style="font-weight: bold">YOGA</td>
                        <td>25.00</td>
                        <td>36.00</td>
                        <td>46.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, krewetki, oliwki, czosnek</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">31.</td>
                        <td class="biala" style="font-weight: bold">INTERVENTO</td>
                        <td class="biala">27.00</td>
                        <td class="biala">36.00</td>
                        <td class="biala">45.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, tuńczyk, owoce morza, papryka peperoni</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">32.</td>
                        <td style="font-weight: bold">VASO</td>
                        <td>26.00</td>
                        <td>36.00</td>
                        <td>45.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, tuńczyk, krewetki, papryka</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">33.</td>
                        <td class="biala" style="font-weight: bold">PRIMA</td>
                        <td class="biala">24.00</td>
                        <td class="biala">34.00</td>
                        <td class="biala">45.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos pomidorowy, ser, kurczak, ser feta, suszone pomidory</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">34.</td>
                        <td style="font-weight: bold">BOLOGNESE</td>
                        <td>19.00</td>
                        <td>29.00</td>
                        <td>38.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, mięso mielone</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">35.</td>
                        <td class="biala" style="font-weight: bold">CONTADINA</td>
                        <td class="biala">26.00</td>
                        <td class="biala">36.00</td>
                        <td class="biala">45.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, pieczarki, szynka, sardynki (anchois)</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">36.</td>
                        <td style="font-weight: bold">RUSTICA</td>
                        <td>20.00</td>
                        <td>29.00</td>
                        <td>39.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, pieczarki, szynka, papryka</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">37.</td>
                        <td class="biala" style="font-weight: bold">MOLTO</td>
                        <td class="biala">24.00</td>
                        <td class="biala">33.00</td>
                        <td class="biala">42.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, papryka peperoni, oliwki, pieczarki, salami</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">38.</td>
                        <td style="font-weight: bold">CENTRO</td>
                        <td>27.00</td>
                        <td>36.00</td>
                        <td>45.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, pieczarki, szynka, papryka peperoni, cebula, jajko</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">39.</td>
                        <td class="biala" style="font-weight: bold">PORTO</td>
                        <td class="biala">22.00</td>
                        <td class="biala">31.00</td>
                        <td class="biala">42.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, kurczak, papryka</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">40.</td>
                        <td style="font-weight: bold">FANTASY</td>
                        <td>22.00</td>
                        <td>31.00</td>
                        <td>42.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, kurczak, ananas</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">41.</td>
                        <td class="biala" style="font-weight: bold">PARMA</td>
                        <td class="biala">28.00</td>
                        <td class="biala">37.00</td>
                        <td class="biala">46.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser, szynka wędzona, rukola</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">42.</td>
                        <td style="font-weight: bold">GIOVANNI</td>
                        <td>29.00</td>
                        <td>39.00</td>
                        <td>48.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, szynka wędzona, pomidor świeży, rukola</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">43.</td>
                        <td class="biala" style="font-weight: bold">FROMAGGI</td>
                        <td class="biala">22.00</td>
                        <td class="biala">30.00</td>
                        <td class="biala">40.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Sos, ser mozarella, ser feta, rukola</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">44.</td>
                        <td style="font-weight: bold">VERONA</td>
                        <td>25.00</td>
                        <td>35.00</td>
                        <td>46.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">Sos, ser, anchois, świeży pomidor, rukola</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="font-weight: bold">45.</td>
                        <td class="biala" style="font-weight: bold">PIZZA NA ŻYCZENIE</td>
                        <td class="biala">31.00</td>
                        <td class="biala">41.00</td>
                        <td class="biala">50.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="4">Własna kompozycja z dowolnych dodatków (6-ciu)</td>
                    </tr>
                    <tr>
                        <td colspan="5">DODATKI</td>                
                    </tr>
                    <tr>
                        <td colspan="5">Ø 31cm - każdy dodatek 2zł. Kurczak, krewetki, owoce morza, szynka wędzona 4zł.<br>
                        Ø 40-51cm - każdy dodatek 3zł. Kurczak, krewetki, owoce morza, szynka wędzona 7zł</td>
                    </tr>
                </table>
                <div class="spacer"></div>
            </div>
            <div class="footer">
                <p class="footer">&copy Copyright pizzeriacentroketrzyn.pl 2015</p>
            </div>
            <div class="spacer"></div>                                 
        </div>
    </body>
</html>
