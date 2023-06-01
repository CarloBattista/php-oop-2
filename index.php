<?php

// Classe prodotto
class Product
{
    public $id;
    public $title;
    public $price;
    public $category;
    public $type;
    public $image;

    // Constructor
    public function __construct($id, $title, $price, $category, $type, $image) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->image = $image;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./_assets/css/main.css">
</head>

<body>

    <!-- Header -->
    <div class="header">
        <a href="/index.php" class="logosite">
            <h1 class="typelogo">PetPlanet</h1>
        </a>
    </div>
    <!-- Container Main -->
    <div class="main">
        <!-- Container Products -->
        <div class="container_products">
            <!-- Card -->
            <div class="card_pr">
                <div class="wrap_image">
                    <img class="image_product" src="https://arcaplanet.vtexassets.com/arquivos/ids/269608/advantix-spot-on-25-40-kg.jpg?v=637830163490600000" alt="">
                </div>
                <div class="container_info">
                    <h2 class="title_product">Titolo prodotto</h2>
                    <h3 class="price_content">&euro; <span class="price">00,00</span></h3>
                </div>
            </div>
        </div>
    </div>

</body>

</html>