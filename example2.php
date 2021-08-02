<?php session_start(); ?>
<?php 
$_SESSION["E1S1"]=$_POST["E1S1"];//E1S1 Variable
$_SESSION["E1S2"]=$_POST["E1S2"];//E1S2 Variable
$_SESSION["E1S3"]=$_POST["E1S3"];//E1S3 Variable
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
    <form method="POST" action="example3.php">
      <!--example 2-->
        <div id="example4">
            <p class="survey-paragraph">In 2033, a self-driving bus full of 20 people when a coach driven by a human full of 8 passengers drives around the corner. An accident is inevitable, if the self-driving bus continues the human driver in the other bus will be forced to swerve killing all 8 passengers saving the life of the 20. If the self-driving bus intervenes to avoid the other bus the 8 lives will be saved as the self-driving bus veers off the road to the loss of life for the 20 passengers. Should the self-driving bus? </p>
            <input type="radio" id="example2-stage1-utilitarian-ni" name="E2S1" value="E2S1-UTILITARIAN-ni"required>
                <label class="example-option" for="example2-stage1-utilitarian-ni"> Continue present course (saves 20, kill 8) </label><br>
            <input type="radio" id="example2-stage1-deontology-i" name="E2S1" value="E2S1-DEONTOLOGY-i">
              <label class="example-option" for="example2-stage1-deontology-i">Intervene avoiding the human diven bus (saves 8, kill 20)</label><br>
        </div> 
        <div>
            <button id="e2p1-button" class="confirm-button" onclick="e2s1Lock()">Confirm Choice</button>
        </div>
        <!--Part 2 -->
        <div id="example5" style="display: none;">
          <p class="survey-paragraph">More is revealed about the buses. The self-driven bus is a prototype criminal processing vehicle, and the vehicle contains 5 prison staff and 15 prisoners of unknown guilt status or crime. The 8 passengers in the human driven vehicle are on their way to a stag do and there is the possibility the human driver is intoxicated the human driven bus is at fault as it has drifted into the other lane. Should the self-driving bus?</p>
          <input type="radio" id="example2-stage2-utilitarian-ni" name="E2S2" value="E2S2-UTILITARIAN-ni"required>
          <label class="example-option" for="example2-stage2-utilitarian-ni" onclick=>Continue the present course (saves 20 prison bus, kills 8) </label><br>
          <input type="radio" id="example2-stage2-deontology-i" name="E2S2" value="E2S2-DEONTOLOGY-i">
          <label class="example-option" for="example2-stage2-deontology-i" onclick=>Intervene avoiding the human diven bus (saves 8, kill 20)</label><br>
         </div>
         <div> 
             <button id="e2s2-button" class="confirm-button" style="display: none;" onclick="e2s2Lock()">Confirm Choice</button>
         </div> 
         <!--Part 3 --> 
              <div id="example6" style="display: none;">
                <P class="survey-paragraph"> Finally you find yourself teleported into the human driven party bus and are involved in the revelry. The same scenario occurs the protype prison bus drives legally aroudn the corner and the party bus drifts into the road, if the prison bus continues it will kill all the passengers in the party bus. Despite being at fault for the impending crash does being onboard the bus make you change your mind (if you chose to option A for part 2)? Or Should the prison bus swerve off the road killing all 20 on board </P>
                <input type="radio" id="example2-stage3-UTILITARIAN-ni" name="E2S3" value="E2S3-UTILITARIAN-ni" onclick="submitExamples2()"required></input>
                  <label class="example-option" for="example2-stage3-utilitarian-ni" onclick="submitExamples2()"> Continue on Present course (saving 20 on prison bus, killing the 8 on party bus)</label><br>
                <input type="radio" id="example2-stage3-DEONTOLOGY-i" name="E2S3" value="E2S3-DEONTOLOGY-i" onclick="submitExamples2()">
                  <label class="example-option" for="example2-stage3-deontology-i" onclick="submitExamples2()"> Swerve off the road to save the life of those on the party bus (20 on prison bus killed, 8 on party bus saved) (</label><br>
              </div>
              <div>
                <button class="start-button" id="e2-submit" style="display: none;">Next Page</button>
             </div>
      </form>
    </div>
</main>
</body>
</html>