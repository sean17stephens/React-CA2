document.addEventListener('DOMContentLoaded', fetchProducts)


function fetchProducts() {

    fetch('db-connect.php')
        .then(res => res.json())
        .then(json => {
            document
                .querySelector('#productsContainer')
                .innerHTML = json.map(product => '<li>${product.name}: ${product.price}</li>').join('')
        
        });
}