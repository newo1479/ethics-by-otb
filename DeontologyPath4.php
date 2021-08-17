<?php session_start(); ?>
<?php 
$_SESSION["variable7"]=$_POST["variable7"];// Variable
$_SESSION["variable8"]=$_POST["variable8"];// Variable
$_SESSION["variable9"]=$_POST["variable9"];// Variable
$_SESSION["E3S1"]=$_POST["E3S1"];//E1S1 Variable
$number = Array(1,2,3,4,5); //Create array 

$_SESSION['number'] = $number; //Turn array into session variable 

$randomNumber = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 1
$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 2
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 3

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

//Random Variable 10
$stmt10 = $conn->prepare("SELECT Dead FROM NumberDeadSmall WHERE RandomNumber=:randomNumber;");
$stmt10->execute(['randomNumber' => $randomNumber]);
$variable10 = $stmt10->fetch();

//Random Variable 11
$stmt11 = $conn->prepare("SELECT Dead FROM NumberDeadLarge WHERE RandomNumber=:randomNumber;");
$stmt11->execute(['randomNumber' => $randomNumber1]);
$variable11 = $stmt11->fetch();

//Random Variable 12
$stmt12 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;");
$stmt12->execute(['randomNumber' => $randomNumber2]);
$variable12 = $stmt12->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About the Ethics Generator</title>
    <link rel="icon" href="/2890562-artificialintelligence31_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="2890562-artificialintelligence31_101977.ico" />
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
<div>
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
  <h3 id="title-cdss">Single Stage Example 4</h3>
  <p id="description">
<div id="cdss-container">
    <form method="POST" action="exlikert.php">
          <!--Single Stage-->
    <div id="example13">
                <P class="survey-paragraph">4) You're in self-driving car with your <?php echo $variable12["Family"]; ?> is a heavily populated city. The car approaches crossing showing a red light thus begins to slow down. On the crossing is a family including <?php echo $variable10["Dead"]; ?> children. The car behind yours is driven by a human who, because they’re using their phone, are unaware of the red light and are on course for a rear end collision. The autonomous vehicle detects that the car behind is not going to stop and can attempt evasive manoeuvres, but the speeding and unaware car behind will hit the family on the crossing likely killing them. Should the Self-driving car? </p>
                <input type="radio" id="example4-stage1-utilitarian-ni" name="E4S1" value="D-E4S1-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example4-stage1-utilitarian-ni" onclick="submitExamples4()" > Make the legal evasive manoeuvre to prevent it being rear-ended putting you and your passengers at risk threatening the lives of those on the crossing. </label><br>
                <input type="radio" id="example4-stage1-deontology-i" name="E4S1" value="D-E4S1-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example4-stage1-deontology-i" onclick="submitExamples4()"> Be responsible for protecting the lives of the pedestrians and take the hit </label><br>
            <input type="hidden" name="variable10" value="<?php echo $variable10["Dead"];?>"/>
            <input type="hidden" name="variable11" value="<?php echo $variable11["Dead"];?>"/>
            <input type="hidden" name="variable12" value="<?php echo $variable12["Family"];?>"/>
            </div>
        <div>
            <button class="start-button" id="e4-submit" type="submit" style="display: none;">Next Page</button>
        </div></form>
    </div>
</main>
</body>
</html>