<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css?v=1.0.6.6" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Lato&effect=anaglyph">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- ICONS AND COLORS -->
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#0055f2">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#0055f2">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#0055f2">
        <!-- Default phone zoom -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="container">
            
            <!-- LOGO WITRYNY -->
            <header class="header">
                <h1 class="font-effect-anaglyph">Spiker<sub>v2</sub></h1>
            </header> 
            
            <!-- CONTENT POBIERANY Z SERWERA -->
            <?php 
            if (isset ($_POST['id'])) {
                $id = $_POST['id'];
                $directories = glob("./*", GLOB_ONLYDIR);
                print "<a href='./index.php'>Powrót</a>";
                print "/";
                print "<a href='./przedmiot.php?id=".$id."'>".substr($directories[$id], 2)."</a>";
            }
            ?>

            <!-- SCRIPT NA POCZATKU, CELEM OPTYMALIZACJI UX -->
            <script>
            function ad_clicked() {
                document.getElementById('ad_1').setAttribute("onmouseout", "");
                document.getElementById('td_ad_1').setAttribute("class", "download_button_inactive");
                document.getElementById('td_arrow_1').setAttribute("class", "download_button_inactive");
                ad_mouse_over();
            }
                
            function ad_mouse_over() {
                document.getElementById('up').setAttribute("class", "download_button_inactive");
                document.getElementById('down').setAttribute("class", "download_button_active");
            }
                
            function ad_mouse_out() {
                document.getElementById('up').setAttribute("class", "download_button_active");
                document.getElementById('down').setAttribute("class", "download_button_inactive");
            }
                
            function up_over(up) {
                var text = "Aby pobrać, kli"; text += "knij pro"; text += "szę w"; text += " re"; text += "kla"; text += "mę";
                up.innerHTML = "<p>" + text + "</p>";
            }
                
            function up_out(up) {
                up.innerHTML = "<p>Pobierz</p>";
            }
            </script>
            
            <table class="ad_table" id="ad_table_id1">
            <tr>
                <td align="center" id="td_ad_1">
                    <!-- REKLAMA -->
<!--                    1/4 -->
<!--
                    <div class="ad_container" id="ad_1" onclick="ad_clicked()">
                        <script type="text/javascript" src="//www.adfreestyle.pl/show/RtgEIcYRVMA"></script>
                    </div>
-->
                    <!-- END REKLAMA -->
                </td>
            </tr>
            <tr>
                <td id="td_arrow_1">
<!--                    2/4 -->
<!--                    <div id="bottom"></div>-->
                </td>    
            </tr>
            <tr>                
                <td>
<!--                    3/4-->
<!--                    <div class="download_button_active" id="up" style="width: 336px;" onmouseover="up_over(this)" onmouseout="up_out(this)"><p>Pobierz</p></div>-->

                    <?php
                    if (isset($_POST['id'])) $id = $_POST['id'];
                    if ($_POST['path']) $path = $_POST['path'];
                    
                    print "<form action='./pobierz.php' method='post'>";
                    if (isset($_POST['subject'])) {
                        for ($i = 0, $len = $_POST['count_lectures']; $i < $len; $i++) {
                            if (isset($_POST['subject'][$i])) {
                                print "<input type='hidden' name='file_id[$i]' value='$i'>";
                            }
                        }
                    }
                    
                    print "<input type='hidden' name='id' value='".$id."' />";
                    print "<input type='hidden' name='path' value='".$path."' />";
//                    4/4
//                    print "<input type='submit' name='download' id='down' style='font-family: Consolas;' value='Teraz pobierz' class='download_button_inactive' />";
                    print "<input type='submit' name='download' id='down' style='font-family: Consolas;' value='Pobierz' class='download_button_active' />";
                    print "</form>";
                    ?>
                </td>
            </tr>
            </table>
            
        </div> <!-- END container -->

        <!-- PROPELLERADS AD -->
        <!-- <script type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=1284377"></script> -->
        <!-- <script src="//go.mobtrks.com/notice.php?p=1284391&interstitial=1"></script> -->
        <!-- END PROPELLERADS AD -->
        
        <!-- GOOGLE ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-86627205-2', 'auto');
          ga('send', 'pageview');
        </script>
        <!-- END GOOGLE ANALYTICS -->
    </body>
</html>