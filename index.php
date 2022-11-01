<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Individual Digits</title>
</head>
<body>
    <h1>
        <?php
            $num = 123;
            $ini_num = $num;
            $sum = 0;
            while($num > 0) {
                $rem = $num % 10;
                $sum += $rem;
                $num /= 10;
            }
            echo "The sum of the digits of the number $ini_num is $sum";
        ?>
    </h1>
</body>
</html>