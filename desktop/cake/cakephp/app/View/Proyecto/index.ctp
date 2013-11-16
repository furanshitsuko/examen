<?php session_start();
 
echo 'Bienvenido, ';
 
if (isset($_SESSION['k_username'])) {
    echo '<b>'.$_SESSION['k_username'].'</b>.';
    echo '<p><a href="login">Logout</a></p>';
}else{
    echo '<p><a href="login">Login</a></p>
     <p><a href="registrar">Registrar</a></p>';
}
?>
  
  
  
     <body>
        <?php
			date_default_timezone_set("Chile/Continental");
			echo "La hora en Chile es: " . date ("H:i",time()) . "<br />";
		?>
    </body>