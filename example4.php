<?php session_start(); ?>
<?php 
$_SESSION["E3S1"]=$_POST["E3S1"];//E3S1 Variable
$_SESSION["E3S2"]=$_POST["E3S2"];//E3S2 Variable
$_SESSION["E3S3"]=$_POST["E3S3"];//E3S3 Variable
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
  <h3 id="title-cdss">Single Stage Examples 4 & 5</h3>
<div id="cdss-container">
    <form method="POST" action="exlikert.php">
          <!--Single Stage-->
          <div id="example13">
                <P class="survey-paragraph">A jack-knifed truck—should it hit the truck and kill its own driver, or should it swerve onto a crowded pavement and kill 3 pedestrians? A human driver might react randomly (if she has time to react at all), but the response of an autonomous vehicle would have to be programmed ahead of time. What should we tell the car to do?</p>
                <input type="radio" id="example5-stage1-utilitarian-ni" name="E5S1" value="E5S1-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example5-stage3-utilitarian-ni" onclick="submitExamples4()" > Continue present course crashing itself and killing the driver</label><br>
                <input type="radio" id="example5-stage1-deontology-i" name="E5S1" value="E5S1-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example5-stage3-deontology-i" onclick="submitExamples4()"> Swerving off the road and kill the pedestrians on the pavement </label><br>
              </div>
              <div id="example14"> 
                <P class="survey-paragraph">You are in a self-driving car with two passengers that is driving down a narrow country road when it comes around a corner there are a family of 4 people in on a walk with their dog in the road. What should we tell the car to do?</p>
                <input type="radio" id="example5-stage2-utilitarian-ni" name="E5S2" value="E5S2-UTILITARIAN-ni" onclick="submitExamples4()" required></input>
                  <label class="example-option" for="example6-stage3-utilitarian-ni" onclick="submitExamples4()"> Swerve off the road avoiding the pedestrians but kill all those in the car including yourself </label><br>
                <input type="radio" id="example5-stage2-deontology-i" name="E5S2" value="E5S2-DEONTOLOGY-i" onclick="submitExamples4()">
                  <label class="example-option" for="example6-stage3-deontology-i" onclick="submitExamples4()"> Continue the present course and hit the pedestrians  </label><br>
              </div>
              <div>
                <button class="start-button" id="e4-submit" type="submit" style="display: none;">Next Page</button>
              </div></form>
    </div>
</main>
</body>
</html>