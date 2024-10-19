// script.js

// تأكيد إضافة منتج إلى عربة التسوق
function confirmAddToCart() {
    alert('تم إضافة المنتج إلى عربة التسوق!');
}

// عرض تفاصيل المنتج
function showProductDetails(event) {
    event.preventDefault(); // لمنع إعادة تحميل الصفحة
    const productName = event.target.getAttribute('data-product-name');
    const productPrice = event.target.getAttribute('data-product-price');
    const productImage = event.target.getAttribute('data-product-image');
    const productDescription = event.target.getAttribute('data-product-description');

    // إنشاء عنصر لعرض تفاصيل المنتج
    const detailsContainer = document.createElement('div');
    detailsContainer.style.position = 'fixed';
    detailsContainer.style.top = '50%';
    detailsContainer.style.left = '50%';
    detailsContainer.style.transform = 'translate(-50%, -50%)';
    detailsContainer.style.backgroundColor = '#fff';
    detailsContainer.style.border = '2px solid #007bff';
    detailsContainer.style.padding = '20px';
    detailsContainer.style.zIndex = '1000';

    detailsContainer.innerHTML = `
        <h3>${productName}</h3>
        <img src="${productImage}" alt="${productName}" style="max-width: 100px;">
        <p>السعر: ${productPrice} ريال</p>
        <p>${productDescription}</p>
        <button onclick="closeDetails()">إغلاق</button>
    `;

    document.body.appendChild(detailsContainer);
}

// إغلاق تفاصيل المنتج
function closeDetails() {
    const detailsContainer = document.querySelector('div[style*="position: fixed"]');
    if (detailsContainer) {
        document.body.removeChild(detailsContainer);
    }
}

// إضافة حدث لجميع أزرار "عرض التفاصيل"
document.addEventListener('DOMContentLoaded', () => {
    const detailButtons = document.querySelectorAll('.product button');

    detailButtons.forEach(button => {
        button.addEventListener('click', showProductDetails);
    });
});
// تأكد من أن الكود ينفذ بعد تحميل الصفحة بالكامل
document.addEventListener('DOMContentLoaded', () => {

    // تحديد جميع أزرار إضافة المنتج إلى السلة
    const cartButtons = document.querySelectorAll('.add-to-cart');
    const buyNowButtons = document.querySelectorAll('.buy-now');

    // إضافة حدث النقر لكل زر "إضافة إلى السلة"
    cartButtons.forEach(button => {
        button.addEventListener('click', () => {
            // جلب بيانات المنتج من data attributes
            const productName = button.getAttribute('data-product-name');
            const productPrice = button.getAttribute('data-product-price');
            const productImage = button.getAttribute('data-product-image');
            const productDescription = button.getAttribute('data-product-description');

            // التحقق من أن القيم ليست null أو undefined
            if (productName && productPrice && productImage && productDescription) {
                // تجهيز المنتج لتخزينه في السلة
                const product = {
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    description: productDescription
                };

                // الحصول على السلة الحالية من Local Storage أو إنشاء سلة جديدة
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                // إضافة المنتج إلى السلة
                cart.push(product);
                
                // تخزين السلة في Local Storage
                localStorage.setItem('cart', JSON.stringify(cart));
                
                // رسالة تأكيد
                alert(`تم إضافة ${productName} إلى عربة التسوق!`);
            } else {
                alert('خطأ: بيانات المنتج غير موجودة.');
            }
        });
    });

    // إضافة حدث النقر لكل زر "شراء الآن"
    buyNowButtons.forEach(button => {
        button.addEventListener('click', () => {
            // جلب بيانات المنتج من data attributes
            const productName = button.getAttribute('data-product-name');
            const productPrice = button.getAttribute('data-product-price');
            const productImage = button.getAttribute('data-product-image');
            const productDescription = button.getAttribute('data-product-description');

            // التحقق من أن القيم ليست null أو undefined
            if (productName && productPrice && productImage && productDescription) {
                // إعداد المنتج لشراء الآن
                const product = {
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    description: productDescription
                };

                // يمكنك توجيه المستخدم إلى صفحة الدفع مع تمرير بيانات المنتج
                alert(`شراء الآن: ${productName} بسعر ${productPrice} ريال.`);
                // إعادة التوجيه إلى صفحة الدفع يمكن أن يتم هنا:
                // window.location.href = 'checkout.php';
            } else {
                alert('خطأ: بيانات المنتج غير موجودة.');
            }
        });
    });

});
document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.add-to-cart');

    cartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.getAttribute('data-product-name');
            const productPrice = button.getAttribute('data-product-price');
            const productImage = button.getAttribute('data-product-image');
            const productDescription = button.getAttribute('data-product-description');

            if (productName && productPrice && productImage && productDescription) {
                const product = {
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    description: productDescription
                };

                // الحصول على السلة الحالية أو إنشاء سلة جديدة
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                // إضافة المنتج إلى السلة
                cart.push(product);
                
                // تخزين السلة في Local Storage
                localStorage.setItem('cart', JSON.stringify(cart));
                
                alert(`تم إضافة ${productName} إلى عربة التسوق!`);
            } else {
                alert('خطأ: بيانات المنتج غير موجودة.');
            }
        });
    });
});
