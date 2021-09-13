

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<h1>Array med för-loop</h1>
<p> Den här är en array med for loop </p>
<p> Den här är en array med for loop </p>
<p> Den här är en array med for loop </p>
<p> 
<?php 
$namn=array("Abraham Lincoln","George Washington", "Theodore Roosevelt", "Barrack Obama");
for ($i=0; $i <count($namn) ; $i++) { 
    echo $namn[$i]."<br>";
}

?></p>
<h1>Array med for-each</h1>
<p> 
    <?php 
$namn=array("Abraham Lincoln","George Washington", "Theodore Roosevelt", "Barrack Obama");
foreach ($namn as $key) 
{
    echo $key."<br>";
}
?>
</p>
    
</body>
</html>