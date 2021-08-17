<!DOCTYPE html>

<?php session_start(); ?>
<?php

$number = Array(1,2,3,4,5); //Create array with scenario numbers



$_SESSION['number'] = $number; //Turn array into session variable to allow access across all pages

$randomNumber = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 1
$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 2
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate random variable number 3
$_SESSION["path1"]=$_POST["path1"];//Path Variable
$_SESSION["total"]=$_POST["total"];//Total


include('connect.php'); //Database details
$conn = connect(); //Connect to the database

//Random Variable 1
$stmt1 = $conn->prepare("SELECT Dead FROM NumberDeadSmall WHERE RandomNumber=:randomNumber;");
$stmt1->execute(['randomNumber' => $randomNumber]);
$variable1 = $stmt1->fetch();

//Random Variable 2
$stmt2 = $conn->prepare("SELECT Dead FROM NumberDeadLarge WHERE RandomNumber=:randomNumber;");
$stmt2->execute(['randomNumber' => $randomNumber1]);
$variable2 = $stmt2->fetch();

//Random Variable 3
$stmt3 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;");
$stmt3->execute(['randomNumber' => $randomNumber2]);
$variable3 = $stmt3->fetch();

?>
<html lang="en">
<head>
    <title>About the Ethics Generator</title>
    <link rel="icon" href="/2890562-artificialintelligence11_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="/2890562-artificialintelligence11_101977.ico" />
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
          <li><a href="scenarios.html">examples</a></li>
          <li><a href="about.html">About</a></li>
              </ul>
              <div class="clear"></div>
            </nav>
          </header>

        </head>
        <main>
          <div>
            <h3 id="purpose">The Autonomous Vehicle</h3>
          </div>
        
            <div>
              <p id="description">Here you will be presented with a series of examples about the use of autonomous vehicles. Each question will include a written description of a example, you will be asked what you feel is the right thing to do but also stress to consider what you would do if you were driving instead of the AI. Finally you will be asked a series of statements where you are invited to ask how far you agree with the statements.</p>
              <p id="description">There is an example below, once you confirm your choice more will be revealed about the scenario. For the first three scenarios there are three stages, followed by two single stage scenarios. Thank you for your support!</p> 
            </div>
            
            <div id="line">
              <h3 id="title-cdss">Example 1</h3>
            </div>
               
            <div id="cdss-container">
              <form method="POST" action="UtilitarianPath2.php">
                <!--example 1 stage 1-->
                <p class="survey-paragraph">1.1) A full coach of passengers is driving down a quiet road when an unidentified van with <?php echo $variable1["Dead"];?> passengers drives quickly around the corner. The coach driver is then presented with two options. The first option is continuing onwards but into the van, the best option at preserving all life on the coach but would kill all on board the van. The second option is swerve suddenly off the road into the verge which would threaten the life of everyone on board the coach but save those which are in the van. Should the coach driver?</p>
                <div>
                  <input type="radio" id="example1-stage1-utilitarian-ni" name="E1S1" value="U-E1S1-UTILITARIAN-ni"required>
                  <label class="example-option" for="example1-stage1-utilitarian-ni">Continue Present Course (Saving <?php echo $variable2["Dead"]; ?> in Coach, Killing <?php echo $variable1["Dead"]; ?> in van)  </label><br>
                  <input type="radio" id="example1-stage1-deontology-i" name="E1S1" value="U-E1S1-DEONTOLOGY-i">
                  <label class="example-option" for="example1-stage1-deontology-i">Make the intervention to avoid the ambulance (Killing <?php echo $variable2["Dead"]; ?> in the coach, saving <?php echo $variable1["Dead"]; ?> in van) </label><br>
                </div>
                  <div>
                    <button id="e1s1-button" class="confirm-button" onclick="e1s1Lock()">Confirm Choice</button>
                  </div>
                <!--example 1 stage 2-->
                <div id="example2" style="display: none;">
                  <p class="survey-paragraph">1.2) More is revealed about the coach incident. The coach is controlled by an AI driver and the van driving quickly is an ambulance responding to an emergency the two responses of the driver are the same. Should the coach? </p>
                  <input type="radio" id="example1-stage2-utilitarian-ni" name="E1S2" value="U-E1S2-UTILITARIAN-ni"required>
                  <label class="example-option" for="example1-stage2-utilitarian-ni">Continue Present Course (Saving <?php echo $variable2["Dead"]; ?> in Coach, Killing <?php echo $variable1["Dead"]; ?> in ambulance)  </label><br>
                  <input type="radio" id="example1-stage2-deontology-i" name="E1S2" value="U-E1S2-DEONTOLOGY-i">
                  <label class="example-option" for="example1-stage2-deontology-i">Make the intervention to avoid the ambulance (Killing <?php echo $variable2["Dead"]; ?> in coach, saving <?php echo $variable1["Dead"]; ?> in ambulance)   </label><br>
                </div>
                <div>
                  <button id="e1s2-button" class="confirm-button" style="display: none;" onclick="e1s2Lock()">Confirm Choice</button>
                </div>-
               <!--example 1 stage 3-->
              <div id="example3" style="display: none;">
                <p class="survey-paragraph">1.3) The final piece of information is revealed the emergency the ambulance is responding to is one which involves your <?php echo $variable3["Family"];?> if the ambulance does not get there they will die. If in the last step you chose to preserve the live of all in the coach, do you change your mind because of this information. </p>
                <input type="radio" id="example1-stage3-UTILITARIAN-ni" name="E1S3" value="U-E1S3-UTILITARIAN-ni" onclick="submitExamples1()"required>
                  <label class="example-option" for="example1-stage3-UTILITARIAN-ni" onclick="submitExamples1()">Continue Present Course (Saving <?php echo $variable2["Dead"]; ?> in Coach, Killing <?php echo $variable1["Dead"]; ?> in ambulance + your <?php echo $variable3["Family"];?>)  </label><br>
                <input type="radio" id="example1-stage3-DEONTOLOGY-i" name="E1S3" value="U-E1S3-DEONTOLOGY-i" onclick="submitExamples1()">
                  <label class="example-option" for="example1-stage3-DEONTOLOGY-i" onclick="submitExamples1()">Make the intervention to avoid the ambulance (Killing <?php echo $variable2["Dead"]; ?> in coach, saving <?php echo $variable1["Dead"]; ?> in ambulance and your <?php echo $variable3["Family"];?>)     </label><br>
            <input type="hidden" name="variable1" value="<?php echo $variable1["Dead"];?>"/>
            <input type="hidden" name="variable2" value="<?php echo $variable2["Dead"];?>"/>
            <input type="hidden" name="variable3" value="<?php echo $variable3["Family"];?>"/>
             
                </div>
              <div>
                <button class="start-button" id="e1-submit" style="display: none;">Next Page</button>
              </div>
                
            </form>
            </div>
              
        </main>
    </body>
</html>