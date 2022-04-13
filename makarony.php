<!DOCTYPE html>

<html lang="pl">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Jesteśmy pierwszą pizzerią w Kętrzynie. Istniejemy od 1998 roku. W naszej ofercie posiadamy: pizze, makarony z pieca, dania z grilla oraz bogatą kuchnię azjatycką." />
        <meta name="keywords" content="pizzeria centro, centro Pizza, Kętrzyn, pizzeria centro Ketrzyn, pizza ketrzyn" />
        <meta name="author" content="proxweb.pl" />
        <title>Pizzeria Centro - Makarony</title>        
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
                <h1 class="m_title">Makarony</h1>
                <table>
                    <tr>
                        <td>1.</td>
                        <td style="width: 610px">Spaghetti Bolongnese</td>
                        <td style="text-align: right">16.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="">Makaron, mięso mielone, sos pomidorowy</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">2.</td>
                        <td class="biala"style="width: 610px">Spaghetti Carbonara</td>
                        <td class="biala" style="text-align: right">19.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2" style="width: 610px">Makaron, jajko, szynka, ser, sos śmietanowy</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td style="width: 610px">Spaghetti alla Cassa</td>
                        <td style="text-align: right">19.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, cebula, szpinak, pieczarki, papryka, szynka, sos pomidorowy, śmietana</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">4.</td>
                        <td class="biala" style="width: 610px">Spaghetti Aglio e Olio</td>
                        <td class="biala" style="text-align: right">15.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, czosnek, olej</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td style="width: 610px">Spaghetti Amatriciana</td>
                        <td style="text-align: right">17.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, sos pomidorowy, cebula, szynka</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">6.</td>
                        <td class="biala" style="width: 610px">Spaghetti Vongole</td>
                        <td class="biala" style="text-align: right">22.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, sos pomidorowy, czosnek, małże</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td style="width: 610px">Spaghetti Mona Lisa</td>
                        <td style="text-align: right">24.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, brokuły, salami, szynka, śmietana, ser</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">8.</td>
                        <td class="biala" style="width: 610px">Spaghetti Tonno</td>
                        <td class="biala" style="text-align: right">18.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, sos pomidorowy, tuńczyk, czosnek</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td style="width: 610px">Penne alla Rabbiata</td>
                        <td style="text-align: right">19.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, szynka, cebula, ostra papryka</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">10.</td>
                        <td class="biala" style="width: 610px">Maccheroni Mona Lisa</td>
                        <td class="biala" style="text-align: right">22.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, brokuły, salami, szynka, śmietana, ser</td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td style="width: 610px">Maccheroni al Forno</td>
                        <td style="text-align: right">17.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, sos bolonese, ser, zapiekane</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">12.</td>
                        <td class="biala" style="width: 610px">Tortellini all Panna</td>
                        <td class="biala" style="text-align: right">21.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, śmietana, mięso mielone, szynka</td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td style="width: 610px">Tortellini al Forno</td>
                        <td style="text-align: right">18.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Makaron, śmietana, ser, zapiekane</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">14.</td>
                        <td class="biala" style="width: 610px">Tortellini Spinaci</td>
                        <td class="biala" style="text-align: right">19.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Makaron, szpinak, grzyby, czosnek, ser</td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td style="width: 610px">Combinezione al Forno</td>
                        <td style="text-align: right">18.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">2 rodzaje makaronu, śmietana, mięso mielone, ser</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">16.</td>
                        <td class="biala" style="width: 610px">Lasagno al Forno</td>
                        <td class="biala" style="text-align: right">16.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">Lasania zapiekana z serem i sosem bolognese</td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td style="width: 610px">Maccheroni Vegetarisch</td>
                        <td style="text-align: right">18.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Cebula, grzyby, papryka, kukurydza, ser, zapiekane</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td class="biala">18.</td>
                        <td class="biala" style="width: 610px">Maccheroni Prima al. Forno</td>
                        <td class="biala" style="text-align: right">20.00</td>
                    </tr>
                    <tr style="background-color: #720000">
                        <td></td>
                        <td class="biala" colspan="2">2 rodzaje makaronu, cebula, papryka, grzyby, szynka, Bolognese, ser, zapiekane</td>
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
