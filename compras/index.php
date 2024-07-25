<?php
$conn = new PDO('mysql:host=localhost;dbname=comercio1', 'root', '');

// Verificação de erros na conexão
if (!$conn) {
  echo "Erro ao conectar ao banco de dados: " . $conn->errorInfo()[2];
  die();
}
// Get product information from AJAX request (replace with actual data retrieval)
$productId = $_POST['productId'];
$productName = $_POST['productName'];
$price = $_POST['price'];

// Simulate adding to a cart array (replace with database logic)
$cart = [];
if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}
$cart[] = [
  'id' => $productId,
  'name' => $productName,
  'price' => $price,
];
$_SESSION['cart'] = $cart;

echo "Produto adicionado ao carrinho!";  // Send a success message

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
    <title>lojinha | </title>
</head>
<body>
    <header>
        <h1>LOJINHA</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
     <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">RM</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$15.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">Jungkook</span>
                <img src="img/jungkook.jpg" alt="" class="img-item">
                <span class="precio-item">R$25.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">Jimin</span>
                <img src="img/jimin.jpg" alt="" class="img-item">
                <span class="precio-item">R$35.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$18.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$32.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$18.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$54.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$32.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            
        </div>
       
    
        <!-- Carrinho de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>SEU CARRINHO</h2>
            </div>

            <div class="carrito-items">
               <!-- Carrinho de compras visivel -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Total das compras</strong>
                    <span class="carrito-precio-total">
                        R$120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>
</html>