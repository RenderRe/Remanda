class Products {

    render() {
        let htmlCatalog = '';

        CATALOG.forEach(({ id, name, price, img, sil }) => {
            htmlCatalog += `
                <li class="products-element">
                    <a class="products-container__img" href="${sil}">
                    <span class="products-container__name">${name}</span>
                    <img class="products-container__img" src="${img}" />
                    <span class="products-container__price">
                        ₽${price.toLocaleString()}
                    </span>
                    </a>
                </li>
            `;
        });

        const html = `
            <ul class="products-container">
                ${htmlCatalog}
            </ul>
        `;

        ROOT_PRODUCTS.innerHTML = html;
    }
};

const productsPage = new Products();
productsPage.render();
