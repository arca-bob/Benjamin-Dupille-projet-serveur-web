
            <style>
                
           
                    button {
                        background-color: darkslategray;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                    }
                    
                    button:hover {
                        background-color: darkgray;
                    }
            </style>

        <?php
include "partials/header.php";
include_once __DIR__ . '/../Model/Category.php';
include_once __DIR__ . '/../Model/Brand.php';
include_once __DIR__ . '/../Model/Product.php';
//var_dump($brands);
//var_dump($catalogue);

?>

            <main class="main1">
            <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                    <div class="categorycata" onclick="window.location='/catalogue?category_id=<?= $category->getId() ?>';">
                        <img src="<?= htmlspecialchars($category->getPicture()) ?>" alt="<?= htmlspecialchars($category->getName()) ?>">
                        <h3><?= htmlspecialchars($category->getName()) ?></h3>
                        <p><?= htmlspecialchars($category->getSubtitle()) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucune catégorie disponible.</p>
            <?php endif; ?>



            <?php if (!empty($brands)): ?>
                <?php foreach ($brands as $brand): ?>
                    <div class="brandcata" onclick="window.location='/catalogue?brand_id=<?= $brand->getId() ?>';">
                        <h3><?= htmlspecialchars($brand->getName()) ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucune marque disponible.</p>
            <?php endif; ?>


            <?php if (empty($catalogue)): ?>
    <p class="noResults">Aucun produit trouvé.</p>
<?php else: ?>
    <?php foreach ($catalogue as $product): ?>
        <div class="cataloguesItem" onclick="window.location='/produit1?id=<?= $product->getId() ?>';">
            <img src="<?= htmlspecialchars($product->getPicture()) ?>" alt="<?= htmlspecialchars($product->getName()) ?>">
            <div class="catalogueContent">
                <h2><?= htmlspecialchars($product->getName()) ?></h2>
                <p><?= htmlspecialchars($product->getDescription()) ?></p>
                <p>Prix : <?= htmlspecialchars($product->getPrice()) ?> €</p>
                    <button>Ajouter au panier</button>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</main>



            
            <?php
include "partials/footer.php"
?>