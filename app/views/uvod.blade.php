<!DOCTYPE HTML>
<html lang="sk">
<head>
    <!-- ========= 
    Title and Metas 
    ========= -->
    <meta charset="utf-8">
    <title>Hackathon SNG | 28.-29.11. 2014</title>
    <meta name="keywords" content="sng, art, data, digitalizácia, hackathon, open data">
    <meta name="author" content="lab.SNG">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <meta property="og:title" content="Hackathon SNG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:image" content="{{ URL::to('/img/og-image.png') }}" />

    <!-- ========= 
    Favicons 
    ========= -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00e700">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <!-- ========= 
    Fonts 
    ========= -->
    
    <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '{{ Config::get('app.fontdeck_id') }}' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>    

    <!-- ========= 
    CSS
    ========= -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Media Queries -->  
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- ========= 
    JS
    ========= -->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19030232-6', 'auto');
      ga('send', 'pageview');

    </script>

   
</head>

<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1429726730641216&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- LOADING START -->  
    <div class="preloader">
        <div class="intro-type1 animated spin">
            <img src="/img/loader.svg" height="140" width="140" alt="preloader">
        </div>    
    </div>
    <!-- LOADING START --> 


    <!-- START OF DIV -->  
    <div class="page" >
            
        <div class="container-border">        
    

            <!-- NAVIGATION -->
            <nav>
                <div class="container">
                    <div class="sixteen columns">
                        <!-- NAVIGATION - Sign up -->   
                        <div class="signup"><a href="" class="button-signup my_modal_open">Zaregistruj sa!</a></div>
                        <!-- NAVIGATION - list -->  
                        <ul id="onepagenav">
                            <li><a href="#homepage"><img src="img/loader.svg" style="max-height: 30px; width: auto;vertical-align: middle; "></a></li>
                            <li><a href="#about">O hackathone</a></li>
                            <li><a href="#projects">Projekty</a></li>
                            <li><a href="#schedule">Sprievodný program</a></li>
                            <li><a href="#judges">Porota</a></li>
                            <li><a href="#venue">Kontakt</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>   
                        <!-- NAVIGATION - list -->  
                    </div>
                </div>
            </nav>
            <!-- NAVIGATION -->

            <!-- MODULE : HOMEPAGE -->
            <section id="homepage">
                <img src="/img/loader.svg" class="logo" alt="logo" />
                <div class="container">
                    <div class="sixteen columns">
                        <!-- HOMEPAGE - bigtext -->
                        <div class="home-bigtext">
                            <p class="white">28 - 29/11/2014</p>
                            <h1 class="color">Hackathon SNG</h1>
                            <p class="white">ART &amp; DATA</p>
                        </div>
                        <!-- HOMEPAGE - bigtext -->
                        <!-- HOMEPAGE - widget -->
                        <div id="homepage-widget">
                            <div id="event-widget">
                                <div id="countdown">
                                    <div id="countdown_dashboard">
                                        <div class="dash days_dash">
                                            <span class="dash-title">dní</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                            
                                        <div class="dash hours_dash">
                                            <span class="dash-title">hodín</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                            
                                        <div class="dash minutes_dash">
                                            <span class="dash-title">minút</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- HOMEPAGE - widget -->
                        <!-- HOMEPAGE - share -->
                        <div class="shareon-container">
                            <div class="fb-like" data-href="http://hackathon.sng.sk/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        &nbsp;
                        <a href="https://twitter.com/share" class="twitter-share-button" data-count="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                        <!-- HOMEPAGE - share -->
                    </div>
                </div>
            </section>
            <!-- MODULE : HOMEPAGE -->

        <!-- MODULE : ABOUT -->
        <section id="about" class="section-container">
            <div class="container">
               
                <div class="sixteen columns">
                    <h5>Misia</h5>              
                    <p>SNG uchováva a vystavuje výtvarné umenie nielen v jeho materiálnej, ale aj digitálnej podobe. Naše digitálne zbierky postupne otvárame verejnosti a chceme vytvoriť priestor pre ľudí, ktorí ich budú tvorivo využívať, alebo nám pomôžu pri vývoji digitálnych služieb. </p>
                    <p>Hackathon SNG je prvým z podujatí, kde sa stretnú programátori, grafickí dizajnéri, zvukoví majstri a ďalší kreatívci, aby počas dvoch dní navrhli a vytvorili projekt s využitím našich dát.</p>
                    <p>Odporúčaná je účasť v tímoch, najlepšie projekty budú na záver vyhodnotené porotou a "ovenčené" zaujímavými cenami.</p>
                </div>

                <hr class="dividerline"/>

                <div class="sixteen columns">
                    <h5>Témy a projekty</h5>
                    <p>Konkrétne projekty sú na vás. My ako SNG poskytneme dáta, podklady a nápady + zdrojové kódy nami realizovaných aplikácií. Navrhované okruhy:</p>
                </div>                        

                <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-mobile"></i>
                        </div>
                        
                            <span class="topic-title">Nestex aplikácia</span>
                            <p>Nestála expozícia SNG svojou atypickou inštaláciou prezentuje umenie gotiky a baroka v novom svetle a kontexte. 
                            Nápadité spracovanie témy prostredníctvom nových technológií (napr. mobilnej aplikácie) je pre nás ďaľšou výzvou v snahe popularizovať staré umenie.</p>
                            <p><strong>Podklady:</strong> </p>
                            <ul class="list-square">
                                <li>voľne dostupné <u>dáta o dielach na Nestex-e</u> a ich <u>digitálne reprodukcie</u></li>
                                <li><u>pdf verzia katalógu</u> a <u>sprievodca výstavou</u></li>
                                <li><u>zdrojový kód k aplikácii Soundwalk</u></li>
                            </ul>
                        
                    </div>
                    
                    <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-globe"></i>
                        </div>
                        <span class="topic-title">Web umenia</span>
                        <p>
                        Jedným z cielov webumenia.sk je prehľadne a zároveň pútavo zobrazovať veľké množstvo obrázkov a dát zo zbierok slovenských verejných galérií. 
                        Práve prebiehajúci redizajn nám umožňuje implementovať nápady na nové funkcie a nástroje (napr. vizualizácia metadát) ešte v zárodku. </p>
                        <p><strong>Podklady:</strong> </p>
                        <ul class="list-square">
                                <li>metadáta o všetkých dielach SNG</li>
                                <li>reprodukcie voľne prístupných diel SNG</li>
                                <li>kolekcia Food and drink (diela  vyobrazujúce jedlo)</li>
                                <li><u>zdrojový kód nového webumenia.sk</u></li>
                        </ul>
                        <!-- Práve prebieha redizajn webumenia.sk od nuly. Práve v tejto fáze je najlepší čas pridať funkcie a nástroje - o ktorých si myslíte, že by sa mohli hodiť. -->
                    </div>
                    
                    <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-picture"></i>
                        </div>
                        <span class="topic-title">Spracovanie obrazu</span>
                        <p>Vizuálnejšie zameraní účastníci môžu experimentovať s vlastnosťami konkrétnych umeleckých diel, skúmať vzťahy vo farebnosti a výtvarných štýloch autorov (Fulla, Galanda, Bazovský)</p>
                        <p><strong>Podklady:</strong> </p>
                        <ul class="list-square">
                                <li>voľne prístupné diela SNG vo vysokom rozlíšení</li>
                                <li>náhľady zdigitalizovaných diel slovensých zbierkotvorných galérií</li>
                        </ul>
                        <!-- <p>Pre tých, ktorý chcú viac pracovať s obrazom samotným je tu tento okruh. Či už ide o spracovanie obrazu (napr. zautomatizované hľadanie podobností). Alebo naopak vytvorenie "instagramu" pre aplikáciu rôznych výtvarných štýlov výrazných autorov (Fulla, Galanda, Bazovský). </p> -->
                    </div>

                <div class="clear"></div>

            </div>
        </section>
        <!-- MODULE : ABOUT --> 

        <!-- MODULE : PROGRAM -->
        <section id="program" class="section-container">
            <div class="container">
               
                <div class="sixteen columns">
                    <h5>Program</h5>              
                </div>

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Piatok</h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.00</h6>
                            <p>(40 min)</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>otvorenie Hackathonu (Alexandra Kusá)</h6>
                            <p>organizačné pokyny (Michal Čudrnák a Igor Rjabinin)<br/> predstavenie projektu Europeana Food and Drink </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.40</h6>
                            <p>(40 min)</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>komentovaná prehliadka Nestálej expozície SNG</h6>
                            <p>s kurátorkou Katarínou Chmelinovou (1. poschodie Esterházyho paláca) </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>18.20</h6>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>prezentácia projektu Soft Revolvers</h6>
                            <p><a href="http://myriambleau.com/" target="_blank">Myriam Bleau</a>  (v spolupráci s <a href="http://www.nextfestival.sk/" target="_blank">festivalom NEXT</a>) </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <!-- <h6>-</h6> -->
                            <p>v priebehu večera</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>laser show Kvant</h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Sobota</h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>prezentácia a hodnotenie projektov<br> vyhlásenie výsledkov</h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>18.30</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Kolektiv</h6>
                            <p>live coding audio/video performance  (v spolupráci s <a href="http://www.nextfestival.sk" target="_blank">festivalom NEXT</a>)</p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

            </div>
        </section>
        <!-- MODULE : PROGRAM --> 
                
        <!-- MODULE : POROTA -->
        <section id="judges" class="section-container">
            <div class="container">
               
                <div class="sixteen columns">
                    <h5>Porota</h5>              
                    <p>Výsledné projekty bude hodnotiť päťčlenná porota v zložení:</p>
                </div>

                <!-- POROTCA  -->
                <div class="one-fifth column speaker-profile">
                    <div class="speaker-thumb"><img src="img/porota/sicko.jpg" alt="speaker"/></div> 
                    <div class="speaker-description">
                        <h5>Ján Šicko</h5>
                        <p class="job-position">grafický dizajnér</p> 
                        <p>aktívny v oblasti <a href="http://www.devkid.com/" target="_blank">nových médií</a>, vedúci <a href="http://www.medialab.sk/" target="_blank">Medialabu</a> </p>
                    </div>
                </div>
                <!-- POROTCA  -->                

                <!-- POROTCA  -->
                <div class="one-fifth column speaker-profile">
                    <div class="speaker-thumb"><img src="img/porota/suchal.jpg" alt="speaker"/></div> 
                    <div class="speaker-description">
                        <h5>Ján Suchal</h5>
                        <p class="job-position">programátor</p> 
                        <p>stojí za projektami ako foaf.sk, otvorenezmluvy.sk a govdata.sk </p>
                    </div>
                </div>
                <!-- POROTCA  -->                

                <!-- POROTCA  -->
                <div class="one-fifth column speaker-profile">
                    <div class="speaker-thumb"><img src="img/porota/morhacova.jpg" alt="speaker"/></div> 
                    <div class="speaker-description">
                        <h5>Pavlína Morháčová</h5>
                        <p class="job-position">grafická dizajnérka SNG</p> 
                        <p>autorka projektu http://mpba.sk/ </p>
                    </div>
                </div>
                <!-- POROTCA  -->                

                <!-- POROTCA  -->
                <div class="one-fifth column speaker-profile">
                    <div class="speaker-thumb"><img src="img/porota/hvorecky.jpg" alt="speaker"/></div> 
                    <div class="speaker-description">
                        <h5>Jozef Hvorecký</h5>
                        <p class="job-position">vysokoškolský pedagóg</p> 
                        <p>špecializujúci sa na e-learning, na používanie výpočtovej techniky vo vzdelávaní </p>
                    </div>
                </div>
                <!-- POROTCA  -->                

                <!-- POROTCA  -->
                <div class="one-fifth column speaker-profile">
                    <div class="speaker-thumb"><img src="img/porota/kusa.jpg" alt="speaker"/></div> 
                    <div class="speaker-description">
                        <h5>Alexandra Kusá</h5>
                        <p class="job-position">generála riaditeľka SNG</p> 
                        <p>historička umenia, kurátorka</p>
                    </div>
                </div>
                <!-- POROTCA  -->                

            </div>
        </section>
        <!-- MODULE : POROTA --> 
                
            

       
        <!-- MODULE : FOOTER -->
        <footer>
             <div class="container">
                <div class="sixteen columns copyright center">
                    <p class=""> 
                        <a href="http://lab.sng.sk" target="_blank" class="external">lab.SNG</a>
                    </p>
                </div>
            </div>
        </footer>
        <!-- MODULE : FOOTER -->

        </div>  <!-- END OF CONTAINER -->
    </div>    
    <!-- END OF DIV PAGE -->    

    <!-- ========= 
    JS
    ========= -->

    <!-- Retina Display -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="js/retina.js"></script>

    <!-- magnific-popup  -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Pre-Loader -->
    <script type="text/javascript">
        $(window).load(function() {
            $('body').css('overflow', 'auto');
            $('.preloader').delay(1000).fadeOut('slow');
        });
    </script>

    <!-- countdown -->
    <script type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function() {
                $('#countdown_dashboard').countDown({
                    targetDate: {
                        'day':      28,
                        'month':    11,
                        'year':     2014,
                        'hour':     16,
                        'min':      0,
                        'sec':      0
                    }
                });
            });
    </script>

    <!-- One page Nav -->
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script>
    $(document).ready(function() {
        $('#onepagenav').onePageNav({
        changeHash: false,
        filter: ':not(.external)',
        scrollOffset: 0,
        });
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 650) {
            $('nav').slideDown();
            
        } else {
            $('nav').slideUp();
            
        }
    });     
    </script>    

</body>
</html>