<!-- Nav begin -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>


      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="courses.php">Lessons</a></li>
          <li><a href="#">Code Maker</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">About</a></li>
        </ul>

        <ul class="nav navbar-nav pull-right">

            <?php
                if (isset($_SESSION['id'])) {
                  echo '
                        <li>
                          <a href="../includes/logout.inc.php" class="logout-btn">Logout</a>
                        </li>';
                }
                else{
                  echo '<li><a href="login.php">Sign In</a></li>
                        <li><a href="register.php" class="ghost-btn">Create Account</a></li>';
                }


                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url, '/ar/') !== false){
                  echo '<li><a href="#" class="ghost-btn">English</a></li>';
                }else{
                  echo '<li><a href="#" class="ghost-btn">عربي</a></li>';
                }
            ?>




        </ul>


      </div>

   </div>
</nav>
<!-- EOF Nav -->
