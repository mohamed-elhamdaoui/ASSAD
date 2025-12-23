<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <h2 class="mb-4"><i class="fas fa-ticket-alt text-success me-2"></i>Finaliser ma réservation</h2>
                    <div class="bg-light p-3 rounded mb-4">
                        <h6 class="mb-1">Visite : Safari au Cœur de la CAN</h6>
                        <p class="mb-0 text-muted">Date : 20 Décembre 2025 à 14:30</p>
                    </div>

                    <form action="my_reservations.php" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Nombre de participants</label>
                            <input type="number" class="form-control" value="1" min="1" max="5">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mode de paiement (Simulé)</label>
                            <select class="form-select">
                                <option>Carte Bancaire Marocaine (CMI)</option>
                                <option>PayPal</option>
                                <option>Code Promo CAN2025</option>
                            </select>
                        </div>
                        <div class="alert alert-warning small">
                            En cliquant sur "Confirmer", vous recevrez un lien de connexion Zoom/Meet par email 15 minutes avant le début.
                        </div>
                        <button type="submit" class="btn btn-maroc w-100 btn-lg">Confirmer et Payer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>