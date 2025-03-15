document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown-content");
    dropdowns.forEach(dropdown => {
        const hiddenItems = dropdown.querySelectorAll(".hidden");
        if (hiddenItems.length > 0) {
            const showMoreButton = document.createElement("button");
            showMoreButton.className = "show-more hidden";
            showMoreButton.innerHTML = '<i class="fas fa-chevron-down"><img src="pic/showmore.png" alt="Show more"></i><span>Больше вариантов</span>';
            showMoreButton.addEventListener("click", () => toggleShowMore(dropdown, showMoreButton));
            dropdown.parentElement.appendChild(showMoreButton);
        }
    });

    const filterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    const productGrid = document.querySelector('.product_grid');
    const prevPageButton = document.getElementById('prevPage');
    const nextPageButton = document.getElementById('nextPage');
    const pageNumbers = document.querySelectorAll('.page-number');
    let currentPage = 1;
    const productsPerPage = 15;

    const products = window.products;

    function filterProducts() {
        const selectedCategories = Array.from(document.querySelectorAll('input[name="clothes"]:checked')).map(cb => cb.value);
        const selectedFabrics = Array.from(document.querySelectorAll('input[name="cloth"]:checked')).map(cb => cb.value);

        const filteredProducts = products.filter(product => {
            const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(product.category);
            const matchesFabric = selectedFabrics.length === 0 || selectedFabrics.includes(product.fabric);
            return matchesCategory && matchesFabric;
        });

        renderProducts(currentPage, filteredProducts);
    }

    function renderProducts(page, filteredProducts = products) {
        productGrid.innerHTML = '';
        const start = (page - 1) * productsPerPage;
        const end = start + productsPerPage;
        const productsToShow = filteredProducts.slice(start, end);
    
        productsToShow.forEach(product => {
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

    prevPageButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderProducts(currentPage);
        }
    });

    nextPageButton.addEventListener('click', () => {
        if (currentPage < Math.ceil(products.length / productsPerPage)) {
            currentPage++;
            renderProducts(currentPage);
        }
    });

    renderProducts(currentPage);
});

    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const showMoreButton = dropdown.parentElement.querySelector(".show-more");

        if (dropdown.style.maxHeight) {
            dropdown.style.maxHeight = null;
            if (showMoreButton) {
                showMoreButton.classList.add("hidden");
            }
        } else {
            dropdown.style.maxHeight = dropdown.scrollHeight + "px";
            if (showMoreButton) {
                showMoreButton.classList.remove("hidden");
            }
        }
    }

    function toggleShowMore(dropdown, button) {
        const hiddenItems = dropdown.querySelectorAll(".hidden");

        hiddenItems.forEach(item => {
            item.style.display = item.style.display === "none" ? "block" : "none";
        });

        const isShowingMore = Array.from(hiddenItems).some(item => item.style.display !== "none");
        button.querySelector("span").textContent = isShowingMore ? "Меньше вариантов" : "Больше вариантов";

        dropdown.style.maxHeight = dropdown.scrollHeight + "px";
        dropdown.parentElement.appendChild(button);
    }