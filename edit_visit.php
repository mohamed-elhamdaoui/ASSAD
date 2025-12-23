<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white">
                    <h3 class="h5 mb-0">Modifier : Safari au Cœur de la CAN</h3>
                </div>
                <div class="card-body p-4">
                    <form action="guide_dashboard.php" method="GET">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Titre de la visite</label>
                            <input type="text" class="form-control" value="Safari au Cœur de la CAN">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Statut</label>
                            <select class="form-select border-success">
                                <option selected>Active (Visible par les visiteurs)</option>
                                <option>Pause (Masquée temporairement)</option>
                                <option>Archive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea class="form-control" rows="5">Une immersion totale dans les habitats africains avec un focus sur les pays participants à la Coupe d'Afrique des Nations 2025.</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Prix (MAD)</label>
                                <input type="number" class="form-control" value="25">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Max Visiteurs</label>
                                <input type="number" class="form-control" value="15">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Prochaine Date</label>
                                <input type="datetime-local" class="form-control" value="2025-12-20T14:30">
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-danger">Supprimer la visite</button>
                            <div class="gap-2 d-flex">
                                <a href="guide_dashboard.php" class="btn btn-outline-secondary">Annuler</a>
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>