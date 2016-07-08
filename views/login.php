<?php include ('../includes/header.php') ?>

<!-- Nav begin -->
<?php include ("../includes/navigation.php"); ?>

<div class="container wrapper">
    <?php
          $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          if(strpos($url, 'error=wrong') !== false){
              echo "<h3 class=\"alert alert-danger\" role=\"alert\">Wrong username or password</h3>";
          }
            if (isset($_SESSION['id'])) {
              header("Location: index.php");
              }else{
                    echo '
      <form accept-charset="UTF-8" class="form-signin" action="../includes/login.inc.php" method="POST">

      <h2 class="form-signin-heading">Login and continue learning</h2>

      <input type="text" class="form-control" name="uid" placeholder="Email Address" required="" autofocus="" />

      <input type="password" class="form-control" name="pwd" placeholder="Password" required=""/>

      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>

      <button class="btn login-btn" type="submit">Login</button>
      Or
      <a href="./register.php" class="btn reg-btn">Create Account</a>

    </form>';
              }


      ?>
</div>



<?php include ('../includes/footer.php') ?>
