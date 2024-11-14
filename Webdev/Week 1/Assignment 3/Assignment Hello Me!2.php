<!DOCTYPE HTML>
<html lang="en">
<head>    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Find the mistakes</title>
</head>
<body>
    <?php
         echo "The time is " . date("h:i:sa");
         echo  "<h1> Califoria Occuptional Guide </h2> " ;
         echo  "<h2>Locksmiths</h2> ";
         echo  "<p>A locksmith installs, services, and repairs various types of locks and ... . <?p>";
    ?>
    <br><br>


       <?php

        echo 6+8+8+2;

        
    ?>

<br><br>



   <?php
      $left="5";
      $right= "7";
      if($left != $right)
      $left = $left ^ $right;
      $right = $left ^ $right;
      $left = $left ^ $right;
      echo "$left";
      echo "$right";





   ?>
</body>
</html>