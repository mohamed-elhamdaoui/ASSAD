<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lion de l'Atlas | ASSAD ZOO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root { --maroc-red: #c1272d; --maroc-green: #006233; --atlas-gold: #d4af37; --dark-forest: #1a3318; }
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .navbar { background-color: var(--dark-forest) !important; border-bottom: 3px solid var(--atlas-gold); }
        
        .lion-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1546182990-dffeafbe841d');
            background-size: cover; background-position: center; height: 50vh; display: flex; align-items: center; color: white;
        }
        .info-box { border-left: 5px solid var(--maroc-red); background: #fff; padding: 25px; border-radius: 0 15px 15px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .btn-atlas { background-color: var(--maroc-red); color: white; border: none; font-weight: bold; padding: 12px 30px; }
        .btn-atlas:hover { background-color: var(--maroc-green); color: white; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">🦁 ASSAD <span style="color:var(--atlas-gold)">ZOO</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="animaux.php">Animaux</a></li>
                <li class="nav-item"><a class="nav-link" href="visites.php">Visites</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="lion_atlas.php" style="color: var(--atlas-gold) !important;">Lion de l'Atlas</a></li>
                <li class="nav-item ms-lg-3">
                    <a class="btn fw-bold" style="background-color: var(--maroc-red); color: white;" href="login.php">Espace Membre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="lion-hero text-center">
    <div class="container">
        <h1 class="display-2 fw-bold text-uppercase">Le Lion de l'Atlas</h1>
        <p class="h3" style="color: var(--atlas-gold);">Fierté Nationale du Maroc</p>
    </div>
</header>

<div class="container my-5 py-4">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <h2 class="fw-bold mb-4" style="color: var(--maroc-green);">Présentation du Roi</h2>
            <p class="lead">Le Lion de l'Atlas est le symbole de la puissance marocaine, indissociable de notre histoire et de notre équipe nationale de football.</p>
            <p>Connu pour sa crinière sombre et son port majestueux, il représente l'âme de la nature nord-africaine que nous célébrons pour la <strong>CAN 2025</strong>.</p>
            
            <div class="info-box my-4">
                <h5 class="fw-bold">Statut : <span class="text-danger">Éteint à l'état sauvage</span></h5>
                <p class="mb-0">Aujourd'hui, le Zoo National de Rabat joue un rôle clé mondial dans sa préservation.</p>
            </div>
            
            <a href="visites.php" class="btn btn-atlas rounded-pill mt-3">Voir en visite virtuelle 🐾</a>
        </div>
        <div class="col-md-6">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1614027126733-75778006768e" class="img-fluid rounded-4 shadow-lg" alt="Lion Atlas">
                <div class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark p-2">Symbole CAN 2025</div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4">
    <p class="mb-0">&copy; 2025 ASSAD ZOO - Pour le Maroc, pour l'Afrique.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>