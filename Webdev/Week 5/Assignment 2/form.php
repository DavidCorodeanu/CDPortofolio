<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - Web Player: Music for young people</title>
    <link rel="stylesheet" href="./Css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./Css/index.css" type="text/css">
</head>
<body>
    <main>
        <header>
            What do you want to play?
        </header>

        <div class="Yourlibrary">
            <div class="yourlibrary"><p>Your Library</p><p>+ADD</p></div>
            <div class="container"><p>Create your first playlist</p>
            <p>It's easy</p>
            <p>Create Playlist</p>
            </div>
            <div class="container">
                <p>Let's find some podcast</p>
                <p>We'll keep you</p>
                <p>Browse podcasts</p>
            </div>
            <div class="container2">
                <p>legal,safety,etc</p>
                <p>Languages</p>



            </div>

        </div>

        <div class="Popularscroll">
            <div class="form">
                <h3>Flixify Sign-up</h3>
                <?php

                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    function ValidateInput()
                    {
                        $fname= filter_input(INPUT_POST, "fname");
                        $email= filter_input(INPUT_POST, "email");
                        $phoneNr= filter_input(INPUT_POST, "phoneNr");
                        $taste= filter_input(INPUT_POST, "taste", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
                        $free= filter_input(INPUT_POST, "free");
                        $textarea= filter_input(INPUT_POST, "textarea");

                        $errorList = array();

    if(empty($fname))
    {
        $errorList[] =  "<p class='errorliststyle'>empty name</p>";
    }
    if(empty($email))
    {
        $errorList[] = "<p class='errorliststyle'>Empty age</p>";
    }
    if(empty($phoneNr))
    {
        $errorList[] ="<p class='errorliststyle'>Country?</p>";
    }
    if(empty($errorList))
    {
        $errorList[]= "<p class='errorliststyle'>it's good</p>";
    }

    return $errorList;
}

$array = ValidateInput();

foreach($array as $element)
{
    echo $element;
}              
                }
                else
                {
                    ?>
                <form class="BookingForm" action="<?php echo $_SERVER["PHP_SELF"]?>"  method="POST">
                <p><label for="fname">Name:</label></p>
                <input type="text" id ="fname" name="fname" >
                <p><label for="email">Age:</label></p>
                <input type="text" id ="email" name="email">
                <p><label for="phoneNr">Country:</label></p>
                <input type="text" id ="phoneNr" name="phoneNr">



                <p>Music preference:</p>
                <div>
                    <label for="rock">RocknRoll</label>
                    <input type="checkbox" name="taste[]" value="rock" id="rock">
                    <label for="rnb">RnB</label>
                    <input type="checkbox" name="taste[]" value="rnb" id="rnb">
                    <label for="pop">Pop music</label>
                    <input type="checkbox" name="taste[]" value="pop" id="pop">
                    <label for="tech">Techno</label>
                    <input type="checkbox" name="taste[]" value="tech" id="tech">
                    <label for="dance">Dancehall</label>
                    <input type="checkbox" name="taste[]" value="dance" id="dance">
                </div>


                <p>Subscription:</p>
                <p><label for="free">Free</label>
                <input type="radio" name="free" value="Free" id="free">
                <label for="premium">Premium</label>
                <input type="radio" name="free" value="premium" id="premium">
                <label for="premium++">Premium++</label>
                <input type="radio" name="free" value="premium++" id="premium++">

                <p><label for="textarea">Notes:</label><p>
                <textarea id="textarea" name="textarea"></textarea>


                   <p> <input type="submit" value="send" id="submitbutton"></p>

               
            </form>
            <?php
                }
                ?>
                
            </div>

        </div>


        <?php







?>















        <footer>
        <div>Preview of Spotify<p>Sign up </p></div>
        <div>Sign up free</div>


        </footer>







    </main>
    
</body>
</html>