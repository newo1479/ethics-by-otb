<?php session_start(); ?>
<?php 
$_SESSION["E5S1"]=$_POST["E5S1"];//E5S1 Variable
$_SESSION["E5S2"]=$_POST["E5S2"];//E5S2 Variable  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About the Ethics Generator</title>
    <link rel="icon" href="/2890562-artificialintelligence11_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="2890562-artificialintelligence11_101977.ico" />
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
  <h3 id="title-cdss">Autonomous Car Survey</h3>
<div id="cdss-container">
    <form method="POST" action="cardemographics.php">
        <!--likert 1-->
<div id="likert1">
            <div id="line">
                  <p class="survey-paragraph"> It is important for the application of ethical theory to self-driving cars</p>
                  <div>
                   <input type="radio" id="likert1-1" name="L1" value="L1-1">
                     <label class="example-option" for="likert1-1">STRONGLY AGREE</label>
                   <input type="radio" id="likert1-2" name="L1" value="L1-2">
                     <label class="example-option" for="likert1-2">AGREE</label>
                   <input type="radio" id="likert1-3" name="L1" value="L1-3">
                     <label class="example-option" for="likert1-3">NEUTRAL</label>
                   <input type="radio" id="likert1-4" name="L1" value="L1-4">
                     <label class="example-option" for="likert1-4">DISAGREE</label>
                   <input type="radio" id="likert1-5" name="L1" value="L1-5">
                   <label class="example-option" for="likert1-5">STRONGLY DISAGREE</label><br>
                  </div>
                </div>
        <!--likert 2-->
              <div id="likert2" >
                <p class="survey-paragraph"> Manufacturers should have different ethical programming for different parts of the world </p>
                <div>
                 <input type="radio" id="likert2-1" name="L2" value="L2-1">
                   <label class="example-option" for="likert2-1">STRONGLY AGREE</label>
                 <input type="radio" id="likert2-2" name="L2" value="L2-2">
                   <label class="example-option" for="likert2-2">AGREE</label>
                 <input type="radio" id="likert2-3" name="L2" value="L2-3">
                   <label class="example-option" for="likert2-3">NEUTRAL</label>
                 <input type="radio" id="likert2-4" name="L2" value="L2-4">
                   <label class="example-option" for="likert2-4">DISAGREE</label>
                 <input type="radio" id="likert2-5" name="L2" value="L2-5">
                 <label class="example-option" for="likert2-5">STRONGLY DISAGREE</label><br>
                </div>
               </div>
        <!--likert 3-->
              <div id="likert3" >
                <p class="survey-paragraph">Pedestrians’ lives should be preserved over those in the vehicle</p>
                <div>
                 <input type="radio" id="likert3-1" name="L3" value="L3-1">
                   <label class="example-option" for="likert3-1">STRONGLY AGREE</label>
                 <input type="radio" id="likert3-2" name="L3" value="L3-2">
                   <label class="example-option" for="likert3-2">AGREE</label>
                 <input type="radio" id="likert3-3" name="L3" value="L3-3">
                   <label class="example-option" for="likert3-3">NEUTRAL</label>
                 <input type="radio" id="likert3-4" name="L3" value="L3-4">
                   <label class="example-option" for="likert3-4">DISAGREE</label>
                 <input type="radio" id="likert3-5" name="L3" value="L3-5">
                 <label class="example-option" for="likert3-5">STRONGLY DISAGREE</label><br>
                </div>
               </div>
        <!--likert 4-->
              <div id="likert4" >
                <p class="survey-paragraph"> The most ethical option is to not let the car intervene</p>
                <div>
                 <input type="radio" id="likert4-1" name="L4" value="L4-1">
                   <label class="example-option" for="likert4-1">STRONGLY AGREE</label>
                 <input type="radio" id="likert4-2" name="L4" value="L4-2">
                   <label class="example-option" for="likert4-2">AGREE</label>
                 <input type="radio" id="likert4-3" name="L4" value="L4-3">
                   <label class="example-option" for="likert4-3">NEUTRAL</label>
                 <input type="radio" id="likert4-4" name="L4" value="L4-4">
                   <label class="example-option" for="likert4-4">DISAGREE</label>
                 <input type="radio" id="likert4-5" name="L4" value="L4-5">
                 <label class="example-option" for="likert4-5">STRONGLY AGREE</label><br>
                </div>
               </div>
        <!--likert 5-->
              <div id="likert5" >
                <p class="survey-paragraph">Those who are abiding by the law should have their lives preserved even if more casualties will result. </p>
                <div>
                 <input type="radio" id="likert5-1" name="L5" value="L5-1">
                   <label class="example-option" for="likert5-1">STRONGLY AGREE</label>
                 <input type="radio" id="likert5-2" name="L5" value="L5-2">
                   <label class="example-option" for="likert5-2">AGREE</label>
                 <input type="radio" id="likert5-3" name="L5" value="L5-3">
                   <label class="example-option" for="likert5-3">NEUTRAL</label>
                 <input type="radio" id="likert5-4" name="L5" value="L5-4">
                   <label class="example-option" for="likert5-4">DISAGREE</label>
                 <input type="radio" id="likert5-5" name="L5" value="L5-5">
                 <label class="example-option" for="likert5-5">STRONGLY DISAGREE</label><br>
                </div>
               </div>
        <!--Likert 6-->
               <div id="likert6" >
                <p class="survey-paragraph">Humans should presereve strict control over self-thinking machines </p>
                <div>
                 <input type="radio" id="likert6-1" name="L6" value="L6-1">
                   <label class="example-option" for="likert6-1">STRONGLY AGREE</label>
                 <input type="radio" id="likert6-2" name="L6" value="L6-2">
                   <label class="example-option" for="likert6-2">AGREE</label>
                 <input type="radio" id="likert6-3" name="L6" value="L6-3">
                   <label class="example-option" for="likert6-3">NEUTRAL</label>
                 <input type="radio" id="likert6-4" name="L6" value="L6-4">
                   <label class="example-option" for="likert6-4">DISAGREE</label>
                 <input type="radio" id="likert6-5" name="L6" value="L6-5">
                 <label class="example-option" for="likert6-5">STRONGLY DISAGREE</label><br>
                </div>
               </div>
        <!--Likert 7-->
                <div id="likert7" >
                  <p class="survey-paragraph">Algorithms should reflect existing bias in society</p>
                  <div>
                   <input type="radio" id="likert7-1" name="L7" value="L7-1">
                     <label class="example-option" for="likert7-1">STRONGLY AGREE</label>
                   <input type="radio" id="likert7-2" name="L7" value="L7-2">
                     <label class="example-option" for="likert7-2">AGREE</label>
                   <input type="radio" id="likert7-3" name="L7" value="L7-3">
                     <label class="example-option" for="likert7-3">NEUTRAL</label>
                   <input type="radio" id="likert7-4" name="L7" value="L7-4">
                     <label class="example-option" for="likert7-4">DISAGREE</label>
                   <input type="radio" id="likert7-5" name="L7" value="L7-5">
                   <label class="example-option" for="likert7-5">STRONGLY DISAGREE</label><br>
                  </div>
                 </div>
         <!--Likert 8-->
               <div id="likert8" >
                <p class="survey-paragraph">Those who are abiding by the law should have their lives preserved even if more casualties will result. </p>
                <div>
                 <input type="radio" id="likert8-1" name="L8" value="L8-1" >
                   <label class="example-option" for="likert8-1" >STRONGLY AGREE</label>
                 <input type="radio" id="likert8-2" name="L8" value="L8-2" >
                   <label class="example-option" for="likert8-2" >AGREE</label>
                 <input type="radio" id="likert8-3" name="L8" value="L8-3" >
                   <label class="example-option" for="likert8-3" >NEUTRAL</label>
                 <input type="radio" id="likert8-4" name="L8" value="L8-4" >
                   <label class="example-option" for="likert8-4" >DISAGREE</label>
                 <input type="radio" id="likert8-5" name="L8" value="L8-5" >
                 <label class="example-option" for="likert8-5" >STRONGLY DISAGREE</label><br>
                </div>
               </div><div>
      <button class="start-button">Next Page</button>
      </div>
    </form>
</div>
</main>
</body>
</html>