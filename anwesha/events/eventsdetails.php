<?php
  include("../backend/user/functions/init.php");
  $loggedIn = logged_in();
  $celestaid = "";
  $access_token = "";
  if (logged_in()) {
    $celestaid = $_SESSION['celestaid'];
    $access_token = $_SESSION['access_token'];
  }

  $id = $_GET['id'];
  // $service_url = 'http://localhost/celesta2k19-webpage/backend/admin/functions/events_api.php';
  $service_url = 'https://celesta.org.in/backend/admin/functions/events_api.php';
  $curl = curl_init($service_url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $curl_response = curl_exec($curl);
  if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('Error occured during curl exec. Additioanl info: ' . var_export($info));
  }
  curl_close($curl);
  $data = json_decode($curl_response, true);
  $event;
  foreach ($data as $d) {
    if ($d['ev_id'] == $id) {
      $event = $d;
    }
  }

  $current_event=null;
  $event_amount=$event['ev_amount'];
  $amount_paid;
  if(logged_in()){
    $profile = user_details($celestaid);
    $user_registered_events = json_decode($profile['events_registered']);
    foreach($user_registered_events as $e){
      if($e->ev_id==$event['ev_id']){
        $current_event=$e;
      }
    }
    if($current_event != null){
      $amount_paid = $current_event->amount;
    }

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <header class="section-header">
        <h3 class="section-title"><?php echo $event["ev_category"] ?>: <?php echo $event["ev_name"] ?></h3>
      </header>
      <br>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <img src="<?php echo $event['ev_poster_url'] ?>" width="100%">
        </div>
        <div class="col-lg-6 col-md-6">
          <h3 style="color: #219999">Name: <span style="color: #fff"><?php echo $event['ev_name'] ?></span></h3>
          <h5 style="color: #219999">Description: <span style="color: #fff"><?php echo $event['ev_description'] ?></span></h5>
          <h5 style="color: #219999">Organiser: <span style="color: #fff"><?php echo $event['ev_organiser'] ?></span></h5>
          <h5 style="color: #219999">Organizer's Phone: <span style="color: #fff"><?php echo $event['ev_org_phone'] ?></span></h5>
          <h5 style="color: #219999">Club: <span style="color: #fff"><?php echo $event['ev_club'] ?></span></h5>
          <h5 style="color: #219999">Date: <span style="color: #fff"><?php echo $event['ev_date'] ?></span></h5>
          <h5 style="color: #219999">Venue: <span style="color: #fff"><?php echo $event['ev_venue'] ?></span></h5>
          <h5 style="color: #219999">Start Time: <span style="color: #fff"><?php echo $event['ev_start_time'] ?></span></h5>
          <h5 style="color: #219999">End Time: <span style="color: #fff"><?php echo $event['ev_end_time'] ?></span></h5>
          <h5 style="color: #219999">Event Prize Money:  <span style="color: #fff"><?php echo $event['ev_prize'] ?></span></h5>
          <?php if($event['is_team_event']){ ?>
            <h5 style="color: #219999">Maximum Team Strength: <span style="color: #fff"><?php echo $event['team_members'] ?></span></h5>
            <h5 style="color: #219999; margin-bottom: 0">Team Registration Amount: <span style="color: #fff">₹<?php echo $event['ev_amount'] ?></span></h5>
          <?php }else{ ?>
            <h5 style="color: #219999">Registration Amount : <span style="color: #fff">₹<?php echo $event['ev_amount'] ?></span></h5>
          <?php } ?>
          <br>
          <a class="btn btn-success" style="color: #fff" href="<?php echo $event['ev_rule_book_url'] ?>">Rulebook</a>
          <?php if ($loggedIn) {
              if (!$event['is_team_event']) { ?>
              <?php if($current_event == null) { ?>
              <button class="btn btn-success" style="color: #fff" id="regEvBtn" onclick="regEvFunc('<?php echo $event['ev_id'] ?>', '<?php echo $celestaid ?>', '<?php echo $access_token ?>')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span> Register Event</button>
              <?php } else { ?>
              <?php if ($event_amount - ($amount_paid) > 0) { ?>
                <form action="http://techprolabz.com/pay/dataFrom.php" method="POST">
                    <input type="text" hidden value="<?php echo $ev->ev_id ?>" name="ev_id">
                    <input type="text" hidden value="<?php echo $celestaid ?>" name="celestaid">
                    <input type="text" hidden value="<?php echo $access_token ?>" name="access_token">
                    <input type="text" hidden value="<?php echo $event_amount ?>" name="ev_amount">
                    <input type="text" hidden value="<?php echo $profile['email'] ?>" name="email">
                    <input type="text" hidden value="<?php echo $profile['phone'] ?>" name="phone">
                    <input type="text" hidden value="<?php echo $profile['first_name'] . ' ' . $profile['last_name'] ?>" name="name">
                    <button type="submit" class="btn btn-primary">Pay Event Fee</button>
                </form>
              <?php } ?>
              <?php } ?>
            <?php } else {?>
              <?php if($current_event == null) { ?>
                <button class="btn btn-success" style="color: #fff" id="regTeamEvBtn" data-toggle="modal" data-target="#regTeamEvModal">Register Team Event</button>
              <?php } else { ?>
                <?php if ($event_amount - ($amount_paid) > 0) { ?>
                  <form action="http://techprolabz.com/pay/dataFrom.php" method="POST">
                      <input type="text" hidden value="<?php echo $ev->ev_id ?>" name="ev_id">
                      <input type="text" hidden value="<?php echo $celestaid ?>" name="celestaid">
                      <input type="text" hidden value="<?php echo $access_token ?>" name="access_token">
                      <input type="text" hidden value="<?php echo $event_amount ?>" name="ev_amount">
                      <input type="text" hidden value="<?php echo $profile['email'] ?>" name="email">
                      <input type="text" hidden value="<?php echo $profile['phone'] ?>" name="phone">
                      <input type="text" hidden value="<?php echo $profile['first_name'] . ' ' . $profile['last_name'] ?>" name="name">
                      <button type="submit" class="btn btn-primary" style="margin: 10px 0">Pay Event Fee</button>
                  </form>
                <?php } ?>
              <?php } ?>
            <?php }
            } else { ?>
            <a class="btn" style="color: #fff; background: 	rgb(139,0,139,.8); font-size: 12px" href="./../backend/user/login.php?redirecteventsdetails=<?php echo $event['ev_id']?>">Login to Register</a>
          <?php } ?>

        </div>
      </div>
    </div>

</div>
</section>

  <!-- modal -->
  <div class="modal fade" id="regTeamEvModal" style="padding-left: 0px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $event['ev_name']?> Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <small>
            <b>Notes:</b><br>
            * A team can consist of only captain if there are no other members in the team.<br>
            * Celesta-ID of team members is required if there are team members.<br>
          </small>
          <br>
          <form id="regTeamEvForm">
          <div class="form-group">
              <label for="member1">Celesta Id Of Team Captain (Member 1)</label>
              <input type="text" class="form-control" name="celestaid" id="celestaid" value="<?php echo $celestaid?>" disabled>
            </div>
            <div class="form-group">
              <label for="member4">Team Name</label>
              <input type="text" class="form-control" name="team_name" id="team_name" required>
            </div>
            <?php $max=$event['team_members']-1; for($i=1;$i<=$max;$i++){ ?>
              <div class="form-group">
                <label for="member1">Celesta Id of member <?php echo $i+1;?></label>
                <input type="text" class="form-control" name="member<?php echo $i;?>" id="member<?php echo $i;?>">
              </div>
            <?php } ?>

            <button type="submit" class="btn btn-primary"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span> Register</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="modalButton">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- toasts -->
  <div class="toastContainer" style="position: absolute; top: 0; right: 0; margin: 20px; z-index: 99999;">
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="./js/menu-main.js"></script>
  <!-- #gallery -->

  <!-- events registration js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="regEv.js"></script>

  <!-- team ev registration js -->
  <script>
    var regTeamEvForm = document.querySelector('#regTeamEvForm');
    regTeamEvForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      let spinner = document.querySelector(".spinner");
      spinner.style.display = "inline-block";
      var celestaid="<?php echo $celestaid?>";
      var eventid="<?php echo $event['ev_id']?>";
      var access_token="<?php echo $access_token?>";
      var team_name=document.querySelector('#team_name').value;
      <?php $max=$event['team_members']-1; for($i=1;$i<=$max;$i++){ ?>
        var member<?php echo $i;?>=document.querySelector('#member<?php echo $i;?>').value;
      <?php } ?>
      <?php $max=$event['team_members']-1; for($i=$max+1;$i<=5;$i++){ ?>
        var member<?php echo $i;?>="";
      <?php } ?>

      // console.log(celestaid, eventid, access_token, team_name, member1, member2, member3, member4, member5);

      let formData = new FormData();
      formData.append("eventid", eventid);
      formData.append("celestaid", celestaid);
      formData.append("access_token", access_token);
      formData.append("team_name", team_name);
      formData.append("member1", member1);
      formData.append("member2", member2);
      formData.append("member3", member3);
      formData.append("member4", member4);
      formData.append("member5", member5);
      let url="https://celesta.org.in/backend/admin/functions/reg_team_event.php";
      // let url="http://localhost/celesta2k19-webpage/backend/admin/functions/reg_team_event.php";
      let res = await fetch(
        url,
        {
          body: formData,
          method: "post"
        }
      );
      res = await res.json();
      spinner.style.display = "none";

      let htmlData = "";
      if (res.status === 302) {
        res.message.forEach(mes => {
          htmlData += `
              <div class="toast fade show" style="z-index: 999">
                  <div class="toast-header bg-warning">
                      <strong class="mr-auto"><i class="fa fa-globe"></i> Warning</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">${mes}</div>
              </div>
              `;
        });
      }
      else if (res.status === 404) {
        res.message.forEach(mes => {
          htmlData += `
              <div class="toast fade show" style="z-index: 999">
                  <div class="toast-header bg-danger">
                      <strong class="mr-auto"><i class="fa fa-globe"></i> Error</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">${mes}</div>
              </div>
              `;
        });
      }
      else if (res.status === 405) {
        res.message.forEach(mes => {
          htmlData += `
              <div class="toast fade show" style="z-index: 999">
                  <div class="toast-header bg-danger">
                      <strong class="mr-auto"><i class="fa fa-globe"></i> Error</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">${mes}</div>
              </div>
              `;
        });
      }
      else if (res.status === 401) {
        res.message.forEach(mes => {
          htmlData += `
              <div class="toast fade show" style="z-index: 999">
                  <div class="toast-header bg-danger">
                      <strong class="mr-auto"><i class="fa fa-globe"></i> Error</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">${mes}</div>
              </div>
              `;
        });
      }
      else if (res.status === 202) {
        location.reload();
        res.message.forEach(mes => {
          htmlData += `
              <div class="toast fade show" style="z-index: 999">
                  <div class="toast-header bg-success">
                      <strong class="mr-auto"><i class="fa fa-globe"></i> Success</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">${mes}</div>
              </div>
              `;
        });
      }
      var toastContainer = document.querySelector(".toastContainer");
      toastContainer.innerHTML = htmlData;
      $(".toast").toast();
      var modalButton=document.querySelector('#modalButton');
      modalButton.click();
    });
  </script>
</body>

</html>