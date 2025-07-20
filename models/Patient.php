<?php
require_once 'config/database.php';

class Patient {
    public static function search($query = '') {
        $pdo = Database::connect();
        if ($query) {
            $stmt = $pdo->prepare("SELECT * FROM Patients WHERE nom LIKE :q");
            $stmt->execute(['q' => "%$query%"]);
            return $stmt->fetchAll();
        } else {
            return $pdo->query("SELECT * FROM Patients LIMIT 100")->fetchAll();
        }
    }
}
