<!DOCTYPE html>

<html lang="pl">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Jesteśmy pierwszą pizzerią w Kętrzynie. Istniejemy od 1998 roku. W naszej ofercie posiadamy: pizze, makarony z pieca, dania z grilla oraz bogatą kuchnię azjatycką." />
        <meta name="keywords" content="pizzeria centro, centro Pizza, Kętrzyn, pizzeria centro Ketrzyn, pizza ketrzyn" />
        <meta name="author" content="proxweb.pl" />
        <title>Pizzeria Centro - Smaki azji</title>        
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
                <h1 class="m_title">Kuchnia azjatycka</h1>
                <p class="m_tekst2">Dania z wieprzowiny + ryż</p>
                <table>
                    <tr>
                        <td style="width: 20px">1.</td>
                        <td style="width: 610px">WIEPRZOWINA PO SYCZUAŃSKU <img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">2.</td>
                        <td class="biala">WIEPRZOWINA Z WARZYWAMI (5 SMAKÓW)</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>WIEPRZOWINA Z GRZYBAMI MUN I BAMBUSEM</td>
                        <td style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">4.</td>
                        <td class="biala">WIEPRZOWINA W SOSIE HOISIN</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>WIEPRZOWINA SIEKANA Z TOFU</td>
                        <td style="text-align: right; margin-right: 20px">24.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">6.</td>
                        <td class="biala">WIEPRZOWINA SŁODKO-KWAŚNA</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>WIEPRZOWINA PIKANTNA <img src="images/chili.png" alt="chili" /><img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">24.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">8.</td>
                        <td class="biala">CU LAO MIĘSO W CIEŚCIE W SOSIE SŁODKO-KWAŚNYM</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">26.00</td>
                    </tr>
                </table>
                <p class="m_tekst2">Dania z drobiu + ryż</p>
                <table>
                    <tr>
                        <td style="width: 10px">9.</td>
                        <td style="width: 610px">KURCZAK PO SYCZUAŃSKU <img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">21.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala" style="width: 10px">10.</td>
                        <td class="biala">KURCZAK SŁODKO-KWAŚNY</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>KURCZAK W SEZAMIE</td>
                        <td style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">12.</td>
                        <td class="biala">KURCZAK Z WARZYWAMI (5 SMAKÓW)</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>KURCZAK Z GRZYBAMI MUN I BAMBUSEM</td>
                        <td style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">14.</td>
                        <td class="biala">KURCZAK W CIEŚCIE</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">25.00</td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>CONG BAO (KURCZAK CHILI Z ORZECHAMI ARACHIDOWYMI) <img src="images/chili.png" alt="chili" /><img src="images/chili.png" alt="chili" /><img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">16.</td>
                        <td class="biala">KURCZAK Z ORZECHAMI NERKOWCA I WARZYWAMI</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">24.00</td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>PIEROŻKI 10 SZTUK (BEZ RYŻU)</td>
                        <td style="text-align: right; margin-right: 20px">19.00</td>
                    </tr>
                </table>
                <p class="m_tekst2">Dania z wołowiny + ryż</p>
                <table>
                    <tr style="background-color: #720000">
                    <td class="biala" style="width: 10px">18.</td>
                    <td class="biala" style="width: 610px">WOŁOWINA W SOSIE OSTRYGOWYM</td>
                    <td class="biala" style="text-align: right; margin-right: 20px">28.00</td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>WOŁOWINA PO SYCZUAŃSKU <img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">28.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">20.</td>
                        <td class="biala">WOŁOWINA Z GRZYBAMI MUN I BAMBUSEM</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">29.00</td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>WOŁOWINA Z WARZYWAMI</td>
                        <td style="text-align: right; margin-right: 20px">28.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">22.</td>
                        <td class="biala">WOŁOWINA SŁODKO-KWAŚNA</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">29.00</td>
                    </tr>
                </table>
                <p class="m_tekst2">Krewetki + ryż</p>
                <table>
                    <tr>
                        <td style="width: 10px">23.</td>
                        <td style="width: 610px">KREWETKI Z WARZYWAMI</td>
                        <td style="text-align: right; margin-right: 20px">43.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">24.</td>
                        <td class="biala">KREWETKI W CIEŚCIE</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">45.00</td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>KREWETKI PO SYCZUAŃSKU <img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">43.00</td>
                    </tr>
                </table>
                <p class="m_tekst2">Dania zasmażane</p>
                <table>
                    <tr style="background-color: #720000">
                        <td class="biala" style="width: 10px">26.</td>
                        <td class="biala" style="width: 610px">RYŻ Z WARZYWAMI</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">18.00</td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>RYŻ Z KURCZAKIEM I WARZYWAMI</td>
                        <td style="text-align: right; margin-right: 20px">20.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">28.</td>
                        <td class="biala">RYŻ Z KREWETKAMI I WARZYWAMI</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">42.00</td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>MAKARON Z KURCZAKIEM I WARZYWAMI</td>
                        <td style="text-align: right; margin-right: 20px">22.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">30.</td>
                        <td class="biala">MAKARON Z KREWETKAMI I WARZYWAMI</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">45.00</td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>MAKARON Z OWOCAMI MORZA I WARZYWAMI</td>
                        <td style="text-align: right; margin-right: 20px">48.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">32.</td>
                        <td class="biala">MAKARON Z WIEPRZOWINĄ I WARZYWAMI NA OSTRO <img src="images/chili.png" alt="chili" /></td>
                        <td class="biala" style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>MAKARON Z KURCZAKIEM I WARZYWAMI NA OSTRO <img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">23.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">34.</td>
                        <td class="biala">MAKARON Z WOŁOWINĄ I WARZYWAMI NA OSTRO <img src="images/chili.png" alt="chili" /></td>
                        <td class="biala" style="text-align: right; margin-right: 20px">28.00</td>
                    </tr>
                </table>
                <p class="m_tekst2">Dania wegetariańskie</p>
                <table>
                    <tr>
                        <td style="width: 10px">35.</td>
                        <td style="width: 610px">SAJGONKI (10 SZTUK)</td>
                        <td style="text-align: right; margin-right: 20px">12.00</td>
                    </tr>
                    <!-- <tr style="background-color: #720000">
                        <td class="biala">36.</td>
                        <td class="biala">SMAŻONY SER TOFU Z WARZYWAMI - RYŻ</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">23.00</td>
                    </tr> //-->
                    <tr>
                        <td>36.</td>
                        <td>SMAŻONY OGÓREK Z CHILI</td>
                        <td style="text-align: right; margin-right: 20px">13.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">37.</td>
                        <td class="biala">PIEROŻKI WEGETARIAŃSKIE (10 SZTUK)</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">19.00</td>
                    </tr>    
                </table>
                <p class="m_tekst2">Dodatki</p>
                <table>
                    <tr>
                        <td style="width: 10px">38.</td>
                        <td style="width: 610px">SOS SAMBAL OLEK <img src="images/chili.png" alt="chili" /><img src="images/chili.png" alt="chili" /></td>
                        <td style="text-align: right; margin-right: 20px">3.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">39.</td>
                        <td class="biala">SOS SŁODKO-KWAŚNY</td>
                        <td class="biala" style="text-align: right; margin-right: 20px">3.00</td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>SOS ŚLIWKOWY</td>
                        <td style="text-align: right; margin-right: 20px">3.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">41.</td>
                        <td class="biala">SOS SŁODKO-PIKATNY CHILI <img src="images/chili.png" alt="chili" /></td>
                        <td class="biala" style="text-align: right; margin-right: 20px">3.00</td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>DODATKOWY RYŻ JAŚMINOWY</td>
                        <td style="text-align: right">5.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">42.</td>
                        <td class="biala">DODATKOWY MAKARON PSZENNY</td>
                        <td class="biala" style="text-align: right">6.00</td>
                    </tr>
                </table>
                <p class="m_tekst">PODSTAWOWA WAGA DAŃ MIĘSNYCH Z RYŻEM OKOŁO 450G</p>
                <div class="spacer"></div>
            </div>
            <div class="footer">
                <p class="footer">&copy Copyright pizzeriacentroketrzyn.pl 2015</p>
            </div>
            <div class="spacer"></div>                                 
        </div>
    </body>
</html>
