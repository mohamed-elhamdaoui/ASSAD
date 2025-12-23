<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tableau de bord Guide</h1>
        <a href="create_visit.php" class="btn btn-success"><i class="fas fa-plus me-2"></i>Créer une nouvelle visite</a>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fas fa-calendar-check fa-2x text-primary mb-2"></i>
                    <h3 class="fw-bold">12</h3>
                    <p class="text-muted mb-0">Visites réalisées</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fas fa-users fa-2x text-success mb-2"></i>
                    <h3 class="fw-bold">145</h3>
                    <p class="text-muted mb-0">Visiteurs au total</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fas fa-star fa-2x text-warning mb-2"></i>
                    <h3 class="fw-bold">4.8/5</h3>
                    <p class="text-muted mb-0">Note moyenne</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fas fa-wallet fa-2x text-danger mb-2"></i>
                    <h3 class="fw-bold">3,450 MAD</h3>
                    <p class="text-muted mb-0">Revenus générés</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0">Mes Visites Actives</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>Visite</th>
                        <th>Prix</th>
                        <th>Prochaine Session</th>
                        <th>Réservations</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>Safari au Cœur de la CAN</strong><br>
                            <small class="text-muted">Zone : Savane</small>
                        </td>
                        <td>25 MAD</td>
                        <td>20/12/2025 - 14:30</td>
                        <td><span class="badge bg-info text-dark">8 / 15</span></td>
                        <td>
                            <a href="edit_visit.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
                            <a href="manage_steps.php" class="btn btn-sm btn-outline-primary"><i class="fas fa-list-ol"></i> Étapes</a>
                            <a href="guide_reservations.php" class="btn btn-sm btn-outline-success"><i class="fas fa-users"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Les Secrets de l'Atlas</strong><br>
                            <small class="text-muted">Zone : Montagne</small>
                        </td>
                        <td>40 MAD</td>
                        <td>22/12/2025 - 10:00</td>
                        <td><span class="badge bg-info text-dark">5 / 10</span></td>
                        <td>
                            <a href="edit_visit.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
                            <a href="manage_steps.php" class="btn btn-sm btn-outline-primary"><i class="fas fa-list-ol"></i> Étapes</a>
                            <a href="guide_reservations.php" class="btn btn-sm btn-outline-success"><i class="fas fa-users"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>