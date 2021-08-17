<?php session_start(); ?>
<?php 
$_SESSION["E4S1"]=$_POST["E4S1"];// Variable
$_SESSION["variable10"]=$_POST["variable10"];// Variable
$_SESSION["variable11"]=$_POST["variable11"];// Variable
$_SESSION["variable12"]=$_POST["variable12"];// Variable
$_SESSION["variable13"]=$_POST["variable13"];// Variable

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
      <div id="line">   
        <!--likert 1-->
                  <div id="likert1">
                  <p class="survey-paragraph">1. It is important to apply ethics to self-driving cars</p>
                  <div>
                   <input type="radio" id="likert1-1" name="L7" value="L7-1" required>
                     <label class="example-option" for="likert1-1">AGREE</label>
                   <input type="radio" id="likert1-2" name="L7" value="L7-2">
                     <label class="example-option" for="likert1-2">DISAGREE</label>
                  </div>
                </div>
        <!--likert 2-->
              <div id="likert2" >
                <p class="survey-paragraph">2. Manufacturers should have different ethical programming for different parts of the world where morals may be varied</p>
                <div>
                 <input type="radio" id="likert2-1" name="L8" value="L8-1"required>
                   <label class="example-option" for="likert2-1">AGREE</label>
                 <input type="radio" id="likert2-2" name="L8" value="L8-2">
                   <label class="example-option" for="likert2-2">DISAGREE</label>
                </div>
               </div>
        <!--likert 3-->
              <div id="likert3" >
                <p class="survey-paragraph">3. Self-driving cars should not have bias toward its passengers </p>
                <div>
                 <input type="radio" id="likert3-1" name="L9" value="L9-1"required>
                   <label class="example-option" for="likert3-1">AGREE</label>
                  <input type="radio" id="likert3-2" name="L9" value="L9-2">
                   <label class="example-option" for="likert3-2">DISAGREE</label>
                </div>
               </div>
        <!--likert 4-->
              <div id="likert4" >
                <p class="survey-paragraph">4. Those who are abiding by the law should have their lives preserved even if more casualties will result. </p>
                <div>
                 <input type="radio" id="likert4-1" name="L10" value="L10-1"required>
                   <label class="example-option" for="likert4-1">AGREE</label>
                 <input type="radio" id="likert4-2" name="L10" value="L10-2">
                   <label class="example-option" for="likert4-2">DISAGREE</label>
                </div>
               </div>
        <!--Likert 5-->
               <div id="likert5" >
                <p class="survey-paragraph">5. Humans should preserve strict control over self-thinking machines </p>
                <div>
                 <input type="radio" id="likert5-1" name="L11" value="L11-1"required>
                   <label class="example-option" for="likert5-1">AGREE</label>
                 <input type="radio" id="likert5-2" name="L11" value="L11-2">
                   <label class="example-option" for="likert5-2">DISAGREE</label>
                </div>
               </div>
        <!--Likert 6-->
                <div id="likert6" >
                  <p class="survey-paragraph">6. Self-Driving vehicles should not reflect existing bias in society</p>
                  <div>
                   <input type="radio" id="likert6-1" name="L12" value="L12-1"required>
                     <label class="example-option" for="likert6-1">AGREE</label>
                   <input type="radio" id="likert6-2" name="L12" value="L12-2">
                     <label class="example-option" for="likert6-2">DISAGREE</label>
                  </div>
                 </div>
        <!--Likert 7-->
                <div id="likert7" >
                  <p class="survey-paragraph">7. Self-Driving vehicles are the solution to the reduction in road traffic accidents</p>
                  <div>
                   <input type="radio" id="likert7-1" name="L13" value="L13-1"required>
                     <label class="example-option" for="likert7-1">AGREE</label>
                   <input type="radio" id="likert7-2" name="L13" value="L13-2">
                     <label class="example-option" for="likert7-2">DISAGREE</label>
                  </div>
                 </div>
      <!--Likert 8-->
                <div id="likert8" >
                  <p class="survey-paragraph">8. Automation of vehicles is a risk to society worth taking </p>
                  <div>
                   <input type="radio" id="likert8-1" name="L14" value="L14-1"required>
                     <label class="example-option" for="likert8-1">AGREE</label>
                   <input type="radio" id="likert8-2" name="L14" value="L14-2">
                     <label class="example-option" for="likert8-2">DISAGREE</label>
                  </div>
                 </div>
        
         
      <button class="start-button">Next Page</button>
      </div>
    </form>
</div>
</main>
</body>
</html>