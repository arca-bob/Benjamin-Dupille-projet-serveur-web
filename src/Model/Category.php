<?php

include_once __DIR__ . '/../Database.php';

class Category {
    private $id;
    private $name;
    private $subtitle;
    private $picture;
    private $home_order;
    private $created_at;
    private $updated_at;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getHomeOrder() {
        return $this->home_order;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public static function getAll()
    {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM category");
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }
}
