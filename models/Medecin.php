<?php
require_once 'config/database.php';

class Medecin {
    public static function search($query = '') {
        $pdo = Database::connect();
        if ($query) {
            $sql = "SELECT * FROM Medecins 
                    WHERE nom LIKE :q OR specialite LIKE :q";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['q' => "%$query%"]);
            return $stmt->fetchAll();
        } else {
            return $pdo->query("SELECT * FROM Medecins")->fetchAll();
        }
    }
}
