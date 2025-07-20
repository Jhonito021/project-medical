<?php
class Database {
    private static $pdo;

    public static function connect() {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO("mysql:host=localhost;dbname=bdd_medicale_fictive;charset=utf8", "root", "", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Connexion échouée : " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
