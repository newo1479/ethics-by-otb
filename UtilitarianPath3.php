<?php session_start(); ?>
<?php 
$_SESSION["L4"]=$_POST["L4"];// Variable
$_SESSION["L5"]=$_POST["L5"];// Variable
$_SESSION["L6"]=$_POST["L6"];// Variable

$_SESSION["path2"]=$_POST["path2"];// Variable
$_SESSION['total2']=$_POST['total2'];//Score

$number = Array(1,2,3,4,5); //Create array

$_SESSION['number'] = $number; //Turn array into session variable 

$randomNumber = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 1
$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 2
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 3

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

//Random Variable 7
$stmt7 = $conn->prepare("SELECT Dead FROM NumberDeadSmall WHERE RandomNumber=:randomNumber;");
$stmt7->execute(['randomNumber' => $randomNumber]);
$variable7 = $stmt7->fetch();

//Random Variable 8
$stmt8 = $conn->prepare("SELECT Dead FROM NumberDeadLarge WHERE RandomNumber=:randomNumber;");
$stmt8->execute(['randomNumber' => $randomNumber1]);
$variable8 = $stmt8->fetch();

//Random Variable 9
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
  <h3 id="title-cdss">Single Stage Example 3</h3>
  <p id="description">These examples are slighlty different from what you have just completed rather than 3 parts these three questions are single staged.
<div id="cdss-container">
    <form method="POST" action="UtilitarianPath4.php">
          <!--Single Stage-->
    <div id="example13">
                <P class="survey-paragraph">3. A jack-knifed truck—should it hit the truck and kill its own driver, or should it swerve onto a crowded pavement and kill pedestrians? A human driver might react randomly (if they have time to react at all), but the response of an autonomous vehicle would have to be programmed ahead of time. What should we tell the car to do?</p>
                <input type="radio" id="example3-stage1-utilitarian-ni" name="E3S1" value="U-E3S1-UTILITARIAN-ni" onclick="submitExamples3()" required></input>
                  <label class="example-option" for="example3-stage1-utilitarian-ni" onclick="submitExamples3()" > Continue present course crashing itself and killing the driver</label><br>
                <input type="radio" id="example3-stage1-deontology-i" name="E3S1" value="U-E3S1-DEONTOLOGY-i" onclick="submitExamples3()">
                  <label class="example-option" for="example3-stage1-deontology-i" onclick="submitExamples3()"> Swerving off the road and kill the <?php echo $variable7["Dead"];?> pedestrians on the pavement </label><br>
            <input type="hidden" name="variable7" value="<?php echo $variable7["Dead"];?>"/>
            <input type="hidden" name="variable8" value="<?php echo $variable8["Dead"];?>"/>
            <input type="hidden" name="variable9" value="<?php echo $variable9["Family"];?>"/>
            </div>
        <div>
            <button class="start-button" id="e3-submit" type="submit" style="display: none;">Next Page</button>
        </div></form>
    </div>
</main>
</body>
</html>