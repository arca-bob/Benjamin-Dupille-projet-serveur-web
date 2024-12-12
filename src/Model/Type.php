<?php

include_once __DIR__ . '/../Database.php';


class Type {
    private $id;
    private $name;
    private $created_at;
    private $updated_at;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
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
        $stmt = $db->query("select * from type");
        $type = $stmt->fetchall(PDO::fetch_class, 'type');
        return $type;
    }
}
