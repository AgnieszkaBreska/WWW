<!DOCTYPE HTML>
<html>
	<head lang="pl">
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <meta name="description" content="" >
        <meta name="keywords" content="" >
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<title>Breśka Agnieszka</title>
	</head>
	<body>
        <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',$useragent))

header("Location: http://volt.iem.pw.edu.pl/~breskaa/mobile.html");
?> 

        <p>
        This will be desktop site
        </p>
       <p> 
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~breskaa%2Fdetectmobile.php"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
  </p> 
  </body>
</html>