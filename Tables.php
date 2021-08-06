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
    $sql = "INSERT INTO 
            StageOneUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s1-util','1','e1s1','Text','Utilitarian'),
        ('e2s1-util','2','e2s1','Text','Utilitarian'),
        ('e3s1-util','3','e3s1','Text','Utilitarian'),
        ('e4s1-util','4','e4s1','Text','Utilitarian'), 
        ('e5s1-util','5','e5s1','Text','Utilitarian')";
        
        $conn->exec($sql);
    $sql1 = "INSERT INTO 
            StageTwoUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s1-util','1','e1s2','Text','Utilitarian'),
        ('e2s2-util','2','e2s2','Text','Utilitarian'),
        ('e3s2-util','3','e3s2','Text','Utilitarian'),
        ('e4s2-util','4','e4s2','Text','Utilitarian'), 
        ('e5s2-util','5','e5s2','Text','Utilitarian')";
        $conn->exec($sql1);
    $sql2 = "INSERT INTO 
            StageThreeUtilitarian (Value,ScenarioNumber,Name,Content,Result)
        VALUES
        ('e1s3-util','1','e1s3','Text','Utilitarian'),
        ('e2s3-util','2','e2s3','Text','Utilitarian'),
        ('e3s3-util','3','e3s3','Text','Utilitarian'),
        ('e4s3-util','4','e4s3','Text','Utilitarian'), 
        ('e5s3-util','5','e5s3','Text','Utilitarian')";
        $conn->exec($sql2);
    $sql3 = "INSERT INTO 
            StageOneDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s1-deon','1','e1s1','Text','Deontology'),
        ('e2s1-deon','1','e2s1','Text','Deontology'),
        ('e3s1-deon','1','e3s1','Text','Deontology'),
        ('e4s1-deon','1','e4s1','Text','Deontology'),
        ('e5s1-deon','1','e5s1','Text','Deontology')";
        $conn->exec($sql3);
    $sql4 = "INSERT INTO 
            StageTwoDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s2-deon','1','e1s2','Text','Deontology'),
        ('e2s2-deon','1','e2s2','Text','Deontology'),
        ('e3s2-deon','1','e3s2','Text','Deontology'),
        ('e4s2-deon','1','e4s2','Text','Deontology'),
        ('e5s2-deon','1','e5s2','Text','Deontology')";
        $conn->exec($sql4);
    $sql5 = "INSERT INTO 
            StageThreeDeontology (Value,ScenarioNumber,Name,Content,Result)
        VALUES 
        ('e1s3-deon','1','e1s3','Text','Deontology'),
        ('e2s3-deon','1','e2s3','Text','Deontology'),
        ('e3s3-deon','1','e3s3','Text','Deontology'),
        ('e4s3-deon','1','e4s3','Text','Deontology'),
        ('e5s3-deon','1','e5s3','Text','Deontology')";
        $conn->exec($sql5);
    $sql6 = "INSERT INTO 
            LikertStronglyAgree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','STRONGLY AGREE'),
        ('L2','2','STRONGLY AGREE'),
        ('L3','3','STRONGLY AGREE'),
        ('L4','4','STRONGLY AGREE'),
        ('L5','5','STRONGLY AGREE')";
        $conn->exec($sql6);
    $sql7 = "INSERT INTO 
            LikertAgree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','AGREE'),
        ('L2','2','AGREE'),
        ('L3','3','AGREE'),
        ('L4','4','AGREE'),
        ('L5','5','AGREE')";
        $conn->exec($sql7);
    $sql8 = "INSERT INTO 
            LikertNAnorD (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','Neither agree nor disagree'),
        ('L2','2','Neither agree nor disagree'),
        ('L3','3','Neither agree nor disagree'),
        ('L4','4','Neither agree nor disagree'),
        ('L5','5','Neither agree nor disagree')    ";
        $conn->exec($sql8);
    $sql9 = "INSERT INTO 
            LikertDisagree (Name,ScenarioNumber,Value)
        VALUES 
        ('L1','1','DISAGREE'),
        ('L2','2','DISAGREE'),
        ('L3','3','DISAGREE'),
        ('L4','4','DISAGREE'),
        ('L5','5','DISAGREE')    ";
        $conn->exec($sql9);
    $sql10 = "INSERT INTO
            LikertStronglyDisagree (Name,ScenarioNumber,Value)
              VALUES 
                ('L1','1','STRONGLY DISAGREE'),
                ('L2','2','STRONGLY DISAGREE'),
                ('L3','3','STRONGLY DISAGREE'),
                ('L4','4','STRONGLY DISAGREE'),
                ('L5','5','STRONGLY DISAGREE')    ";
        $conn->exec($sql10);
}
        catch (PDOException $e) {
            echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
         }
        $conn = null;

    ?>
  </body>
</html>

