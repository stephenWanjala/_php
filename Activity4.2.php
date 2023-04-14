<?php

$customer = '';
if (isset($_POST['submit'])) {
    $customer = $_POST['customer'];
    $stotal = $_POST['stotal'];
    $percent = $_POST['percent'];
    $amount = $_POST['amount'];
    $total = $_POST['total'];
}
if ($customer == 1) {
    if ($stotal < 100) {
        $percent = 0.30;
        $amount = (float)$stotal * (float)$percent;
        $total = (float)$stotal - (float)$amount;
    } elseif ($stotal >= 100 && $stotal < 250) {
        $percent = 0.10;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    } elseif ($stotal >= 250 && $stotal < 500) {
        $percent = 0.25;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    } else {
        $percent = 0.30;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    }
} elseif ($customer == 2) {
    if ($stotal > 0) {
        $percent = 0.30;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    }
} elseif ($customer == 3) {
    if ($stotal < 500) {
        $percent = 0.40;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    } else {
        $percent = 0.50;
        $amount = $stotal * $percent;
        $total = $stotal - $amount;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Total Calculator</title>
    <style>
        body {
            text-align: center;
        }

        form {
            border: 3px solid blue;
            display: inline-block;
            padding: 10px;
        }

        .hr {
            border-style: dotted;
        }
    </style>
</head>

<body>
<h1>Invoice Total Calculator</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="p">
        <p>Customer Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="customer">
                <option value="1">Regular</option>
                <option value="2">Loyalty Program</option>
                <option value="3">Honored Citizen</option>
            </select>
        </p>
        <p>Invoice Subtotal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="stotal" value="<?php echo $stotal; ?>"> </p>
        <hr class="hr">
        <p>Discount Percent: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="percent" value="<?php echo $percent; ?>" readonly>%</p>
        <p>Discount Amount: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="amount" value="<?php echo $amount; ?>" readonly></p>
        <p>Invoice Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" readonly name="total" value="<?php echo $total; ?>" readonly></p>
    </div>
    <p class="btn">
        <input type="submit" name="submit" value="Calculate">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="reset" value="Clear Form">

    </p>
</form>
</body>

</html>