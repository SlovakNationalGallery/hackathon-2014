<!DOCTYPE HTML>
<html lang="sk">
<head>
    <!-- ========= 
    Title and Metas 
    ========= -->
    <meta charset="utf-8">
    <title>Hackathon SNG | 7.-8.10. 2016</title>
    <meta name="keywords" content="sng, art, data, digitalizácia, hackathon, open data">
    <meta name="author" content="lab.SNG">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    
    <meta property="og:title" content="Hackathon SNG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:image" content="{{ URL::to('/img/fb-image.png') }}" />

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
    <link rel="stylesheet" href="css/style.css">
    <!-- Icons css -->  
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css" />

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

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
   
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
            <img src="img/loader.svg" height="140" width="140" alt="preloader">
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
                        <div class="signup"><a href="https://labsng.typeform.com/to/btGeOi" class="button-signup disabled" target="_blank">Registration is closed</a></div>
                        <!-- NAVIGATION - list -->  
                        <ul id="onepagenav">
                            <li><a href="#homepage"><img src="img/loader.svg" style="max-height: 30px; width: auto;vertical-align: middle; "></a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#mentors">Mentors</a></li>
                            <li><a href="#schedule">Programme</a></li>
                            <li><a href="#awards">Awards</a></li>
                            <li><a href="#practical">Practical info</a></li>
                            <li><a href="#previous">Previous edition</a></li>
                            <li><a href="#partners">Partners</a></li>
                        </ul>   
                        <!-- NAVIGATION - list -->  
                    </div>
                </div>
            </nav>
            <!-- NAVIGATION -->

            <!-- MODULE : HOMEPAGE -->
            <section id="homepage">
                <img src="img/loader.svg" class="logo" alt="logo" />

                <canvas id="canv" onmousemove="canv_mousemove(event);" onmouseout="mx=-1;my=-1;">
                </canvas>
                <canvas id="wordCanv" width="500px" height="500px" style="border:1px solid black;display:none;">
                </canvas>
                <textarea id="wordsTxt"></textarea>


                <div class="container">
                    <div class="sixteen columns">
                        <!-- HOMEPAGE - bigtext -->
                        <div class="home-bigtext">
                            <p class="white">7 - 8/10/2016</p>
                            <h1 class="color">Hackathon SNG</h1>
                            <p class="white">ART &amp; DATA</p>
                        </div>
                        <!-- HOMEPAGE - bigtext -->
                        <br>
                        <!-- HOMEPAGE - share -->
                        <div class="shareon-container">
                            <div class="fb-like" data-href="http://hackathon.sng.sk/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            &nbsp;
                            <a href="https://twitter.com/share" class="twitter-share-button" data-count="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            <br class="clear">
                            {{-- <a href="https://labsng.typeform.com/to/btGeOi" class="button-signup" target="_blank">Register now!</a> --}}
                        </div>

                        <!-- HOMEPAGE - share -->
                    </div>
                </div>
            </section>
            <!-- MODULE : HOMEPAGE -->

        <!-- MODULE : ABOUT -->
        <section id="about" class="section-container">
            <div class="container">
                <div id="invitation" class="sixteen columns">
                    <h2>Thank you!</h2>
                    <p class="lead">We did it! We got together with an amazing group of graphic designers, software artisans, UX specialists, back-end engineers, game designers, iOS developers and VR researchers to comine Data, Art and Technology. 6 teams worked tirelessly for 24 hours, blending custom software and design with data and content from the Slovak National Gallery and the Norwegian Nasjonal Museet. Scroll on to check out the winning teams and see all the results of the hackathon below.</p>
                    <p class="lead">Thank you to all the participants, mentors and co-organisers for making the event a success!</p>
                    <p>The event is part of "Art, collections and data across borders" project, supported by Norway, Iceland and Lichtenstein in the framework of the EEA Financial Mechanism and the state budget of the Slovak Republic.</p>
                </div>
            </div>
        </section>
        <!-- MODULE : ABOUT --> 

        <!-- MODULE : SHOWCASE -->
        <section id="showcase" class="section-container">
            <div class="container">
                <div class="sixteen columns " id="projects">
                    <h2>Project Showcase</h2>
                    <p>You can find more information and supporting material at <a href="https://hackdash.org/dashboards/artdata" class="" target="_blank">hackdash.org/dashboards/artdata</a>.</p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/klima.jpg" alt="topic"/>
                    </div>
                    <span class="topic-title">Klima</span>
                    <p>A mobile weather app that aims to be useful, be relatable and get people into galleries.
                        <br>
                        Winner: <span class="highlight">Best Prototype</span>
                        <br>
                        <a href="https://hackdash.org/projects/57f8ea15d9284f016c047578" target="_blank">more info &rarr;</a>
                    </p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/vampart.png" alt="topic"/>
                    </div>
                    <span class="topic-title">Vampart</span>
                    <p>Ever wondered how likely you are to be a vampire? Now you can find out by tracing your face through art history.
                        <br>
                        Winner: <span class="highlight">Best Presentation</span>, <span class="highlight">Most Original Concept</span>
                        <br>
                        <a href="https://hackdash.org/projects/57f91de3d9284f016c047583" target="_blank">more info &rarr;</a>
                    </p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/the-mirror.png" alt="topic"/>
                    </div>
                    <span class="topic-title">The-mirror</span>
                    <p>Imagine you are walking in the gallery and one of the paintings starts to mirror your face and movements in its original art style.
                        <br>
                        Winner: <span class="highlight">Most Original Concept</span>
                        <br>
                        <a href="https://hackdash.org/projects/57f8dd4bd9284f016c047575" target="_blank">more info &rarr;</a>
                    </p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/art-flies.jpg" alt="topic"/>
                    </div>
                    <span class="topic-title">Art Flies</span>
                    <p>An immersive art experience that places users in a magical land of virtual reality where art can be explored more closely.
                        <br>
                        <a href="https://hackdash.org/projects/57f91b6cd9284f016c047581" target="_blank">more info &rarr;</a>
                    </p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/composition-analyzer.png" alt="topic"/>
                    </div>
                    <span class="topic-title">Composition-analyzer</span>
                    <p>Generate your poster composition based on the experience of the old Masters.
                        <br>
                        <a href="https://hackdash.org/projects/57f91b6cd9284f016c047581" target="_blank">more info &rarr;</a>
                    </p>
                </div>
                <div class="eight columns topic-container">
                    <div class="topic-icon">
                        <img src="img/projects/2016/photobooth.jpg" alt="topic"/>
                    </div>
                    <span class="topic-title">Photobooth</span>
                    <p>An interactive Photobooth installation, inspired by Artistic Style transfer algorithms.
                        <br>
                        <a href="https://hackdash.org/projects/57fcee5ed9284f016c0475a0" target="_blank">more info &rarr;</a>
                    </p>
                </div>

                <div class="sixteen columns" id="gallery">
                    <h3 style="margin-bottom: 10px;">Photo Gallery</h3>              

                    <div class="gallery">
                            @foreach ($images as $i=>$image)
                                    <a href="/img/photogallery/2016/{{ basename($image) }}" class="noborder"><img src="/img/photogallery/2016/thumb/{{ basename($image) }}" alt="nahlad" class="thumb" /></a>
                            @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- MODULE : SHOWCASE -->

        <!-- MODULE : MENTORS -->
        <section id="mentors" class="section-container">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Mentors</h3>              
                    <p>During the hackathon teams will be supported by an international selection of experienced mentors</p>
                </div>
                <div class="container">
                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/amalia-filip.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Amalia Filip</h5>
                            <p class="job-position">VR researcher</p> 
                            <p>Amalia Roxana Filip aka <a href="http://restlessnest.org/">chaosdroid</a> plays mostly with sound, live visuals and graphics. Her latest research topic is VR</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->

                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/matej-fandl.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Matej Fandl</h5>
                            <p class="job-position">Creative coder</p> 
                            <p>Matej has a keen interest in artificial intelligence, natural interfaces, multi-agent modeling and computer vision. He uses his technical skills to create captivating online and offline experience at <a href="http://www.mladypes.sk/">Mladý pes</a>.</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->

                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/alexandra-kusa.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Alexandra Kusá</h5>
                            <p class="job-position">general director SNG</p> 
                            <p>Besides being a curator and General Director at SNG, Alexandra lectures at the Department of History of art at The Faculty of Philosophy of Comenius University. She devotes herself to the art of 20. century and its role in other disciplines.</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->

                </div>
                <div class="container">
                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/dusan-buran.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Dušan Buran</h5>
                            <p class="job-position">curator</p> 
                            <p>Dušan is the head curator of Old Art Collections at the Slovak National Gallery. He specializes in medieval art and sculpture, partly also art and architecture of the 20th century and the issues of museology and heritage preservation.</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->

                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/nasjonalmuseet.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Nasjonalmuseet</h5>
                            <p class="job-position">digital collection team</p>
                            <p>Magnus Bognerud and Gro Benedicte Pedersen provide insights to the Nasjonalmuseet collections and metadata. Dag Hensten is the developer of <a href="http://samling.nasjonalmuseet.no/en/">samling.nasjonalmuseet.no</a> and will provide methods and tips on how to get the most out of the DigitaltMuseum API.</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->

                    <!-- MENTOR  -->
                    <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/lab_sng.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>lab.SNG</h5>
                            <p class="job-position">digital R&amp;D</p> 
                            <p><a href="http://lab.sng.sk/">lab.SNG</a> members Igor Rjabinin and Philo van Kemenade will help you to use data and content from <a href="http://www.webumenia.sk/">webumenia.sk</a> via the Elastic Search API, help teams collaborate via Git and open up other projects that lab has <a href="https://github.com/SlovakNationalGallery">open-sourced</a>.</p>
                        </div>
                    </div>
                    <!-- MENTOR  -->                

                    <!-- MENTOR  -->
                    {{-- <div class="one-third column speaker-profile">
                        <div class="speaker-thumb"><img src="img/mentors/mentor.jpg" alt="speaker"/></div> 
                        <div class="speaker-description">
                            <h5>Norwegian mentor (TBA)</h5>
                            <p class="job-position">mentor</p> 
                            <p></p>
                        </div>
                    </div> --}}
                    <!-- MENTOR  -->
                    
                </div>


            </div>
        </section>
        <!-- MODULE : MENTORS --> 

        <!-- MODULE : PROGRAM -->
        <section id="schedule" class="section-container">
            <div class="container">
               
                <div class="sixteen columns">
                    <h3>Program</h3>              
                </div>

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Friday</h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.00</h6>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Welcome &amp; introduction</h6>
                            <h6>Lightning talks (in English<sup>*</sup>)</h6> 
                            <ul>
                                <li>Amalia Filip</li>
                                <li>Alexandra Kusá</li>
                                <li>Dušan Buran</li>
                                <li>Dag Hensten</li>
                                <li>Igor Rjabinin</li>
                            </ul>
                            &nbsp;
                            <h6>Team formation</h6>
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
                            <h6>19.00</h6>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Brainstorming in teams</h6>
                            <p></p>
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
                            <h6>21.00</h6>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Status update per team</h6>
                            <p>Teams share progress, problems &amp; plans for their projects</p>
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
                            <h6>00.00</h6>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Berlinka closes</h6>
                            <p>Time to get some healthy sleep ;)</p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Saturday</h6>
                        </div>
                    </div>
                    
                    <div class="time">
                        <div>
                            <h6>10.00</h6>
                            <p>1 hour</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Workshops (in English<sup>*</sup>)</h6>
                            <p>Seeing Computationally using OpenCV &mdash; by Matej Fandl</p>
                            <p>Using the Nasjonalmuseet and Webumenia APIs &mdash; by Dag Hensten and Igor Rjabinin</p>
                            <p>Collaboration via Git for Designers and Developers &mdash; by Philo van Kemenade</p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>13.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Lunch</h6>
                            <p>Served by Berlinka</p>
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
                            <h6>14.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Final sprint</h6>
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
                            <h6>19.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Public live demos</h6>
                            <p>Teams present their creations in a 5 minute live demo open to the public</p>
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
                            <h6>20.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>Awards</h6>
                            <p>Best Prototype</p>
                            <p>Most Original Concept</p>
                            <p>Best Presentation</p>
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
                            <h6>21.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>After Party</h6>
                            <p>Afterparty: <a href="https://soundcloud.com/cidrim">Cid Rim Live</a> (LuckyMe, Affine Records/AT)</p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->
                <div class="sixteen columns">
                    <p>
                        <sup>*</sup> Talks and workshops will be in English. If this creates a language barrier for anyone, we will do our best to provide translation on the spot. All group collaboration in teams can take place in any language you like.
                    </p>
                    <p>
                        <sup>*</sup> Prednášky a workshopy budú prebiehať v anglickom jazyku. Pre účastníkov, ktorí nerozumejú po anglicky, sa budeme snažiť zabezpečiť čo najlepší preklad na mieste. Práca v rámci tímu môže samozrejme prebiehať v ľubovoľnom jazyku.
                    </p>
                </div>
            </div>
            
        </section>
        <!-- MODULE : PROGRAM -->

        <!-- MODULE : RESOURCES -->
        <section id="resources" class="section-container">
            <div class="container">
                <div class="sixteen columns">
                    <h4>Resources</h4>
                    <p>Besides <strong>delicious food &amp; beverages</strong> and <strong>super fast WiFi</strong>, we will provide the following media and tech resources:</p>
                </div>
                <div class="eight columns">
                    <ul class="list-square">
                        <li>Nasjonalmuseet - Solr Index As Api</li>
                        <li>Webumenia - Open Elastic Search Api</li>
                        <li>Artist Data
                            <ul>
                                <li>Lexicon Data in RDF (Norwegian Artists)</li>
                                <li><a Href="http://nkl.snl.no/">nkl.snl.no</a></li>
                                <li><a Href="http://www.getty.edu/research/tools/vocabularies/ulan/">Ulan</a></li>
                                {{-- <li>Artist Data From Webumenia - Elastic Search</li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="eight columns">
                    <ul class="list-square">
                        <li>Open source audioguide</li>
                        <li>3d Visualisations of SNG Reconstruction</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- MODULE : RESOURCES -->

        <hr class="dividerline"/>
                
        <!-- MODULE : AWARDS -->
        <section id="awards" class="section-container">
            
            <div id="statisticsection">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>Awards</h3>
                        <p>Winners will be awarded in the categories: <strong>Best Prototype</strong>, <strong>Most Original Concept</strong> and <strong>Best Presentation</strong></p>
                    </div>
                    <div class="one-third column statistic">
                        <div class="statistic-icon"><i class="icon-pricetags"></i></div>
                        <div class="statistic-desc">
                            <h3>Gadgets</h3>
                            <p>Audio Technica headphones, Bluetooth speakers, Leap Motion, 2 TB Harddisk, Arduino Starter Kit</p>
                        </div>
                    </div>
                    <div class="one-third column statistic">
                        <div class="statistic-icon"><i class="icon-picture"></i></div>
                        <div class="statistic-desc">
                        <h3>Printed reproductions</h3>
                        <p>High quality in house prints from SNG</p>
                        </div>
                    </div>
                    <div class="one-third column statistic">
                        <div class="statistic-icon"><i class="icon-notebook"></i></div>
                        <div class="statistic-desc">
                            <h3>Publications &amp; merchandise</h3>
                            <p>From SNG &amp; Nasjonalmuseet</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- MODULE : AWARDS -->         
                
        
                
        <!-- MODULE : PRAKTICKE INFORMACIE -->
        <section id="practical" class="section-container">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Practical information</h3>              
                    <ul class="list-square">
                        <li>You can sign up individually or as a team. We will make sure that individual participants' skills are complemented by other team members.</li>
                        <li>We encourage bringing ideas and content for projects you have in mind or in production.</li>
                        <li>After the final sprint all prototypes are presented in a live demo and their source code will be made available open-source for others to study and build on beyond the event. Anything created during the hackathon remains intellectual property of the creators in the team.</li>
                        <li>Food and beverages will be provided throughout the hackathon.</li>
                        <li>Any questions can be addressed directly to <a href="mailto:lab@sng.sk">lab@sng.sk</a></li>
                    </ul>
                </div>
            </div>
            <div class="map-container">
                <div id="map"></div>
            </div>
        </section>
        <!-- MODULE : PRAKTICKE INFORMACIE --> 

        <!-- MODULE : PREVIOUS -->
        <div class="topsponsor-section" id="previous">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Previous Edition</h3>
                    <p>The last time we organised a hackathon like this was in 2014. Watch the video below to get an idea of the event, or check out <a href="http://hackathon.sng.sk/2014">photos and projects developed during the event</a>.</p>
                    <!-- ABOUT - video -->
                    <div class="about-video">
                        <div class="video-container">
                            <iframe src="//www.youtube.com/embed/nJvzVrzBJaU?autohide=1&showinfo=0&rel=0&theme=light&vq=hd720"  allowfullscreen></iframe>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- MODULE : PREVIOUS -->

        <!-- MODULE : PARTNERS -->
        
        <div class="topsponsor-section" id="partners">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Partners</h3>
                </div>
                <div class="eight columns">                    
                    <p>Názov projektu: <br>   
                    Umenie, zbierky a dáta bez hraníc</p>
                    <p>Projekt je financovaný z grantov Islandu, Lichtenštajnska a Nórska prostredníctvom Finančného mechanizmu EHP a zo štátneho rozpočtu Slovenskej republiky.</p>
                </div>
                <div class="eight columns">
                    
                    <p>Prijímateľ grantu: <br>
                    Slovenská národná galéria
                    </p>
                    <p>Výška projektového grantu: 92 412 €</p>
                </div>
                <div class="sixteen columns text-center">
                    <img src="images/partners.jpg" class="partners" alt="partners">
                </div>
            </div>
        </div>

        <!-- MODULE : PARTNERS -->

        <!-- MODULE : FOOTER -->
        <footer>
             <div class="container">
                <div class="sixteen columns copyright text-center">
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

    <!-- One page Nav -->
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script>
    $(document).ready(function() {
        $('#onepagenav').onePageNav({
        changeHash: false,
        filter: ':not(.external)',
        scrollOffset: 16,
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

    <script type="text/javascript" src="js/custom.js"></script>     

    <!-- googlemaps -->
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript">
            var map;
    
            $(window).load(function() {
               
              map = new GMaps({
                div: '#map',
                lat: 48.140289,
                lng: 17.109519,
                zoom: 16, 
                scrollwheel: false
              });

              map.drawOverlay({
                lat: map.getCenter().lat(),
                lng: map.getCenter().lng(),
                content: '<div class="overlay-map"><div class="overlay-map-header">Berlinka</div><p>Esterházyho palác, Nám. Ľ. Štúra 4 <br/>Bratislava</p><div class="overlay-map-arrow above"></div></div>',
                verticalAlign: 'top',
                horizontalAlign: 'center'
              });
            });
        </script>   
        <script src="js/header.js"></script>



</body>
</html>