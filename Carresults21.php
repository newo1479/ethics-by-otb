<?php session_start(); ?>
<div> <!--Session Variables-->
  <?php 
//Regular VARIABLES
/* //D SCENARIO 1 VARIABLES
  $E1S1=$_SESSION["E1S1"];//E1S1 Variable
  $E1S2=$_SESSION["E1S2"];//E1S2 Variable
  $E1S3=$_SESSION["E1S3"];//E1S3 Variable
  //D SCENARIO 2 VARIABLES
  $E2S1=$_SESSION["E2S1"];//E2S1 Variable
  $E2S2=$_SESSION["E2S2"];//E2S2 Variable
  $E2S3=$_SESSION["E2S3"];//E2S3 Variable
  //D SCENARIO 3 VARIABLE
  $E3S1=$_SESSION["E3S1"];//E3S1 Variable
  //D SCENARIO 4 VARIABLE
  $E4S1=$_SESSION["E4S1"];//E4S1 Variable
  // The Variable Variables
  $variable1=$_SESSION["variable1"];
  $variable2=$_SESSION["variable2"];
  $variable3=$_SESSION["variable3"];
  $variable4=$_SESSION["variable4"];
  $variable5=$_SESSION["variable5"];
  $variable6=$_SESSION["variable6"];
  $variable7=$_SESSION["variable7"];
  $variable8=$_SESSION["variable8"];
  $variable9=$_SESSION["variable9"];
  $variable10=$_SESSION["variable10"];
  $variable11=$_SESSION["variable11"];
  $variable12=$_SESSION["variable12"];
  $variable13=$_SESSION["variable13"];

  //Path variables
  $path1=$_SESSION["path1"];
  $path2=$_SESSION["path2"];

  //LIKERT VARIABLES
  $L1=$_SESSION["L1"];//L1 Variable
  $L2=$_SESSION["L2"];//L2 Variable
  $L3=$_SESSION["L3"];//L3 Variable
  $L4=$_SESSION["L4"];//L4 Variable
  $L5=$_SESSION["L5"];//L5 Variable
  $L6=$_SESSION["L6"];//L6 Variable
  $L7=$_SESSION["L7"];//L6 Variable
  $L8=$_SESSION["L8"];//L6 Variable
  $L9=$_SESSION["L9"];//L6 Variable
  $L10=$_SESSION["L10"];//L6 Variable
  $L11=$_SESSION["L11"];//L6 Variable
  $L12=$_SESSION["L12"];//L6 Variable
  $L13=$_SESSION["L13"];//L6 Variable
  $L14=$_SESSION["L14"];//L6 Variable*/
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
   //Create Table
    $sql = "CREATE TABLE IF NOT EXISTS Carresults3 (
       Responderid int NOT NULL AUTO_INCREMENT,
       pathtaken1 varchar(500),
       e1s1 varchar(500),
       e1s2 varchar(500),
       e1s3 varchar(500),
       variable1 int,
       variable2 int,
       variable3 varchar(500),
       e2s1 varchar(500),
       e2s2 varchar(500),
       e2s3 varchar(500),
       variable4 int,
       variable5 int,
       variable6 varchar(500),
       pathtaken2 varchar(500),
       e3s1 varchar(500),
       variable7 int,
       variable8 int,
       variable9 varchar(500),
       e4s1 varchar(500),
       variable10 int,
       variable11 int,
       variable12 varchar(500),
       variable13 varchar(500), 
       l7 varchar(500),
       l8 varchar(500),
       l9 varchar(500),
       l10 varchar(500),
       l11 varchar(500),
       l12 varchar(500),
       l13 varchar(500),
       l14 varchar(500),
       age varchar(50),
       gender varchar(50),
       education varchar(50),
       result varchar(50),
       PRIMARY KEY(Responderid)
       )";
      $conn->exec($sql);
    /* $sql = "INSERT INTO Carresults3 (
      pathtaken1,
      e1s1,
      e1s2,
      e1s3,
      variable1,
      variable2,
      variable3,
      e2s1,
      e2s2,
      e2s3,
      variable4,
      variable5,
      variable6, 
      pathtaken2,
      e3s1,
      variable7, 
      variable8,
      variable9, 
      e4s1,
      variable10, 
      variable11,
      variable12,
      variable13, 
      l7,
      l8,
      l9,
      l10, 
      l11,
      l12, 
      l13,
      l14,
      age,
      gender,
      education)
      VALUES (
      '$path1',
      '$E1S1',
      '$E1S2',
      '$E1S3',
      '$variable1',
      '$variable2',
      '$variable3',
      '$E2S1',
      '$E2S2',
      '$E2S3',
      '$variable4',
      '$variable5',
      '$variable6',
      '$path2',
      '$E3S1',
      '$variable7',
      '$variable8',
      '$variable9',
      '$E4S1',
      '$variable10',
      '$variable11',
      '$variable12',
      '$variable13',
      '$L7',
      '$L8',
      '$L9',
      '$L10',
      '$L11',
      '$L12',
      '$L13',
      '$L14',
      '".$_POST["AGE"]."',
      '".$_POST["gender"]."',
      '".$_POST["education"]."')";*/
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<p id='title-cdss'>Thank you for participating in this survey.</p>";
  echo "<br>";
  echo "<br>";
  echo "<p class='survey-paragraph'>To participate in the other survey please click Scenarios in the navigation bar. To find out more the project and its developers, please click About in the navigation bar. Otherwise, you may close this window.</p>";
  } catch (PDOException $e) {
     echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete the survey. <br><br>" . $e->getMessage() . "</p>";
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