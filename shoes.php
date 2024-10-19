<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأحذية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>متجر الأحذية</h1>
            <nav>
                <ul>
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="bags.php">الحقائب</a></li>
                    <li><a href="cart.php">عربة التسوق</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="shoes-section">
    <h2>الأحذية المتاحة</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/shos.jpg" alt="حذاء">
                    <h3>حذاء نسائي كعب مرتفع</h3>
                    <p>سعر: $120</p>
                    <button type="button" 
                    data-product-name="حذاء كلاسيك" 
                    data-product-price="120$" 
                    data-product-image="images/shos.jpg" 
                    data-product-description="حذاء كلاسيكى ذات كعب مرتفع مناسب للمناسبات">
                اضافة الى السلة
            </button>
                    <button type="button" 
                    data-product-name="حذاء كلاسيك" 
                    data-product-price="120$" 
                    data-product-image="images/shos.jpg" 
                    data-product-description="حذاء كلاسيكى ذات كعب مرتفع مناسب للمناسبات">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حذاء كلاسيك">
            <input type="hidden" name="product_price" value="120$">
            <input type="hidden" name="product_image" value="images/shos.jpg">
            <input type="hidden" name="product_description" value="حذاء كلاسيكى ذات كعب مرتفع مناسب للمناسبات">
            
</form>
                </div>
                <div class="product">
                    <img src="images/shos2.jpg" alt="حذاء">
                    <h3>حذاءرياضي</h3>
                    <p>سعر: $90</p>
                    <button type="button" 
                    data-product-name="حذاءرياضي" 
                    data-product-price="90$" 
                    data-product-image="images/shos2.jpg" 
                    data-product-description="حذاء رياضي مريح مثالى للانشطه اليومية">
                اضافة الي السلة
            </button>
                    <button type="button" 
                    data-product-name="حذاءرياضي" 
                    data-product-price="90$" 
                    data-product-image="images/shos2.jpg" 
                    data-product-description="حذاء رياضي مريح مثالى للانشطه اليومية">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حذاء رياضي">
            <input type="hidden" name="product_price" value="90$">
            <input type="hidden" name="product_image" value="images/shos2.jpg">
            <input type="hidden" name="product_description" value="حذاء رياضي مريح مثالي للأنشطة اليومية.">
            
            
        </form>
                </div>
                <div class="container">
            <h2>الأحذية</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/shos3.jpg" alt="حذاء">
                    <h3>حذاء رجالى كلاسيك</h3>
                    <p>سعر: $150</p>
                    <button class="add-to-cart"
                    data-product-name="حذاء كلاسيك" 
                    data-product-price="150$" 
                    data-product-image="images/shos3.jpg" 
                    data-product-description="حذاء كلاسيكى فخم للمناسبات">
                اضافة الي السلة
            </button>
            <button class="buy-now" 
                    data-product-name="حذاء كلاسيك" 
                    data-product-price="150$" 
                    data-product-image="images/shos3.jpg" 
                    data-product-description="حذاء كلاسيكى فخم للمناسبات">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حذاء كلاسيك">
            <input type="hidden" name="product_price" value="150$">
            <input type="hidden" name="product_image" value="images/shos3.jpg">
            <input type="hidden" name="product_description" value="حذاء كلاسيكى فخم للمناسبات">
            
</form>
                </div>
                <div class="container">
            <h2>الأحذية</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/shos4.jpg" alt="حذاء">
                    <h3>صندل رجالى</h3>
                    <p>سعر: $40</p>
                    <button class="add-to-cart"
                    data-product-name="صندل رجالى" 
                    data-product-price="40$" 
                    data-product-image="images/shos4.jpg" 
                    data-product-description="صندل رجالى مقفول من الخلف مريح فى المشى">
                اضافة الي السلة
            </button>
            <button class="buy-now" 
                    data-product-name="صندل رجالى" 
                    data-product-price="40$" 
                    data-product-image="images/shos4.jpg" 
                    data-product-description="صندل رجالى مقفول من الخلف مريح فى المشى">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="صندل رجالى">
            <input type="hidden" name="product_price" value="40$">
            <input type="hidden" name="product_image" value="images/shos4.jpg">
            <input type="hidden" name="product_description" value="صندل رجالى مقفول من الخلف مريح فى المشى">
            
</form>
                </div>
                <div class="container">
            <h2>الأحذية</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/shos7.jpg" alt="حذاء">
                    <h3>صندل نسائي مرتفع قليل</h3>
                    <p>سعر: $60</p>
                    <button class="add-to-cart" 
                    data-product-name="صندل نسائي" 
                    data-product-price="60$" 
                    data-product-image="images/shos7.jpg" 
                    data-product-description="صندل نسائي انيق">
                اضافة الى السلة
            </button>
                    <button class="buy-now"
                    data-product-name="صندل نسائي" 
                    data-product-price="60$" 
                    data-product-image="images/shos7.jpg" 
                    data-product-description="صندل نسائي انيق">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="صندل نسائي">
            <input type="hidden" name="product_price" value="60$">
            <input type="hidden" name="product_image" value="images/shos7.jpg">
            <input type="hidden" name="product_description" value="صندل نسائي انيق ">
            
</form>
                </div>
                <div class="container">
            <h2>الأحذية</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/shos9.jpg" alt="حذاء">
                    <h3>حذاءرياضي</h3>
                    <p>سعر: $68</p>
                    <button class="add-to-cart"
                    data-product-name="حذاء رياضي" 
                    data-product-price="68$" 
                    data-product-image="images/shos9.jpg" 
                    data-product-description="حذاء رياضي نسائي مريح للركض">
                اضافة الي السلة
            </button>
                    <button class="buy-now"
                    data-product-name="حذاء رياضي" 
                    data-product-price="68$" 
                    data-product-image="images/shos9.jpg" 
                    data-product-description="حذاء رياضي نسائي مريح للركض">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حذاء رياضي">
            <input type="hidden" name="product_price" value="68$">
            <input type="hidden" name="product_image" value="images/shos9.jpg">
            <input type="hidden" name="product_description" value="حذاء رياضي نسائي مريح للركض">
            
</form>
                </div>
            </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 متجر الأحذية. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>
