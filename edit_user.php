<?php include 'includes/header.php'; ?>
<?php
include 'config/connection.php';

echo $id = $_GET["id"];

$currUser_query = "SELECT * from utilisateurs where id = $id order by id";

$result = $conn->query($currUser_query);
// print_r($user->fetch_all());
$user = $result->fetch_assoc();

print_r($user);

?>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white">
                    <h5 class="oswald mb-0">Modifier l'utilisateur #1035</h5>
                </div>
                <div class="card-body p-4">
                    <form action="logique/users_crud/action.php" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="mb-3">
                            <label class="form-label">Nom complet</label>
                            <input type="text" class="form-control" name="nom" value="<?= $user["nom"] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $user["email"] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rôle</label>
                            <select class="form-select" name="role">
                                <option value="Admin" <?= $user["role"] == "Admin" ? 'selected' : '' ?>>Admin</option>
                                <option value="Guide" <?= $user["role"] == "Guide" ? 'selected' : '' ?>>Guide</option>
                                <option value="Visiteur" <?= $user["role"] == "Visiteur" ? 'selected' : '' ?>>Visiteur</option>
                            </select>
                        </div>
                        <div class="form-check form-switch mb-4">
                            <!-- input khawi dima kanssift b 0 -->
                            <input name="activeStatus" class="form-check-input" value="0"  type="hidden" id="activeStatus" >

                            <!-- had input gha ovveride lowla ila kan actif w ila khawi kankhod l value li 9bel -->
                            <input name="activeStatus" class="form-check-input" type="checkbox" value="1" id="activeStatus" <?= $user["status_approbation"] == 1 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="activeStatus">Compte Actif</label>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" name="edit" class="btn btn-maroc flex-grow-1">METTRE À JOUR</button>
                            <a href="manage_users.php" class="btn btn-outline-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>