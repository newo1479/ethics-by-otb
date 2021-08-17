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
       //SQL Create Tables
    $sql = "CREATE TABLE IF NOT EXISTS StageOneUtilitarian (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql);
    $sql1 = "CREATE TABLE IF NOT EXISTS  StageTwoUtilitarian (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql1);
    $sql2 = "CREATE TABLE IF NOT EXISTS StageThreeUtilitarian (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql2);
    $sql3 = "CREATE TABLE IF NOT EXISTS StageOneDeontology (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql3);
    $sql4 = "CREATE TABLE IF NOT EXISTS StageTwoDeontology (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql4);
    $sql5 = "CREATE TABLE IF NOT EXISTS StageThreeDeontology (
        Value varchar(600),
        ScenarioNumber int,
        Name varchar(600),
        Content varchar(600),
        Result varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql5);
    $sql6 = "CREATE TABLE IF NOT EXISTS LikertStronglyAgree (
        Name varchar(600),
        ScenarioNumber int,
        Value varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql6);
    $sql7 = "CREATE TABLE IF NOT EXISTS LikertAgree (
        Name varchar(600),
        ScenarioNumber int,
        Value varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql7);
    $sql8 = "CREATE TABLE IF NOT EXISTS LikertNAnorD (
        Name varchar(600),
        ScenarioNumber int,
        Value varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql8);
    $sql9 = "CREATE TABLE IF NOT EXISTS LikertDisagree (
        Name varchar(600),
        ScenarioNumber int,
        Value varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql9);
    $sql10 = "CREATE TABLE IF NOT EXISTS LikertStronglyDisagree (
        Name varchar(600),
        ScenarioNumber int,
        Value varchar(600),
        PRIMARY KEY (Name)
        )";
        $conn->exec($sql10);
    $sql11 = "CREATE TABLE IF NOT EXISTS CarScenarios (
        ScenarioNumber int,
        LikertNumber int,
        StageOne varchar(650),
        StageTwo varchar(650),
        StageThree varchar(650),
        PRIMARY KEY (ScenarioNumber)
        )";
            $conn->exec($sql11)
}

        catch (PDOException $e) {
             echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
    }
        $conn = null;

        ?>
</body>
</html>
