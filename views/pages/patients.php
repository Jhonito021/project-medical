<div class="container mt-4">
  <h2>Patients</h2>

  <form method="get" action="index.php" class="row g-3 mb-3">
    <input type="hidden" name="page" value="patients">
    <div class="col-md-10">
    <input type="text" name="query" class="form-control" placeholder="Rechercher patient, médecin ou diagnostic" value="<?php echo htmlspecialchars($query); ?>">
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100">Rechercher</button>
    </div>
  </form>

  <table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Groupe sanguin</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($patients) > 0): ?>
        <?php foreach ($patients as $p): ?>
          <tr>
            <td><?= $p['id_patient'] ?></td>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['date_naissance'] ?></td>
            <td><?= $p['groupe_sanguin'] ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="4" class="text-center text-muted">Aucun patient trouvé.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
