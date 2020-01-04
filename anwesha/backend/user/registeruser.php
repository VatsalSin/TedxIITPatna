<?php include("functions/init.php");
// redirect("../../comingsoon");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Anwesha 2k20| SignUp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Comfortaa:400,700'>
  <link rel="stylesheet" href="./css/signup.css">
  <link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="./images/favicon.ico" rel="apple-touch-icon">
</head>

<body>


  <div class="container">
    <div id="login" class="login">
      <div class="login-icon-field">
        <div class="login-icon">
          <img src="./images/logo_favi.png" alt="Anwesha" width="100%">
          <h3 style="text-align: center;">Register for Anwesha2k20</h3>
        </div>
        <?php display_message() ?>
        <div style="position: relative; z-index: 9">
          <?php validate_user_registration() ?>
        </div>
      </div>
      <form method="POST" id="signup-form">
        <div class="login-form">
          <div class="username-row row">
            <input class="white-text" required type="text" placeholder="FirstName" name="first_name" id="first_name" />
          </div>
          <div class="username-row row">
            <input class="white-text" required type="text" placeholder="LastName" name="last_name" id="last_name" />
          </div>
          <div class="username-row row">
            <input class="white-text" required type="text" placeholder="Email" name="email" id="email" />
          </div>
          <div class="username-row row">
            <input class="white-text" required type="number" placeholder="Phone Number" name="phone" id="phone" />
          </div>
          <div class="username-row row">
            <input class="white-text" required type="text" placeholder="School/College" name="college" id="college" />
          </div>
          <div class="username-row row">
            <input class="white-text input" required type="password" placeholder="Password" name="password" id="password" />
          </div>
          <div class="username-row row">
            <input class="white-text input" required type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" />
          </div>
          <div class="username-row row">
            <input class="white-text input" type="text" placeholder="Enter ReferralId(OPTIONAL)" name="referral_id" id="referral_id" />
          </div>
          <div class="gender-row row">
            <input class="rdo" type="radio" value="m" name="gender" required>Male<br><br>
            <input class="rdo" type="radio" value="f" name="gender">Female<br><br>
            <input class="rdo" type="radio" value="o" name="gender">Other
          </div>
        </div>
        <div class="call-to-action">
          <p>Password must contain an uppercase, a lowercase, a number and minimum 8 characters.</p><br>
          <button id="login-button" type="submit">Sign Up</button>
          <p>Already have an account ? <a href="./signin.php">Sign in now !!</a></p>
        </div>
      </form>
    </div>
  </div>
  <!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js'></script>
  <script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js'></script>
  <script src="./js/signup.js"></script>

</body>

</html>