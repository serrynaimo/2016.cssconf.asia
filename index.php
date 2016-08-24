<?php
  date_default_timezone_set('Asia/Singapore');
?>
<!doctype html>
<!--

    It's time to design again! :)

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>CSSConf.Asia Singapore 2016</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans|Sanchez|Great+Vibes' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app2.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500" />
	<?php } ?>
	<meta property="og:title" content="CSSConf.Asia Singapore 2016"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://2016.cssconf.asia/"/>
	<meta property="og:image" content="https://2016.cssconf.asia/assets/og_cssconfasia.png"/>
	<meta property="og:site_name" content="CSSConf.Asia"/>
	<meta property="og:description" content="Bridging web design and implementation. 24th November 2016, Singapore. Follow us on Twitter @cssconfasia"/>
	<meta name="title" content="CSSConf.Asia Singapore 2016"/>
	<meta name="description" content="Bridging web design and implementation. 24th November 2016, Singapore. Follow us on Twitter @cssconfasia"/>
</head>
<body class="loading">
	<section id="background"></section>
	<section id="intro">
	    <div>
            <p class="date">
                24th of November 2016
            </p>
            <p class="location">
                Capitol Theatre, Singapore
            </p>
            <p>
                Ticket prices increase<br/>
                <span id="countdown">&nbsp;</span>
            </p>
            <a href="https://www.eventnook.com/event/devfestasia2016/home" target="_blank" class="button">
                Get your tickets
            </a>
            <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia" target="_blank" class="hint">
                Recommend a speaker or attendee
            </a>
	    </div>
	</section>

  <section id="body">

    <section id="updates">

      <div class="cards">
        <div class="card speaker">
          <img src="img/rachelandrew.jpg" class="bg" />
          <a href="https://twitter.com/rachelandrew" target="_blank"><img src="img/rachelandrew.jpg" class="pic" /></a>
          <h3>Rachel Andrew</h3>
          <span class="title">Griddy CSS Developer</span>
          <div class="bio">
            <p>Rachel is a front and back-end web developer, author and speaker. &gt;&gt;</p>
            <p>Her books include the recent Get Ready for CSS Grid Layout and she is a regular contributor to a number of publications both on and offline. &gt;&gt;</p>
            <p>Rachel is co-founder of the CMS Perch, a Google Developer Expert and an Invited Expert to the CSS Working Group. &gt;&gt;</p>
            <p>She writes about business and technology on her own site at rachelandrew.co.uk.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/sarahdrasner.jpg" class="bg" />
          <a href="https://twitter.com/sarah_edo" target="_blank"><img src="img/sarahdrasner.jpg" class="pic" /></a>
          <h3>Sarah Drasner</h3>
          <span class="title">SVG Animation Trickser</span>
          <div class="bio">
            <p>Sarah is an award-winning Manager of UX Design and Engineering at Trulia (Zillow) and staff writer at CSS-Tricks. &gt;&gt;</p>
            <p>She’s given a Frontend Masters workshop on Advanced SVG Animations, and is working for a book for O’Reilly on SVG Animations. &gt;&gt;</p>
            <p>For 15 years she worked as a web developer and designer and at points as a Scientific Illustrator, an Undergraduate Professor and has tutored a Byzantine Icon painter in Santorini. &gt;&gt;</p>
            <p>Sarah loves SVG, informative animation, and welding together pieces of the DOM.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/chrislienert.jpg" class="bg" />
          <a href="https://twitter.com/cliener" target="_blank"><img src="img/chrislienert.jpg" class="pic" /></a>
          <h3>Chris Lienert</h3>
          <span class="title">&lt;form&gt; &amp; Accessibility</span>
          <div class="bio">
            <p>Chris started out as a web developer when Netscape ruled the world and is currently working as an engineering manager at CXA. &gt;&gt;</p>
            <p>He founded community group Singapore CSS because someone had to. ;) &gt;&gt;</p>
            <p>Aside from musical distractions and accumulating frequent flyer points, Chris and his wife Sarah can be found in the company of their small human.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/kenneth.jpg" class="bg" />
          <a href="http://kennethormandy.com" target="_blank"><img src="img/kenneth.jpg" class="pic" /></a>
          <h3>Kenneth Ormandy</h3>
          <span class="title">Web Type Specialist</span>
          <div class="bio">
            <p>Kenneth is an independent designer specialising in web typography. &gt;&gt;</p>
            <p>He organises Vancouver’s typography meetup Type Brigade, and contributes to The Lost Type Co-op. &gt;&gt;</p>
            <p>Previously he studied type design at Type@Paris, and helped launch the front-end development tool Surge.sh.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/neha.jpg" class="bg" />
          <a href="https://twitter.com/hellonehha" target="_blank"><img src="img/neha.jpg" class="pic" /></a>
          <h3>Neha Sharma</h3>
          <span class="title">JS Lover</span>
          <div class="bio">
            <p>Neha hails from New Delhi, India and is working as UI tech lead full time at Toasterco. &gt;&gt;</p>
            <p>She is a tech speaker and the organizer of the JSLovers community for web lovers. &gt;&gt;</p>
            <p>When she is not coding or speaking at meetups she doodles. You can follow her at @hellonehha</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/hyojin.jpg" class="bg" />
          <img src="img/hyojin.jpg" class="pic" />
          <h3>Hyojin Song</h3>
          <span class="title">CSS Round Peg</span>
          <div class="bio">
            <p>Hyojin is a W3C advisory committee representative on behalf of LG Electronics. &gt;&gt;</p>
            <p>He loves working on new web technology regarding web engine and framework. &gt;&gt;</p>
            <p>He initiated the CSS Round Display and developed the specification as an co-editor in the CSS Working Group. &gt;&gt;</p>
            <p>He loves traveling, surfing, and table tennis.</p>
          </div>
        </div>
      </div><br/><br/>

      <p>
      <br/><br/>We'll announce more speakers and contributers as we approach the event. Stay tuned.<br/><br/>
      <a href="https://twitter.com/cssconfasia">Follow us on Twitter</a> &nbsp; <a href="https://facebook.com/cssconfasia">Like us on Facebook</a>
      </p>

      <form id="subscribeForm" action="https://2014.cssconf.asia/addsubscriber.php" method="get">
        <div class="input"><span><input type="text" required name="fname" placeholder="First name"><input type="email" required name="email" placeholder="E-Mail Address"><input type="submit" value="Subscribe"></span></div>
        <div class="msg"><span></span></div>
      </form>

    </section>

    <footer>
      <div>
        <div>
          <p>
            <a href="https://2016.devfest.asia" style="border: none"><img src="//2016.jsconf.asia/img/devfest2016.png" height="100" alt="Singapore DevFest.Asia 2016"/></a>
            <br/><br/>
            CSSConf.Asia 2016 Singapore is part of DevFest.Asia,<br/>Southeast Asia’s community organized<br/>web developer festival
          </p>
        </div>
        <div>
          <ul>
            <li><a href="http://cssconf.org">CSSConf world-wide</a></li>
            <li><a href="https://2015.cssconf.asia" target="_blank">CSSConf.Asia 2015</a> - <a href="https://2014.cssconf.asia" target="_blank">2014</a></li>
            <li><a href="mailto:sponsors@jsconf.asia?subject=CSSConf.Asia 2016 Sponsorship">Sponsorship Inquiry</a></li>
            <li><a href="https://twitter.com/cssconfasia">Twitter</a></li>
            <li><a href="https://facebook.com/cssconfasia">Facebook</a></li>
            <li><a href="https://2015.devfest.asia/code-of-conduct.html">Code of Conduct</a></li>
           </ul>
          </div>
        </div>
        <p>
            A Nerdherd Pte. Ltd. event<br/><br/><br/><br/>
        </p>
      </footer>
    </section>
    
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r70/three.min.js"></script>
    <script src="https://cdn.rawgit.com/evanw/csg.js/master/csg.js"></script>
    <script src="https://cdn.rawgit.com/chandlerprall/ThreeCSG/master/ThreeCSG.js"></script>
    <script src="./js/app2.js"></script>
    <script src="./js/animation.js"></script>
    <script src="./js/typed.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31025490-13', 'auto');
  ga('send', 'pageview');


   CountDownTimer('Sat, 24 Sep 2016 00:00:00 +0800', 'countdown');

    function CountDownTimer(dt, id)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var start = new Date('<?php echo date("r"); ?>');
        var startjs = new Date();
        var diff = startjs - start;
        var timer;

        function showRemaining() {
            var now = new Date();
            var passed = now - startjs;
            var distance = end - start - passed;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById(id).innerHTML = 'now!';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          if(seconds < 10)
            seconds = "0" + seconds;

          if(minutes < 10)
            minutes = "0" + minutes;

            document.getElementById(id).innerHTML = (days > 0) ? days + ' days ' : '';
            document.getElementById(id).innerHTML += hours + ':' + minutes + ':' + seconds;
        };

        timer = setInterval(showRemaining, 1000);
    }

    </script>
</body>
</html>
