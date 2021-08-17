<?php session_start(); ?>
<?php 
$_SESSION["E1S1"]=$_POST["E1S1"];//E2S1 Variable
$_SESSION["E1S2"]=$_POST["E1S2"];//E2S2 Variable
$_SESSION["E1S3"]=$_POST["E1S3"];//E2S3 Variable
$_SESSION["variable1"]=$_POST["variable1"];// Variable
$_SESSION["variable2"]=$_POST["variable2"];// Variable
$_SESSION["variable3"]=$_POST["variable3"];// Variable
$number = Array(1,2,3,4,5); //Create array

$_SESSION['number'] = $number; //Turn array into session variable

$randomNumber = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 1
$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 2
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 3

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

//Random Variable 4
$stmt4 = $conn->prepare("SELECT Dead FROM NumberDeadSmall WHERE RandomNumber=:randomNumber;");
$stmt4->execute(['randomNumber' => $randomNumber]);
$variable4 = $stmt4->fetch();

//Random Variable 5
$stmt5 = $conn->prepare("SELECT Dead FROM NumberDeadLarge WHERE RandomNumber=:randomNumber;");
$stmt5->execute(['randomNumber' => $randomNumber1]);
$variable5 = $stmt5->fetch();

//Random Variable 6
$stmt6 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;");
$stmt6->execute(['randomNumber' => $randomNumber2]);
$variable6 = $stmt6->fetch();



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
  <h3 id="title-cdss">Example 2</h3>
<div id="cdss-container">
    <form method="POST" action="likertbridge2.php">
         <!--example 3-->
         <div id="example4">
           <P class="survey-paragraph">2.1) A self-driving people carrier full of <?php echo $variable5["Dead"];?> passengers is approaching a corner when some people start to cross the road and the brakes of the vehicle fail, knowing that it will not be able to stop or slow down before the crossing people the alternative for the carrier  is to swerve around the pedestrians but into a large, parked cement mixer resulting in the fatalities of those in the carrier . Should the carrier ?  </P>
           <input type="radio" id="example2-stage1-utilitarian-ni" name="E2S1" value="U-E2S1-UTILITARIAN-ni"required></input>
             <label class="example-option" for="example2-stage1-utilitarian-ni">Continue present course (saves <?php echo $variable5["Dead"];?> in carrier , kill <?php echo $variable4["Dead"]; ?> pedestrians)    </label><br>
           <input type="radio" id="example2-stage1-deontology-i" name="E2S1" value="U-E2S1-DEONTOLOGY-i">
             <label class="example-option" for="example2-stage1-deontology-i">Make the intervention and hit the cement mixer (kills <?php echo $variable5["Dead"];?> in carrier , saves <?php echo $variable4["Dead"]; ?> pedestrians)      </label><br>
         </div>
        <div>
            <button id="e2s1-button" class="confirm-button" onclick="e2s1Lock()">Confirm Choice</button>
        </div>
        <!-- Part 2 -->
        <div id="example5" style="display: none;">
          <P class="survey-paragraph">2.2) Another piece of information is revealed. The pedestrians which have entered the road are school children running into the road to retrieve their ball while another is their parent attempting to pull them back. Does this change your opinion on which should be saved? Should the carrier ?  </p>
          <input type="radio" id="example2-stage2-utilitarian-ni" name="E2S2" value="U-E2S2-UTILITARIAN-ni"required></input>
            <label class="example-option" for="example2-stage2-utilitarian-ni">Continue present course (saves <?php echo $variable5["Dead"];?> in carrier , kill <?php echo $variable4["Dead"]; ?> pedestrians)     </label><br>
          <input type="radio" id="example2-stage2-deontology-i" name="E2S2" value="U-E2S2-DEONTOLOGY-i">
            <label class="example-option" for="example2-stage2-deontology-i">Make the intervention and hit the cement mixer (kills <?php echo $variable5["Dead"];?> in carrier , saves <?php echo $variable4["Dead"]; ?> pedestrians)     </label><br>
        </div>
        <div>
            <button id="e2s2-button" class="confirm-button" style="display: none;" onclick="e2s2Lock()">Confirm Choice</button>
        </div>
        <!-- Part 3 -->
        <div id="example6" style="display: none;">
          <P class="survey-paragraph">2.3) The final piece of information is revealed, the carrier is driving to a wedding with you and your <?php echo $variable6["Family"];?>onboard, when the children and parent step into the road. If you chose to avoid the pedestrians in step 2 does this affect your choice?  </p>
          <input type="radio" id="example2-stage3-utilitarian-ni" name="E2S3" value="U-E2S3-UTILITARIAN-ni" onclick="submitExamples2()"required></input>
            <label class="example-option" for="example2-stage3-utilitarian-ni" onclick="submitExamples2()">Continue present course (saves <?php echo $variable5["Dead"];?> in carrier , kills <?php echo $variable4["Dead"]; ?> pedestrians)     </label><br>
           <input type="radio" id="example2-stage3-deontology-i" name="E2S3" value="U-E2S3-DEONTOLOGY-i" onclick="submitExamples2()">
            <label class="example-option" for="example2-stage3-deontology-i" onclick="submitExamples2()">Make the intervention and hit the cement mixer (kills <?php echo $variable5["Dead"];?> in carrier , saves <?php echo $variable4["Dead"]; ?> pedestrians)     </label><br>
          <input type="hidden" name="variable4" value="<?php echo $variable4["Dead"];?>"/>
          <input type="hidden" name="variable5" value="<?php echo $variable5["Dead"];?>"/>
          <input type="hidden" name="variable6" value="<?php echo $variable6["Family"];?>"/>
          </div>
        <div>
          <button class="start-button" id="e2-submit" style="display: none;">Next Page</button>
        </div>
    </form>
</div>
</main>
</body>
</html>