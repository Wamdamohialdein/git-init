<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>موقع بيع الحقائب والأحذية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- القائمة العلوية -->
    <header>
        <div class="container">
            <h1>متجرالحقائب والاحذيه</h1>
            <nav>
                <ul>
                    <li><a href="index.php">الصفحة الرئيسية</a></li>
                    <li><a href="shoes.php">الاحذية</a></li>
                    <li><a href="bags.php">الحقائب</a></li>
                    <li><a href="checkout.php">إتمام الشراء</a></li>
                    <li><a href="cart.php">عربة التسوق</a></li>
                    <li><a href="#contact">تواصل معنا</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- قسم المقدمة -->
    <section id="index.php" class="intro">
        <div class="container">
            <h2>أهلاً وسهلاً بكم في متجرنا</h2>
            <p>أفضل مكان للحصول على الحقائب والأحذية ذات الجودة العالية.</p>
        </div>
    </section>

    <!-- قسم المنتجات -->
    <section class="shoes-section">
    <h2>قسم الأحذية</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/bag.jpg" alt="حقيبة">
                    <h3>حقيبة أنيقة</h3>
                    <p>سعر: $100</p>
                    <button>شراء الآن</button>
                    <button type="button"
                    data-product-name="حقيبة يد"
                    data-product-price="50$" 
                    data-product-image="images/bag.jpg" 
                    data-product-description="حقيبة يد كلاسكية انيقة">
                     اضافة الي السلة
</button>
                    <button type="button" 
                    data-product-name="حقيبة يد"
                    data-product-price="50$" 
                    data-product-image="images/bag.jpg" 
                    data-product-description="حقيبة يد كلاسكية انيقة">
                عرض التفاصيل
            </button>
                </div>
                <div class="product">
                    <img style="width = 250px;" src="images/shos2.jpg" alt="حذاء">
                    <h3>حذاء رياضي</h3>
                    <p>سعر: $90</p>
                    <button>شراء الآن</button>
                    <button type="button" 
                    data-product-name="حذاء رياضي" 
                    data-product-price="90$" 
                    data-product-image="images/shoe2.jpg" 
                    data-product-description="حذاء رياضي مريح مثالي للأنشطة اليومية.">
                اضافة الى السلة
            </button>
                    <button type="button" 
                    data-product-name="حذاء رياضي" 
                    data-product-price="90$" 
                    data-product-image="images/shoe2.jpg" 
                    data-product-description="حذاء رياضي مريح مثالي للأنشطة اليومية.">
                عرض التفاصيل
            </button>
                </div>
            </div>
        
    </section>
        <div class="container">
            
        </div>
    <footer id="contact">
        <h2>تواصل معنا</h2>
        <p>العنوان : شارع الستين ، الخرطوم</p>
        <p> الهاتف : 0962483202</p>
        <p>&copy; 2024 متجر الحقائب والأحذية. جميع الحقوق محفوظة.</p>
</footer>

<script src="script.js"></script>
</body>
</html>
