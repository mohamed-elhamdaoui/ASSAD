<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <h2 class="mb-4">Demandes de Guides en Attente</h2>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-warning border-start border-5">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://ui-avatars.com/api/?name=Dr+Karim+Zaim" class="rounded-circle me-3" width="60">
                        <div>
                            <h5 class="mb-0">Dr. Karim Zaim</h5>
                            <p class="text-muted small mb-0">Expert en primatologie</p>
                        </div>
                    </div>
                    <p class="small">"Je souhaite partager mes connaissances sur les macaques de barbarie avec les supporters africains durant la CAN."</p>
                    <hr>
                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-outline-danger btn-sm">Rejeter</button>
                        <button class="btn btn-success btn-sm">Approuver le Guide</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>