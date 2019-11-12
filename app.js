document.addEventListener('DOMContentLoaded', fetchProducts)


function fetchProducts() {

    fetch('db-connect.php')
        .then(res => res.json())
        .then(json => {
            document
                .querySelector('#productsContainer')
                .innerHTML = json.map(products =>`<li> ${products.Name}: ${products.Price}</li>`).join('')
        
        });
}