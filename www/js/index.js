document.addEventListener("DOMContentLoaded", () => {

    const newArrivalsLink = document.getElementById("new-arrivals-link");

    newArrivalsLink.addEventListener("click", function (event) {
        event.preventDefault();

        const productSection = document.getElementById("product-section");

        productSection.scrollIntoView({ behavior: "smooth" });
    });


    const productGrid = document.querySelector('.product_cards');

    const products = window.products;

    function renderProducts() {
        productGrid.innerHTML = '';
        products.slice(0, 5).forEach(product => {
            const cardLink = document.createElement('a');
            cardLink.href = `product.php?id=${product.product_id}`;
            cardLink.className = 'product_card_link';

                const card = document.createElement('div');
                card.className = 'product_card';
                card.innerHTML = 
                    `
                    <img src="${product.product_image}" alt="${product.product_name}" class="product_image">
                    <h3 class="product_name">${product.product_name}</h3>
                    <p class="product_price">${product.product_price}</p>
                `;
                cardLink.appendChild(card);
            productGrid.appendChild(cardLink);
        });
    }

        renderProducts();
    });

        