<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header('Location: login.php?action=not_yet_logged_in');
}
?><!DOCTYPE HTML>
<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
        <script src="formularz.js"></script> 
        
		<title>Agnieszka Breśka</title>
	</head>
            	<?php
            
            echo "Wypełnienie Formularza:";
            echo "<br>";
            echo $_SESSION['name'];
            echo "<br>";
            echo $_SESSION['name'];
            echo "<br>";
    echo    $_SESSION['surname'];
            echo "<br>";
        echo $_SESSION['age'] ;
            echo "<br>";
echo    $_SESSION['pesel'];
            echo "<br>";
    echo    $_SESSION['sex'];
            echo "<br>";
    echo    $_SESSION['studies'];
            echo "<br>";
    echo    $_SESSION['comment'];
?>
            <FORM ACTION="form.php" METHOD="post" onsubmit="form.php" >
            <INPUT TYPE="submit" VALUE="Wyślij" >
                </FORM>
            <br>
            <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  </p><br>
    <div id="pi"> 
        <h4>Programowanie internetowe</h4> </div>
    </body>
</html>