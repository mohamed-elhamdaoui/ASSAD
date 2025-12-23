<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <h2 class="mb-4">Mes Réservations</h2>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Date</th>
                    <th>Visite</th>
                    <th>Guide</th>
                    <th>Prix</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20/12/2025 - 14:30</td>
                    <td><strong>Safari au Cœur de la CAN</strong></td>
                    <td>Ahmed Alami</td>
                    <td>25 MAD</td>
                    <td><span class="badge bg-success">Confirmé</span></td>
                    <td><button class="btn btn-sm btn-outline-primary" disabled>Lien bientôt disponible</button></td>
                </tr>
                <tr>
                    <td>15/12/2025 - 10:00</td>
                    <td>Les Ailes du Maroc</td>
                    <td>Sarah Dridi</td>
                    <td>Gratuit</td>
                    <td><span class="badge bg-secondary">Terminé</span></td>
                    <td><a href="add_comment.php" class="btn btn-sm btn-warning text-dark">Laisser un avis</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>