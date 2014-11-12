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
    <link rel="icon" type="image/png" href="/favicon.png">

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

    <!-- START OF DIV -->  
    <div class="page" >
            
            
    @if(Session::has('message'))
        <p class="center error"><span class="label">{{{ Session::get('message') }}}</span></p>
    @endif

        <!-- MODULE : ABOUT -->
        <section id="about" class="section-container">
            <div class="container">
               
                <div class="eight columns offset-by-four">
                    <h1><img src="/img/HackathonFB3.jpg" alt="SNG hackathon" id="logo"></h1>
                    <p>SNG uchováva a vystavuje výtvarné umenie nielen v jeho materiálnej, ale aj digitálnej podobe. Naše digitálne zbierky postupne otvárame verejnosti a chceme vytvoriť priestor pre ľudí, ktorí ich budú tvorivo využívať, alebo nám pomôžu pri vývoji digitálnych služieb. </p>
                    <p>Hackathon SNG je prvým z podujatí, kde sa stretnú programátori, grafickí dizajnéri, zvukoví majstri a ďalší kreatívci, aby počas dvoch dní navrhli a vytvorili projekt s využitím našich dát.</p> 
                    <p>Ak vás láka možnosť vytvoriť audiosprievodcu k nestálej expozícii gotického a barokového umenia, získať dáta z Webu umenia a vylepšiť ho alebo digitálne analyzovať farebnú paletu maliara Bazovského, zapojte sa! K dispozícii budú zdrojové kódy, digitálne reprodukcie, metadáta o výtvarných dielach, veľa kávy a sprievodný program, ktorý vás bude inšpirovať pri realizácii nami navrhovaných alebo vašich vlastných projekov.</p> <p>Odporúčaná je účasť v tímoch, najlepšie projekty budú na záver vyhodnotené porotou a "ovenčené" zaujímavými cenami.</p> 
                    <p>Viac informácií čoskoro.</p>

                    <p style="margin: 20px 0 "><a href="http://www.hackathon.io/hackathon-sng" target="_blank" class="button" style="margin:0 auto;" >REGISTRÁCIA</a></p>

                    <div class="shareon-container text-right">
                        <div class="fb-like" data-href="http://hackathon.sng.sk/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        &nbsp;
                        <a href="https://twitter.com/share" class="twitter-share-button" data-count="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
        </section>
        <!-- MODULE : ABOUT --> 
                
            

       
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

</body>
</html>