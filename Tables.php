<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
<body>
    <?php session_start(); ?>
    <?php 
    include('connect.php');
    $conn = connect();
    try
{
    //SQL Insert Results
    $sql0 = "INSERT INTO 
            CarScenarios (ScenarioNumber,LikertNumber,StageOne,StageTwo,StageThree)
         VALUES 
        ('1','1','A full coach of 40 passengers is driving down a quiet road when an unidentified van with three passengers comes quickly around the corner. The coach driver is then presented with two options. The first option is continuing the present course into the van which would be the best option at preserving all life on the coach but would kill all on board the van. The second option is swerve suddenly off the road into the verge which would threaten the life of everyone on board the coach but save those which are in the van. Should the coach driver?','More is revealed about the coach incident. The coach is controlled by an AI driver and the van driving quickly is an ambulance responding to an emergency the two responses of the driver are the same. Should the coach?','The final piece of information is revealed the emergency the ambulance is responding to is one which is involving your family member if the ambulance does not get there they will die. If in the last step you chose to preserve the live of all in the coach, do you change your mind because of this information'),
        ('2','2','In 2033, a self-driving bus full of 20 people is driving safely down a lane, when a coach driven by a human full of 8 passengers drives around the corner. An accident is inevitable, if the self-driving bus continues the human driver in the other bus will be forced to swerve killing all 8 passengers, but saving the life of the 20. If the self-driving bus intervenes to avoid the other bus the 8 lives will be saved as the self-driving bus veers off the road to the loss of life for the 20 passengers. Should the self-driving bus?','More is revealed about the buses. The self-driven bus is a prototype criminal processing vehicle, and the vehicle contains 5 prison staff and 15 prisoners of unknown guilt status or crime. The 8 passengers in the human driven vehicle are on their way to a stag do and there is the possibility the human driver is intoxicated the human driven bus is at fault as it has drifted into the other lane. Should the self-driving bus?','Finally you find yourself teleported into the human driven party bus and are involved in the revelry. The same scenario occurs the protype prison bus drives legally aroudn the corner and the party bus drifts into the road, if the prison bus continues it will kill all the passengers in the party bus. Despite being at fault for the impending crash does being onboard the bus make you change your mind (if you chose to option A for part 2)? Or Should the prison bus swerve off the road killing all 20 on board'),
        ('3','3',' A self-driving car full of 5 passengers is approaching a corner when some people start to cross the road and the brakes of the vehicle fail, knowing that it will not be able to stop or slow down before the crossing people the alternative for the car is to swerve around the 3 pedestrians but into a large, parked cement mixer resulting in the fatalities of those in the car. Should the car?','Another piece of information is revealed. The pedestrians which have entered the road are 2 school children running into the road to retrieve their ball while the third is their parent attempting to pull them back. Does this change your opinion on which should be saved? Should the car?','The final piece of information is revealed, you and your family are driving to a wedding when the children and parent step into the road. If you chose to avoid the pedestrians in step 2 does this affect your choice?'),
        ('4','4','','',''), 
        ('5','5','A jack-knifed truck—should it hit the truck and kill its own driver, or should it swerve onto a crowded pavement and kill 3 pedestrians? A human driver might react randomly (if she has time to react at all), but the response of an autonomous vehicle would have to be programmed ahead of time. What should we tell the car to do?','You are in a self-driving car with two passengers that is driving down a narrow country road when it comes around a corner there are a family of 4 people in on a walk with their dog in the road. What should we tell the car to do?','')";

    $conn->exec($sql0);
    $sql = "INSERT INTO 
            StageOneUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s1-util','1','e1s1','Continue the present course','Utilitarian'),
        ('e2s1-util','2','e2s1','Continue the present course','Utilitarian'),
        ('e3s1-util','3','e3s1','Continue the present course','Utilitarian'),
        ('e4s1-util','4','e4s1','','Utilitarian'), 
        ('e5s1-util','5','e5s1','Continue present course crashing itself and killing the driver','Utilitarian')";
        
        $conn->exec($sql);
    $sql1 = "INSERT INTO 
            StageTwoUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s2-util','1','e1s2','Continue the present course','Utilitarian'),
        ('e2s2-util','2','e2s2','Continue the present course','Utilitarian'),
        ('e3s2-util','3','e3s2','Continue the present course','Utilitarian'),
        ('e4s2-util','4','e4s2','','Utilitarian'), 
        ('e5s2-util','5','e5s2','Continue the present course and hit the pedestrians ','Utilitarian')";
        $conn->exec($sql1);
    $sql2 = "INSERT INTO 
            StageThreeUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES
        ('e1s3-util','1','e1s3','Continue the present course','Utilitarian'),
        ('e2s3-util','2','e2s3','Continue the present course','Utilitarian'),
        ('e3s3-util','3','e3s3','Continue the present course','Utilitarian'),
        ('e4s3-util','4','e4s3','','Utilitarian'), 
        ('e5s3-util','5','e5s3','','Utilitarian')";
        $conn->exec($sql2);
    $sql3 = "INSERT INTO 
            StageOneDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s1-deon','1','e1s1','Make the intervention and avoid the crash','Deontology'),
        ('e2s1-deon','2','e2s1','Intervene avoiding the human driven bus','Deontology'),
        ('e3s1-deon','3','e3s1','Make the intervention and hit the cement mixer','Deontology'),
        ('e4s1-deon','4','e4s1','','Deontology'),
        ('e5s1-deon','5','e5s1','Swerve off the road and kill the pedestrians on the pavement ','Deontology')";
        $conn->exec($sql3);
    $sql4 = "INSERT INTO 
            StageTwoDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s2-deon','1','e1s2','Make the intervention to avoid the ambulance','Deontology'),
        ('e2s2-deon','2','e2s2','Intervene avoiding the human driven bus','Deontology'),
        ('e3s2-deon','3','e3s2','Make the intervention and hit the cement mixer','Deontology'),
        ('e4s2-deon','4','e4s2','','Deontology'),
        ('e5s2-deon','5,'e5s2','Continue the present course and hit the pedestrians ','Deontology')";
        $conn->exec($sql4);
    $sql5 = "INSERT INTO 
            StageThreeDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s3-deon','1','e1s3','Make the intervention to avoid the ambulance','Deontology'),
        ('e2s3-deon','2','e2s3','Swerve off the road to save the life of those on the party bus','Deontology'),
        ('e3s3-deon','3','e3s3','Make the intervention and hit the cement mixer','Deontology'),
        ('e4s3-deon','4','e4s3','','Deontology'),
        ('e5s3-deon','5','e5s3','','Deontology')";
        $conn->exec($sql5);
    $sql6 = "INSERT INTO 
            LikertStronglyAgree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','STRONGLY AGREE'),
        ('L2','2','STRONGLY AGREE'),
        ('L3','3','STRONGLY AGREE'),
        ('L4','4','STRONGLY AGREE'),
        ('L5','5','STRONGLY AGREE'),
        ('L6','6','STRONGLY AGREE'),
        ('L7','7','STRONGLY AGREE'),
        ('L8','8','STRONGLY AGREE'),
        ";
        $conn->exec($sql6);
    $sql7 = "INSERT INTO 
            LikertAgree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','AGREE'),
        ('L2','2','AGREE'),
        ('L3','3','AGREE'),
        ('L4','4','AGREE'),
        ('L5','5','AGREE')
        ('L6','6','AGREE')
        ('L7','7','AGREE')
        ('L8','8','AGREE')";
        $conn->exec($sql7);
    $sql8 = "INSERT INTO 
            LikertNAnorD (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','Neither agree nor disagree'),
        ('L2','2','Neither agree nor disagree'),
        ('L3','3','Neither agree nor disagree'),
        ('L4','4','Neither agree nor disagree'),
        ('L5','5','Neither agree nor disagree')
        ('L6','6','Neither agree nor disagree')
        ('L7','7','Neither agree nor disagree')
        ('L8','8','Neither agree nor disagree')";
        $conn->exec($sql8);
    $sql9 = "INSERT INTO 
            LikertDisagree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','DISAGREE'),
        ('L2','2','DISAGREE'),
        ('L3','3','DISAGREE'),
        ('L4','4','DISAGREE'),
        ('L5','5','DISAGREE')
        ('L6','6','DISAGREE')
        ('L7','7','DISAGREE')
        ('L8','8','DISAGREE')    ";
        $conn->exec($sql9);
    $sql10 = "INSERT INTO
            LikertStronglyDisagree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','STRONGLY DISAGREE'),
        ('L2','2','STRONGLY DISAGREE'),
        ('L3','3','STRONGLY DISAGREE'),
        ('L4','4','STRONGLY DISAGREE'),
        ('L5','5','STRONGLY DISAGREE')   
        ('L6','6','STRONGLY DISAGREE')   
        ('L7','7','STRONGLY DISAGREE')   
        ('L8','8','STRONGLY DISAGREE')    ";
        $conn->exec($sql10);
}
        catch (PDOException $e) {
            echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
         }
        $conn = null;

    ?>
  </body>
</html>

