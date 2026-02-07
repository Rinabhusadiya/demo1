<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Factorial Calculator</h2>

<form method="post">
    <label>Enter a Number:</label><br>
    <input type="number" name="num" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate Factorial">
</form>

<?php

function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}

if (isset($_POST['submit'])) {
    $number = intval($_POST['num']);
    $result = factorial($number);
    echo "<h3>Factorial of $number is: $result</h3>";
}
?>

</body>
</html>
