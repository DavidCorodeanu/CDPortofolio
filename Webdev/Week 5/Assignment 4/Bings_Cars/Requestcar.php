<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname= filter_input(INPUT_POST, "fname");
    $lname= filter_input(INPUT_POST, "lname");
    $carbrand= filter_input(INPUT_POST, "carbrand");
    $options= filter_input(INPUT_POST, "options");
    $insurance= filter_input(INPUT_POST, "insurance");
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Bing's Cars™</title>
</head>
<body>
    <main>
        
            <menu>
                <img id="logo" src="./Images/logo.png" alt="logo">
                <div class="menuflexbox">
                <?php
$menuTexts = array("Home", "Most hired cars", "Contact");
$linkarray = array("./index.php", "./index.php", "./Requestcar.php");

for ($i = 0; $i < 3; $i++) {
    echo "<div><a href='{$linkarray[$i]}'>{$menuTexts[$i]}</a></div>";
    
}
?>
            </div>
            </menu>



            <header>
                <div>
                    <div id="headertextone">
                        <p class="headertextbing">Bing's Cars</p>
                        <p class="headertextspecial">For all your sepcial cars</p>
                    </div>
            <img id="headerimage" src="./Images/header.png" alt="headerimage">
                
               </div>
             </header>
           <article>
           

           <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($fname) || empty($lname) || empty($options))
    {
        echo "<h1>Request a car</h1><p class='errormessage'>Please provide all necessary information</p>";
    }
    elseif(strlen($options) < 5)
    {
        echo "<h1>Request a car</h1><p class='errormessage'>The Options field must contain at least 5 words</p>";
    }
    elseif(!empty($fname) && !empty($lname) && !empty($options) && strlen($options) > 5)
    {
        echo "<h1>Thank you</h1>";
        foreach($_POST as $key => $lock)
        {
            echo "<p>";
            echo "$key: ";
            echo $lock;
            echo "</p>";
        }
    }

} else{

?>
           <h1>Request a car</h1>
           <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">

           <p><label for="fname">Firstname</label></p>  
           <input type="text" name="fname" id="fname">
           <p><label for="lname">Last name</label></p>  
           <input type="text" name="lname" id="lname">

           <p><label for="carbrand">Car brand & model</label></p>
           <select name="carbrand" id="carbrand">
            <option value="carbrand">Volkswagen</option>
            <option value="carbrand">Volvo</option>
           </select>
           <select name="carbrand" id="carmodelcolor">
            <option value="carbrand">Hatchback</option>
            <option value="carbrand">Cabrio</option>
           </select>
           <p><label for="options">Options</label></p>
           <textarea name="options" id="options" placeholder="If you want any extra options, add them here..."></textarea>
           <p><label for="insurance">Do you want insurance?</label></p>
           <p><input type="radio" name="insurance" id="insurance">Yes</p>
           <p><input type="radio" name="insurance" id="insurance">No</p>
           <input type="submit" value="Send request">
           </form>

           <?php
}
?>


        </article>
        <footer>
            <div>
            <p class="bingscarswhite">C 2022 Bings Cars</p>
            <a class="emaillink" href="">Send us a direct e-mail!</a>
            </div>
            
            <div class="openinghours">
                <div>Monday 13:00 - 18:00</div>
                <div>Tuesday 9:00 - 18:00</div>
                <div>Wednesday 9:00 - 18:00</div>
                <div>Thursday 9:00 - 21:00</div>
                <div>Friday 9:00 - 21:00</div>
                <div>Saturday 9:00 - 17:00</div>

            </div>



        </footer>










        
    </main>
</body>
</html>