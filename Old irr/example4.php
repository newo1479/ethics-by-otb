<?php session_start(); ?>
<?php 
$_SESSION["E3S1"]=$_POST["E3S1"];//E3S1 Variable
$_SESSION["E3S2"]=$_POST["E3S2"];//E3S2 Variable
$_SESSION["E3S3"]=$_POST["E3S3"];//E3S3 Variable
$_SESSION["variable7"]=$_POST["variable7"];//E2S3 Variable
$_SESSION["variable8"]=$_POST["variable8"];//E2S3 Variable
$_SESSION["variable9"]=$_POST["variable9"];//E2S3 Variable
$number = Array(1,2,3,4,5); //Create array with scenario numbers

$_SESSION['number'] = $number; //Turn array into session variable to allow access across all pages

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
  <h3 id="title-cdss">Single Stage Examples 4 & 5 & 6</h3>
  <p id="description">These examples are slighlty different from what you have just completed rather than 3 parts these three questions are single staged.
<div id="cdss-container">
    <form method="POST" action="exlikert.php">
          <!--Single Stage-->
          <div id="example13">
                <P class="survey-paragraph">4. A jack-knifed truck—should it hit the truck and kill its own driver, or should it swerve onto a crowded pavement and kill pedestrians? A human driver might react randomly (if they have time to react at all), but the response of an autonomous vehicle would have to be programmed ahead of time. What should we tell the car to do?</p>
                <input type="radio" id="example5-stage1-utilitarian-ni" name="E5S1" value="E5S1-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example5-stage3-utilitarian-ni" onclick="submitExamples4()" > Continue present course crashing itself and killing the driver</label><br>
                <input type="radio" id="example5-stage1-deontology-i" name="E5S1" value="E5S1-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example5-stage3-deontology-i" onclick="submitExamples4()"> Swerving off the road and kill the <?php echo $variable10["Dead"];?> pedestrians on the pavement </label><br>
              </div>
              <div id="example14"> 
                <P class="survey-paragraph">5. You are in a self-driving car with two passengers and your <?php echo $variable12["Family"];?> that is driving down a narrow country road. As it drives around a corner there are a family of <?php echo $variable10["Dead"];?> people on a walk with their dog in the road. What should we tell the car to do?</p>
                <input type="radio" id="example5-stage2-utilitarian-ni" name="E5S2" value="E5S2-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example6-stage3-utilitarian-ni" onclick="submitExamples4()"> Swerve off the road avoiding the pedestrians but kill all those in the car including yourself and your <?php echo $variable12["Family"];?></label><br>
                <input type="radio" id="example5-stage2-deontology-i" name="E5S2" value="E5S2-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example6-stage3-deontology-i" onclick="submitExamples4()"> Continue the present course and hit the pedestrians (killing <?php echo $variable10["Dead"];?> pedestrians) </label><br>
              </div>
              <div id="example15"> 
                <P class="survey-paragraph">6. During a marathon race a self-driving medic car has dropped two doctors at a collapsed runner, however the doctor accidentally initiates emergency mode, and the car starts to drive off quickly. The main pack of the marathon is approaching around the corner once the car turns the corner it will be going too fast to avoid either the massive tight grouping of athletes or the tight grouping of spectators at the side. Which would be the right decision for the car to take?</p>
                <input type="radio" id="example5-stage3-utilitarian-ni" name="E5S3" value="E5S3-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example6-stage3-utilitarian-ni" onclick="submitExamples4()"> Swerve off road into the spectators avoiding the pack of athletes (Injuring <?php echo $variable11["Dead"];?>, killing <?php echo $variable10["Dead"];?>)  </label><br>
                <input type="radio" id="example5-stage3-deontology-i" name="E5S3" value="E5S3-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example6-stage3-deontology-i" onclick="submitExamples4()"> Continue onward and into the athletes (Injuring <?php echo $variable10["Dead"];?>, Killing <?php echo $variable11["Dead"];?>)  </label><br>
            <input type="hidden" name="variable10" value="<?php echo $variable10;?>"/>
            <input type="hidden" name="variable11" value="<?php echo $variable11;?>"/>
            <input type="hidden" name="variable12" value="<?php echo $variable12;?>"/>
                </div>
              <div>
                <button class="start-button" id="e4-submit" type="submit" style="display: none;">Next Page</button>
              </div></form>
    </div>
</main>
</body>
</html>