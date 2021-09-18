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
<h2><strong>Tính lãi đầu tư qua các năm</strong></h2>
<form method="post">
    <h4><strong>Nhập vào số tiền đầu tư ban đầu (đơn vị tiền tệ là :  $)</strong></h4>
    <input type="number" name="input" placeholder="Nhập số tiền"/><br>
    <h4><strong>Nhập số % lãi suất / năm :</strong></h4>
    <input type="number" name="percent" placeholder="Nhập số lãi suất năm"/><br>
    <h4><strong>Nhập số năm đầu tư:</strong></h4>
    <input type="number" name="year" placeholder="Nhập số năm"/><br><br>
    <input type="submit" id="submit" value="Calculate"/>
    <br>
    <h4><strong>Tổng số tiền bạn nhận được là :  </strong></h4>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["input"];
        $percent = $_POST["percent"];
        $year = $_POST["year"];
        for ($i=0 ; $i < $year; $i++) {
            $number = (($number * $percent) / 100) + $number;
        }
        echo $number;
    }






?>
</body>
</html>
