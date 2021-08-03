<?php session_start(); ?>
<?php 
$_SESSION["E2S1"]=$_POST["E2S1"];//E2S1 Variable
$_SESSION["E2S2"]=$_POST["E2S2"];//E2S2 Variable
$_SESSION["E2S3"]=$_POST["E2S3"];//E2S3 Variable
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
           <P class="survey-paragraph">3.1 A self-driving car full of 5 passengers is approaching a corner when some people start to cross the road and the brakes of the vehicle fail, knowing that it will not be able to stop or slow down before the crossing people the alternative for the car is to swerve around the 3 pedestrians but into a large, parked cement mixer resulting in the fatalities of those in the car. Should the car? </P>
           <input type="radio" id="example3-stage1-utilitarian-ni" name="E3S1" value="E3S1-UTILITARIAN-ni"required></input>
             <label class="example-option" for="example3-stage1-utilitarian-ni">Continue present course (saves 5 in car, kill 3 pedestrians)</label><br>
           <input type="radio" id="example3-stage1-deontology-i" name="E3S1" value="E3S1-DEONTOLOGY-i">
             <label class="example-option" for="example3-stage1-deontology-i">Make the intervention and hit the cement mixer (saves 5 in car, kill 3 pedestrians)</label><br>
         </div>
        <div>
            <button id="e3s1-button" class="confirm-button" onclick="e3s1Lock()">Confirm Choice</button>
        </div>
        <!-- Part 2 -->
        <div id="example8" style="display: none;">
          <P class="survey-paragraph">3.2 Another piece of information is revealed. The pedestrians which have entered the road are 2 school children running into the road to retrieve their ball while the third is their parent attempting to pull them back. Does this change your opinion on which should be saved? Should the car? </p>
          <input type="radio" id="example3-stage2-utilitarian-ni" name="E3S2" value="E3S2-UTILITARIAN-ni"required></input>
            <label class="example-option" for="example3-stage2-utilitarian-ni">Continue present course (saves 5 in car, kill 3 pedestrians)</label><br>
          <input type="radio" id="example3-stage2-deontology-i" name="E3S2" value="E3S2-DEONTOLOGY-i">
            <label class="example-option" for="example3-stage2-deontology-i">Make the intervention and hit the cement mixer (saves 5 in car, kill 3 pedestrians)</label><br>
        </div>
        <div>
            <button id="e3s2-button" class="confirm-button" style="display: none;" onclick="e3s2Lock()">Confirm Choice</button>
        </div>
        <!-- Part 3 -->
        <div id="example9" style="display: none;">
          <P class="survey-paragraph">3.3 The final piece of information is revealed, you and your family are driving to a wedding when the children and parent step into the road. If you chose to avoid the pedestrians in step 2 does this affect your choice? </p>
          <input type="radio" id="example3-stage3-utilitarian-ni" name="E3S3" value="E3S3-UTILITARIAN-ni" onclick="submitExamples3()"required></input>
            <label class="example-option" for="example3-stage3-utilitarian-ni" onclick="submitExamples3()">Continue present course (saves 5 in car, kill 3 pedestrians)</label><br>
           <input type="radio" id="example3-stage3-deontology-i" name="E3S3" value="E3S3-DEONTOLOGY-i" onclick="submitExamples3()">
            <label class="example-option" for="example3-stage3-deontology-i" onclick="submitExamples3()">Make the intervention and hit the cement mixer (saves 5 in car, kill 3 pedestrians) </label><br>
        </div>
        <div>
          <button class="start-button" id="e3-submit" style="display: none;">Next Page</button>
        </div>
    </form>
</div>
</main>
</body>
</html>