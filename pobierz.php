<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css" rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
    </head>
    <body>
        <div id="container">
            
            <!-- LOGO WITRYNY -->
            <header>
                <h1 class="main_logo">Spiker</h1>
                <p class="sub_logo">Twoje centrum wymiany notatek</p>
            </header> 
            
            <!-- CONTENT POBIERANY Z SERWERA -->
            <a href="" onClick="download()" id="link">Pobierz</a>
            
            <script>
            function download() {
                e = document.getElementById("link");
                e.innerHTML = "Zmieniono";
                <?php
                if (isset($_POST['subject'])) {
                    $files = glob($_POST['path']."/*"); // tablica z wszystkimi plikami

                    foreach ($_POST['subject'] as $index => $value) {
                        print $files[$index];
                        print "<br>";
                    }
                }
                ?>
            }
            </script>
                   
            <!-- STOPKA WITRYNY -->
            <footer>
                <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
                test3
            </footer>
            
        </div> <!-- END container -->
    </body>
</html>