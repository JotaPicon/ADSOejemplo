<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>MVC PHP Example</title>
</head>
<body>
    <main class="wrapper">
        <section class="products-container">
            <header>
                <h1>VirtualMall</h1>
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.niubiz.com.pe%2Fblog%2Fque-es-como-crear-tienda-virtual%2F&psig=AOvVaw2cBspKFRUTrfMS-rBDjhDT&ust=1686962282459000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCOiQr97Gxv8CFQAAAAAdAAAAABAD">
            </header>
            <?php foreach( $products as $product ) : ?>
                <ul class="product-info">
                    <li><span>Code:</span> <?= $product->getProductCode();  ?></li>
                    <li><span>Name:</span> <?= $product->getProductName();  ?></li>
                    <li><span>Short name:</span> <?= $product->getProductShortName();  ?></li>
                    <li><span>PVP:</span> <?= $product->getProductPvp();  ?></li>
                </ul>
            <?php  endforeach; ?>
        </section>
    </main>
</body>
</html>