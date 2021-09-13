<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title> Maila </title>
</head>
<body>
<?php
$msg = "Meddelandet kommer från ".$_POST["fname"]." ".$_POST["ename"];
mail("anders.andersson@kristinehamn.se","Meddelande",$msg);
echo "Meddelandet skickat";
?>
</body>
</html>