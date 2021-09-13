
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title> Maila </title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Förnamn: <input type="text" name="fname"><br>
Efternamn: <input type="text" name="ename"><br>
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$fname=$_POST["fname"];
$ename=$_POST["ename"];
$msg = "Här kommer ett meddelande från Anders";
$headers1 = "Content-type: text/html; charset=utf-8\r\n";
$headers2= "From:"."opandejacob@gmail.com"."\r\n"; //Avsändarens epost
mail("test-c76cbmxrm@srv1.mail-tester.com","Lite text",$msg,$headers1.$headers2);
echo "Meddelandet skickat";
}

?>

</body>
</html>