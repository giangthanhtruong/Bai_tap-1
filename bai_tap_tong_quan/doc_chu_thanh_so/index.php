<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2><strong>Nhập vào số cần đọc</strong></h2>
<form method="post">
    <input type="text" name="input" placeholder="Nhập số cần đọc"/>
    <input type="submit" id="submit" value="Read"/>
</form>
<br>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
    $inputNumber = (int)$_POST["input"];
    $sole = $inputNumber % 10;
    if ($inputNumber < 0 || $inputNumber > 999) {
        echo "out of ability";
    }

    function sodonvi($input) {
        if ($input > 0 and $input <= 15){
            switch ($input) {
                case 1:
                    echo "one";
                    break;
                case 2:
                    echo "two";
                    break;
                case 3:
                    echo "three";
                    break;
                case 4:
                    echo "four";
                    break;
                case 5:
                    echo "five";
                    break;
                case 6:
                    echo "six";
                    break;
                case 7:
                    echo "seven";
                    break;
                case 8:
                    echo "eight";
                    break;
                case 9:
                    echo "nice";
                    break;
                case 10:
                    echo "ten";
                    break;
                case 11:
                    echo "eleven";
                    break;
                case 12:
                    echo "twelve";
                    break;
                case 13:
                    echo "thirteen";
                    break;
                case 14:
                    echo "fourteen";
                    break;
                case 15;
                    echo "fifteen";
                    break;
                case 20:
                    echo "twenty";
                    break;
            }
        }
    }
    echo sodonvi($inputNumber)

?>
</body>
</html>
