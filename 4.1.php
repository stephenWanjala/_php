<?php
$present = '';
$rate = '';
$time = '';
$future = '';

if (isset($_POST['submit'])) {
    $present = $_POST['present'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];
    $future = $_POST['future'];
}
$future = (float)$present * pow((1 + (float)$rate / 100), (int)$time);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value App</title>
    <style>
        body {
            text-align: center;
        }

        form {
            border: 3px solid blue;
            display: inline-block;
            padding: 1px 2px;
        }

        .heading {
            text-align: center;
            color: blue;
        }

        .p {
            box-sizing: border-box;
        }

        .btn {
            display: flex;
            margin-left: 95px;
        }
    </style>
</head>

<body>
<h1>Future Value App</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
    <h3 class="heading">Future Value Calculator</h3>
    <div class="p">
        <p>Investment Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="present" value="<?php echo $present; ?>"></p>
        <p>Yearly Interent Rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="float" name="rate" value="<?php echo $rate; ?>"> %</p>
        <p>Number of Years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="time" value="<?php echo $time; ?>"></p>
        <p>Future Value &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" readonly name="future" value="<?php echo round($future, 2); ?>"></p>
    </div>
    <p class="btn">
        <input type="submit" name="submit" value="Compute">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="reset" value="Clear Form">

    </p>
</form>
</body>

</html>