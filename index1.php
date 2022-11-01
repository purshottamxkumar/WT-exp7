<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome or Not</title>
</head>
<body>
    <h1>
        <?php
            $num = 232;
            $ini_num = $num;
            $rev = 0;
            while($num > 0) {
                $rem = $num % 10;
                $rev = $rev * 10 + $rem;
                $num = (int) ($num / 10);
            }
            echo "Reverse of the Number $ini_num is $rev <br>";
            if($ini_num == $rev) {
                echo $ini_num, " is a Palindrome Number";
            } else echo $ini_num, " is not a Palindrome Number";
        ?>
    </h1>
</body>
</html>