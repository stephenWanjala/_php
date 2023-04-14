<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Discount Calculator</title>
</head>
<body>
    <div align="center" style="border: 1px solid blue">
        <h2>Product Discount Calculator</h2>
        <form name="discountForm" action="" method="post">
            <p>Product Description: <input type="text" name="txtProductDescription" value="TV" /></p>
            <p>List Price: <input type="text" name="txtListPrice" value="45000" /></p>
            <p>Discount Percentage: <input type="text" name="txtDiscountPercentage" value="10"/>%</p>
            <p>Discount Amount: <input type="text" name="txtDiscountAmount" /></p>
            <p>Discount Price: <input type="text" name="txtDiscountPrice" /></p>
            <p><input type="submit" name="butDiscount" value="Calculate" />&nbsp;
            <input type="reset" name="butReset" value="Reset" /></p>
        </form>
        <?php
        if (isset($_POST['butDiscount'])) {
            $productDescription = $_POST['txtProductDescription'];
            $listPrice = $_POST['txtListPrice'];
            $discountPercentage = $_POST['txtDiscountPercentage'];
            $discountAmount = $listPrice * ($discountPercentage / 100);
            $discountPrice = $listPrice - $discountAmount;
            echo "<script>";
            echo "document.getElementsByName('txtDiscountAmount')[0].value='$discountAmount';";
            echo "document.getElementsByName('txtDiscountPrice')[0].value='$discountPrice';";
            echo "</script>";
        }
        ?>
        <p>Thanks for using the discount calculator app <br> <br> Date: <?php echo date('Y-m-d'); ?></p>
    </div>
</body>
</html>
