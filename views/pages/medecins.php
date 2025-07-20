<div class="container mt-4">
  <h2>Médecins</h2>

  <form method="get" action="index.php" class="row g-3 mb-3">
    <input type="hidden" name="page" value="medecins">
    <div class="col-md-10">
        <input type="text" name="query" class="form-control" placeholder="Rechercher patient, médecin ou diagnostic" value="<?php echo htmlspecialchars($query); ?>">
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100">Rechercher</button>
    </div>
  </form>

  <table class="table table-bordered">
    <thead class="table-info">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Spécialité</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($medecins) > 0): ?>
        <?php foreach ($medecins as $m): ?>
          <tr>
            <td><?= $m['id_medecin'] ?></td>
            <td><?= $m['nom'] ?></td>
            <td><?= $m['specialite'] ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="3" class="text-center text-muted">Aucun résultat trouvé.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

