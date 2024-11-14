<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $sport = filter_input(INPUT_POST, "sport", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $communication = filter_input(INPUT_POST, "communication");
    $sub = filter_input(INPUT_POST, "sub");
}

var_dump($_POST);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form.css" type="text/css">
    <title>Sports Newsletter</title>
</head>



<body>
    <main>
        <h1>Sports Newsletter</h1>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname"><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br><br>

        <p class="nomargin">Favorite sport?</p>
        <div>
        <label for="fencing">Fenching:</label>
        <input type="checkbox" name="sport[]" value="fencing" id="fencing">
        <label for="football">Football:</label>
        <input type="checkbox" name="sport[]" value="football" id="football">
        <label for="tennis">Tennis:</label>
        <input type="checkbox" name="sport[]" value="tennis" id="tennis">
        <label for="volleyball">Volleyball:</label>
        <input type="checkbox" name="sport[]" value="volleyball" id="volleyball">
        <label for="basketball">Basketball</label>
        <input type="checkbox" name="sport[]" value="basketball" id="basketball"><br><br>
        </div>

        <label for="communication">Newsletter:</label>
        <select name="communication" id="communication">
            <option value="email">Email</option>
            <option value="carrier pigeon">Carrier pigeon</option>
            <option value="smoke signals">Smoke signals</option>
            <option value="Telepathy">Telepathy</option>
        </select>



        <p class="nomargin">Subscription Tier</p>

        <div>
            <div>
            <label for="sub">Tier 1: 10$</label>
            <input type="radio" name="sub" id="tier 1"><br>
            </div>
            <div>
            <label for="sub">Tier 2: 25$</label>
            <input type="radio" name="sub" id="tier 2"><br>
            </div>
            <div>
            <label for="sub">Tier 3: 50$</label>
            <input type="radio" name="sub" id="tier 3">
            </div>
        </div><br>

        <div>
                <input type="submit" value="Send">
                <input type="reset" value="Reset">
                <button>Send it as well</button>
            </div>
         </form>

         <?php

         if(!empty($fname)  && !empty($lname))
         {
            if(!empty($sport))
            {
                
            }
         }
         else
         {
            echo "Please fill in first name and last name.";
         }




        ?> 
 


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </main> 
</body>
</html>