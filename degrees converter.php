<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fahrenheit to Celsius Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css" />
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32) * 5/9;
}
?>

<div class="container text-center p-5 mt-5">
    <div class="container-fluid w-50 p-5 mt-5">
        <p class="h1 text-center">Fahrenheit to Celsius Converter</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
              id="converterForm" class="border border-primary p-3 border-3">
            <div class="form-group row mb-3">
                <label for="fahrenheit" class="col-sm-2 col-form-label">Fahrenheit</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="fahrenheit" name="fahrenheit"
                           placeholder="Enter temperature in Fahrenheit" required
                           value="<?php echo $_POST['fahrenheit'] ?? ''; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="celsius" class="col-sm-2 col-form-label">Celsius</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="celsius" name="celsius"
                           placeholder="Temperature in Celsius" readonly
                           value="<?php echo $celsius ?? ''; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
            <button type="reset" class="btn btn-secondary" id="resetBtn">Reset</button>
            <script>
                document.getElementById('resetBtn').addEventListener('click', function (e) {
                    document.getElementById('celsius').value = '';
                });
            </script>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
