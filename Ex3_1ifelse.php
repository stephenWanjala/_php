<!DOCTYPE html>
<html lang="EN">
<head><title>Score Remarks</title></head>
<body>
<?php
$mark = $_POST["txtmark"];
if ($mark>=40) {
    $remark = "Pass";
}
else {
    $remark = "Halt";
}
?>
<h2>Exam Processing</h2>
<form name="" action="" method="">
    <p>Score: <input type="text" name="txtmark" value="<?php echo $mark; ?>" /></p>
    <p>Remark: <input type="text" name="txtremark" value="<?php echo $remark; ?>" /></p>
</form>
</body>
</html >