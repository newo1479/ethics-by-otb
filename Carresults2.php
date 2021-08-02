<?php session_start(); ?>
<div> <!--Session Variables-->
  <?php 
  //SCENARIO 1 VARIABLES
  $E1S1=$_SESSION["E1S1"];//E1S1 Variable
  $E1S2=$_SESSION["E1S2"];//E1S2 Variable
  $E1S3=$_SESSION["E1S3"];//E1S3 Variable
  //SCENARIO 2 VARIABLES
  $E2S1=$_SESSION["E2S1"];//E2S1 Variable
  $E2S2=$_SESSION["E2S2"];//E2S2 Variable
  $E2S3=$_SESSION["E2S3"];//E2S3 Variable
  //SCENARIO 3 VARIABLES
  $E3S1=$_SESSION["E3S1"];//E3S1 Variable
  $E3S2=$_SESSION["E3S2"];//E3S2 Variable
  $E3S3=$_SESSION["E3S3"];//E3S3 Variable
  //LIKERT VARIABLES
  $L1=$_SESSION["L1"];//L1 Variable
  $L2=$_SESSION["L2"];//L2 Variable
  $L3=$_SESSION["L3"];//L3 Variable
  $L4=$_SESSION["L4"];//L4 Variable
  $L5=$_SESSION["L5"];//L5 Variable
  $L5=$_SESSION["L6"];//L6 Variable
  $L5=$_SESSION["L7"];//L7 Variable
  $L5=$_SESSION["L8"];//L8 Variable
  ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About the Ethics Generator</title>
    <link rel="icon" href="/2890562-artificialintelligence11_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="2890562-artificialintelligence11_101977.ico" />
    <link rel="stylesheet" href="style.css" />   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="carfunctions.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">Ethics Explored</h1></a>
              <!--<img src="Logo1.png" height="50" width="">-->
               <ul>
                <li><a href="index.html">Home</a></li>
          <li><a href="scenarios.html">Scenarios</a></li>
          <li><a href="about.html">About</a></li>
              </ul>
              <div class="clear"></div>
            </nav>
          </header>

</head>
<main>
<div> <!--Breaks-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<div> <!--Thank you statement-->
  <?php //echo "<p class='survey-paragraph'>Thank you for participating in this survey.</p>" ?>
</div>
<div> <!--SQL Login and Query-->
  <?php 
  include('connect.php');
  $conn = connect();
  try{
    //SQL Insert Results
    $sql = "INSERT INTO Carresults (
      e1s1, e1s2, e1s3, e2s1, e2s2, e2s3, e3s1, e3s2, e3s3, s4p1, s4p2, s4p3, s5p1, s5p2, s5p3, l1, l2, l3, l4, l5, l6, l7, l8, age, gender, education) 
      VALUES (
        '$E1S1',
        '$E1S2',
        '$E1S3',
        '$E2S1',
        '$E2S2',
        '$E2S3',
        '$E3S1',
        '$E3S2',
        '$E3S3',
        '$S4P1',
        '$S4P2',
        '$S4P3',
        '$S5P1',
        '$S5P2',
        '$S5P3',
        '$L1',
        '$L2',
        '$L3',
        '$L4',
        '$L5',
        '$L6',
        '$L7',
        '$L8',
        '".$_POST["AGE"]."',
        '".$_POST["gender"]."',
        '".$_POST["education"]."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<p id='title-cdss'>Thank you for participating in this survey.</p>";
  echo "<br>";
  echo "<br>";
  echo "<p class='survey-paragraph'>To participate in the other survey please click Scenarios in the navigation bar. To find out more the project and its developers, please click About in the navigation bar. Otherwise, you may close this window.</p>";
  } catch (PDOException $e) {
     echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
  }
      
  $conn = null; 
  ?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
</div>

</main>
</body>
</html>