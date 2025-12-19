<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejoindre ASSAD ZOO | Inscription & Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --maroc-red: #c1272d;
            --maroc-green: #006233;
            --atlas-gold: #d4af37;
        }
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .auth-card { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .btn-register { background-color: var(--maroc-green); color: white; font-weight: bold; }
        .btn-register:hover { background-color: #004d28; color: white; }
        .btn-login { background-color: var(--maroc-red); color: white; font-weight: bold; }
        .btn-login:hover { background-color: #a01f24; color: white; }
        .section-title { border-left: 5px solid var(--atlas-gold); padding-left: 15px; margin-bottom: 25px; }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-5">
    <div class="container">
        <a class="navbar-brand" href="index.php">🦁 ASSAD ZOO</a>
    </div>
</nav>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            
            <div class="card auth-card p-4 mb-5">
                <h2 class="section-title">S'inscrire (Nouveau membre)</h2>
                <form action="votre_logique_backend.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nom complet</label>
                        <input type="text" name="nom" class="form-control" placeholder="Ex: Ahmed Alami" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email@exemple.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Choisir votre rôle</label>
                        <select name="role" class="form-select" required>
                            <option value="visiteur">Visiteur (Supporter CAN)</option>
                            <option value="guide">Guide (Expert Zoo)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="8 caractères minimum" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-register w-100 py-2">Créer mon compte</button>
                </form>
            </div>

            <div class="card auth-card p-4">
                <h2 class="section-title">Déjà membre ? Se connecter</h2>
                <form action="votre_logique_backend.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="login_email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="login_password" class="form-control" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-login w-100 py-2">Connexion</button>
                </form>
            </div>

        </div>
    </div>
</div>

<footer class="text-center text-muted py-4">
    <small>&copy; 2025 ASSAD ZOO - Expérience CAN 2025</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>