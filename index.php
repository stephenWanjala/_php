<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the form data here
        // get form field values
    getFormFieldValues();


    // Redirect the user to the same page
  header("Location: ".$_SERVER['PHP_SELF']);
  exit();
}
?>

<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Score Remarks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container text-center p-5 mt-5">

    <div class="container-fluid w-50 p-5 mt-5">
        <p class="h1 text-center">Score Remarks</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
              id="remarkForm" class="border border-primary p-3 border-3">

            <div class="form-group row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="name"
                    value=<?php echo $_POST['name'] ?? ''; ?>>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="marks" class="col-sm-2 col-form-label">Mark</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="marks" placeholder="Marks"
                    value=<?php echo $_POST['marks'] ?? ''; ?>>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="remark" class="col-sm-2 col-form-label">Remark</label>
                <div class="col-sm-10">
                    <label for="remarks"></label><input type="text" class="form-control" id="remarks" placeholder="reMarks"
                                                        value=<?php echo $_POST['remarks'] ?? ''; ?>>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="remarkButton">Submit</button>
    </div>
</div>

<?php
// check if form has been submitted
/**
 * @return void
 */
function getFormFieldValues(): void
{
    $name = $_POST['name'] ?? '';
    $marks = $_POST['marks'] ?? '';

    // set default remarks value
    $remarks = '';

    // determine remarks value based on marks
    if ($marks >= 80) {
        $remarks = 'Excellent';
    } else if ($marks >= 60) {
        $remarks = 'Good';
    } else if ($marks >= 40) {
        $remarks = 'Average';
    } else {
        $remarks = 'Poor';
    }

    // set form field values
    echo '<script>document.getElementById("name").value = "' . $name . '";</script>';
    echo '<script>document.getElementById("marks").value = "' . $marks . '";</script>';
    echo '<script>document.getElementById("remarks").value = "' . $remarks . '";</script>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get form field values
    getFormFieldValues();
}
?>   // output results
    echo '<h2>Results:</h2>';
    echo '<p>Name: ' . $name . '</p>';
    echo '<p>Marks: ' . $marks . '</p>';
    echo '<p>Remarks: ' . $remarks . '</p>';

<script>

</script>
</body>
</html>

