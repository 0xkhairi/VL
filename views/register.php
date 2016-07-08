<?php include ('../includes/header.php') ?>


<!-- Nav begin -->
<?php include ("../includes/navigation.php"); ?>

<div class="page-wrapper">
  <div class="row page-container register-page-container">
    <div class="col-md-12">
      <div class="container register-container">
        <?php

                  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  if(strpos($url, 'error=empty') !== false){
                      echo "<h3 class=\"alert alert-danger\" role=\"alert\">Don't leave blank fields !</h3>";
                  }
                  elseif (strpos($url, 'error=username')) {
                    echo "<h3 class=\"alert alert-danger\" role=\"alert\">Username already exists</h3>";
                  }
                  // elseif(strpos($url, 'error=pwdverify')){
                  //       echo "";
                  // }

                  if (isset($_SESSION['id'])) {
                        header("Location: index.php");
                    }
                    else{
                        echo '<div class="panel panel-default">
                  <div class="panel-heading">Register</div>
                    <div class="panel-body">

                      <form action="../includes/register.inc.php" class="register-form" method="POST">
                          
                        <label for="firstName" class="control-label">Name :</label>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" placeholder="First" id="firstName" class="form-control" name="first" required/>
                            </div>

                            <div class="col-md-6">
                              <input type="text" placeholder="Last" id="lastName" class="form-control" name="last" required/>
                            </div>
                          </div>
                        

                        <label for="username" class="control-label">Username :</label>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" placeholder="Username" id="username" class="form-control" name="uid" required/></div>
                          </div>  




                        <label for="email" class="control-label">Email :</label>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="email" placeholder="Email" id="email" class="form-control" name="email" required/></div>
                          </div>

                            <label for="pass" class="control-label">Password :</label>

                            <div class="row">
                              <div class="col-md-6">
                                <input type="Password" placeholder="Password" id="pass" class="form-control" name="pwd" required/>
                              </div>

                              <div class="col-md-6" id="pwd2">
                                <input type="Password" placeholder="Verfiy Password" id="verifyPass" class="form-control" name="pwd2" required/>
                              </div> 

                              <input type="submit" value="Register" class="cmp-reg-btn"/>
                              <input type="submit" value="Cancel" class="cancel-btn"/>

                            </div>
                      </form>

                    </div>

                </div>';
                    }

               ?>
      </div>
    </div>
  </div>
</div>

    
<?php include ('../includes/footer.php') ?>
