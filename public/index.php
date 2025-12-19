<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSAD - Zoo Virtuel CAN 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <nav class="bg-green-800 text-white p-4 flex justify-between">
        <div class="font-bold text-xl">ASSAD ZOO</div>
        <div>
            <a href="index.php" class="px-4">Accueil</a>
            <a href="animaux.php" class="px-4">Animaux</a>
            <a href="login.php" class="px-4 bg-yellow-600 rounded">Connexion</a>
        </div>
    </nav>

    <section class="hero-section bg-cover bg-center h-[80-screen]" style="background-image: url('assets/lion-atlas.jpg'); min-height: 80vh;">
        <div class="overlay bg-black bg-opacity-50 h-full min-h-[80vh] flex items-center justify-center text-center text-white">
            <div class="p-4">
                <h1 class="text-5xl font-bold mb-4">Rencontrez ASSAD au Cœur de la CAN 2025</h1>
                <p class="text-xl mb-6">Explorez la majesté du Lion de l'Atlas et la biodiversité africaine.</p>
                <a href="visites.php" class="bg-yellow-500 hover:bg-yellow-600 px-8 py-3 rounded-full font-bold text-black transition">Réserver une visite</a>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-16 p-6">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 p-4">
                <h2 class="text-4xl font-bold text-green-800 mb-4">Assad - Le Roi de l'Atlas</h2>
                <p class="mt-4 text-gray-700 leading-relaxed text-lg">
                    Symbole de force et de fierté marocaine, le Lion de l'Atlas est le gardien de nos montagnes. 
                    À l'occasion de la CAN 2025, découvrez son histoire fascinante et son habitat naturel à travers nos parcours interactifs.
                </p>
                <div class="mt-6">
                    <span class="bg-green-100 text-green-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">Espèce Protégée</span>
                    <span class="bg-blue-100 text-blue-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">Origine : Maroc</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d" alt="Lion de l'Atlas" class="rounded-lg shadow-2xl border-4 border-white">
            </div>
        </div>
    </section>
    <footer class="bg-green-900 text-white text-center p-8 mt-10">
        <p>&copy; 2025 Zoo Virtuel ASSAD - Spécial CAN 2025 Maroc</p>
    </footer>

</body>
</html>