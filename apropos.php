<?php
include 'includes/header.php';
?>

<h2>À propos</h2>
<p>Ce site web est un projet de démonstration réalisé en PHP pour la médiathèque IPNET.</p>

<p>
    <strong>Date et heure actuelles :</strong> 
    <?php 
    date_default_timezone_set('Africa/Lome');
    echo date('d/m/Y à H:i'); 
    ?>
</p>

<?php
include 'includes/footer.php';
?>