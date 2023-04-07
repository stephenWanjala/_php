
<html lang="en">
<!DOCTYPE html>
<head>
    <title>Fahrenheit to Celsius Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center p-5 mt-5">
    <div class="container-fluid w-50 p-5 mt-5">
        <p class="h1 text-center">Fahrenheit to Celsius Converter</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
              id="converterForm" class="border border-primary p-3 border-3">

            <div class="form-group">
                <label for="fahrenheit">Degrees Fahrenheit</label>
                <input type="number" class="form-control" id="fahrenheit" name="fahrenheit" placeholder="Enter Degrees Fahrenheit" value="<?php echo $_POST['fahrenheit'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label for="celsius">Degrees Celsius</label>
                <input type="number" class="form-control" id="celsius" name="celsius" value="<?php echo $celsius ?? ''; ?>" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Convert</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fahrenheit = $_POST['fahrenheit'];
            $celsius = ($fahrenheit - 32) * 5/9;
            echo '<div class="alert alert-success mt-3" role="alert">The temperature in Celsius is ' . $celsius . '°C on ' . date("Y-m-d") . '</div>';
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
