<?php
$data = yaml_parse_file("data/accueil.yaml");

if (!empty($data['presentation'])) {
    $presentation = $data['presentation'];

    // Ajouter l'ID "accueil" à la section de présentation
    echo '<section id="accueil" class="presentation-container">';
    echo '<div class="presentation-text">';
    echo '<h2>' . htmlspecialchars($presentation['prenom']) . ' ' . htmlspecialchars($presentation['nom']) . '</h2>';
    echo '<h3>' . htmlspecialchars($presentation['accroche']) . '</h3>';
    echo '<p>' . htmlspecialchars($presentation['description']) . '</p>';
    echo '</div>';
    echo '</section>';
}
?>

