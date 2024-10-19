<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // تأكد من وجود عربة التسوق في الجلسة
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // إضافة المنتج إلى العربة
    $_SESSION['cart'][] = [
        'name' => $product_name,
        'price' => $product_price
    ];
}
?>


// عرض المنتجات الموجودة في العربة
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربة التسوق</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>عربة التسوق</h1>
            <nav>
                <ul>
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="shoes.php">الأحذية</a></li>
                    <li><a href="bags.php">الحقائب</a></li>
                </ul>
            </nav>
        </div>
    </header>
<h1 class="rtl-heading">عربة التسوق</h1>
<div class="cart-items"></div>

    <section id="cart" class="cart">
        <div class="container">
            <h2>المنتجات في عربة التسوق</h2>
            <table>
                <tr>
                    <th>المنتج</th>
                    <th>السعر</th>
                </tr>
                <?php if (!empty($_SESSION['cart'])): ?>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['product']); ?></td>
                            <td><?php echo htmlspecialchars($item['price']); ?>$</td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td><strong>الاجمالى</strong></td>
                        <td><strong><?php echo $total; ?>$</strong></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="2">العربة فارغة</td>
                    </tr>
                <?php endif; ?>
            </table>

            <form action="checkout.php" method="post">
                <button type="submit">إتمام الشراء</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 متجر الحقائب والأحذية. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
