<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="visits.php">Visites</a></li>
            <li class="breadcrumb-item active">Safari au Cœur de la CAN</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <img src="https://images.unsplash.com/photo-1547407139-3c921a66005c?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow mb-4" alt="Safari">
            <h2>Safari au Cœur de la CAN</h2>
            <p class="text-muted"><i class="fas fa-map-marker-alt text-danger"></i> Zone : Savane & Atlas | <i class="fas fa-clock"></i> Durée : 45 min</p>
            <hr>
            <h4>À propos de cette visite</h4>
            <p>Embarquez pour une aventure virtuelle interactive. Ce parcours est spécialement conçu pour les fans de football souhaitant découvrir les animaux emblématiques des nations qualifiées pour la CAN 2025.</p>
            
            <h4 class="mt-4">Étapes du parcours</h4>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Introduction : L'histoire du Zoo ASSAD</li>
                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Rencontre avec les Lions de l'Atlas</li>
                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Les Gazelles du Sénégal et les Éléphants de Côte d'Ivoire</li>
                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Session de questions/réponses en direct</li>
            </ul>
        </div>

        <div class="col-lg-4">
            <div class="card shadow border-warning sticky-top" style="top: 100px;">
                <div class="card-body">
                    <h3 class="text-center mb-3">25 MAD <small class="text-muted">/ personne</small></h3>
                    <div class="d-grid gap-2">
                        <a href="reservation.php" class="btn btn-warning btn-lg fw-bold">Réserver ma place</a>
                    </div>
                    <hr>
                    <h6>Informations Guide</h6>
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://ui-avatars.com/api/?name=Ahmed+Alami&background=006233&color=fff" class="rounded-circle me-3" width="50" alt="Guide">
                        <div>
                            <strong>Ahmed Alami</strong><br>
                            <small class="text-muted">Expert Zoologiste</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>