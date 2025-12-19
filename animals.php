<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h2 class="oswald text-center mb-4">Nos Animaux - CAN 2025</h2>
    
    <div class="row g-2 mb-4">
        <div class="col-md-4">
            <select class="form-select border-maroc">
                <option selected>Tous les pays africains</option>
                <option>Maroc</option>
                <option>Sénégal</option>
                <option>Cameroun</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select border-atlas">
                <option selected>Tous les habitats</option>
                <option>Montagnes de l'Atlas</option>
                <option>Savane</option>
                <option>Désert</option>
            </select>
        </div>
        <div class="col-md-4">
            <button class="btn btn-maroc w-100">FILTRER</button>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <img src="lion.jpg" class="card-img-top" alt="Lion">
                <div class="card-body">
                    <h5 class="oswald">Assaad</h5>
                    <p class="small text-muted mb-1">Espèce : Lion de l'Atlas</p>
                    <p class="small text-muted mb-2">Origine : <span class="badge bg-danger">Maroc</span></p>
                    <a href="animal_details.php" class="btn btn-sm btn-outline-dark w-100">Voir Fiche</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>