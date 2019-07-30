<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Du Doan Tuong Lai</title>
</head>
<style>
    form{
        width: 400px;
        height: 300px;
        border:1px solid #CCCCCC;
    }
    input[type=text]{
        width: 150px;
        margin:5px;
        padding:5px;
    }
</style>
<body>
<form method="post">
    <h2>Future Value Calculator</h2>
    Investment Amount:<input type="text" name="amount" value="0"/><br/>
    Yearly Interest Rate:<input type="text" name="rate" value="0"/><br/>
    Number of Years:<input type="text" name="year" value="0"/><br/>
    <input type="submit"  value="Calculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $amount=$_POST["amount"];
    $rate=$_POST["rate"];
    $year=$_POST["year"];
    $result=($amount + ($amount*$rate))*$year;
    echo "gia tri tuong lai ".$result;
}
?>
</body>
</html>