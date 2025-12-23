<?php include 'includes/header.php'; ?>

<?php
include 'config/connection.php';

$sql = "select *, habitats.nom as habitat_nom, animaux.nom as animal_nom , animaux.id as animaux_id from animaux  , habitats where animaux.id_habitat = habitats.id order by animaux_id ";

$result = $conn->query($sql);

// print_r();
$rows = $result->fetch_all(mode: 1);


?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Inventaire des Animaux</h2>
        <a href="add_animal.php" class="btn btn-success"><i class="fas fa-plus me-2"></i>Ajouter un animal</a>
    </div>



    <div class="card border-0 shadow-sm text-center">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Espèce scientifique</th>
                    <th>Habitat</th>
                    <th>Pay d'origine</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($rows as $row) { ?>
                    <tr>
                        <td><img src="<?= $row['image'] ?>" class="rounded shadow-sm"
                                alt="<?= $row['animal_nom'] ?>"
                                style="width: 60px; height: 60px; object-fit: cover; border: 1px solid #ddd;"></td>
                        <td><strong><?= $row['animal_nom'] ?></strong></td>
                        <td> <?= $row['espece'] ?> </td>
                        <td><?= $row['habitat_nom'] ?></td>
                        <td><span class="text-success fw-bold"><?= $row['paysorigine'] ?></span></td>
                        <td>
                            <a href="edit_animal.php?id=<?php echo $row['animaux_id'] ?>" class="btn btn-sm btn-info text-white"><i class="fas fa-pen"></i></a>
                            <a href="logique/delete_animal.php?id=<?php echo $row['animaux_id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>