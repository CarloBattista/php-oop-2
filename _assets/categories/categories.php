<?php

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