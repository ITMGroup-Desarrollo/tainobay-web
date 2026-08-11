<?php
include("../include/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree - Taino Bay</title>
</head>
<body>
    <h1>Taino Bay Linktree</h1>
    
    <h2>Videos alojados en este directorio:</h2>
    <ul>
        <li><a href="<?php echo $path; ?>assets/videos/TainoBay_compri.mp4" target="_blank">TainoBay_compri.mp4</a></li>
        <li><a href="<?php echo $path; ?>assets/videos/TainoBay.mp4" target="_blank">TainoBay.mp4</a></li>
        <li><a href="<?php echo $path; ?>assets/videos/video-puerto-taino.mp4" target="_blank">video-puerto-taino.mp4</a></li>
        <li><a href="<?php echo $path; ?>assets/videos/video-puerto-taino_old.mp4" target="_blank">video-puerto-taino_old.mp4</a></li>
    </ul>

    <h2>Página Principal:</h2>
    <ul>
        <li><a href="https://porttainobay.com/es/home" target="_blank">Taino Bay - Home (es/home)</a></li>
    </ul>

    <h2>Redes Sociales (Enlaces visibles sin CSS):</h2>
    <ul>
        <li><a href="https://www.facebook.com//tainobayport/" target="_blank">Facebook de Taino Bay</a></li>
        <li><a href="https://www.instagram.com/porttainobay" target="_blank">Instagram de Taino Bay</a></li>
        <li><a href="https://www.tripadvisor.com.mx/Attraction_Review-g147290-d23803203-Reviews-Taino_Bay_Puerto_Plata-Puerto_Plata_Puerto_Plata_Province_Dominican_Republic.html" target="_blank">TripAdvisor de Taino Bay</a></li>
    </ul>

    <hr>

    <h2>Código de Redes Sociales Original (según plantilla):</h2>
    <div class="item-social">
        <a href="https://www.facebook.com//tainobayport/" class="link black black-hover" target="_self" aria-label="Facebook de Taino Bay"><i class="icon fab fa-facebook-f" style="color: white; font-size:2rem"></i></a>
        <a href="https://www.instagram.com/porttainobay" class="link black black-hover" target="_self" aria-label="Instagram de Taino Bay"><i class="icon fab fa-instagram" style="color: white; font-size:2rem;"></i></a>
        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g147290-d23803203-Reviews-Taino_Bay_Puerto_Plata-Puerto_Plata_Puerto_Plata_Province_Dominican_Republic.html" class="link black black-hover" target="_self" aria-label="TripAdvisor de Taino Bay"><img src="<?php echo $path; ?>assets/images/icons/tripadvisor-blanco.png" width="30" height="30" alt="Icono Tripadvisor"></a>
    </div>
</body>
</html>
