<?php 
    include("../backend/user/functions/init.php"); 
    $loggedIn = logged_in();
    $celestaid=""; $access_token="";
    if(logged_in()){
      $celestaid = $_SESSION['celestaid'];
      $access_token=$_SESSION['access_token'];
    }
?>

<?php
  $param=$_GET['data'];

  // $service_url = 'http://localhost/celesta2k19-webpage/backend/admin/functions/events_api.php';
  $service_url = 'https://celesta.org.in/backend/admin/functions/events_api.php';
  $curl = curl_init($service_url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $curl_response = curl_exec($curl);
  if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
  }
  curl_close($curl);
  $data = json_decode($curl_response, true);

  $events=array();
  foreach($data as $d){
    if($d['ev_category']==ucfirst($param)){
      array_push($events,$d);
    }
  }
  $filters="";
  if($param=="events"){
    $filters='
      <li data-filter=".filter-TECH">TECH</li>
      <li data-filter=".filter-NON-TECH">NON-TECH</li>
      <li data-filter=".filter-CODING">CODING</li>
      <li data-filter=".filter-MANAGEMENT">MANAGEMENT</li>
      <li data-filter=".filter-ROBOTICS">ROBOTICS</li>
    ';
  }elseif($param=="schoolevents"){
    $filters='
      <li data-filter=".filter-TECH">TECH</li>
      <li data-filter=".filter-NON-TECH">NON-TECH</li>
      <li data-filter=".filter-ROBOTICS">ROBOTICS</li>
    ';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Celesta'19</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Projects Bootstrap CSS File -->
  <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/bg.css" />

      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151382188-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-151382188-1');
  </script>

  <link rel="stylesheet" href="./css/menu-styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <style>
   .sec_head h3{
     color:white;
   }
  </style>

</head>

<body>

  <div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner bgTop">
      <!-- <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div> -->
    </div>
    <div class="waveWrapperInner bgMiddle">
      <!-- <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div> -->
    </div>
    <div class="waveWrapperInner bgBottom">
      <!-- <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div> -->
    </div>
  </div>
  <!--==========================
      Gallery Section
    ============================-->

  <section id="gallery" class="section-bg">
    <div class="container">
      <header class="section-header sec_head">
        <h3 class="section-title">Celesta Events</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="gallery-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php echo $filters ?>
          </ul>
        </div>
      </div>

      <div class="row gallery-container">

        <?php foreach($events as $e) { ?>
          <div class="col-lg-4 col-md-6 gallery-item filter-<?php echo $e['ev_club']?>" data-tilt>
            <div class="gallery-wrap">
              <a href="./eventsdetails.php?id=<?php echo $e['ev_id']?>">
              <figure>
                <img src="<?php echo $e['ev_poster_url']?>" class="img-fluid" alt="" />
                <a href="./eventsdetails.php?id=<?php echo $e['ev_id']?>" data-lightbox="gallery" data-title="Club 1" title="Preview"></a>
              </figure>
              </a>

              <div class="gallery-info">
                <h4><?php echo $e['ev_name']?></h4>
                <p>
                  <a class="btn" style="color: #fff; background: rgb(148,0,211,.8); font-size: 12px" href="./eventsdetails.php?id=<?php echo $e['ev_id']?>">More Details</a> 
                  <?php if($loggedIn){?>
                    <?php if (!$e['is_team_event']) { ?>
                      <a class="btn btn-success" style="color: #fff; background: rgb(139,0,139,.8); font-size: 12px" href="./eventsdetails.php?id=<?php echo $e['ev_id']?>">Register Event</a>
                    <?php } else { ?>
                      <a class="btn btn-success" style="color: #fff; background: rgb(139,0,139,.8); font-size: 12px" href="./eventsdetails.php?id=<?php echo $e['ev_id']?>">Register Team Event</a>
                    <?php } ?>
                  <?php }else{?>
                    <a class="btn" style="color: #fff; background: 	rgb(139,0,139,.8); font-size: 12px" href="./../backend/user/login.php?redirecteventsdata=<?php echo $param?>">Login to Register</a>
                  <?php }?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>

  <!-- tilt js -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="../_compiled/tilt.jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="./js/menu-main.js"></script>
  <!-- #gallery -->

  <!--gallery JavaScript Libraries -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/jquery/jquery-migrate.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./lib/superfish/hoverIntent.js"></script>
  <script src="./lib/superfish/superfish.min.js"></script>
  <script src="./lib/wow/wow.min.js"></script>
  <script src="./lib/waypoints/waypoints.min.js"></script>
  <script src="./lib/counterup/counterup.min.js"></script>
  <script src="./lib/isotope/isotope.pkgd.min.js"></script>
  <script src="./lib/lightbox/js/lightbox.min.js"></script>
  <script src="./lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>