<?php
session_start();
// التحقق من أن جميع البيانات متوفرة
if (isset($_GET['product_name']) && isset($_GET['product_price']) && isset($_GET['product_image']) && isset($_GET['product_description'])) {
    $product_name = $_GET['product_name'];
    $product_price = $_GET['product_price'];
    $product_image = $_GET['product_image'];
    $product_description = $_GET['product_description'];
} else {
    // إذا لم تتوفر البيانات، يمكن توجيه المستخدم إلى صفحة خطأ أو الصفحة الرئيسية
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product_name; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>تفاصيل المنتج</h1>
    </header>

    <div class="container">
        <div class="product-details">
            <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" style="max-width: 300px; margin-bottom: 20px;">
            <h2><?php echo $product_name; ?></h2>
            <p><?php echo $product_description; ?></p>
            <p><strong>السعر:</strong> <?php echo $product_price; ?> دولار</p>

            <!-- زر إضافة إلى السلة -->
            <form action="cart.php" method="POST">
                <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                <input type="hidden" name="product_image" value="<?php echo $product_image; ?>">
                <button type="submit">إضافة إلى السلة</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 متجر الحقائب والأحذية. جميع الحقوق محفوظة.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>

