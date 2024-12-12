<?php

include_once __DIR__ . '/../Database.php';

class Product {
    private $id;
    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $created_at;
    private $updated_at;
    private $brand_id;
    private $category_id;
    private $type_id;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getRate() {
        return $this->rate;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function getBrandId() {
        return $this->brand_id;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function getTypeId() {
        return $this->type_id;
    }

    public static function getAll() {
        $db = Database::getInstance();
        $stmt = $db->query("
            SELECT
                id as id,
                name as name,
                description as description,
                picture as picture,
                price as price,
                rate as rate,
                status as status,
                created_at as created_at,
                updated_at as updated_at,
                brand_id as brandId,
                category_id as categoryId,
                type_id as type_id
            FROM product
        ");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            SELECT
                id as id,
                name as name,
                description as description,
                picture as picture,
                price as price,
                rate as rate,
                status as status,
                created_at as created_at,
                updated_at as updated_at,
                brand_id as brandId,
                category_id as categoryId,
                type_id as type_id
            FROM product
            WHERE id = ?
        ");
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetch();
    }

    public static function getByCategory($categoryId) {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            SELECT
                id as id,
                name as name,
                description as description,
                picture as picture,
                price as price,
                rate as rate,
                status as status,
                created_at as created_at,
                updated_at as updated_at,
                brand_id as brandId,
                category_id as categoryId,
                type_id as type_id
            FROM product
            WHERE category_id = ?
        ");
        $stmt->execute([$categoryId]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public static function getByBrand($brandId) {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            SELECT
                id as id,
                name as name,
                description as description,
                picture as picture,
                price as price,
                rate as rate,
                status as status,
                created_at as created_at,
                updated_at as updated_at,
                brand_id as brandId,
                category_id as categoryId,
                type_id as type_id
            FROM product
            WHERE brand_id = ?
        ");
        $stmt->execute([$brandId]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public function getBrand() {
        if (!$this->brandId) {
            echo 'Erreur : brand_id est NULL ' . $this->id;
            return null;
        }

        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM brand WHERE id = ?");
        $stmt->execute([$this->brandId]);
        $brands = $stmt->fetch(PDO::FETCH_OBJ);

        if ($brands) {
            return $brands;
        } else {
            echo 'Erreur : marque non trouvée ' . $this->id . ' ' . $this->brandId;
            return null;
        }
    }
}
