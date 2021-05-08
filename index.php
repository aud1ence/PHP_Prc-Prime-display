<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Prime</title>
</head>
<body>
<form method="post">
    <h2>Display Prime</h2>
    <input type="text" name="input">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];

}

$count = 0;
$num = 2;
while ($count < $input) {
    if (primeNum($num)) {
        echo "So nguyen to: {$num} <br>";
        $count++;
    }
    $num++;
}

function primeNum($n) {
    $flag = true;
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $flag = false;
            break;
        }
    }
    return $flag;
}
?>
</body>
</html>