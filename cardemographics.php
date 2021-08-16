<?php session_start(); ?>
<?php 
$_SESSION["L7"]=$_POST["L7"];//L13 Variable
$_SESSION["L8"]=$_POST["L8"];//L14 Variable
$_SESSION["L9"]=$_POST["L9"];//L9 Variable
$_SESSION["L10"]=$_POST["L10"];//L10 Variable
$_SESSION["L11"]=$_POST["L11"];//L11 Variable
$_SESSION["L12"]=$_POST["L12"];//L12 Variable
$_SESSION["L13"]=$_POST["L13"];//L13 Variable
$_SESSION["L14"]=$_POST["L14"];//L14 Variable
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
    <form method="POST" action="Carresults2.php">
    <div id="submit-examples">
      <!--Age-->
      <div>
        <p class="survey-paragraph">Please select your age</p>
        <input type="radio" id="0-17" name="AGE" value="0-17" required>
          <label class="scenario-option" for="0-17">Under 18</label>
        <input type="radio" id="18-21" name="AGE" value="18-21">
          <label class="scenario-option" for="18-21">18-21</label>
        <input type="radio" id="22-30" name="AGE" value="22-30">
          <label class="scenario-option" for="22-30">22-30</label>
        <input type="radio" id="31-40" name="AGE" value="31-40">
          <label class="scenario-option" for="31-40">31-40</label>
        <input type="radio" id="41-50" name="AGE" value="41-50">
          <label class="scenario-option" for="41-50">41-50</label>
        <input type="radio" id="51-60" name="AGE" value="51-60">
          <label class="scenario-option" for="51-60">51-60</label>
        <input type="radio"id="61<" name="AGE" value="61-99">
          <label class="scenario-option" for="61<">Over 60</label>
      </div>
      <div id="line"></div>
      <!--Gender-->
      <div>
        <p class="survey-paragraph">Please select your gender</p>
        <select name="gender" id="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div id="line"></div>
      <!--Education-->
      <div>
        <p class="survey-paragraph">Please select your highest acheived level of education</p>
        <select name="education" id="education" required>
        <option value="none">None</option>
          <option value="a-level">A-Level</option>
          <option value="bachelor">Bachelor's Degree</option>
          <option value="postgraduate">Postgraduate Qualification</option>
        </select>
      </div>
      <div>
      <div>
      <input type="submit" class="start-button" type="submit"></input>
      </div>
</form>
    </div>
</main>
</body>
</html>