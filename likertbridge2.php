<?php session_start(); ?>
<?php 
$_SESSION["E2S1"]=$_POST["E2S1"];// Variable
$_SESSION["E2S2"]=$_POST["E2S2"];// Variable
$_SESSION["E2S3"]=$_POST["E2S3"];// Variable
$_SESSION["variable4"]=$_POST["variable4"];// Variable
$_SESSION["variable5"]=$_POST["variable5"];// Variable
$_SESSION["variable6"]=$_POST["variable6"];// Variable
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
    <script src="pathfunction.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">Ethics Explored</h1></a>
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
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
<form method="POST" action="#">
        <div id="likert4">
          <p class="survey-paragraph">1. Pedestrians’ lives should be preserved over those in the vehicle (U)     </p>
          <div>
           <input class="likert2" type="radio" id="OPTION-7" name="L4" value="1" required>
             <label class="scenario-option" for="OPTION-7">AGREE</label>
           <input class="likert2" type="radio" id="OPTION-8" name="L4" value="0">
             <label class="scenario-option" for="OPTION-8">DISAGREE</label><br>
          </div>
        </div> 
      <!--Likert 2-->
      <div id="likert5">
        <p class="survey-paragraph">2. The lives of children should be preserved even if more casualties result from saving them. (D)       </p>
        <div>
         <input class="likert2" type="radio" id="OPTION-9" name="L5" value="0" required>
           <label class="scenario-option" for="OPTION-9">AGREE</label>
         <input class="likert2" type="radio" id="OPTION-10" name="L5" value="1">
           <label class="scenario-option" for="OPTION-10">DISAGREE</label><br>
        </div>
       </div>
      <!--Likert 3-->
      <div id="likert6">
        <p class="survey-paragraph">3. My view on which party should be saved would be affected if I was involved. (D)             </p>
        <div>
         <input class="likert2" type="radio" id="OPTION-11" name="L6" value="0" required>
           <label class="scenario-option" for="OPTION-11">AGREE</label>
         <input class="likert2" type="radio" id="OPTION-12" name="L6" value="1">
           <label class="scenario-option" for="OPTION-12">DISAGREE</label><br>
        </div>
       </div>
       <input class="start-button" id="confirm2" type="button" onclick="displayRadioValue2()" style="display: block;" value="Confirm choice"><br>
    </form>    
    <div>
        <p class="survey-paragraph" id="target2" style="display: none;"></p>
    </div>
    <div>
        <form action="UtilitarianPath3.php" method="POST">
            <button class="start-button" id="deontology2" style="display: none;">Next Page (U)</button>
            <input type="hidden" name="path2" value="deontology-path">
            <input type="hidden" name="total2" id="deon-score2" value="">
        </form>
    </div>
    <div>
        <form action="DeontologyPath3.php" method="POST">
            <button class="start-button" id="utilitarian2" style="display: none;">Next Page (D)</button>
            <input type="hidden" name="path2" value="utilitarian-path">
            <input type="hidden" name="total2" id="util-score2" value="">
            
        </form>
    </div>
</div>
</main>
</body>
</html>