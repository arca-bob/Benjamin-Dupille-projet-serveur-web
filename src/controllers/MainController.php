<?php

include_once __DIR__ . '/../Model/Brand.php';
include_once __DIR__ . '/../Model/Category.php';
include_once __DIR__ . '/../Model/Product.php';
include_once __DIR__ . '/../Model/Type.php';

class MainController
{
    public function catalogue()
{
    $categories = Category::getAll();
    $brands = Brand::getAll();
    //var_dump($categories);
    //var_dump($brands);
    $categoryId = $_GET['category_id'] ?? null;
    $brandId = $_GET['brand_id'] ?? null;

    if ($categoryId) {
        $catalogue = Product::getByCategory($categoryId);
    } elseif ($brandId) {
        $catalogue = Product::getByBrand($brandId);
    } else {
        $catalogue = Product::getAll();
    }
    //var_dump($catalogue);
    $this->render('catalogue', ['catalogue' => $catalogue, 'categories' => $categories, 'brands' => $brands]);
}


    public function produit1()
    {
        $productId = $_GET['id'] ?? null;
        if ($productId) {
            $product = Product::getById($productId);
            $this->render('produit1', ['product' => $product]);
        } else {
            $this->notFound();
        }
    }

    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    public function connexion()
    {
        $this->render('connexion');
    }

    public function inscription()
    {
        $this->render('inscription');
    }

    public function panier()
    {
        $this->render('panier');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        $this->render('404');
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
