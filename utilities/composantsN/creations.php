<?php 
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La compagnie L'Engrenage est une compagnie de théâtre de rue multidisciplinaire. L'Engrenage parle du sensible avec joie et dynamisme! " />
    <title>Compagnie professionnelle de théâtre de rue | Marseille | cie L'Engrenage <!-- <?php echo $title; ?> --> </title>
    
    <!-- Lien vers logo pour favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/logos/logoNoir.jpg">

    <!-- Lien vers Font Awesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Lien vers le CSS et JavaScript -->
    <link rel="stylesheet" href="/LENGRENAGE/style.css">
    <script defer src="/LENGRENAGE/script.js"></script>
</head>

<div id="creations" class="container-fluid rec-section fit-text d-flex flex-column justify-content-end text-start fw-bold">
    <h2 class="p-4 mx-2 titre-section text-end">CREATIONS</h2>
</div>
<section class="creations-sec">
    <div class="d-flex flex-column">
        <div class="rec-red w-100" style="height: 10em; background-color: #FF0303;"></div>
        <div class="w-100" style="height: 10em; background-color: white;"></div>
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="/LENGRENAGE/assets/images/gg1.png" alt="Photo 1"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/gg3.png" alt="Infos 1"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/gg2.png" alt="Photo 2"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/bingo1.png" alt="Photo 3"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/bingo3.png" alt="Infos 2"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/bingo2.png" alt="Photo 4"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/lOM1.png" alt="Photo 5"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/lOM3.png" alt="Infos 3"></div>
                <div class="slide"><img src="/LENGRENAGE/assets/images/lOM2.png" alt="Photo 6"></div>
                <!-- Ajoutez plus de photos ici -->
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
        <div class="w-100" style="height: 10em; background-color: white;"></div>
    </div>
    
</section>


<script src="script.js"></script>
