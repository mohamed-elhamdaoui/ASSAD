<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h2 class="oswald mb-4">Définir le Parcours (Ajout en masse)</h2>
    <form action="guide_dashboard.php">
        <div id="steps-container">
            <div class="card mb-3 border-start border-maroc border-4">
                <div class="card-body row g-3">
                    <div class="col-md-1">
                        <label class="form-label">Ordre</label>
                        <input type="number" class="form-control" name="ordreetape[]" value="1">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Titre de l'étape</label>
                        <input type="text" class="form-control" name="titreetape[]" placeholder="ex: Zone Crocodiles">
                    </div>
                    <div class="col-md-7">
                        <label class="form-label">Description / Instructions</label>
                        <input type="text" class="form-control" name="descriptionetape[]">
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-secondary mb-3" onclick="alert('JS: Ajoute un nouveau bloc de formulaire ici')">+ Ajouter une étape</button>
        <hr>
        <button type="submit" class="btn btn-maroc w-100">VALIDER LE PARCOURS COMPLET</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>