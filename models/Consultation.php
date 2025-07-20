<?php
require_once 'config/database.php';

class Consultation {
    public static function search($query = '') {
        $pdo = Database::connect();
        $sql = "
            SELECT c.id_consultation, p.nom AS patient, m.nom AS medecin, c.date_consultation, c.diagnostic
            FROM Consultations c
            JOIN Patients p ON c.id_patient = p.id_patient
            JOIN Medecins m ON c.id_medecin = m.id_medecin";

        if ($query) {
            $sql .= " WHERE p.nom LIKE :q OR m.nom LIKE :q OR c.diagnostic LIKE :q";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['q' => "%$query%"]);
        } else {
            $sql .= " ORDER BY c.date_consultation DESC LIMIT 50";
            $stmt = $pdo->query($sql);
        }

        return $stmt->fetchAll();
    }
}
