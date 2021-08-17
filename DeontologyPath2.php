<?php session_start(); ?>
<?php 
$_SESSION["E1S1"]=$_POST["E1S1"];//E1S1 Variable
$_SESSION["E1S2"]=$_POST["E1S2"];//E1S2 Variable
$_SESSION["E1S3"]=$_POST["E1S3"];//E1S3 Variable
$_SESSION["variable1"]=$_POST["variable1"];//E1S3 Variable
$_SESSION["variable2"]=$_POST["variable2"];//E1S3 Variable
$_SESSION["variable3"]=$_POST["variable3"];//E1S3 Variable
$number = Array(1,2,3,4,5); //Create array with scenario numbers

$_SESSION['number'] = $number; //Turn array into session variable to allow access across all pages

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
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <h3 id="title-cdss">Example 2</h3>
<div id="cdss-container">
    <form method="POST" action="likertbridge2.php">
      <!--example 2-->
        <div id="example4">
            <p class="survey-paragraph"> 2.1) In 2033, a capacity full self-driving bus is driving safely down a lane, when a coach driven by a human full of passengers drives around the corner. An accident is inevitable, if the self-driving bus continues the human driver in the other bus will be forced to swerve killing all passengers on board whilst saving the life of those on the prison bus. Should the self-driving bus? </p>
            <input type="radio" id="example2-stage1-utilitarian-ni" name="E2S1" value="D-E2S1-UTILITARIAN-ni"required>
                <label class="example-option" for="example2-stage1-utilitarian-ni">Continue present course (saves <?php echo $variable5["Dead"]; ?> in self driven bus, kills <?php echo $variable4["Dead"]; ?> in human driven bus)     </label><br>
            <input type="radio" id="example2-stage1-deontology-i" name="E2S1" value="D-E2S1-DEONTOLOGY-i">
              <label class="example-option" for="example2-stage1-deontology-i">Intervene avoiding the human driven bus (Killing <?php echo $variable5["Dead"]; ?> in self driven bus, saving <?php echo $variable4["Dead"]; ?> in human driven bus)     </label><br>
        </div> 
        <div>
            <button id="e2p1-button" class="confirm-button" onclick="e2s1Lock()">Confirm Choice</button>
        </div>
        <!--Part 2 -->
        <div id="example5" style="display: none;">
          <p class="survey-paragraph">2.2) More is revealed about the buses. The self-driven bus is a prototype criminal processing vehicle, and the vehicle contains both innocent prison staff and prisoners of unknown guilt status or crime. The passengers in the human driven vehicle are on their way to a stag do and there is the possibility the human driver is intoxicated the human driven bus is at fault as it has drifted into the other lane. Should the self-driving bus?</p>
          <input type="radio" id="example2-stage2-utilitarian-ni" name="E2S2" value="D-E2S2-UTILITARIAN-ni"required>
          <label class="example-option" for="example2-stage2-utilitarian-ni">Continue present course (saves <?php echo $variable5["Dead"]; ?> in self driven bus, kills <?php echo $variable4["Dead"]; ?> in human driven bus)      </label><br>
          <input type="radio" id="example2-stage2-deontology-i" name="E2S2" value="D-E2S2-DEONTOLOGY-i">
          <label class="example-option" for="example2-stage2-deontology-i" >Intervene avoiding the human driven bus (Killing <?php echo $variable5["Dead"]; ?> in self driven bus, saving <?php echo $variable4["Dead"]; ?> in human driven bus)     </label><br>
         </div>
         <div> 
             <button id="e2s2-button" class="confirm-button" style="display: none;" onclick="e2s2Lock()">Confirm Choice</button>
         </div> 
         <!--Part 3 --> 
              <div id="example6" style="display: none;">
                <P class="survey-paragraph">2.3) Finally you find yourself teleported into the human driven party bus and are involved in the revelry. The same scenario occurs the protype prison bus drives legally around the corner and the party bus drifts into the road, if the prison bus continues it will kill all the passengers in the party bus. Despite being at fault for the impending crash does being onboard the bus make you change your mind (if you chose to option A for part 2)? Or should the prison bus swerve off the road killing all on board? </p>
                <input type="radio" id="example2-stage3-UTILITARIAN-ni" name="E2S3" value="D-E2S3-UTILITARIAN-ni" onclick="submitExamples2()"required></input>
                  <label class="example-option" for="example2-stage3-utilitarian-ni" onclick="submitExamples2()">Continue present course (saves <?php echo $variable5["Dead"]; ?> in self driven bus, kills <?php echo $variable4["Dead"]; ?> in human driven bus)     </label><br>
                <input type="radio" id="example2-stage3-DEONTOLOGY-i" name="E2S3" value="D-E2S3-DEONTOLOGY-i" onclick="submitExamples2()">
                  <label class="example-option" for="example2-stage3-deontology-i" onclick="submitExamples2()">Intervene avoiding the human driven bus (Killing <?php echo $variable5["Dead"]; ?> in self driven bus, saving <?php echo $variable4["Dead"]; ?> in human driven bus)     </label><br>
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