<?php
// --- LOGIQUE PHP ---
// Connexion à la base de données
// $db = new PDO('mysql:host=localhost;dbname=assad_zoo', 'root', '');
// $query = $db->query("SELECT * FROM animaux JOIN habitats ON animaux.id_habitat = habitats.id");
// $animaux = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Animaux - ASSAD</title>
</head>
<body class="bg-gray-100">
    <nav class="bg-green-800 p-4 text-white"> </nav>

    <main class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Nos Animaux</h1>
        
        <div class="bg-white p-4 rounded shadow mb-6">
            <form method="GET" class="flex gap-4">
                <select name="habitat" class="border p-2 rounded">
                    <option value="">Tous les habitats</option>
                    </select>
                <button class="bg-green-600 text-white px-4 py-2 rounded">Filtrer</button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php /* foreach($animaux as $animal): */ ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="assets/img/lion.jpg" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="font-bold text-xl">Nom de l'animal</h2>
                    <p class="text-gray-600 text-sm italic">Espèce</p>
                    <p class="mt-2 text-gray-700">Description courte...</p>
                </div>
            </div>
            <?php /* endforeach; */ ?>
        </div>
    </main>
</body>
</html>