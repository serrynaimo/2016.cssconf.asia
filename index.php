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
	<link rel="stylesheet" type="text/css" href="css/app1.css" />
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
                Submit a talk proposal
            </a>
	    </div>
	</section>

  <section id="body">

    <section id="updates">

      <div class="cards">
        <div class="card speaker">
          <img src="img/raquel.jpg" class="bg" />
          <a href="https://twitter.com/rockbot" target="_blank"><img src="img/raquel.jpg" class="pic" /></a>
          <h3>Raquel Vélez</h3>
          <span class="title">NPM Rock Bot</span>
          <div class="bio">
            <p>Raquel Vélez cares about code and culture at npm, Inc. in Oakland, CA. &gt;&gt;</p>
            <p>She has previously worked at institutions such as Caltech, NASA JPL, the MIT Lincoln Laboratory, and various universities in Europe. &gt;&gt;</p>
            <p>She is a co-author of the book &quot;Make: JavaScript Robotics.&quot; &gt;&gt;</p>
            <p>In her off time, you can find her baking, teaching NodeBots not to fall off of tables, and speaking. &gt;&gt;</p>
            <p>... also, hanging out with her hilarious husband and two cats dressed in dog suits.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/jameskyle.jpg" class="bg" />
          <a href="https://twitter.com/thejameskyle" target="_blank"><img src="img/jameskyle.jpg" class="pic" /></a>
          <h3>James Kyle</h3>
          <span class="title">ES6 Transpiler</span>
          <div class="bio">
            <p>James is an engineer at Facebook as well as a core contributor to projects like BabelJS and Lerna. &gt;&gt;</p>
            <p>Outside of work James is trying to make computer science more approachable to front-end developers.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/timpietrusky.jpg" class="bg" />
          <a href="https://twitter.com/TimPietrusky" target="_blank"><img src="img/timpietrusky.jpg" class="pic" /></a>
          <h3>Tim Pietrusky</h3>
          <span class="title">Disco Nerd</span>
          <div class="bio">
            <p>By day Tim Pietrusky is the CTO of Synoa GmbH and lives near Frankfurt (Main) in Germany. &gt;&gt;</p>
            <p>At night he and his cat Kazzo work on NERDDISCO to create live music visualizations with JavaScript. &gt;&gt;</p>
            <p>He contributed Kittify to the &quot;only FUN open-source projects&quot;-community bullgit.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/jonmckay.jpg" class="bg" />
          <a href="https://twitter.com/jonmckay" target="_blank"><img src="img/jonmckay.jpg" class="pic" /></a>
          <h3>Jon McKay</h3>
          <span class="title">Chief Climate Tesseler</span>
          <div class="bio">
            <p>Jon is an entrepreneur and engineer from California. He is one of the creators of the Tessel Project - a JavaScript-programmable embedded platform and resides on the Steering Committee of the project. &gt;&gt;</p>
            <p>In his spare time you can find him rock climbing, working on his motorcycle, or eating a disturbing number of avocados. &gt;&gt;</p>
            <p>He is currently excited about getting more programmers involved in harnessing code to fight climate change.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/kelsey.jpg" class="bg" />
          <a href="https://twitter.com/SelkeyMoonbeam" target="_blank"><img src="img/kelsey.jpg" class="pic" /></a>
          <h3>Kelsey Breseman</h3>
          <span class="title">Chief Neural Tesseler</span>
          <div class="bio">
            <p>Kelsey is an engineer and Steering Committee member of the Tessel Project —an open source organization whose aim is to empower web developers to enter the connected-devices space. &gt;&gt;</p>
            <p>Previously, Kelsey has been involved in developing consumer drones, research on sleep and temperature, implantable vision devices, and devices for lung cancer diagnosis. &gt;&gt;</p>
            <p>She has a degree in neural engineering, and is interested in prosthetics, speculative fiction, circus arts, and really long walks.</p>
          </div>
        </div>

        <div class="card speaker">
          <img src="img/chengzhao.jpg" class="bg" />
          <a href="https://twitter.com/zcbenz" target="_blank"><img src="img/chengzhao.jpg" class="pic" /></a>
          <h3>Cheng Zhao</h3>
          <span class="title">Negatively Charged JavaScript</span>
          <div class="bio">
            <p>Cheng is working at GitHub developing the Electron framework.</p>
          </div>
        </div>

        <!--<div class="card speaker">
          <img src="img/mattmckegg.jpg" class="bg" />
          <a href="https://twitter.com/mattmckegg" target="_blank"><img src="img/mattmckegg.jpg" class="pic" /></a>
          <h3>Matt McKegg</h3>
          <span class="title">Music Button</span>
          <div class="bio">
            <p>Back for his second time at JSConf.Asia, Matt is a JavaScript hacker and backyard musician and from Wellington, New Zealand. &gt;&gt;</p>
            <p>He is a lover of all things open and modular and spends most of his time pressing buttons of various shapes, sizes and colours. &gt;&gt;</p>
            <p>Sometimes these buttons make sounds.</p>
          </div>
        </div>//-->
      </div>

      <p>
      <br/><br/>We'll announce more speakers and contributers as we approach the event. Stay tuned.<br/><br/>
      <a href="https://twitter.com/jsconfasia">Follow us on Twitter</a> &nbsp; <a href="https://facebook.com/jsconfasia">Like us on Facebook</a>
      </p>

    </section>

    <form id="subscribeForm" action="https://2014.cssconf.asia/addsubscriber.php" method="get">
        Receive our email updates:<br/><br/>
        <div class="input"><span><input type="text" required name="fname" placeholder="First name"><input type="email" required name="email" placeholder="E-Mail Address"><input type="submit" value="Subscribe"></span></div>
        <div class="msg"><span></span></div>
    </form>
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
    <script src="./js/app.js"></script>
    <script src="./js/animation.js"></script>
    <script src="./js/typed.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31025490-13', 'auto');
  ga('send', 'pageview');


   CountDownTimer('Wed, 24 Aug 2016 00:00:00 +0800', 'countdown');

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
