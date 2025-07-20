<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?php echo !empty($title) ? $title : 'Page'; ?>
</title>
  <link rel="stylesheet" href="public/bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/bootstrap-4.0.0-dist/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
</head>
<body class="light-mode" style="height: 100vh;">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
    <i class="fas fa-home me-2"></i> MediTrack
  </a>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link nav-icon-link patient" href="index.php?page=patients">
          <i class="fas fa-user-injured me-1"></i> Patients
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-icon-link medecin" href="index.php?page=medecins">
          <i class="fas fa-user-md me-1"></i> Médecins
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-icon-link consultation" href="index.php?page=consultations">
          <i class="fas fa-notes-medical me-1"></i> Consultations
        </a>
      </li>
    </ul>

    <!-- Bouton thème ici (inchangé) -->
    <button id="toggle-theme" class="btn btn-sm" style="border-radius: 50%;">
      <i class="fas fa-moon"></i>
    </button>
  </div>
</nav>
