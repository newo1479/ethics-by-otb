<?php session_start(); ?>
<?php 
$_SESSION["E2S1"]=$_POST["E2S1"];//E3S1 Variable
$_SESSION["E2S2"]=$_POST["E2S2"];//E3S2 Variable
$_SESSION["E2S3"]=$_POST["E2S3"];//E3S3 Variable
$_SESSION["variable4"]=$_POST["variable4"];//E2S3 Variable
$_SESSION["variable5"]=$_POST["variable5"];//E2S3 Variable
$_SESSION["variable6"]=$_POST["variable6"];//E2S3 Variable
$number = Array(1,2,3,4,5); //Create array with scenario numbers

$_SESSION['number'] = $number; //Turn array into session variable to allow access across all pages

$randomNumber = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 1
$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 2
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 3

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

//Random Variable 10
$stmt7 = $conn->prepare("SELECT Dead FROM NumberDeadSmall WHERE RandomNumber=:randomNumber;");
$stmt7->execute(['randomNumber' => $randomNumber]);
$variable7 = $stmt7->fetch();

//Random Variable 11
$stmt8 = $conn->prepare("SELECT Dead FROM NumberDeadLarge WHERE RandomNumber=:randomNumber;");
$stmt8->execute(['randomNumber' => $randomNumber1]);
$variable8 = $stmt8->fetch();

//Random Variable 12
$stmt9 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;");
$stmt9->execute(['randomNumber' => $randomNumber2]);
$variable9 = $stmt9->fetch();

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
  <h3 id="title-cdss">Example 3</h3>
  <p id="description">These examples are slighlty different from what you have just completed rather than 3 parts these three questions are single staged.
    <div id="cdss-container">
        <form method="POST" action="exlikert.php">
          <!--Single Stage-->
          <div id="example13">
            <P class="survey-paragraph">5. You are in a self-driving car with two passengers and your <?php echo $variable9["Family"];?> that is driving down a narrow country road. As it drives around a corner there are a family of <?php echo $variable7["Dead"];?> people on a walk with their dog in the road. What should we tell the car to do?</p>
                <input type="radio" id="example3-stage1-utilitarian-ni" name="E5S2" value="D-E3S1-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example3-stage1-utilitarian-ni" onclick="submitExamples4()"> Swerve off the road avoiding the pedestrians but kill all those in the car including yourself and your <?php echo $variable9["Family"];?></label><br>
                <input type="radio" id="example3-stage1-deontology-i" name="E5S2" value="D-E3S1-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example3-stage1-deontology-i" onclick="submitExamples4()"> Continue the present course and hit the pedestrians (killing <?php echo $variable7["Dead"];?> pedestrians) </label><br>
            </div> 
        <input type="hidden" name="variable7" value="<?php echo $variable7;?>"/>
        <input type="hidden" name="variable8" value="<?php echo $variable8;?>"/>
        <input type="hidden" name="variable9" value="<?php echo $variable9;?>"/>
            </div>
            <div>
             <button class="start-button" id="e3-submit" type="submit" style="display: none;">Next Page</button>
            </div></form>
    </div>
</main>
</body>
</html>