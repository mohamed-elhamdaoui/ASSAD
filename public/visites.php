<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visites Guidées | ASSAD ZOO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .tour-card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: 0.3s; background: white; }
        .tour-card:hover { transform: translateY(-5px); }
        .step-badge { background-color: #d4af37; color: black; font-weight: bold; border-radius: 50%; padding: 5px 12px; margin-right: 10px; }
        .btn-atlas { background-color: #c1272d; color: white; border: none; font-weight: bold; }
        .btn-atlas:hover { background-color: #006233; color: white; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #1a3318 !important; border-bottom: 3px solid #d4af37;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">🦁 ASSAD <span style="color:#d4af37">ZOO</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="animaux.php">Animaux</a></li>
                <li class="nav-item"><a class="nav-link active" href="visites.php">Visites</a></li>
                <li class="nav-item"><a class="nav-link" href="lion_atlas.php">Lion de l'Atlas</a></li>
                <li class="nav-item ms-lg-3">
                    <a class="btn fw-bold" style="background-color: #c1272d; color: white;" href="login.php">Espace Membre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <h2 class="text-center mb-5 fw-bold" style="color: #1a3318;">Parcours & Visites Virtuelles</h2>

    <div class="card tour-card p-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="fw-bold" style="color: #006233;">Le Grand Safari de la CAN 2025</h3>
                <p class="text-muted">Un voyage immersif à travers les habitats les plus emblématiques d'Afrique.</p>
                <div class="d-flex flex-wrap gap-3 mb-3">
                    <span class="badge bg-dark">🕒 Durée: 1h30</span>
                    <span class="badge bg-secondary">🌐 Français / Arabe</span>
                    <span class="badge bg-danger">🔥 10 places restantes</span>
                </div>
                <h5 class="mt-4 mb-3">Étapes du parcours :</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><span class="step-badge">1</span> Zone Mammifères de l'Atlas</li>
                    <li class="mb-2"><span class="step-badge">2</span> Savane des Éléphants</li>
                    <li class="mb-2"><span class="step-badge">3</span> Volière Africaine</li>
                </ul>
            </div>
            <div class="col-md-4 text-center border-start">
                <p class="text-muted mb-0">Prix par personne</p>
                <h2 class="fw-bold" style="font-size: 2.5rem;">40 MAD</h2>
                <a href="login.php" class="btn btn-atlas btn-lg w-100 mt-3">Réserver ma place</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>