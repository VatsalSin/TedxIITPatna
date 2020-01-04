	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Anwesha2k20</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../../../index.html">Home</a></li>
            <li><a href="../../../ca/ca.php">CA</a></li>
            <?php
              if(logged_in()){
                echo "<li><a href='logout.php'>Logout</a></li>";
              }
              else{
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='register.php'>Register</a></li>";
              }

            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>