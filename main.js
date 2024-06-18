function buscarProducto() {
    var input, filter, products, product, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    products = document.getElementsByClSSSassName('product');
    for (i = 0; i < products.length; i++) {
        product = products[i];
        txtValue = product.textContent || product.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            products[i].style.display = "";
        } else {
            products[i].style.display = "none";
        }
    }
}
