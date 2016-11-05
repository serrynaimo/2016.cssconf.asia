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
	<link rel="stylesheet" type="text/css" href="css/app4.css" />
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
                CSSConf.Asia starts<br/>
                <span id="countdown">&nbsp;</span>
            </p>
            <a href="https://www.eventnook.com/event/devfestasia2016/home" target="_blank" class="button">
                Get your tickets
            </a>
	    </div>
	</section>

  <section id="body">

    <section id="schedule">
      <p>
        <br/><br/>Sponsored by<br/><br/>
        <a href="https://www.sc.com/technology/" target="_blank"><img src='img/scb.svg' alt='Standard Chartered Bank' style='margin: 0 auto; width: 200px;'/></a>
      </p>

      <br/><br/><br/>
      <div class="column">
              <div class="speaker">
              <img src="img/aysha.jpg" /><img src="img/zell.jpg" />
              <h4></h4>
              <h3>With Aysha Anggraini &amp; Zell Liew</h3>
              <p style='opacity: 1; height: auto'>
                Doors open from on 8AM
              </p>
              <p>
                <b>Please bring your order confirmation PDF with the QR code and a photo ID for registration.</b><br/><br/>
                Aysha is a front-end engineer and wannabe designer at Viki, where she works closely with the UX team in order to build functional and beautiful UIs on viki.com and Viki's internal tools. When she is not super busy (which is rare these days), she either writes about geeky stuff on her blog renaysha.me or build experimental and pretty things on CodePen (codepen.io/rrenula). She loves design, gaming, dancing, and Yoga.
                <br/><br/>
                Zell is a freelance web developer based in Singapore. He loves working on the web so much that he spends all his free time diving deep into tools and frameworks to find out the best ways to work with them. He then shares everything he learned on zell-weekeat.com. He also authored the books ’Learning Susy’ and ’Automating Your Workflow with Gulp’.
              </p>
          </div>
          <div class="speaker">
              <span>9 AM</span>
              <img src="img/rachelandrew.jpg" />
              <h4>Rachel Andrew <a href="https://twitter.com/rachelandrew" target="_blank">@rachelandrew</a></h4>
              <h3>Laying Out The Future With Grid And Flexbox</h3>
              <p>
                It is 2016. CSS is now 20 years old, and it has taken this long for us to get a true layout system designed for web pages and applications. A layout system, not based on hacking properties designed for something else entirely, but one that considers the reality of design for the web today. <br/>
                In this talk I’ll introduce this new layout system, a system encompassing Flexbox, CSS Grid Layout and the Box Alignment Module. I’ll explain how these standards get into browsers, and how you can start to take advantage of them sooner rather than later.
              </p>
              <p>
                Rachel is a front and back-end web developer, author and speaker. <br/>
                Her books include the recent Get Ready for CSS Grid Layout and she is a regular contributor to a number of publications both on and offline. <br/>
                Rachel is co-founder of the CMS Perch, a Google Developer Expert and an Invited Expert to the CSS Working Group. <br/>
                She writes about business and technology on her own site at rachelandrew.co.uk.
              </p>
          </div>
          <div class="speaker">
              <span>9:30 AM</span>
              <img src="img/kenneth.jpg" />
              <h4>Kenneth Ormandy <a href="https://twitter.com/kennethormandy" target="_blank">@kennethormandy</a></h4>
              <h3>Syntax Highlighting Everywhere</h3>
              <p>
                A developer employs syntax highlighting to visually differentiate portions of her code; for centuries, designers, printers, and scribes have done the same for readers. Today, advanced features built into fonts can subtly signify types of content, increase a text’s authority, and are actually necessary for many languages.<br/>
                This talk introduces designers and developers to highlighting syntaxes beyond code. Learn how to access these advanced typographic features using CSS and JavaScript, and—more importantly—where to apply them.
              </p>
              <p>
                Kenneth is an independent designer specialising in web typography.<br/>
                He organises Vancouver’s typography meetup Type Brigade, and contributes to The Lost Type Co-op. <br/>
                Previously he studied type design at Type@Paris, and helped launch the front-end development tool Surge.sh.
              </p>
          </div>
          <div class="speaker break">
              <span>10 AM</span>
              <h3>Jimmy Monkey Coffee at your Service</h3>
          </div>
          <div class="speaker">
              <span>10:30 AM</span>
              <img src="img/chrislienert.jpg" />
              <h4>Chris Lienert <a href="https://twitter.com/cliener" target="_blank">@cliener</a></h4>
              <h3>Access All Areas</h3>
              <p>
                  Accessibility is about ensuring that the products we build are able to be used by as wide an audience as possible. While the ARIA specification might be daunting, building accessible interface elements isn’t as difficult as it may seem.<br/>
                  Chris will take you through his experience building a responsive UI library sharing the failures and successes along the way.
              </p>
              <p>
                  Chris started out as a web developer when Netscape ruled the world and is currently working as an engineering manager at CXA.<br/>
                  He founded community group Singapore CSS because someone had to. ;)<br/>
                  Aside from musical distractions and accumulating frequent flyer points, Chris and his wife Sarah can be found in the company of their small human.
              </p>
          </div>
          <div class="speaker">
              <span>11 AM</span>
              <img src="img/soledad.jpg" />
              <h4>Soledad Penadés <a href="https://twitter.com/supersole" target="_blank">@supersole</a></h4>
              <h3>Make Websites, Not Apps</h3>
              <p>
                  Is there any point in building mobile websites when Android is pretty much the market leader in mobile? Has the web lost the battle to native apps? Should we just give up and write everything in React Native? Does progressive enhancement even make sense at all? And what about CSS - does anyone understand it? Is there any point in learning HTML in 2016?<br/>
                  In this talk, we will get answers to these and many more questions that we ask ourselves on a daily basis (even if we won't admit to it). You will leave reinvigorated, full of optimism and pride in your craft.<br/>
                  100% guaranteed.
              </p>
              <p>
                  Sole has been building real time stuff for longer than she can remember.<br/>
                  She works at Mozilla, helping making the Web the best platform (in general) and the best platform for realtime (in particular).<br/>
                  She writes demos to test and spread awareness about new features, often involving Web Audio, WebGL, GIFs and/or cats.<br/>
                  In the process she breaks various browsers and reports an unspeakable number of strange edge cases, all in pursuit of a robust platform that is a joy to develop for.
              </p>
          </div>
          <div class="speaker break">
              <span>11:30 AM</span>
              <h3>Distributed Lunch</h3>
          </div>
          <div class="speaker">
              <span>1 PM</span>
              <img src="img/sarahdrasner.jpg" />
              <h4>Sarah Drasner <a href="https://twitter.com/sarah_edo" target="_blank">@sarah_edo</a></h4>
              <h3>Functional Animation</h3>
              <p>
                  Animation is captivating. Our brains are trained to respond most intently to movement. For this reason, animation in a user experience is extremely important, and also very easy to overdo. Carefully considered animation can compose spatial maps to guide users. Animations can be responsive, resolution-independent, and make a site function intuitively.<br/>
                  In this session Sarah will cover a myriad of use cases, from both design and technical implementation standpoints.
              </p>
              <p>
                  Sarah is an award-winning Manager of UX Design and Engineering at Trulia (Zillow) and staff writer at CSS-Tricks.<br/>
                  She’s given a Frontend Masters workshop on Advanced SVG Animations, and is working for a book for O’Reilly on SVG Animations.
                  <br/>For 15 years she worked as a web developer and designer and at points as a Scientific Illustrator, an Undergraduate Professor and has tutored a Byzantine Icon painter in Santorini.<br/>
                  Sarah loves SVG, informative animation, and welding together pieces of the DOM.
              </p>
          </div>
      </div>
      <div class="column">
          <div class="speaker">
              <span>1:30 PM</span>
              <img src="img/chris_lilley.jpg" />
              <h4>Chris Lilley <a href="https://twitter.com/svgeesus" target="_blank">@svgeesus</a></h4>
              <h3>CSS4 Colors</h3>
              <p>
                  
              </p>
              <p>
                  Chris Lilley is a Technical Director at the World Wide Web Consortium
                  (W3C). Considered “the father of SVG”, he also co-authored PNG, was
                  co-editor of CSS2, chaired the group that developed @font-face, and
                  co-developed WOFF. Ex Technical Architecture Group. Chris is still
                  trying to get Color Management on the Web, sigh. Currently working on
                  CSS levels 3/4/5 (no, really), Web Audio, and WOFF2.
              </p>
          </div>
          <div class="speaker">
              <span>2 PM</span>
              <img src="img/hjchen.jpg" />
              <h4>Chen Hui Jing<a href="https://twitter.com/hj_chen" target="_blank">@hj_chen</a></h4>
              <h3>How I Learn To CSS</h3>
              <p>
                  Most of us regularly read web development articles or watch videos that talk about the latest web features, or techniques for implementing all the things and so on. I don't know about you, after almost 3 decades of existence, I realised I'm more of a learn-by-doing kind of person.<br/>
                  Building little components from scratch is a great way to cement your knowledge of CSS properties and try out all those cool things you've read or heard about. You never know when it might come in handy...
              </p>
              <p>
                  
              </p>
          </div>
          <div class="speaker">
              <span>2:15 PM</span>
              <img src="img/neha.jpg" />
              <h4>Neha Sharma <a href="https://twitter.com/hellonehha" target="_blank">@hellonehha</a></h4>
              <h3>Ten Places Where You Can Ditch JS</h3>
              <p>
                  Making fast performing webpages is vital but using JavaScript everywhere is going to hit performance badly. Do not under-estimate the power of CSS. There are ten places where you can ditch JavaScript and use CSS instead to make your code and application happy :)
              </p>
              <p>
                  Neha hails from New Delhi, India and is working as UI tech lead full time at Toasterco.<br/>
                  She is a tech speaker and the organizer of the JSLovers community for web lovers.<br/>
                  When she is not coding or speaking at meetups she doodles. You can follow her at @hellonehha
              </p>
          </div>
          <div class="speaker">
              <span>2:30 PM</span>
              <img src="img/shiya.jpg" />
              <h4>Shiya Luo <a href="https://twitter.com/shiyaluo" target="_blank">@shiyaluo</a></h4>
              <h3>3D on the web</h3>
              <p>
                  What are the latest trends in developing immersive visual 3D experiences in the browser and what can a JavaScript developer start working on after hearing this talk.
              </p>
              <p>
                  Shiya is a developer advocate at Autodesk. She has been advocating for 3D on the Web and things you don't always get to work on a day to day basis as a JavaScript developer, but still written in JavaScript. She has been an active member in the JavaScript community in the San Francisco Bay Area and China.
              </p>
          </div>
          <div class="speaker break">
              <span>2:45 PM</span>
              <h3>Lightning Talks / Break</h3>
          </div>
          <div class="speaker">
              <span>4 PM</span>
              <img src="img/michael.jpg" />
              <h4>Michael Mifsud <a href="https://twitter.com/xzyfer" target="_blank">@xzyfer</a></h4>
              <h3>Real World HTTP/2</h3>
              <p>
                  HTTP/2 has rightfully garnered a lot of interest from the web performance community. For better or worse, the story of HTTP/2 has become tied to notions of free performance and how it will make "everything we know about web performance wrong".<br/>
                  The reality of HTTP/2 can sometimes be sobering. My talk will aim to highlight some rarely talked about caveats, in the hopes of bringing some balance to the HTTP/2 discussion.
              </p>
              <p>
                  Michael is a performance engineer at 99designs focusing primarily on frontend architecture, tooling, and site performance.<br/>
                  An advocate for open source software he's currently the project lead for Node Sass and a core contributor to LibSass.<br/>
                  He's also heavily involved in the local developer community as part of the CSSConf AU and the MelbCSS meetup organising teams.
              </p>
          </div>
          <div class="speaker">
              <span>4:30 PM</span>
              <img src="img/leaverou.jpg" />
              <h4>Lea Verou <a href="https://twitter.com/leaverou" target="_blank">@leaverou</a></h4>
              <h3>CSS Variables: var(--subtitle) Talk</h3>
              <p>
                  You may have heard about CSS Variables (aka CSS Custom Properties), but think it’s not something you can use yet. Plus, you already have your preprocessor pipeline in place, why should you care? This talk will show how CSS Variables are much more powerful than static preprocessor variables and can be used today without compromising progressive enhancement. You will also learn several creative tips and tricks to take full advantage of them. As is customary with Lea’s CSS talks, expect a swath of live demos to demonstrate the material.
              </p>
              <p>
                  Lea is currently busy doing research in Human-Computer Interaction at MIT CSAIL.<br/>
                  She has previously written a bestselling CSS book for O’Reilly (CSS Secrets) and worked as a Developer Advocate at W3C.<br/>
                  She has a long-standing passion for open web standards, and is one of the few Invited Experts in the CSS Working Group.<br/>
                  Lea has also started several popular open source projects and web applications, such as Prism, Dabblet and -prefix-free and maintains a technical blog at lea.verou.me.<br/>
                  Despite her academic pursuits in Computer Science, Lea is one of the few misfits who love code and design equally.
              </p>
          </div>
          <div class="speaker break">
              <span>6:30 PM</span>
              <h3>Code In The Dark with Braintree</h3>
              <p></p><p></p>
          </div>
      </div>

      </section>

      <section id="sponsors">

      <p>
        With additional support from
      </p>
      <a href="https://braintreepayments.com" target="_blank"><img src="img/braintree.png" /></a>
      <a href="https://hired.com" target="_blank"><img src="img/hired.png" /></a>
      <a href="https://mozilla.com" target="_blank"><img src="img/mozilla.png" /></a>
      <a href="https://www.microsoft.com/en-sg/windows/microsoft-edge" target="_blank"><img src="img/microsoft.png" /></a>
      <a href="http://www.clubmate.sg" target="_blank"><img src="img/clubmate.png" style="height: 55px;"/></a>


      <br/>
      <a href="https://www.eventnook.com/event/devfestasia2016/home" target="_blank" class="button">
          Get your tickets
      </a>
      <br/>

    </section>


    <section id="updates">

      <p>
        <a href="https://twitter.com/cssconfasia">Follow us on Twitter</a> &nbsp; <a href="https://facebook.com/cssconfasia">Like us on Facebook</a>
      </p>

      <br/><br/><br/><br/>

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
    <script src="./js/app3.js"></script>
    <script src="./js/animation.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31025490-13', 'auto');
  ga('send', 'pageview');


   CountDownTimer('Thu, 24 Nov 2016 09:00:00 +0800', 'countdown');

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
