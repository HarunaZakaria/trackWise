<!-- Handle the add product from here  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $productType = $_POST["Product-type"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    try {
        require_once "dbh.php";
        $query = "INSERT INTO products(name, product_type, quantity, price) VALUES (:productName, :productType, quantity, price);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":productName", $productName);
        $stmt->bindParam("::productType", $productType);
        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":price", $price);

       
        $pdo = null;
        $stmt = null;

        header("Location: ../home.php");

        exit();
    } catch (PDOException $e) {
        die("Query failed: " .$e->getMessage());
    }
}


else {
    header("Location: ../home.php");
}