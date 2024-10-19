<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إتمام الشراء</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>إتمام الشراء</h1>
            <nav>
                <ul>
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="shoes.php">الأحذية</a></li>
                    <li><a href="bags.php">الحقائب</a></li>
                    <li><a href="cart.php">عربة التسوق</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="checkout" class="checkout">
        <div class="container">
            <h2>تفاصيل الدفع</h2>

            <p>شكراً لتسوقكم معنا!</p>
            <p>الدفع سيكون نقدًا عند الاستلام.</p>
            <p>يرجى ملء النموذج أدناه لإتمام عملية الشراء.</p>
        
        <form action="thankyou.php" method="POST"> <!-- قم بتوجيه البيانات إلى صفحة thankyou.php -->
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>
            <br>

            <label for="address">عنوان الشحن:</label>
            <input type="text" id="address" name="address" required>
            <br>

            <button type="submit">إتمام الشراء</button>
        </form>
</section>
            <p><strong>المنتجات في طلبك:</strong></p>
            <ul>
                <?php if (!empty($_SESSION['cart'])): ?>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li><?php echo htmlspecialchars($item['product']); ?> - <?php echo htmlspecialchars($item['price']); ?>$</li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>

            <p><strong>إجمالي المبلغ: </strong>
            <?php
                $total = 0;
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $total += $item['price'];
                    }
                }
                echo $total . "$";
            ?>
            </p>

            <p>سيتم الاتصال بكم</p>
            </body>
            </html>
