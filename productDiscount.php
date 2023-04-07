<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5 mb-4">Web Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="product" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product" name="product" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount Percentage (optional)</label>
            <input type="number" step="0.01" class="form-control" id="discount" name="discount">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $total = $quantity * $price;
    $discountAmount = $total * $discount / 100;
    $discountPrice = $total - $discountAmount;
    echo "<div class='container mt-5'>
            <h2 class='text-center'>Invoice</h2>
            <p class='text-center'>Name: $name</p>
            <p class='text-center'>Email: $email</p>
            <p class='text-center'>Product: $product</p>
            <p class='text-center'>Quantity: $quantity</p>
            <p class='text-center'>Price: $$price</p>
            <p class='text-center'>Discount: $discount%</p>
            <p class='text-center'>Total: $$total</p>
            <p class='text-center'>Discount Amount: $$discountAmount</p>
            <p class='text-center'>Discount Price: $$discountPrice</p>
          </div>";
}

?>
</body>
</html>
