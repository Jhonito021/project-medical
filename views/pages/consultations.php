<div class="container mt-4">
  <h2>Consultations</h2>

  <form method="get" action="index.php" class="row g-3 mb-3">
    <input type="hidden" name="page" value="consultations">
    <div class="col-md-10">
    <input type="text" name="query" class="form-control" placeholder="Rechercher patient, médecin ou diagnostic" value="<?php echo htmlspecialchars($query); ?>">

    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100">Rechercher</button>
    </div>
  </form>

  <table class="table table-striped">
    <thead class="table-secondary">
      <tr>
        <th>ID</th>
        <th>Patient</th>
        <th>Médecin</th>
        <th>Date</th>
        <th>Diagnostic</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($consultations) > 0): ?>
        <?php foreach ($consultations as $c): ?>
          <tr>
            <td><?= $c['id_consultation'] ?></td>
            <td><?= $c['patient'] ?></td>
            <td><?= $c['medecin'] ?></td>
            <td><?= $c['date_consultation'] ?></td>
            <td><?= $c['diagnostic'] ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5" class="text-center text-muted">Aucune consultation trouvée.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
