<?php
// Charger le fichier YAML
$data = yaml_parse_file("data/contact.yaml");

$titre = htmlspecialchars($data['titre']);

echo '<!DOCTYPE html>';
echo '<html lang="fr">';

// En-tête HTML
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Contact</title>';
echo '<link rel="stylesheet" href="css/styles.css">';  // Lien vers le fichier CSS
echo '</head>';

// Corps de la page
echo '<body>';

// Titre "Contact"
echo '<h2 class="comp-titre">' . $titre . '</h2>';

// Liste des contacts (sociétés, réseaux sociaux, etc.)
$contacts = $data['contacts'];

echo '<div id="contact-container">';

foreach ($contacts as $contact) {
    $nom = htmlspecialchars($contact['nom']);
    $description = htmlspecialchars($contact['description']);
    $lien = htmlspecialchars($contact['lien']);

    echo '<div class="contact-item">';
    echo '<h3>' . $nom . '</h3>';
    echo '<p>' . $description . '</p>';
    echo '<a href="' . $lien . '" target="_blank">Visiter</a>';
    echo '</div>';
}

echo '</div>';  // Fin du conteneur

// Intégration du JavaScript pour mélanger les éléments aléatoirement
echo '<script>
// Fonction pour mélanger les éléments de contact de manière aléatoire
function shuffleContacts() {
    var container = document.getElementById("contact-container");
    var items = Array.from(container.getElementsByClassName("contact-item"));
    
    // Mélange les éléments
    for (let i = items.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [items[i], items[j]] = [items[j], items[i]];
    }
    
    // Réorganiser les éléments mélangés dans le container
    items.forEach(item => container.appendChild(item));
}

// Appel de la fonction pour mélanger les contacts à chaque chargement
document.addEventListener("DOMContentLoaded", shuffleContacts);
</script>';

echo '</body>';
echo '</html>';
?>