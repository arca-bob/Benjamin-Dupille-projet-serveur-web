            <style>
                html{
                      font-family:cursive
                  }


                    header {
                        width: 100%;
                        padding-top: 30px;
                        background-color: lightgrey;
                        flex-wrap: wrap;
                        justify-content: space-evenly;
                        display: flex;
                        align-items: center;
                        text-decoration: none;
                    }
                  #headersearch {
                        height: 50%;
                        width: 20%;
                        margin-bottom: 15px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background-color: white;
                        border-radius: 50px;

                    }


                    #recherche {
                        height: 100%;
                        width: 80%;
                        margin: 10%;
                        border: none;
                        background-color: white;
    
                    }
                    #recherche2 {
                        height: 1%;
                        margin: 5%;
                    }

                  body{
                      margin: auto;
                  }



                    main article img {
                        width: 5%;

                    }

                    

                  
                  footer {
                      background-color: blanchedalmond;
                      justify-content: center;
                      width: 100%;
                      display: flex;  
                  }

                  footer iframe {
                      width: 70%;

                  }

                  footer p {
                      width: 30%;
                  }
                  
                
           
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
    ?>

            <main>
               <?php
include_once __DIR__ . '/../Model/Product.php';

$productId = $_GET['id'] ?? null;

if ($productId) {
    $product = Product::getById($productId);
    if ($product): ?>
        <div class="productDetail">
            <img src="<?= htmlspecialchars($product->getPicture()) ?>" alt="<?= htmlspecialchars($product->getName()) ?>">
            <div class="productContent">
                <h2><?= htmlspecialchars($product->getName()) ?></h2>
                <p><?= htmlspecialchars($product->getDescription()) ?></p>
                <p>Prix : <?= htmlspecialchars($product->getPrice()) ?> €</p>
                    <button>Ajouter au panier</button>
            </div>
        </div>
    <?php else: ?>
        <p>Produit non trouvé.</p>
    <?php endif;
} else {
    echo '<p>Produit non trouvé.</p>';
}
?>


            </main>

            <?php
include "partials/footer.php"
?>
