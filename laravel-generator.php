<!DOCTYPE html>
        <html>
                <head>
                        <title></title>
                </head>
                <body>
                        <p>Generatore di Passoword Casuali</p>
                         <form method="get">
                                <?php $nchrvalue = 0;
                                        if (isset($_GET["nchr"])){
                                                $nchrvalue = $_GET["nchr"];
                                        }
                                                echo "<input type=\"text\" name=\"nchr\" value=\"".$nchrv$
                                ?>
                                        <input type="submit" value="Genera">
                         </form>
                        <?php
                                        $password = "";
                                if (isset($_GET["nchr"])) {
                                        $nchr = $_GET["nchr"];
                                         for ($i = 1; $i <= $nchr; $i++) {
                                                 $num = rand(32, 127);
                                         $let = chr($num);
                                         $password .= $let;
                                         }
                                         }
                                         $_SESSION["password"]= $password;
                                                echo "<p>".$password."</p>";
                        ?>
                        <?php
                                $passwd = $_SESSION["password"];
                                $shaex = hash("sha256", $passwd, false);
                                echo "<p>".$shaex."</p>";
                        ?>
                </body>
         </html>
