<?php
if (isset($_POST['login1'])) {
    $n11 = $_POST['n1'];
    $n22 = $_POST['n2'];
    $n33 =$_POST['n3'];
    $n44 =$_POST['n4'];
    $n55 = $_POST['n5'];
    $n66 = $_POST['n6'];
    $n77 = $_POST['n7'];
    $n88 = $_POST['n8'];
    $n99 = $_POST['n9'];
$number = array(
    array($n11,$n22,$n33),
    array($n44,$n55,$n66),
    array($n77,$n77,$n99)
); 

$sum = 0;
for ($i = 0; $i <= count($number); $i++) {
    $sum += $number[$i][$i];
}
echo $sum;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="text" name="n1" required/>
    <input type="text" name="n2" required/>
    <input type="text" name="n3" required/><br>

    <input type="text" name="n4" required/>
    <input type="text" name="n5" required/>
    <input type="text" name="n6" required/><br>

    <input type="text" name="n7" required/>
    <input type="text" name="n8" required/>
    <input type="text" name="n9" required/>
    <button type="submit" name="login1" value="login1">Авторизация</button>
</form>
    
</body>
</html>
