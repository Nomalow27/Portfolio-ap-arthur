<?php
// Charger le fichier YAML
$data = yaml_parse_file("data/realisation.yaml");

$titre = htmlspecialchars($data['titre']); 

echo '<h2 class="comp-titre">' . $titre . '</h2>';  // Le fichier YAML est dans le dossier "data"

// Définir un tableau des chemins d'images directement dans le PHP
$images = [
    'Site Web' => 'image/imagesite.jpg',  // Chemin de l'image pour "Site Web"
    'Serveur GTA RP' => 'image/bleucity.webp', // Exemple pour "Serveur GTA RP" si besoin
    'Boutique en ligne' => 'image/shopify.jpg', // Exemple pour "Boutique en ligne"
    'Création de Script FiveM' => 'image/fivem.jpg'  // Chemin de l'image pour "Création de Script FiveM"
];

// Boucle sur les réalisations
echo '<div class="casting">';

foreach ($data['realisations'] as $projet) {
    $nom = htmlspecialchars($projet['nom']);
    $description = htmlspecialchars($projet['description']);
    $texte_inversé = $projet['texte_inversé'] ? 'texte-inversé' : '';  // Vérifie si le texte doit être inversé

    // Obtenez l'image correspondant au nom du projet
    $image = isset($images[$nom]) ? $images[$nom] : '';  // Récupère l'image associée au projet

    // Affichage de chaque projet avec l'image et la description
    echo '<section class="image1">';
    echo '<figure>';
    echo '<img src="' . $image . '" alt="' . $nom . '" />';  // Affiche l'image du projet
    echo '<figcaption class="' . $texte_inversé . '">' . $nom . '</figcaption>'; // Affiche le nom du projet
    echo '<p>' . $description . '</p>'; // Affiche la description du projet
    echo '</figure>';
    echo '</section>';
}

echo '</div>';
?>
