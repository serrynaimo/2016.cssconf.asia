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
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500" />
	<?php } ?>
	<meta property="og:title" content="CSSConf.Asia Singapore 2016"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://2016.cssconf.asia/"/>
	<meta property="og:image" content="https://2016.cssconf.asia/assets/og_cssconfasia.jpg"/>
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
                Ticket Sales start in<br/>
                <span id="countdown">&nbsp;</span>
            </p>
            <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia" target="_blank" class="button">
                Submit a talk proposal
            </a>
	    </div>
	</section>
    <section id="body">
        <form id="subscribeForm" action="https://2014.cssconf.asia/addsubscriber.php" method="get">
            Receive our email updates:<br/><br/>
            <div class="input"><span><input type="text" required name="fname" placeholder="First name"><input type="email" required name="email" placeholder="E-Mail Address"><input type="submit" value="Subscribe"></span></div>
            <div class="msg"><span></span></div>
        </form>
        <footer>
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
            <p>
                A Nerdherd Pte. Ltd. event
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
    <script src="./js/animation.js"></script>
	<script src="./js/app.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31025490-12', 'auto');
  ga('send', 'pageview');


   CountDownTimer('Fri, 24 Jun 2016 14:00:00 +0800', 'countdown');

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
                document.getElementById(id).innerHTML = '';

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

            document.getElementById(id).innerHTML = (days > 0) ? days + ' days ' : ''
            document.getElementById(id).innerHTML += hours + ':' + minutes + ':' + seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }
    </script>
</body>
</html>
