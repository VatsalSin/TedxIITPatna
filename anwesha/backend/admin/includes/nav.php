<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Anwesha2k20</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php $permit = getPermit()?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php if($permit==1 || $permit==2 || $permit==0) { ?>
      <li class="nav-item">
        <a class="nav-link" href="new_register.php">New Registration<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="total_register.php">Total Registered</a>
      </li>
      <?php }?>

      <?php if($permit==0){ ?>
        <li class="nav-item">
          <a class="nav-link" href="users.php">All Users</a>
        </li>
      <?php }?>
    
    
    <?php if($permit==3 || $permit==0) { ?>
      <li class="nav-item">
        <a class="nav-link" href="cas.php">CA Users</a>
      </li>
       <?php }?>

    <?php 
      if($permit==0 || $permit==2 || $permit==5){?>
      
        <li class="nav-item">
          <a class="nav-link" href="acco.php">Accommodations</a>
        </li>
       <?php }?>

    <?php if($permit==4 || $permit==0){?>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_event.php">Add Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="send_bulk_mail.php">Mail</a>
      </li>
     <?php }?>

      <?php
        if(registrar_logged_in()){
          echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
        }
        else{
          echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
        }
        ?>

    </ul>
  </div>
</nav>