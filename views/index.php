<?php
include ("../includes/header.php");

include ("../includes/navigation.php"); ?>

<!-- Hero Section -->
  <header class="jumbotron hero">
    <div class="container">
        <div class="intro">
          <h1>
            Learn Programming Interactively.
          </h1>
      </div>

        <h4>
          using c++
        </h4><br>
      <?php

           // Including dbh to connect to DB
           include '../includes/dbh.php';

          if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];  //Storing the user id to use it later on the sql query
            $sql = "SELECT uid FROM users WHERE id='$id'";//Selecting the uid that matches $id
            $result = $conn->query($sql);      // Querying result
            $row = $result->fetch_assoc();   // Fetching the actual query data

            echo 'Welcome Back >  '."<b>".$row['uid']."</b>";  // Printing the fetched $row['uid']
          }
          else{
              echo 'You are not logged in !';
          }

      ?>
        <br>
        <br>
        <a href="#" class="btn">Explore Courses</a><br>
   </div>
</header>   
<!-- /EOF Hero Section -->

  <!-- Lead Info -->
  <div class="container">
    <div class="row info-col">
      <h2 class="info-lead">
        Stages of learning
      </h2>
      <div class="col-md-4 lpart">
        <h3>
          Learn
        </h3><img class="info-feature-img" src=
        "assets/img/learn.png" alt="learning book icon">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. A consequatur incidunt, nobis cumque, ipsum
          nesciunt deserunt id. Porro vero aliquam dolor
          laudantium commodi necessitatibus dolore, accusamus
          autem tempora itaque vel.
        </p>
      </div>
      <div class="col-md-4 epart">
        <h3>
          Execute
        </h3><img class="info-feature-img exeute-icon" src=
        "assets/img/ex.png" alt="exeute icon">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. A consequatur incidunt, nobis cumque, ipsum
          nesciunt deserunt id. Porro vero aliquam dolor
          laudantium commodi necessitatibus dolore, accusamus
          autem tempora itaque vel.
        </p>
      </div>
      <div class="col-md-4 bpart">
        <h3>
          Build
        </h3><img class="info-feature-img build-icon" src=
        "assets/img/build.png" alt="build icon">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. A consequatur incidunt, nobis cumque, ipsum
          nesciunt deserunt id. Porro vero aliquam dolor
          laudantium commodi necessitatibus dolore, accusamus
          autem tempora itaque vel.
        </p>
      </div>
    </div>
  </div>
  <!-- /EOF Lead Info -->


  <!-- Accounts Info -->
  <div class="container-fluid acc-container">
    <div class="row acc-col">

      <h2 class="acc-lead">
        Why Register ?
      </h2>

      <div class="col-md-6">
        <div class="card card-red guest-card">
          <h2 class="card-lead">
            Guest
          </h2>
          <ul class="card-list">
            <li>Access to all Courses
            </li>
            <li>Access to the online compiler
            </li>
            <li>Take tests
            </li>
            <li>Use Code Maker
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-green user-card">
          <h2 class="card-lead">
            User
          </h2>
          <ul class="card-list">
            <li>Access to all Courses
            </li>
            <li>Access to the online compiler
            </li>
            <li>Take tests
            </li>
            <li>Use Code Maker
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /EOF Accounts Info -->


<?php include ('../includes/footer.php'); ?>
