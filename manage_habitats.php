<?php 
include 'includes/header.php'; 
include 'config/connection.php';

// Fetch all habitats from the database, sorted by name
$sql = "SELECT * FROM habitats ORDER BY nom ASC";
$result = $conn->query($sql);
$habitats = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="oswald text-uppercase">Inventaire des Habitats</h2>
        <a href="add_edit_habitat.php" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Ajouter un habitat
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 ps-4">Nom</th>
                        <th class="py-3">Type de Climat</th>
                        <th class="py-3">Zone du Zoo</th>
                        <th class="py-3">Description Courte</th>
                        <th class="py-3 text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($habitats) > 0): ?>
                        <?php foreach ($habitats as $h): ?>
                            <tr>
                                <td class="ps-4">
                                    <strong><?= htmlspecialchars($h['nom']) ?></strong>
                                </td>
                                
                                <td>
                                    <?= htmlspecialchars($h['typeclimat']) ?>
                                </td>
                                
                                <td>
                                    <span class="badge bg-success fs-6 fw-normal">
                                        <?= htmlspecialchars($h['zonezoo']) ?>
                                    </span>
                                </td>
                                
                                <td>
                                    <span class="d-inline-block text-truncate" style="max-width: 250px;" title="<?= htmlspecialchars($h['description']) ?>">
                                        <?= htmlspecialchars($h['description']) ?>
                                    </span>
                                </td>
                                
                                <td class="text-end pe-4">
                                    <a href="add_edit_habitat.php?id=<?= $h['id'] ?>" class="btn btn-sm btn-info text-white me-1" title="Modifier">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="logique/habitats_crud/action.php?delete_id=<?= $h['id'] ?>" 
                                       class="btn btn-sm btn-danger" 
                                       title="Supprimer"
                                       onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'habitat « <?= htmlspecialchars($h['nom']) ?> » ? Cette action est irréversible.');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                <i class="fas fa-info-circle me-2"></i>Aucun habitat n'a été créé pour le moment.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>