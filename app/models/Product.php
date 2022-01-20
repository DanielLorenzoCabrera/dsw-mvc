<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

class Product extends Model {
    public function __construct() {
        parent::__construct();
    }

    public static function all(){
        //obtener conexion
        $db = Product::db();
        //preparar consulta
        $sql = "SELECT * FROM product_types";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    public static function find($id) {
        $db = Product::db();
        $stmt = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product = $stmt->fetch(PDO::FETCH_CLASS);

        return $product;
    }

    public function insert() {
        $db = Product::db();
        $stmt = $db->prepare('INSERT INTO product_types(name) VALUES(:name)');
        $stmt->bindValue(':name', $this->name);
        
        return $stmt->execute();
    }

    public function save() {
        $db = Product::db();
        $stmt = $db->prepare('UPDATE product_types SET name = :name  WHERE id = :id');
        $stmt->bindValue(':name', $this->name);
    
        return $stmt->execute();
    }

    public function delete() {
        $db = Product::db();
        $stmt = $db->prepare('DELETE FROM product_types WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }

}