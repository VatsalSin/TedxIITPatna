<?php
    include('../backend/user/functions/init.php');
    $loggedIn=false;
    if(logged_in()){
        $loggedIn = true;
    }
    // redirect("../comingsoon");
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Aug 16 2018 21:03:52 GMT+0000 (UTC)  -->
<html data-wf-page="5b6f9f53681f89788ab55fa9" data-wf-site="5b6f9f53681f8929a8b55fa8">

<head>
  <meta charset="utf-8">
  <title>Anwesha Campus Ambassador</title>
  <meta content="Anwesha Campus Ambassador" property="og:title">
  <meta content="./images/favicon.ico" property="og:image">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/epicurrence-build.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="./images/favicon.ico" rel="apple-touch-icon">
  <style>
    a.mostrandomshittyname {
        color: black;
        border: none;
		margin: 20px;
        padding: 10px 20px;
		display: inline-block;
        font: bold 18px sans-serif;
        background: white;
		text-decoration: none;
        -webkit-transition: background 1s; /* For Safari 3.0 to 6.0 */	
        transition: background 1s; /* For modern browsers */
        transition: color 1s;
    }
    a.mostrandomshittyname:hover {
        background: #33f6f3; ;
        color: white;
    }
</style>
</head>

<body>
  <div data-w-id="46f30dce-815f-e131-7241-03b83f4cfd30" style="display:flex" class="loading-section">
    <h2 data-w-id="0141a556-f32e-81bf-262c-b3b59e940a42"
      style="opacity:0;-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
      class="heading-3">Anwesha<br>is <span class="text-span-3">back.</span></h2>
    <div class="curved-top"></div>
    <div class="curved-item">
      <div class="left-side-curve"></div>
    </div>
    <div class="curved-item right">
      <div class="right-side-curve"></div>
    </div>
  </div>
  <!-- <a href="#" data-w-id="0fe5d142-988d-94b3-a82c-0810f2dae155" class="social-link no-shadow w-inline-block"><img
      src="images/flaticon1503093541-svg.svg" width="25"></a> -->
  <div data-w-id="06341bb2-6451-4474-d23e-e8442456ae7c" class="hero-section">
    <div class="container less-top not-relative w-container"><a href="../"><img src="images/home.png" width="74.5"
        alt="Epic image" data-w-id="639584b8-91d3-c323-0b4b-bec816eb8d93"
        style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
        class="epic-image"></a>
      <div class="flex-row">
        <div class="hold-headings">
          <h3 data-w-id="d2a92664-d461-f246-a09b-3cfa7c9c043f"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="heading-6">Become Anwesha CA</h3>
          <!-- <h1 data-w-id="fba2ca2e-8f54-c3ba-74ed-29b0c680d64f"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="hero-heading hidden">Mountain Air.</h1> -->
          <h1 data-w-id="6db6b525-a715-be36-0487-d6aeee974289"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="hero-heading hidden">Share</h1>
          <h1 data-w-id="b3bbcaca-3037-c215-5949-2b55f16730b7"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="hero-heading hidden">What</h1>
          <h1 data-w-id="fa079933-42f6-cfd1-9e07-e0b67b6f45e2"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="hero-heading hidden">We</h1>
          <h1 data-w-id="dac6d156-af9e-b1a2-24a2-bfb82221cceb"
            style="text-shadow: 2px 2px 4px #1f1f1f;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
            class="hero-heading hidden">Believe.</h1>
        </div>
        <div class="hold-logo"><img src="images/logo_favi.png" width="383" alt="Epicurrence 2018 Badge"
            srcset="images/logo_favi.png 500w, images/logo_favi.png 1148w"
            sizes="(max-width: 479px) 100vw, (max-width: 767px) 82vw, (max-width: 991px) 30vw, 31vw"
            style="max-width: 100%;" class="image-9">
          <!-- <a href="http://alejandraquintero.com/" target="_blank" class="hero-link w-inline-block">
            <div>*Badge By <span class="text-span">Ale</span></div><img src="images/ale15x.png" width="34.5"
              class="image-6">
          </a> -->
        </div>
        <div class="hold-ticket-link-and-heading">
          <h3 data-w-id="044dc31d-1cab-062f-88f9-93a6236c5030"
            style="-webkit-transform:translateX(0) translateY(0%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(0%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(0%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(0%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0;text-shadow: 2px 2px 4px #1f1f1f;"
            class="heading-2">Anwesha.</h3>
          <div data-w-id="d78e5e54-e71e-0c52-ca33-b49f266b78e3"
            style="text-shadow: 2px 2px 4px #1f1f1f;opacity:0;-webkit-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(100%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
            class="hold-dates">
            <div class="text-block">2020</div>
            <div class="text-block-2">Indian Institute of Technology Patna</div>
          </div>
          <?php if($loggedIn){ ?>
          <a class="mostrandomshittyname" href="../backend/user/profile.php">
            Profile
          </a>
          <a class="mostrandomshittyname" href="../backend/user/logout.php">
          Logout
          </a>
          <?php }else{ ?>
          <a class="mostrandomshittyname" href="../backend/user/signin.php">
          Sign In
          </a>
          <a class="mostrandomshittyname" href="../backend/user/casignin.php">
          Sign Up
          </a>
          <a class="mostrandomshittyname" href="../pdfs/CA_rulebook.pdf" download>Download CA rulebook</a>
          <?php } ?>
        </div>
      </div>
      <div class="row w-row">
        <div class="column-5 w-col w-col-4"></div>
        <div data-w-id="fba2ca2e-8f54-c3ba-74ed-29b0c680d653" style="opacity:0" class="hold-logo w-col w-col-4"></div>
        <div class="column-6 w-col w-col-4"></div>
      </div>
    </div>
    <div data-w-id="7730191f-a8a1-3d47-d31d-e58421e0eea4" class="bottom-image-section"><img src="images/fireplace.png"
        width="800" alt="Camp Fire gathering image" srcset="images/fireplace-p-500.png 500w, images/fireplace.png 1600w"
        sizes="74vw" class="campfire-image"><img src="images/stones.png"
        srcset="images/stones-p-500.png 500w, images/stones-p-800.png 800w, images/stones-p-1080.png 1080w, images/stones.png 1920w"
        sizes="(max-width: 1920px) 100vw, 1920px" class="image-2"></div>
    <img src="images/back-mobile2x.png" data-w-id="967c2e63-59ed-eabe-3ad4-5ca72580f628"
      class="absolute-mobile-hero-bg-image"><img src="images/back-desktop1x.png"
      srcset="images/back-desktop1x-p-500.png 500w, images/back-desktop1x-p-800.png 800w, images/back-desktop1x-p-1600.png 1600w, images/back-desktop1x.png 1920w"
      sizes="100vw" data-w-id="cf555fa7-fbcd-22a1-8e7a-84f7f59dbd97" class="background-image large">
  </div>
  <!-- <div class="section overflow-visible">
     <a href="https://dribbble.com/Zhenya_Artem" target="_blank" data-w-id="b6180e6e-9867-7aae-1fb3-6c70bbd60209"
      style="-webkit-transform:translateX(0) translateY(25%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(25%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(25%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(25%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
      class="left-side-link hero-link v2 top w-inline-block">
      <div class="text-block-4 taller">*Illustration By <span class="text-span">Anastasia</span></div><img
        src="images/anastasia15x.png" width="34.5" class="image-6">
    </a> 
    <div class="container w-container">
      <div class="number">01</div>
      <div class="row w-row">
        <div class="w-col w-col-8">
          <h1>Epicurrence is the original activity-focused non-conference for creatives that focuses on community and
            unforgettable experiences.</h1>
        </div>
        <div class="w-col w-col-4">
          <p>Join the crew in Yosemite National Park as we enjoy a week loaded with hiking, mountain biking, rock
            climbing, dirt bikes, treasure hunts, unheard of stories from creatives of all types and inspiration
            everywhere.<br><br>Epicurrence is the definition of an experience you&#x27;ll never forget.</p>
          <a href="https://www.epicurrence.com/" target="_blank" data-w-id="fb5c4f9b-14e8-9940-92fa-63a1b66a8f4a"
            class="link overflow-hidden w-inline-block">
            <div>Let&#x27;s get inspired to work together</div>
            <div data-w-id="fd664d8f-0611-96f8-f20d-ad10ca122e75"
              style="-webkit-transform:translateX(0%) translateY(0) translateZ(0) scaleX(0) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0%) translateY(0) translateZ(0) scaleX(0) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0%) translateY(0) translateZ(0) scaleX(0) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0%) translateY(0) translateZ(0) scaleX(0) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
              class="line-trail"></div>
          </a>
        </div>
      </div><img src="images/badge-small.png" width="262" alt="Epicurrence Badge"
        data-w-id="24ac6438-acfb-0746-43b3-4cd2d0fd689f" class="image-3">
    </div>
  </div> -->
  <!-- <div class="section treasure-hunt">
    <div class="container w-container">
      <div class="number">02</div>
      <div class="row w-row">
        <div class="w-col w-col-4">
          <h1>Treasure Hunt</h1>
          <p class="white-paragraph">X marks the spot! We’ve hidden a few treasures in the park. Grab 3 other new
            friends for a mythical adventure. We&#x27;ve placed some exclusive Epic gear around the park. Hike, explore,
            be the first to find the treasure.</p>
        </div>
        <div class="w-col w-col-8"></div>
      </div>
    </div>
    <a href="https://www.aristidebenoist.com/" target="_blank" class="right-side-link hero-link v2 w-inline-block">
      <div class="text-block-4">*Dev By <span class="text-span">ArisItde</span></div><img src="images/aristide15x.png"
        width="34.5" class="image-6">
    </a>
  </div> -->
  <div class="section overflow-hidden">
    <div class="container w-container">
      <p class="paragraph" style="background-color: #fff;color: #000;padding: 10px;width: 100px;text-align: center;">About</p>
      <div class="row w-row">
      <div class="column w-col w-col-8">
          <h1 class="heading-5">Anwesha is the annual  fest of IIT Patna with a myriad of events encompassing cultural, technical and management areas. We believe in turning  moments into memories worth cherishing for a lifetime. Since it's inception in 2010,  Anwesha has grown to be an epitome of grandiosity being one of the most anticipated student organized youth festival in all of North-East India. </h1>
        </div>
        <div class="column-2 w-col w-col-4">
          <p class="paragraph-3" style="font-size: 14px;">Anwesha has been steadily expanding its roots ever since it came into existence and has created an indelible impression in the minds and hearts of each one of those involved with it. 
            Anwesha, which is the Sanskrit word for "Quest", aptly justifies it purpose as the ultimate quest for talent and potential. We believe in turning  moments into memories worth cherishing for a lifetime. The 3-day extravaganza achieves just that by providing experiences that permanently etch themselves into the slate of your memory board to last for aeons to come.
            With the ever-inspiring motto of "Think. Dream. Live." Anwesha urges every individual to push themselves to the maximum. With acclaimed celebrities, eminent speakers and international artists in the likes of Raghu Dixit, Sundeep Sharma, Sahil Shah, Nitish Kumar, Ravi Shankar, Jack Eye Jones having graced its stage, Anwesha has always been the haven for utmost fun and entertainment and has been continually living manifolds beyond what is expected of it. We receive an ever-increasing footfall every year, with the last edition witnessing a massive number of 10,000, involving enthusiasts hailing from all domains.
        </p>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-4">
          <!-- <h2 class="heading happening">Wow. Yup.<br>It’s happening!</h2>
          <img src="images/signature.png" width="278"
            alt="Dann Petty Signature" class="image-5"> -->
        </div>
        <div class="w-col w-col-4">
          <div class="div-block"><img src="../backend/user/images/circle-cropped.png" width="225" alt="Dann Petty image"
              class="image-4"><img src="images/WEB1.png" width="383" data-w-id="eaf60bd2-f14c-9a3e-df5f-c739f68e4a67">
          </div>
        </div>
        <div class="w-col w-col-4"></div>
      </div>
      <!-- <a href="http://latechno.moda/" target="_blank" class="right-side-link hero-link v2 w-inline-block">
        <div class="text-block-4 taller biggest">*Project Management By <span class="text-span">Dalia</span></div><img
          src="images/dalia15x.png" width="34.5" class="image-6">
      </a> -->
      <!-- <div data-w-id="5340b3c5-7297-a3e7-6a74-9ddf780476be" class="yeww">YEWWW</div> -->
  </div>
    <img src="images/clouds-left.png" data-w-id="4921c091-e1f5-8d6f-a7ec-d84f70d7a902" class="image-7">
    <div class="container w-container">
      <div class="status-block w-clearfix">
        <div data-w-id="248dc501-904e-e45f-8c94-50fa470d415c" class="activity-icon full v3">
          <div data-w-id="248dc501-904e-e45f-8c94-50fa470d415d" class="small-line white"></div>
          <div data-w-id="248dc501-904e-e45f-8c94-50fa470d415e" class="small-line v2 white"></div>
          <div data-w-id="248dc501-904e-e45f-8c94-50fa470d415f" class="small-line v3 white"></div>
          <div data-w-id="248dc501-904e-e45f-8c94-50fa470d4160" class="small-line v4 white"></div>
        </div>
        <div data-w-id="72915fd4-af08-53fc-1418-f0324e56a688" class="mountain-climbing no-rotation triangular">
          <div class="triangle white"></div>
          <div class="triangle v2 white"></div>
        </div>
        <div data-w-id="2c7871cf-3e73-81a9-0b9a-fab201e1e66e"
          style="-webkit-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
          class="treasure-huntingz flexed treasure-hunting">
          <div class="circle white"></div>
        </div>
        <div data-w-id="1ece5bda-2a5e-a4d5-9c22-6c602c7674d6"
          style="-webkit-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
          class="fishing-v2 flexed no-rotation fishing">
          <div class="half-circle white"></div>
          <div class="half-circle rotated white"></div>
        </div>
        <div data-w-id="9e67fe02-30b2-3a7f-d3cf-c32083ff3040"
          style="-webkit-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(0) translateZ(0) scaleX(0) scaleY(0) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
          class="kayaking flexed no-rotation">
          <div class="half-circle rotated v3 white"></div>
          <div class="half-circle rotated v2 white"></div>
        </div>
      </div>
      <div data-duration-in="500" data-duration-out="500" class="tabs-parent w-tabs">
        <div class="tabs-menu w-tab-menu">
          <a data-w-tab="Tab 1" data-w-id="fb1d9f22-7f68-c693-457b-2880656b3e24"
            class="tabs w-inline-block w-clearfix w-tab-link w--current">
            <div class="activity-icon full flexed">
              <div class="small-line"></div>
              <div class="small-line v2"></div>
              <div class="small-line v3"></div>
              <div class="small-line v4"></div>
            </div>
            <div class="tab-text">WHAT IS CA?</div>
          </a>
          <a data-w-tab="Tab 2" data-w-id="fb1d9f22-7f68-c693-457b-2880656b3e27"
            class="tabs w-inline-block w-clearfix w-tab-link">
            <div data-w-id="cd79634e-886a-94b2-c568-cf5684f84ad1" class="activity-icon">
              <div class="dot _2"></div>
              <div class="dot _3"></div>
              <div class="dot"></div>
            </div>
            <div data-w-id="fb1d9f22-7f68-c693-457b-2880656b3e28" class="tab-text">WHY CA?</div>
          </a>
          <!-- <a data-w-tab="Tab 3" data-w-id="fb1d9f22-7f68-c693-457b-2880656b3e2a"
            class="tabs w-inline-block w-clearfix w-tab-link">
            <div class="activity-icon no-rotation">
              <div class="triangle"></div>
              <div class="triangle v2"></div>
            </div>
            <div class="tab-text">Mountain Biking</div>
          </a>
          <a data-w-tab="Tab 4" data-w-id="5175a094-f1bf-e5cd-738c-8ebb1f0eb2b5"
            class="tabs w-inline-block w-clearfix w-tab-link">
            <div class="activity-icon flexed">
              <div class="circle"></div>
            </div>
            <div class="tab-text">Treasure Hunting</div>
          </a>
          <a data-w-tab="Tab 5" data-w-id="b86a86fa-1164-775a-8db7-078e03cdb995"
            class="tabs w-inline-block w-clearfix w-tab-link">
            <div class="activity-icon flexed no-rotation">
              <div class="half-circle"></div>
              <div class="half-circle rotated"></div>
            </div>
            <div class="tab-text">Fishing</div>
          </a>
          <a data-w-tab="Tab 6" data-w-id="ccaa2d7c-00f7-5651-33e8-f1ac052f0dd8"
            class="tabs w-inline-block w-clearfix w-tab-link">
            <div class="activity-icon flexed no-rotation">
              <div class="half-circle rotated v3"></div>
              <div class="half-circle rotated v2"></div>
            </div>
            <div class="tab-text">Kayaking</div>
          </a> -->
        </div>
        <div class="tabs-content w-tab-content">
          <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
            <div>
              <h2 data-w-id="992b764d-60da-33d0-e75a-88d7a86b7f83"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="heading purple">WHAT IS CA?</h2>
              <p data-w-id="8a5b4391-640a-59d5-4791-7a54d221fa86"
                style="opacity:0;-webkit-transform:translateX(0) translateY(30%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(30%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(30%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(30%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
                class="paragraph-2">The Campus Ambassador program is one of the leading publicity programs of Anwesha.
                The promotion of the fest in the respective colleges is assigned to the campus ambassadors. They serve
                as the intermediaries who bridge the gap between their college and our campus i.e, as a nodal point for
                any kind of communication or promotion. Campus ambassadors act as the face of one of the biggest
                techno-management festival in the entire North-East India and are entrusted with the job of increasing
                the outreach of the fest through on field and social media publicity. The campus ambassadors are
                entitled to exciting prizes, apart from the coveted certificate and many other goodies.</p>
            </div>
          </div>
          <div data-w-tab="Tab 2" class="w-tab-pane">
            <div>
              <h2 data-w-id="52df5361-a41e-5a1f-d9f7-62f7a7cf9c78"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="heading purple">WHY CA?</h2>
              <p data-w-id="52df5361-a41e-5a1f-d9f7-62f7a7cf9c7a"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="paragraph-2">This is an extremely edifying opportunity where one gets to improve their oratory
                skills and managerial skills by interacting with people and encouraging them to take part in a fest of
                such huge grandeur. Apart from being advantageous on both personal and managerial grounds, working as a
                CA also comes with the additional perks of being conferred with an assured certificate from Anwesha, IIT
                Patna validating your work as a campus ambassador. Not to forget are the exhilaratinging prizes and
                goodies that a CA receives. </p>
            </div>
          </div>
          <!-- <div data-w-tab="Tab 3" class="w-tab-pane">
            <div>
              <h2 data-w-id="c5f2fa10-6a10-eca6-c3a9-50b9a460e76c"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="heading purple">Mountain Biking</h2>
              <p data-w-id="c5f2fa10-6a10-eca6-c3a9-50b9a460e76e"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="paragraph-2">Epic ascents and views make for an epic decent down the Sierras.</p>
            </div>
          </div>
          <div data-w-tab="Tab 4" class="w-tab-pane">
            <div>
              <h2 data-w-id="823af2c2-08e2-03dd-07d6-774efb34c3d6"
                style="opacity:0;-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
                class="heading purple">Treasure Hunting</h2>
              <p data-w-id="823af2c2-08e2-03dd-07d6-774efb34c3d8"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="paragraph-2">You read the section above right? <br>Who doesn&#x27;t love treasure?</p>
            </div>
          </div>
          <div data-w-tab="Tab 5" class="w-tab-pane">
            <div>
              <h2 data-w-id="67fba847-a459-6250-3520-7be17691501b"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="heading purple">Fishing</h2>
              <p data-w-id="67fba847-a459-6250-3520-7be17691501d"
                style="opacity:0;-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
                class="paragraph-2">I&#x27;m on the hook to write about fishing.<br>I don&#x27;t fish so I better reel
                in my<br>puns. Seriously, Dann is going to<br>tackle me for how fishy this<br>description is.</p>
            </div>
          </div>
          <div data-w-tab="Tab 6" class="w-tab-pane">
            <div>
              <h2 data-w-id="c870dab1-1fdc-76a4-b86c-8c6e8488919f"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="heading purple">Kayaking</h2>
              <p data-w-id="c870dab1-1fdc-76a4-b86c-8c6e848891a1"
                style="-webkit-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(50%) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0"
                class="paragraph-2">Explore the grandeur of Yosemite with a refreshing padding. </p>
            </div>
          </div> -->
        </div>
      </div>
    </div><img src="images/girl.png" data-w-id="dd6f9761-ad55-7c0f-5af1-032f57f5797a" class="bg-image">
  </div>
  <div class="section creative-challenge">
    <div class="container less-top-copy w-container">
      <h1 class="heading-4">CA's EXPERIENCE</h1>
      <div class="row w-row">

        <div class="column-4 w-col w-col-4 w-col-stack">
          <p class="white-paragraph">Anwesha .. whenever I think about it...the word comes in my mind is....#teamwork &
            path provider of talents..Before anwesha...I was just a boy in my college...but when I participated in 2k17
            addition..i got a chance to work & perform with super talented guys.. now..it's just because of Anwesha..I
            am cultural Coordinator of my College..In short it brings ...a revolutionary changes in my life... Thanks
            team anwesha
          </p>
          <h4 class="heading-4"> ~ Aryan S Prince</h4>
        </div>
        <div class="column-4 w-col w-col-4 w-col-stack">
          <p class="white-paragraph">Hello IITP, I remember I went Anwesha when I was in the first year of my college
            .I was scared but yeah that experience pulled me again and again and Anwesha 2K18 was my third year in a
            row.And this year was Damn amazing..The theme was magical ..The environment was spellbinding. And Yeah The
            thing you guys implemented this year this College ambassador thing was really great idea.. I really
            enjoyed working and sharing the notifications of Anwesha 2k18 In between of those times sometimes I
            started feeling like I am the part of the Team and yeah It was great being a part of such great
            environment and such enthusiastic People.. Anwesha is not just a college fest it feels like it's a
            Festival that comes every year and we all celebrate it together.. 🖤
          </p>
          <h4 class="heading-4">~ Mridul Choudhary</h4>
        </div>
        <div class="column-4 w-col w-col-4 w-col-stack">
          <p class="white-paragraph">As you mentioned Anwesha the biggest techno-cultural fest of north-east India being
            a campus ambassador for it was an amazing experience.You'll organised the whole function perfectly.I not
            only enjoyed being working as the campus ambassador but also enjoyed your fest.The participants from my
            college were also very happy by your organisation.Hope to continue to work with you all more as i gained a
            good experience. Thank you for selecting me as the campus ambassador of my college.
          </p>
          <h4 class="heading-4">~ Kamal Kant</h4>
        </div>
      </div>
    </div>

    <!-- <div class="container less-padding w-container">
      <div data-w-id="8f6c555b-ba25-0aa2-6d94-aa1e3b4f7303" class="row-2 w-row">
        <div class="w-col w-col-4"><img src="images/sarah0.jpg"
            srcset="images/sarah0-p-500.jpeg 500w, images/sarah0-p-800.jpeg 800w, images/sarah0-p-1080.jpeg 1080w, images/sarah0.jpg 1090w"
            sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 31vw">
          <div class="judge-heading">Sarah Kuehnle</div>
          <a href="https://www.ursooperduper.com/" target="_blank" data-w-id="2d3ffd0e-984c-f770-4e7c-096e80af0f45"
            class="div-block-4 shortened full w-inline-block">
            <div class="centered-hero-text all-caps">About Sarah</div>
            <div class="link-line short"></div>
          </a>
        </div>
        <div class="w-col w-col-4"><img src="images/zhenya0.jpg"
            srcset="images/zhenya0-p-500.jpeg 500w, images/zhenya0-p-800.jpeg 800w, images/zhenya0-p-1080.jpeg 1080w, images/zhenya0.jpg 1090w"
            sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 31vw">
          <div class="judge-heading">ZHENYA RYNZHUK</div>
          <a href="https://dribbble.com/Zhenya_Artem" target="_blank" data-w-id="927a6449-437f-4359-a2ba-ad9374c57da2"
            class="div-block-4 shortened full w-inline-block">
            <div class="centered-hero-text all-caps">About ZHENYA</div>
            <div class="link-line short"></div>
          </a>
        </div>
        <div class="w-col w-col-4"><img src="images/pablo0.jpg"
            srcset="images/pablo0-p-500.jpeg 500w, images/pablo0-p-800.jpeg 800w, images/pablo0-p-1080.jpeg 1080w, images/pablo0.jpg 1084w"
            sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 31vw">
          <div class="judge-heading">Pablo Stanley</div>
          <a href="https://www.pablostanley.com/" target="_blank" data-w-id="26af2df1-ee2f-c8df-94a3-57523db78e70"
            class="div-block-4 shortened full w-inline-block">
            <div class="centered-hero-text all-caps">About Pablo</div>
            <div class="link-line short"></div>
          </a>
        </div>
      </div>
    </div> -->
  </div>
  <!-- <div class="section">
    <div class="container mega-padded w-container"></div>
    <div class="bottom-image-section"><img src="images/fireplace.png" width="800"
        srcset="images/fireplace-p-500.png 500w, images/fireplace.png 1600w" sizes="74vw" class="campfire-image"></div>
    <a href="https://dribbble.com/ursooperduper" target="_blank" class="left-side-link hero-link v2 w-inline-block">
      <div class="text-block-4 taller biggest">*Project DIrection By <span class="text-span">Sarah</span></div><img
        src="images/sarah15x.png" width="34.5" class="image-6">
    </a>
  </div> -->
  <!-- <div class="section">
    <div class="container less-top-bottom w-container">
      <div class="number">04</div>
      <div class="row w-row">
        <div class="column w-col w-col-4">
          <h1>Nightly<br>Discussions</h1>
        </div>
        <div class="column-2 left w-col w-col-4">
          <p>Each night, we’ll gather together for inspiring talks with fellow creatives. No slides. No agendas. So
            settle in with your new friends and listen to</p>
        </div>
        <div class="column-3 w-col w-col-4">
          <p>nightly chats with industry leaders who share incredibly personal stories of their careers, struggles, and
            triumphs.</p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="section">
    <div data-poster-url="videos/epicurrence-video-bg-smallest-poster-00001.jpg"
      data-video-urls="videos/epicurrence-video-bg-smallest-transcode.webm,videos/epicurrence-video-bg-smallest-transcode.mp4"
      data-autoplay="true" data-loop="true" data-wf-ignore="true"
      class="background-video w-background-video w-background-video-atom"><video autoplay="" loop=""
        style="background-image:url(&quot;videos/epicurrence-video-bg-smallest-poster-00001.jpg&quot;)" muted=""
        data-wf-ignore="true">
        <source src="videos/epicurrence-video-bg-smallest-transcode.webm" data-wf-ignore="true">
        <source src="videos/epicurrence-video-bg-smallest-transcode.mp4" data-wf-ignore="true"></video>
      <div class="container mega-padded-copy w-container">
        <div class="number centered">How we did it in 2016</div>
      </div>
    </div>
  </div> -->
  <!-- <div class="section">
    <div class="container w-container">
        <p class="paragraph" style="background-color: #fff;color: #000;padding: 10px;width: 100px;text-align: center;">Leaderboard</p>
    </div>
  </div> -->
  <div class="section">
    <div class="container w-container">
      <div class="row flexed w-row">
        <div class="column w-col w-col-8">
          <!-- <h2 class="large-heading">Let&#x27;s Make <br>Some Fun.</h2>
          <h2 class="heading larger">August 27-30<br>Yosemite National Park</h2> -->
          <div class="section padded"><img src="images/WEB2.png" width="262"
              data-w-id="0a73fde8-f703-9e3a-e9e2-fbfb3a57424e" class="image-3 v2">
            <h3 class="mega-heading">THINK<br>DREAM<br>LIVE</h3>
          </div>
        </div>
        <div class="column-2 w-col w-col-4">
        <?php if($loggedIn){ ?>
          <a class="mostrandomshittyname" href="../backend/user/profile.php">
            Profile
          </a>
          <a class="mostrandomshittyname" href="../backend/user/logout.php">
          Logout
          </a>
          <?php }else{ ?>
          <a class="mostrandomshittyname" href="../backend/user/signin.php">
          Sign In
          </a>
          <a class="mostrandomshittyname" href="../backend/user/casignin.php">
          Sign Up
          </a>
          <a class="mostrandomshittyname" href="../pdfs/CA_rulebook.pdf" download>Download CA rulebook</a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="container footer w-container" style="padding: 0 20px 50px 20px;">
      <div class="flex-footer">
        <div class="left-side">
          <a href="https://www.facebook.com/anwesha.iitpatna/" data-w-id="a94e6ebb-78da-8e9c-c601-d995d2cff111"
            class="div-block-4 shortened full w-inline-block" style="margin-right: 8px;">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/anwesha.iitp/" data-w-id="a94e6ebb-78da-8e9c-c601-d995d2cff111"
            class="div-block-4 shortened full w-inline-block" style="margin-right: 8px;">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/company/anweshaiitp/" data-w-id="a94e6ebb-78da-8e9c-c601-d995d2cff111"
            class="div-block-4 shortened full w-inline-block" style="margin-right: 8px;">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="mailto:coordinator@anwesha.info" data-w-id="6ad6d24a-2e99-44a4-0846-c5827141b1d7"
            class="div-block-4 shortened full margined w-inline-block">
            <div class="centered-hero-text all-caps full">coordinator@anwesha.info</div>
            <div class="link-line short fullen"></div>
          </a>
        </div>
        <div class="right-side"><img src="images/logo_favi.png" width="111" class="image-8"></div>
      </div>
    </div>
  </div>
  <!-- <div data-w-id="da42005d-6369-46bb-b6b1-401f0cef7df2" style="display:none;opacity:1" class="modal__parent">
    <div data-w-id="da42005d-6369-46bb-b6b1-401f0cef7df3" class="modal__bg"></div>
    <div data-w-id="da42005d-6369-46bb-b6b1-401f0cef7df4"
      style="-webkit-transform:translateX(0) translateY(0) translateZ(0) scaleX(0.5) scaleY(0.5) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(0) translateY(0) translateZ(0) scaleX(0.5) scaleY(0.5) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(0) translateY(0) translateZ(0) scaleX(0.5) scaleY(0.5) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(0) translateY(0) translateZ(0) scaleX(0.5) scaleY(0.5) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0)"
      class="modal__container">
      <h3 class="modal__heading">Thanks for Visiting!</h3>
      <p>This is a rebuild of the incredible creative effort by the team behind Epicurrence. <a
          href="https://www.youtube.com/watch?v=dGsP5q9DgnQ&feature=youtu.be" class="small-link"
          target="_blank">Here&#x27;s a link to the rebuild video 🎥</a>. Feel free to share it below if you enjoyed
        your visit 😄⛰️☀️</p>
      <div class="w-embed w-script"><a href="" class="w-button button large" style="display:inline-block;"
          onclick="return tweet()">SHARE THIS PAGE ON TWITTER ➞</a>
        <script type="text/javascript">
          function tweet() {
            var u = "https://codepen.io/waldo/project/full/XmPdyE/";
            var t = "Check out this @epicurrence website rebuild by @waldobroodryk #MadeInWebflow 😄";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(u) + '&text=' + encodeURIComponent(t), 'twitsharer', 'toolbar=0,status=0,width=626,height=436');
            return false;
          } 
        </script>
      </div>
      <div data-w-id="da42005d-6369-46bb-b6b1-401f0cef7dfa" class="close-button">+</div>
    </div>
  </div> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>