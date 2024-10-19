<?php
session_start();

// استرداد بيانات العميل
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';

// يمكنك هنا إضافة كود لحفظ البيانات في قاعدة بيانات أو إرسالها عبر البريد الإلكتروني إذا لزم الأمر
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شكراً لتسوقك</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>شكراً لتسوقك!</h1>
        <nav>
            <ul>
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="shoes.php">الأحذية</a></li>
                <li><a href="bags.php">الحقائب</a></li>
                <li><a href="cart.php">عربة التسوق</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>لقد تم إتمام عملية الشراء بنجاح!</h2>
        <p>شكراً لك، <?php echo htmlspecialchars($name); ?>!</p>
        <p>ستتلقى تفاصيل الطلب عبر البريد الإلكتروني: <?php echo htmlspecialchars($email); ?></p>
    </section>

    <footer>
        <p>&copy; 2024 متجر الحقائب والأحذية. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>
