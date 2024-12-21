<?php include 'connect.php'; ?>

<!DOCTYPE html>
<!-- saved from url=(0068)https://www.w3schools.com/w3css/tryw3css_templates_parallax.htm#home -->
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>A05</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./resources/w3.css">
  <link rel="stylesheet" href="./resources/css">
  <link rel="stylesheet" href="./resources/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="https://i.imgur.com/vQVExch.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif;
    }

    body,
    html {
      height: 100%;
      color: white;
      line-height: 1.8;
      background-color: #2A4646;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('https://i.imgur.com/pvGFYoa.jpg');
      min-height: 100%;
    }

    /* Third image (Island) */
    .bgimg-3 {
      background-image: url("https://i.imgur.com/bXeWOnx.jpg");
      min-height: 400px;
    }

    .w3-wide {
      letter-spacing: 10px;
    }

    .w3-hover-opacity {
      cursor: pointer;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 768px) {

      .bgimg-1,
      .bgimg-3 {
        background-attachment: scroll;
        min-height: 400px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hide-small w3-hover-black w3-hide-medium w3-hide-large w3-right"
        href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="../index.html" class="w3-bar-item w3-button">GO BACK</a>
      </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="../index.html" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-medium w3-animate-opacity">ARMA'S <span
          class="w3-hide-small">PERSONALITY</span> ISLANDS</span>
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center w3-black w3-xlarge w3-wide w3-animate-opacity">ABOUT THIS WEBSITE</h3>
    <p class="w3-center"><em>Welcome to my world.</em></p>
    <p class="w3-center">Hey! My name is Aron Riggx M. Ancheta. I am currently studying in Polytechnic University of the
      Philippines - Santo Tomas.
    </p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>This is me!</b></p><br>
        <img src="https://i.imgur.com/DpDgdgn.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off"
          alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large">
        <p>Welcome to my website! This site contains the parts of me I consider the most important. The things I put the
          most effort into and what I consider the most important to me.</p>
        <ul>
          <li>I was born on October 10, 2002. I am currently 22 years old.</li>
          <li>I live in Calamba City, Laguna.</li>
          <li>I enjoy watching movies, listening to music, and creating digital art. I also love the process of coding
            websites ((despite how long I take to make 'em :')) </li>
        </ul>
        <p>But my first love, has always been video games.</p>
        <p>The first game series I played were the Final Fantasy series, Crash Bandicoot series and the Marvel vs Capcom
          fighting series.</p>
        <p>Now I plan to put my experience playing games into the games I'll eventually create, but those are a secret
          for now.</p>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">If I were to give myself a stat sheet from one of those JRPGs, it'd look
      kinda like this:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>Career</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:60%">30%</div>
    </div><br>

    <p class="w3-wide"><i class="fa fa-laptop"></i>Hobbies</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">25%</div>
    </div><br>

    <p class="w3-wide"><i class="fa fa-photo"></i>Relationships</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:20%">10%</div>
    </div><br>

    <p class="w3-wide"><i class="fa fa-photo"></i>Studies</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:70%">35%</div>
    </div><br>
  </div>

  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-third w3-section">
      <span class="w3-xlarge">1</span><br>
      Game Solo Coded
    </div>
    <div class="w3-third w3-section">
      <span class="w3-xlarge">60+</span><br>
      Artworks Done
    </div>
    <div class="w3-third w3-section">
      <span class="w3-xlarge">8</span><br>
      Programming Languages I'm Proficient In
    </div>
  </div>

  <!-- Third Parallax Image with Portfolio Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-medium">PERSONALITY ISLANDS</span>
    </div>
  </div>

  <!-- Container (Island Section) -->
  <br>
  <div class="w3-content w3-center w3-container w3-padding-16" id="island">
    <h3 class="w3-center">The things that make me feel:</h3>
  </div>

  <div class="w3-row w3-center w3-padding-16">
    <div class="w3-quarter w3-section w3-yellow">
      <span class="w3-xlarge">Joy</span>
    </div>
    <div class="w3-quarter w3-section w3-red">
      <span class="w3-xlarge">Anger</span>
    </div>
    <div class="w3-quarter w3-section w3-blue">
      <span class="w3-xlarge">Sadness</span>
    </div>
    <div class="w3-quarter w3-section w3-pink">
      <span class="w3-xlarge">Love</span>
    </div>
  </div>

  <!--Island 1 Start-->
  <?php
  $getQuery = "SELECT * FROM `islandsofpersonality` WHERE islandOfPersonalityID = 1";
  $laimėsSalaResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($laimėsSalaResult)) {
    ?>
    <section class="mb-2" style="background-color:rgb(218, 194, 35);">
      <nav class="navbar mb-3" style="background-color:rgb(253, 171, 28); height: 73px;">
        <div class="container-fluid justify-content-center" style="color: black; font-size: larger;">
          <span><?php echo $row['name'] ?></span>
        </div>
      </nav>

      <p class="w3-center w3-text-black"><em><?php echo $row['shortDescription'] ?></em></p>
      <p class="w3-center w3-text-black"><?php echo $row['longDescription'] ?>
      </p>
      <?php
  }
  ?>

    <?php
    $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 1";
    $laimėsSalaResult = executeQuery($getQuery);

    ?>

    <div class="container">
      <div class="row">
        <?php while ($row = mysqli_fetch_array($laimėsSalaResult)) { ?>
          <div class="col-lg-4 col-md-4 col-sm-12 align-items-stretch mb-3">
            <div class="card text-center" style="border:solid 2px; border-color: #8C7853; border-radius: 2px">
              <div class="container mt-2">
                <img src="<?php echo $row['image'] ?>" class="img-fluid" width="500" height="500"></a>
              </div>
              <div class="card-body">
                <p><?php echo $row['content'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--Island 1 End-->

  <!--Island 2 Start-->
  <?php
  $getQuery = "SELECT * FROM `islandsofpersonality` WHERE islandOfPersonalityID = 2";
  $insulaIraeResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($insulaIraeResult)) {
    ?>
    <section class="mb-2" style="background-color:rgb(220, 24, 10);">
      <nav class="navbar mb-3" style="background-color:rgb(189, 13, 0); height: 73px;">
        <div class="container-fluid justify-content-center" style="color: #ffffff; font-size: larger;">
          <span><?php echo $row['name'] ?></span>
        </div>
      </nav>

      <p class="w3-center w3-text-white"><em><?php echo $row['shortDescription'] ?></em></p>
      <p class="w3-center w3-text-white"><?php echo $row['longDescription'] ?>
      </p>
      <?php
  }
  ?>

    <?php
    $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 2";
    $insulaIraeResult = executeQuery($getQuery);

    ?>

    <div class="container">
      <div class="row">
        <?php while ($row = mysqli_fetch_array($insulaIraeResult)) { ?>
          <div class="col-lg-4 col-md-4 col-sm-12 align-items-stretch mb-3">
            <div class="card text-center" style="border:solid 2px; border-color: #8C7853; border-radius: 2px">
              <div class="container mt-2">
                <img src="<?php echo $row['image'] ?>" class="img-fluid" width="500" height="500"></a>
              </div>
              <div class="card-body">
                <p><?php echo $row['content'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--Island 2 End-->

  <!--Island 3 Start-->
  <?php
  $getQuery = "SELECT * FROM `islandsofpersonality` WHERE islandOfPersonalityID = 3";
  $islaSaKaguolResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($islaSaKaguolResult)) {
    ?>
    <section class="mb-2" style="background-color:rgb(58, 124, 255);">
      <nav class="navbar mb-3" style="background-color:rgb(34, 28, 199); height: 73px;">
        <div class="container-fluid justify-content-center" style="color: #ffffff; font-size: larger;">
          <span><?php echo $row['name'] ?></span>
        </div>
      </nav>

      <p class="w3-center w3-text-black"><em><?php echo $row['shortDescription'] ?></em></p>
      <p class="w3-center w3-text-black"><?php echo $row['longDescription'] ?>
      </p>
      <?php
  }
  ?>

    <?php
    $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 3";
    $islaSaKaguolResult = executeQuery($getQuery);

    ?>

    <div class="container">
      <div class="row">
        <?php while ($row = mysqli_fetch_array($islaSaKaguolResult)) { ?>
          <div class="col-lg-4 col-md-4 col-sm-12 align-items-stretch mb-3">
            <div class="card text-center" style="border:solid 2px; border-color: #8C7853; border-radius: 2px">
              <div class="container mt-2">
                <img src="<?php echo $row['image'] ?>" class="img-fluid" width="500" height="500"></a>
              </div>
              <div class="card-body">
                <p><?php echo $row['content'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--Island 3 End-->

  <!--Island 4 Start-->
  <?php
  $getQuery = "SELECT * FROM `islandsofpersonality` WHERE islandOfPersonalityID = 4";
  $îleDeL’AmourResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($îleDeL’AmourResult)) {
    ?>
    <section class="mb-2" style="background-color:rgb(246, 59, 106);">
      <nav class="navbar mb-3" style="background-color:rgb(212, 17, 73); height: 73px;">
        <div class="container-fluid justify-content-center" style="color: #ffffff; font-size: larger;">
          <span><?php echo $row['name'] ?></span>
        </div>
      </nav>

      <p class="w3-center w3-text-black"><em><?php echo $row['shortDescription'] ?></em></p>
      <p class="w3-center w3-text-black"><?php echo $row['longDescription'] ?>
      </p>
      <?php
  }
  ?>

    <?php
    $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 4";
    $îleDeL’AmourResult = executeQuery($getQuery);

    ?>

    <div class="container">
      <div class="row">
        <?php while ($row = mysqli_fetch_array($îleDeL’AmourResult)) { ?>
          <div class="col-lg-4 col-md-4 col-sm-12 align-items-stretch mb-3">
            <div class="card text-center" style="border:solid 2px; border-color: #8C7853; border-radius: 2px">
              <div class="container mt-2">
                <img src="<?php echo $row['image'] ?>" class="img-fluid" width="500" height="500"></a>
              </div>
              <div class="card-body">
                <p><?php echo $row['content'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--Island 4 End-->

  <!-- Footer -->
  <footer class="w3-center w3-pale-green w3-padding-32 w3-hover-green">
    <a href="index.php" class="w3-button w3-black"><i class="fa fa-arrow-up w3-margin-right"></i>To the
      top</a>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    // Change style of navbar on scroll
    window.onscroll = function () {
      myFunction()
    };

    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>

</html>