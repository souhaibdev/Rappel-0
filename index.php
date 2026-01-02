<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Ateliers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gestion des Ateliers</h1>
    </header>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #003366;
    color: white;
    padding: 20px 0;
    text-align: center;
}

main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: start;
    padding: 40px 20px;
}

.container {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    width: 90%;
    max-width: 600px;
}

.section {
    margin-bottom: 30px;
}

.section h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.section ul {
    list-style: none;
}

.section li {
    margin-bottom: 8px;
}

.section a {
    text-decoration: none;
    color: #0044cc;
    font-weight: bold;
}

.section a:hover {
    text-decoration: underline;
}

footer {
    background-color: #f0f0f0;
    text-align: center;
    padding: 15px 0;
    font-size: 14px;
    color: #666;
}

    </style>

    <main>
        <div class="container">
            <section class="section">
                <h2>👤 developpeurs</h2>
                <ul>
                    <li><a href="liste_developpeurs.php" >Liste des developpeurs</a></li>
                    <li><a href="ajout_developpeur.php" >+ Ajouter un developpeur</a></li>
                </ul>
            </section>

            <section class="section">
                <h2>🛠️ Projets</h2>
                <ul>
                    <li><a href="Projets/listPro.php" >Liste des Projet</a></li>
                    <li><a href="Projets/ajouterPro.php" >+ Ajouter un projet</a></li>
                </ul>
            </section>

            <section class="section">
                <h2>📝 Technologies</h2>
                <ul>
                    <li><a href="technologies/ajoterTech.php" >Liste des inscriptions</a></li>
                    <li><a href="technologies/listTech.php" >+ Nouvelle inscription</a></li>
                </ul>
            </section>
             <section class="section">
                <h2>📝 Technologies</h2>
                <ul>
                    <li><a href="affectations/ajouterAffec.php" >Liste des inscriptions</a></li>
                    <li><a href="affectations/listAffec.php" >+ Nouvelle inscription</a></li>
                </ul>
            </section>
        </div>
    </main>

    <footer>
        <p>© 2025 - Application de gestion des Projects | Développé en PHP & MySQL</p>
    </footer>
</body>
</html>
