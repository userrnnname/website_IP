function getProductIdFromURL() {
    const params = new URLSearchParams(window.location.search);
    return parseInt(params.get('id'));
}

function renderProductPage() {
    const productId = getProductIdFromURL();
    const product = window.products.find(p => p.product_id === productId); 

    if (product) {
        document.getElementById('product-image').src = product.product_image;
        document.getElementById('product-name').textContent = product.product_name;
        document.getElementById('product-price').textContent = product.product_price;
        document.getElementById('product-description').textContent = `Категория: ${product.category}, Материал: ${product.fabric}`;

        const addToCartButton = document.getElementById('add-to-cart-button');
        addToCartButton.addEventListener('click', () => addToCart(productId));
    } else {
        document.getElementById('product-name').textContent = 'Продукт не найден';
    }
}

function addToCart(productId) {
    fetch('php/check_login.php')
        .then(response => response.json())
        .then(data => {
            if (data.loggedIn) {
                fetch('php/add_to_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Товар добавлен в корзину!');
                    } else {
                        alert('Не удалось добавить товар в корзину.');
                    }
                });
            } else {
                alert('Пожалуйста, войдите в систему, чтобы добавить товар в корзину.');
                window.location.href = 'php/login.php';
            }
        });
}

window.onload = renderProductPage;