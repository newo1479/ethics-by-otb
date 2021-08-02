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
    <script src="functions.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">ƎE Ethics Explored</h1></a>
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
  <!--Database connection-->
<?php /*
  require ('connect.php'); 
  $conn = connect(); */
?>
<!--Thank you message-->
<div id="php-cpntainer">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
echo "<p class='survey-paragraph'>Thank you for participating in this survey.</p>";
?>
  </div>
  <!--Create-table-->
<div>
 <?php
$servername = 'dragon.ukc.ac.uk';
$username = 'otb3';
$password = 'rerom6o';
$dbname = 'otb3';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
 /* $sql = "CREATE TABLE IF NOT EXISTS Carresults (
    id INT AUTO_INCREMENT PRIMARY KEY,
    E1S1 VARCHAR(255) NOT NULL,
    E1S2 VARCHAR(255) NOT NULL,
    E1S3 VARCHAR(255) NOT NULL,
    E2S1 VARCHAR(255) NOT NULL,
    E2S2 VARCHAR(255) NOT NULL,
    E2S3 VARCHAR(255) NOT NULL,
    E3S1 VARCHAR(255) NOT NULL,
    E3S2 VARCHAR(255) NOT NULL,
    E3S3 VARCHAR(255) NOT NULL,
    E4S1 VARCHAR(255) NOT NULL,
    E4S2 VARCHAR(255) NOT NULL,
    E4S3 VARCHAR(255) NOT NULL,
    E5S1 VARCHAR(255) NOT NULL,
    E5S2 VARCHAR(255) NOT NULL,
    E5S3 VARCHAR(255) NOT NULL,
    l1 VARCHAR(255) NOT NULL,
    l2 VARCHAR(255) NOT NULL,
    l3 VARCHAR(255) NOT NULL,
    l4 VARCHAR(255) NOT NULL,
    l5 VARCHAR(255) NOT NULL,
    l6 VARCHAR(255) NOT NULL,
    l7 VARCHAR(255) NOT NULL,
    l8 VARCHAR(255) NOT NULL,
    l9 VARCHAR(255) NOT NULL,
    l10 VARCHAR(255) NOT NULL,
    age VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    education VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";*/


  //sql to insert data table
  $sql = "INSERT INTO Carresults (
    E1S1, 
    E1S2, 
    E1S3, 
    E2S1, 
    E2S2, 
    E2S3, 
    E3S1, 
    E3S2, 
    E3S3, 
    E4S1, 
    E4S2, 
    E4S3, 
    E5S1, 
    E5S2, 
    E5S3, 
    L1, 
    L2, 
    L3, 
    L4, 
    L5,
    L6,
    L7,
    L8,
    L9,
    L10, 
    age, 
    gender, 
    education) 
    VALUES (
      '".$_POST["E1S1"]."',
      '".$_POST["E1S2"]."',
      '".$_POST["E1S3"]."',
      '".$_POST["E2S1"]."',
      '".$_POST["E2S2"]."',
      '".$_POST["E2S3"]."',
      '".$_POST["E3S1"]."',
      '".$_POST["E3S2"]."',
      '".$_POST["E3S3"]."',
      '".$_POST["E4S1"]."',
      '".$_POST["E4S2"]."',
      '".$_POST["E4S3"]."',
      '".$_POST["E5S1"]."',
      '".$_POST["E5S2"]."',
      '".$_POST["E5S3"]."',
      '".$_POST["L1"]."',
      '".$_POST["L2"]."',
      '".$_POST["L3"]."',
      '".$_POST["L4"]."',
      '".$_POST["L5"]."',
      '".$_POST["L6"]."',
      '".$_POST["L7"]."',
      '".$_POST["L8"]."',
      '".$_POST["L9"]."',
      '".$_POST["L10"]."',
      '".$_POST["AGE"]."',
      '".$_POST["gender"]."',
      '".$_POST["education"]."')";

  // use exec() because no results are returned
  $conn->exec($sql);
  /*echo "<p class='survey-paragraph'>Table Carresults created successfully";*/
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

</div>
</main>
	</body>
</html>