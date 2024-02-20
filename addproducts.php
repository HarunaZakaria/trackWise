<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main-css/addproducts.css">
    <title>trackWise</title>
</head>
<body>
    <div class="add-product-container">
        <h2>Add New Product</h2>

        <form action="includes/formhandler.php" method="post" id="productForm">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required><br>
    
            <label for="price">Product type</label>
            <input type="text" id="Product-type" name="Product-type" required><br>
    
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity"  required><br>
    
            <label for="category">Price:</label>
            <input type="number" id="pricce" name="price" required><br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
