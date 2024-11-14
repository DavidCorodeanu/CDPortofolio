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
           <h1>Pick one of our popular cars!</h1>
           <div class="imageflexbox">
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
           <div class="carimagebox">
            <img id="carimage" src="./Images/car1.png" alt="car">
            <p class="hyonda">Hyonda</p>
            <p class="hyonda">&#8364 120.000</p>
            <p>Beautiful car that can last for years to come.</p>
           </div>
        </div>

        <h2>Who is Bing cars?</h2>
        <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis posuere nulla, quis ultrices quam sollicitudin ut. Maecenas ac arcu ullamcorper, aliquam dui vel,
             scelerisque turpis. Vivamus urna sem, rutrum sed arcu in, cursus dictum diam. Vestibulum bibendum vulputate magna et sagittis. Nullam nunc mauris, laoreet at eros id,
              maximus ullamcorper lectus. Nulla rhoncus quam eu tristique viverra. Cras risus dolor, pellentesque molestie dictum quis, blandit a augue. Cras pharetra massa ut nisi 
              ullamcorper, ut cursus lorem dictum. Quisque vulputate orci malesuada massa porta sagittis. Aliquam sit amet dui quis ex vehicula placerat.
        </p>
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