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
   /* //SQL Create Table
    $sql = "CREATE TABLE IF NOT EXISTS NumberDeadSmall (
        RandomNumber int,
        Dead int       
        )";
        $conn->exec($sql);
    $sql1 = "CREATE TABLE IF NOT EXISTS NumberDeadLarge (
        RandomNumber int,
        Dead Int
        )";
        $conn->exec($sql1);
    $sql2 = "CREATE TABLE IF NOT EXISTS FamilyRelationships (
        RandomNumber int,
        Family varchar (20)
        )";
        $conn->exec($sql2);
        */
    //SQL Insert VALUES 
    $sql0 = "INSERT INTO 
            NumberDeadSmall (RandomNumber,Dead)
         VALUES 
        ('1','2'),
        ('2','3'),
        ('3','4'),
        ('4','5'), 
        ('5','6')";

    $conn->exec($sql0);
    $sql = "INSERT INTO 
            NumberDeadLarge (RandomNumber,Dead)
        VALUES 
        ('1','10'),
        ('2','12'),
        ('3','14'),
        ('4','16'), 
        ('5','20')";
        
        $conn->exec($sql);
    $sql1 = "INSERT INTO 
            FamilyRelationships (RandomNumber,Family)
        VALUES 
        ('1','Father'),
        ('2','Mother'),
        ('3','Brother'),
        ('4','Sister'), 
        ('5','Aunt and Uncle')";
        $conn->exec($sql1);
    }
        catch (PDOException $e) {
            echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
         }
        $conn = null;

    ?>
  </body>
</html>

