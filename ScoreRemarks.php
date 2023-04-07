<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Remarks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="container text-center p-5 mt-5">
        <div class="container-fluid w-50 p-5 mt-5">
            <p class="h1 text-center">Score Remarks</p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                  id="remarkForm" class="border border-primary p-3 border-3">
                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                               value="<?php echo $_POST['name'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="marks" class="col-sm-2 col-form-label">Marks</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="marks" name="marks" placeholder="Marks"
                               value="<?php echo $_POST['marks'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks"
                               value="<?php echo $_POST['remarks'] ?? ''; ?>">
                    </div>
                </div>

                <button type="reset" class="btn btn-primary mr-2" id="resetButton">Reset</button>
                <button type="submit" class="btn btn-primary" id="remarkButton">Submit</button>

            </form>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <div class="alert alert-success mt-4" role="alert">
                    Thank you for Using the <b>Score Remarks</b> App.<br>Date: <?php echo date('m.d.Y'); ?>.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    function calculateRemarks($marks): string
    {
        if ($marks >= 40) {
            return "Proceed";
        } else {
            return "Halt";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $remarks = '';
        $marks = $_POST['marks'];
        $remarks = calculateRemarks($marks);
        echo '<script>document.getElementById("remarks").value = "' . $remarks . '";</script>';

    }
    ?>

</div>

</html>