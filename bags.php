<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحقائب</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>متجر الحقائب</h1>
            <nav>
                <ul>
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="shoes.php">الأحذية</a></li>
                    <li><a href="cart.php">عربة التسوق</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bags-section">
    <h2>الحقائب المتاحة</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/bag.jpg" alt="حقيبة">
                    <h3>حقيبة يد</h3>
                    <p>سعر: $50</p>
                    <button class="add-to-cart" 
                    data-product-name="حقيبة يد" 
                    data-product-price="50$" 
                    data-product-image="images/bag.jpg" 
                    data-product-description="حقيبة يد كلاسيكية أنيقة.">
                اضافة الي السلة
            </button>
                      <button class="buy-now"
                    data-product-name="حقيبة يد" 
                    data-product-price="50$" 
                    data-product-image="images/bag.jpg" 
                    data-product-description="حقيبة يد كلاسيكية أنيقة.">
                عرض التفاصيل
            </button>
                    <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حقيبة يد">
            <input type="hidden" name="product_price" value="50$">
            <input type="hidden" name="product_image" value="images/bag.jpg">
            <input type="hidden" name="product_description" value="حقيبة يد كلاسكية انيقه">
            
        </form>
    </div>
                </div>
                <div class="product">
                    <img src="images/bag3.jpg" alt="حقيبة">
                    <h3>حقيبة متعددة الاحجام</h3>
                    <p>سعر: $250</p>
                    <button class="add-to-cart"
                    data-product-name="حقيبة سفر" 
                    data-product-price="250$" 
                    data-product-image="images/bag3.jpg" 
                    data-product-description="حقيبة سفر متعددة الاحجام ومقاسات مختلفة">
                اضافة الى السلة
                </button>
                <button class="buy-now" 
                    data-product-name="حقيبة سفر" 
                    data-product-price="250$" 
                    data-product-image="images/bag3.jpg" 
                    data-product-description="حقيبة سفر متعددة الاحجام ومقاسات مختلفة">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حقيبة سفر">
            <input type="hidden" name="product_price" value="250$">
            <input type="hidden" name="product_image" value="images/bag3.jpg">
            <input type="hidden" name="product_description" value="حقيبة سفر متعددة الاحجام ومقاسات مختلفة">
            
        </form>
    </div>
    <div class="product">
                    <img src="images/bag5.jpg" alt="حقيبة">
                    <h3>حقيبة ظهر</h3>
                    <p>سعر: $140</p>
                    <button class="add-to-cart" 
                    data-product-name="حقيبة ظهر" 
                    data-product-price="140$" 
                    data-product-image="images/bag5.jpg" 
                    data-product-description="حقيبة ظهر مريحة غى الحمل">
                اضافة الي السلة
            </button>
                   <button class="buy-now"
                    data-product-name="حقيبة ظهر" 
                    data-product-price="140$" 
                    data-product-image="images/bag5.jpg" 
                    data-product-description="حقيبة ظهر مريحة غى الحمل">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حقيبة ظهر">
            <input type="hidden" name="product_price" value="140$">
            <input type="hidden" name="product_image" value="images/bag5.jpg">
            <input type="hidden" name="product_description" value="حقيبة ظهرمريحة فى الحمل ">
            
        </form>
    </div>
    <div class="product">
                    <img src="images/bag8.jpg" alt="حقيبة">
                    <h3>حقيبة مدرسية</h3>
                    <p>سعر: $160</p>
                    <button class="add-to-cart" 
                    data-product-name="حقيبةمدرسية" 
                    data-product-price="160$" 
                    data-product-image="images/bag8.jpg" 
                    data-product-description="حقيبة مدرسية بناتية">
                اضافة الي السلة
            </button>
                     <button class="buy-now"
                    data-product-name="حقيبةمدرسية" 
                    data-product-price="160$" 
                    data-product-image="images/bag8.jpg" 
                    data-product-description="حقيبة مدرسية بناتية">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حقيبة مدرسية">
            <input type="hidden" name="product_price" value="160$">
            <input type="hidden" name="product_image" value="images/bag8.jpg">
            <input type="hidden" name="product_description" value="حقيبة مدرسية بناتية">
           
        </form>
    </div>
    <div class="product">
                    <img src="images/bag7.jpg" alt="حقيبة">
                    <h3>حقيبة انيقة </h3>
                    <p>سعر: $350</p>
                     <button class="add-to-cart"
                    data-product-name="حقيبة انيقة" 
                    data-product-price="250$" 
                    data-product-image="images/bag7.jpg" 
                    data-product-description="حقيبة انيقة فخمه للمناسبات">
                اضافة الى السلة
            </button>
            <button class="buy-now" 
                    data-product-name="حقيبة انيقة" 
                    data-product-price="250$" 
                    data-product-image="images/bag7.jpg" 
                    data-product-description="حقيبة انيقة فخمه للمناسبات">
                عرض التفاصيل
            </button>
            <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="حقيبة انيقة ">
            <input type="hidden" name="product_price" value="250$">
            <input type="hidden" name="product_image" value="images/bag7.jpg">
            <input type="hidden" name="product_description" value="حقيبة انيقة فخمه للمناسبات ">
            
        </form>
    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 متجر الحقائب. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
