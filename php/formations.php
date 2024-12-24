<?php
$data = yaml_parse_file("data/formations.yaml");

$titre = htmlspecialchars($data['titre']); 

echo '<h2 class="comp-titre">' . $titre . '</h2>';

if (!empty($data['formations'])) {
    echo '<section id="formations" class="frise_chronologique_formations">';
    foreach ($data['formations'] as $formation) {
        $formation_nom = htmlspecialchars($formation['nom']);
        $formation_class = strtolower(str_replace(' ', '-', $formation_nom)); // Convertir le nom en classe CSS

        echo '<div class="frise_formation ' . $formation_class . '">';
        echo '<a href="#" class="formation-titre">' . $formation_nom . '</a>'; // Lien pour la formation
        echo '<div class="texte_formation">'; // Texte contenant les informations

        $annee = htmlspecialchars($formation['annee'] ?? 'Non spécifiée');
        $lieu = htmlspecialchars($formation['lieu'] ?? 'Non spécifié');

        echo '<div class="details_formation">';
        echo '<h1 class="formation-nom">' . $formation_nom . '</h1>'; // Nom de la formation
        echo '<p class="formation-annee">Année : ' . $annee . '</p>'; // Année de la formation
        echo '<p class="formation-lieu">Lieu : ' . $lieu . '</p>'; // Lieu de la formation
        echo '</div>';

        echo '</div>';
        echo '</div>';
    }
    echo '</section>';
}
?>
