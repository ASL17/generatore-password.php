# generatore-password.php
<?php
	$password = "";
	for ($i = 1; $i <= 10; $i++) {
   		 $num = rand(32, 127);
		 $let = chr($num);
		 $password .= $let;
	}
