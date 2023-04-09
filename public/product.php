<?php
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>

<body>
    <h1>Liste des produits :</h1>
    <ul>
        {% for product in products %}
        <li>{{ product }}</li>
        {% endfor %}
    </ul>
    {{ dump(products) }}
</body>

</html>


<?php
require_once 'vendor/autoload.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

$loader = new \Twig\Loader\FilesystemLoader('src/View');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

echo $twig->render('products.html.twig', [
    'products' => $products,
]);
