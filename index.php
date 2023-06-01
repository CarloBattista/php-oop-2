<?php

require_once __DIR__ . '/_assets/categories/categories.php';

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
    public function __construct($id, $title, $price, $category, $type, $image)
    {
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
    <!-- CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
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
            <!-- Card ciclate in modo dinamico tramite l'array -->
            <?php foreach ($products as $elem) { ?>
            <div class="card_pr">
                <div class="wrap_image">
                    <img class="image_product" src="<?php echo $elem->image ?>" alt="<?php echo $elem->title ?>" loading="lazy">
                    <div class="overlay">
                        <div class="box_type_product">
                            <!-- Se la categoria è uguale a "Cani" viene aggiunta la classe "fa-dog", se invece la categoria è uguale a "Gatti" viene aggiunta la classe "fa-cat" -->
                            <i class="fa-solid <?php echo $elem->category === 'Cani' ? 'fa-dog' : ($elem->category === 'Gatti' ? 'fa-cat' : '') ?>"></i>
                        </div>
                    </div>
                </div>
                <div class="container_info">
                    <h2 class="title_product"><?php echo $elem->title ?></h2>
                    <div class="primary_line">
                        <span class="price_content">&euro; <span class="price"><?php echo $elem->price ?></span></span>
                        <span class="type_content"><?php echo $elem->type ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>