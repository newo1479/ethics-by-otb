<?php session_start(); ?>
<?php 
$_SESSION["E2S1"]=$_POST["E2S1"];//E2S1 Variable
$_SESSION["E2S2"]=$_POST["E2S2"];//E2S2 Variable
$_SESSION["E2S3"]=$_POST["E2S3"];//E2S3 Variable
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
    <link rel="icon" href="/2890562-artificialintelligence21_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="2890562-artificialintelligence21_101977.ico" />
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
<div id="cdss-container">
    <form method="POST" action="example4.php">
         <!--example 3-->
         <div id="example7">
           <P class="survey-paragraph">3.1) A self-driving people carrier full of <?php echo $variable8["Dead"];?> passengers is approaching a corner when some people start to cross the road and the brakes of the vehicle fail, knowing that it will not be able to stop or slow down before the crossing people the alternative for the carrier  is to swerve around the pedestrians but into a large, parked cement mixer resulting in the fatalities of those in the carrier . Should the carrier ?  </P>
           <input type="radio" id="example3-stage1-utilitarian-ni" name="E3S1" value="E3S1-UTILITARIAN-ni"required></input>
             <label class="example-option" for="example3-stage1-utilitarian-ni">Continue present course (saves <?php echo $variable8["Dead"];?> in carrier , kill <?php echo $variable7["Dead"]; ?> pedestrians)    </label><br>
           <input type="radio" id="example3-stage1-deontology-i" name="E3S1" value="E3S1-DEONTOLOGY-i">
             <label class="example-option" for="example3-stage1-deontology-i">Make the intervention and hit the cement mixer (kills <?php echo $variable8["Dead"];?> in carrier , saves <?php echo $variable7["Dead"]; ?> pedestrians)      </label><br>
         </div>
        <div>
            <button id="e3s1-button" class="confirm-button" onclick="e3s1Lock()">Confirm Choice</button>
        </div>
        <!-- Part 2 -->
        <div id="example8" style="display: none;">
          <P class="survey-paragraph">3.2) Another piece of information is revealed. The pedestrians which have entered the road are school children running into the road to retrieve their ball while another is their parent attempting to pull them back. Does this change your opinion on which should be saved? Should the carrier ?  </p>
          <input type="radio" id="example3-stage2-utilitarian-ni" name="E3S2" value="E3S2-UTILITARIAN-ni"required></input>
            <label class="example-option" for="example3-stage2-utilitarian-ni">Continue present course (saves <?php echo $variable8["Dead"];?> in carrier , kill <?php echo $variable7["Dead"]; ?> pedestrians)     </label><br>
          <input type="radio" id="example3-stage2-deontology-i" name="E3S2" value="E3S2-DEONTOLOGY-i">
            <label class="example-option" for="example3-stage2-deontology-i">Make the intervention and hit the cement mixer (kills <?php echo $variable8["Dead"];?> in carrier , saves <?php echo $variable7["Dead"]; ?> pedestrians)     </label><br>
        </div>
        <div>
            <button id="e3s2-button" class="confirm-button" style="display: none;" onclick="e3s2Lock()">Confirm Choice</button>
        </div>
        <!-- Part 3 -->
        <div id="example9" style="display: none;">
          <P class="survey-paragraph">3.3) The final piece of information is revealed, the carrier is driving to a wedding with you and your <?php echo $variable9["Family"];?>onboard, when the children and parent step into the road. If you chose to avoid the pedestrians in step 2 does this affect your choice?  </p>
          <input type="radio" id="example3-stage3-utilitarian-ni" name="E3S3" value="E3S3-UTILITARIAN-ni" onclick="submitExamples3()"required></input>
            <label class="example-option" for="example3-stage3-utilitarian-ni" onclick="submitExamples3()">Continue present course (saves <?php echo $variable8["Dead"];?> in carrier , kills <?php echo $variable7["Dead"]; ?> pedestrians)     </label><br>
           <input type="radio" id="example3-stage3-deontology-i" name="E3S3" value="E3S3-DEONTOLOGY-i" onclick="submitExamples3()">
            <label class="example-option" for="example3-stage3-deontology-i" onclick="submitExamples3()">Make the intervention and hit the cement mixer (kills <?php echo $variable8["Dead"];?> in carrier , saves <?php echo $variable7["Dead"]; ?> pedestrians)     </label><br>
          <input type="hidden" name="variable7" value="<?php echo $variable7;?>"/>
          <input type="hidden" name="variable8" value="<?php echo $variable8;?>"/>
          <input type="hidden" name="variable9" value="<?php echo $variable9;?>"/>
          </div>
        <div>
          <button class="start-button" id="e3-submit" style="display: none;">Next Page</button>
        </div>
    </form>
</div>
</main>
</body>
</html>