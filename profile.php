<<?php
require 'db.php';
session_start();


    if(isset($_POST['Submit'])){
        $_SESSION['uname'] = $_POST['uname'];
        $unm = $_SESSION['uname'];
        $pss = $_POST['password'];
    }

    /*
    Some auth Code
    */ 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
<div class="container">
    <div class="front side">
        <div class="content">
            <h1>
             <?php
                    echo $unm;
             ?>
             </h1>
            <p>
                <?php
                $fetch = "select flag from medical where uname = '$unm' ";
                
                $result = $conn->query($fetch);
                $row = $result->fetch_assoc();
                
                if($row==0)
                    echo "You have not secured your data with us ! <br> Hover here for more";
                else
                    echo "We have your data secured ! <br> Hover here for more";
                ?>
            </p>
        </div>
    </div>
    <div class="back side">
        <div class="content">
            <h1>Your Data</h1>
         <?php   
            $fetch = "select * from medical where uname = 'pranav0408' ";
            $result = $conn->query($fetch);
            $row = $result->fetch_assoc();

            $name = $row['name'];
            $mob = $row['mob'];
            $bldGr = $row['bldgr'];
            $adrs = $row['adrs'];
            $age = $row['age'];
            $mjd = $row['mjd'];
            
            echo "<br><br><br>";
            echo "<br>Your Name: ".$name;
            echo "<br>Your Blood Group: ".$bldGr;
            echo "<br>Your address: ".$adrs;
            echo "<br>Your age: ".$age;
            echo "<br>Your major disease: ".$mjd;
            echo "<br>Your contact number: ".$mob;

        ?>
          <form action="destroy.php">
              <input type="submit" name="Submit" value="LogOut">
          </form>
        </div>
    </div>
</div>
</body>
</html>