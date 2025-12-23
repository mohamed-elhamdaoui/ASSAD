<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h2 class="oswald mb-5 text-center">📈 Tableau de Bord Analytique</h2>
    
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white fw-bold">Visiteurs par Pays (Top Afrique)</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">Maroc <span>540</span></li>
                        <li class="list-group-item d-flex justify-content-between">Sénégal <span>210</span></li>
                        <li class="list-group-item d-flex justify-content-between">Côte d'Ivoire <span>180</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white fw-bold">Top 3 Animaux (Vues)</div>
                <div class="card-body">
                    <canvas id="animalsChart" style="height:150px;"></canvas>
                    <p class="small text-muted mt-2">1. Lion de l'Atlas (2,500 vues)<br>2. Fennec (1,200 vues)<br>3. Éléphant (900 vues)</p>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card bg-dark text-white p-4">
                <div class="row text-center">
                    <div class="col-md-4">
                        <h1 class="display-5">124</h1>
                        <p class="text-uppercase small">Total Animaux</p>
                    </div>
                    <div class="col-md-4">
                        <h1 class="display-5">85%</h1>
                        <p class="text-uppercase small">Taux de remplissage visites</p>
                    </div>
                    <div class="col-md-4">
                        <h1 class="display-5">4.9/5</h1>
                        <p class="text-uppercase small">Note moyenne globale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>