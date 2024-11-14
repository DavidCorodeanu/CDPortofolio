<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password");
    $user = filter_input(INPUT_POST, "user");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./Css/loggedin.css" type="text/css">
    <title>Geekaboo | Web Development</title>
</head>
<body>
    <main>
        <header>
        <div id="geekaboologo">
            <img src="./Images/logo_geekaboo.png" alt="geekaboo logo">
        </div>
        <p></p>
        <nav>
            <ol>
                <ul><a href="./index.html">HOMEPAGE</a></ul>
                <ul><a href="">REGISTER</a></ul>
                <ul><a href="">CONTACT</a></ul>
                <ul><a href="">LOGOUT USER</a></ul>
            </ol>
        </nav>
    </header>
    <article>
        <div id="login">
            <h2 class="login">Welcome, UseR</h2>
            <?php
 function userlogin($user, $email, $password)
 {
    if($user == "user" && $email == "user@user.com"  && $password == "user")
    {
    echo "welcome user";
    }
    elseif($user == "admin" && $email == "admin@admin.com"  && $password == "admin")
    {
        echo "welcome admin";
    }
else{
   echo "The
password given is not correct";
    
}
 }



        ?>



<?php
               if($_SERVER['REQUEST_METHOD'] == "POST")
               {

                userlogin($user, $email, $password);
                
               }
               else{


           ?>


   

        <?php
               }
               ?>
        </div>
        <div id="browsers">
            <h2 class="browsers">Browsers</h2>
            <p>We create websites for:</p>
            <div class="browsers">
                <?php
            $browserType = array("ff", "ie", "opera", "safari", "netscape");
            foreach ($browserType as $browser)
            {
                echo "<div class='$browser'><img src='./Images/$browser.png' alt='$browser'></div>";
            }
            ?>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                 parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                  pede justo, fringilla vel, aliquet nec,</p>
            </div>
        </div>
        <div id="welcome">
            <h2 class="welcome">Welcome at Geekaboo</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                 montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
                 fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                  Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                   ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        </div>
    </article>
    <div class="beforefooter">
        <div>Info about Geekaboo
            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,<br> sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
        </div>
        <div>Service at Geekaboo
        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,<br> sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
        </div>
        <div>More from Geekaboo
        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,<br> sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
        </div>
        <div>Warranty at Geekaboo
        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,<br> sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
        </div>
    </div>
    <footer>
        <p>&copy; Geekaboo 2023</p>
    </footer>








    </main>
    
</body>
</html>