<?php 
include 'includes/header.php'; 
include 'config/connection.php';

// Initialisation des variables pour le mode "Ajout"
$id = "";
$nom = "";
$typeclimat = "";
$description = "";
$zonezoo = "";
$pageTitle = "Ajouter une nouvelle Zone";

// Vérification si on est en mode "Modification"
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pageTitle = "Modifier l'Habitat";

    // Récupération des données actuelles de l'habitat
    $stmt = $conn->prepare("SELECT * FROM habitats WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $habitat = $result->fetch_assoc();

    if ($habitat) {
        $nom = $habitat['nom'];
        $typeclimat = $habitat['typeclimat'];
        $description = $habitat['description'];
        $zonezoo = $habitat['zonezoo'];
    }
}
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="manage_habitats.php" class="btn btn-sm btn-outline-secondary mb-3">
                <i class="fas fa-arrow-left me-2"></i>Retour à l'inventaire
            </a>

            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white p-3">
                    <h4 class="oswald mb-0"><?= $pageTitle ?></h4>
                </div>
                <div class="card-body p-4">
                    <form action="logique/habitats_crud/action.php" method="POST">
                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label fw-bold">Nom de la Zone / Habitat</label>
                                <input type="text" name="nom" class="form-control" 
                                       placeholder="ex: Montagnes de l'Atlas" 
                                       value="<?= htmlspecialchars($nom) ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Type de Climat</label>
                                <input type="text" name="typeclimat" class="form-control" 
                                       placeholder="ex: Semi-aride / Froid" 
                                       value="<?= htmlspecialchars($typeclimat) ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Localisation dans le Zoo</label>
                                <select name="zonezoo" class="form-select" required>
                                    <option value="" disabled <?= $zonezoo == "" ? 'selected' : '' ?>>Choisir une zone...</option>
                                    <option value="Zone Nord" <?= $zonezoo == "Zone Nord" ? 'selected' : '' ?>>Zone Nord (Atlas)</option>
                                    <option value="Zone Centrale" <?= $zonezoo == "Zone Centrale" ? 'selected' : '' ?>>Zone Centrale (Savane)</option>
                                    <option value="Zone Sud" <?= $zonezoo == "Zone Sud" ? 'selected' : '' ?>>Zone Sud (Désert)</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">Description Détaillée</label>
                                <textarea name="description" class="form-control" rows="4" 
                                          placeholder="Décrivez l'environnement, la végétation, etc."><?= htmlspecialchars($description) ?></textarea>
                            </div>

                            <div class="col-md-12 mt-4">
                                <button type="submit" name="<?= isset($_GET['id']) ? 'update_habitat' : 'add_habitat' ?>" 
                                        class="btn btn-success w-100 py-2 fw-bold text-uppercase">
                                    <i class="fas fa-save me-2"></i>Enregistrer l'Habitat
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>