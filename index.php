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

// Classe per categorie
class Category {
    public $id;
    public $name;
    public $icon;

    // Constructor per categorie
    public function __construct($id, $name, $icon) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
    }
}

// Creazione delle categorie
$dogCategory = new Category(1, "Cani", "fa-solid fa-dog");
$catCategory = new Category(2, "Gatti", "fa-solid fa-cat");

// Array prodotti
$products = array(
    new Product(1, "Pedigree Cibo Secco Cane Manzo e Vedure", 8.49, "Cani", "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/273547-200-200/pedigree-adult-manzo-e-verdure-.jpg?v=1771805671"),
    new Product(2, "Frontline Antiparassitario Spot-On per Gatti 4 Pipette", 19.99, "Gatti", "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/252970/Frontline-Spot-On-4-Pipette.jpg?v=637492391040130000"),
    new Product(3, "Ciambella per Cane Velvet Verde", 27.99, "Cani", "Accessori", "https://arcaplanet.vtexassets.com/arquivos/ids/272619-200-200/LUNA-TEO-CIAMBELLA-DIAM.50-VELVET-VERDE.jpg?v=1771228383"),
    new Product(4, "Gioco Cane Peluche Atlantide Pesce Pagliaccio", 7.35, "Cani", "Giochi", "https://arcaplanet.vtexassets.com/arquivos/ids/273061-200-200/LOVEDI-GIOCO-CANE-PELUCHE-ATLANTIDE-PESCE-PAGLIACC.jpg?v=1771970778"),
    new Product(5, "Tiragraffi Charles", 55.29, "Gatti", "Giochi", "https://arcaplanet.vtexassets.com/arquivos/ids/281134-1800-1800/luna-e-teo-tiragraffi-charles.jpg?v=1771978949&quality=1&width=1800&height=1800"),
    new Product(6, "Gioco Cane Peluche Funny Unicorno", 7.35, "Cani", "Giochi", "https://arcaplanet.vtexassets.com/arquivos/ids/273096-1800-1800/LOVEDI-GIOCO-CANE-PELUCHE-FUNNY-UNICORNO.jpg?v=1771970753&quality=1&width=1800&height=18000"),
    new Product(7, "Gioco Cane Peluche Foodie Kiwi", 4.38, "Cani", "Giochi", "https://arcaplanet.vtexassets.com/arquivos/ids/273087-1800-1800/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-KIWI.jpg?v=1771970778&quality=1&width=1800&height=1800"),
);

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