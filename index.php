<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/accueil.css" />
        <title>Portefolio</title>
    </head>
    <body>
        <nav>
    
        <?php 
    require_once("yaml/yaml.php");
    $data = yaml_parse_file("data/menu.yaml");
    
    echo "<div class='header'>";
        echo "<div class='image'>";
        echo "<img src='image/logoportfolio.png' />";
        echo "</div>";
        
        echo "<div class='menunav'>";
        echo "<ul class='menu'>";
        
        foreach($data["navigation"] as $nav){
            // Vérification des noms et génération des liens appropriés
            if ($nav["name"] == "Compétences") {
                echo '<li><a href="#competences">Compétences</a></li>';
            }
            if ($nav["name"] == "Accueil") {
                echo '<li><a href="#accueil">Accueil</a></li>';
            } 
            if ($nav["name"] == "Réalisations") {
                echo '<li><a href="#realisation">Réalisations</a></li>';
            } 
            if ($nav["name"] == "Formation") {
                echo '<li><a href="#formation">Formation</a></li>';
            } 
            if ($nav["name"] == "Contact") {
                echo '<li><a href="#contact">Contact</a></li>';
            } 
        }
        
        echo "</ul>";
        echo "</div>";
    echo "</div>";
    
    // Image d'arrière-plan pour la section d'accueil
    echo "<img class='menu-image' src='image/montagne.jpg' alt='Image d\'accueil'>";
?>
        ?>


        </nav>
<?php 
    require_once("yaml/yaml.php");
    include("php/accueil.php");

?>

<?php 
    require_once("yaml/yaml.php");
    include("php/competences.php");

?>

<?php 
    require_once("yaml/yaml.php");
    include("php/realisation.php");

?>

<?php 
    require_once("yaml/yaml.php");
    include("php/formations.php");

?>

<?php 
    require_once("yaml/yaml.php");
    include("php/contact.php");

?>
    
    <footer id="bas">
        <p>Suivez-moi</p>
        <div class="reseaux">
            <img src="image/logodiscord.png" alt="Discord">
            <img src="image/logo instagram.png" alt="Instagram">
            <img src="image/logo github.png" alt="Github">
        </div>
        <p id="fin">Copyright Arthur © 2024</p>
    </footer>

    </body>
</html>