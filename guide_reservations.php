<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="mb-4">
        <h2>Gestion des participants</h2>
        <p class="text-muted small">Suivi des inscriptions pour <strong>Safari au Cœur de la CAN (20/12/2025)</strong></p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Participant</th>
                        <th>Email</th>
                        <th>Nb Places</th>
                        <th>Montant Payé</th>
                        <th>Statut</th>
                        <th>Présence</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Yassine+Benali" class="rounded-circle me-2" width="30">
                                <strong>Yassine Benali</strong>
                            </div>
                        </td>
                        <td>yassine.ben@example.ma</td>
                        <td>2</td>
                        <td>50 MAD</td>
                        <td><span class="badge bg-success">Payé</span></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check1">
                                <label class="form-check-label" for="check1">Présent</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Moussa+Diop" class="rounded-circle me-2" width="30">
                                <strong>Moussa Diop</strong>
                            </div>
                        </td>
                        <td>moussa@senegal.sn</td>
                        <td>1</td>
                        <td>25 MAD</td>
                        <td><span class="badge bg-success">Payé</span></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check2">
                                <label class="form-check-label" for="check2">Présent</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white text-end">
            <button class="btn btn-outline-primary btn-sm"><i class="fas fa-envelope me-2"></i>Envoyer un rappel collectif</button>
            <button class="btn btn-success btn-sm"><i class="fas fa-file-export me-2"></i>Exporter PDF</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>