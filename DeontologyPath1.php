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
<!DOCTYPE html>
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
    <div>
        <p id="description">Here you will be presented with a series of examples about the use of autonomous vehicles. Each question will include a written description of a example, you will be asked what you feel is the right thing to do but also stress to consider what you would do if you were driving instead of the AI. Finally you will be asked a series of statements where you are invited to ask how far you agree with the statements.</p>
        <p id="description">There is an example below, once you confirm your choice more will be revealed about the scenario. For the first three scenarios there are three stages, followed by two single stage scenarios. Thank you for your support!</p> 
    </div>
    <br>
    <br>
    <br>
  </div>
  <h3 id="title-cdss">Example 1</h3>
<div id="cdss-container">
    <form method="POST" action="DeontologyPath2.php">
      <!--example 2-->
        <div id="example1">
            <p class="survey-paragraph">1.1) You’re walking alongside a busy road when a runaway self-driving car is driving towards a zebra crossing which has <?php echo $variable2["Dead"];?> pedestrians on it. If you could push an obstacle in front of it the car’s threat detection software will trigger saving the life of the <?php echo $variable2["Dead"];?> who are on the zebra crossing. However, the only obstacle in your reach is a person. Do you push the individual in front of the car to save the life of the <?php echo $variable2["Dead"];?> pedestrians on the zebra crossing?  </p>
            <input type="radio" id="example1-stage1-utilitarian-ni" name="E1S1" value="D-E1S1-UTILITARIAN-ni"required>
                <label class="example-option" for="example2-stage1-utilitarian-ni"> Do not push the person (saving the life of the man, injuring <?php echo $variable1["Dead"];?> and killing <?php echo $variable2["Dead"];?> pedestrians)      </label><br>
            <input type="radio" id="example1-stage1-deontology-i" name="E1S1" value="D-E1S1-DEONTOLOGY-i">
              <label class="example-option" for="example1-stage1-deontology-i"> Intervene pushing the person (killing the man, saving the <?php echo $variable2["Dead"];?> pedestrians)      </label><br>
        </div> 
        <div>
            <button id="e1s1-button" class="confirm-button" onclick="e1s1Lock()">Confirm Choice</button>
        </div>
        <!--Part 2 -->
        <div id="example2" style="display: none;">
          <p class="survey-paragraph">1.2) The same situation presents itself this time you are walking with your <?php echo $variable3["Family"];?> realising the same thing you do they tell you to push them in the path of the vehicle, if you chose to push the person in front of the vehicle in part one does them being your family member change your opinion despite them saying you should do it          </p>
          <input type="radio" id="example1-stage2-utilitarian-ni" name="E1S2" value="D-E1S2-UTILITARIAN-ni" required>
          <label class="example-option" for="example1-stage2-utilitarian-ni"> Do not push the person (saving the life of the man, injuring <?php echo $variable1["Dead"];?> and killing <?php echo $variable2["Dead"];?> pedestrians)         </label><br>
          <input type="radio" id="example1-stage2-deontology-i" name="E1S2" value="D-E1S2-DEONTOLOGY-i">
          <label class="example-option" for="example1-stage2-deontology-i" > Intervene pushing the person (killing the man, saving the <?php echo $variable2["Dead"];?> pedestrians)  </label><br>
         </div>
         <div> 
             <button id="e1s2-button" class="confirm-button" style="display: none;" onclick="e1s2Lock()">Confirm Choice</button>
         </div> 
         <!--Part 3 --> 
              <div id="example3" style="display: none;">
                <P class="survey-paragraph">1.3) Finally, a similar situation is present, this time the obstacle in front of you is a priceless statue of David by Michelangelo being transported for an exhibition. If you push the priceless piece of historic art in front of the vehicle it will be destroyed but the lives of the <?php echo $variable1["Dead"];?> pedestrians will be saved. However, this time the pedestrians are not crossing at an official crossing. Do you? </p>
                <input type="radio" id="example1-stage3-UTILITARIAN-ni" name="E1S3" value="D-E1S3-UTILITARIAN-ni" onclick="submitExamples1()"required></input>
                  <label class="example-option" for="example1-stage3-utilitarian-ni" onclick="submitExamples1()"> Do not push the statue (saving the priceless art, injuring the <?php echo $variable1["Dead"];?> and killing <?php echo $variable2["Dead"];?> pedestrians)           </label><br>
                <input type="radio" id="example1-stage3-DEONTOLOGY-i" name="E1S3" value="D-E1S3-DEONTOLOGY-i" onclick="submitExamples1()">
                  <label class="example-option" for="example1-stage3-deontology-i" onclick="submitExamples1()"> Intervene pushing the person (destroying the statue, saving the <?php echo $variable2["Dead"];?> pedestrians)      </label><br>
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