<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body p-4">
                    <h3>Votre avis nous intéresse !</h3>
                    <p class="text-muted">Partagez votre expérience sur la visite : <strong>Les Ailes du Maroc</strong></p>
                    <hr>
                    <form action="my_reservations.php" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Note</label>
                            <div class="text-warning h3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star text-muted"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Votre commentaire</label>
                            <textarea class="form-control" rows="4" placeholder="Qu'avez-vous pensé de l'interactivité et des connaissances du guide ?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-maroc w-100">Publier mon avis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>