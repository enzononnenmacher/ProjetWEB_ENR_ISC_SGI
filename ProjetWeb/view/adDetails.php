<?php
/**
 * @file     adDetails.php
 * @brief    This file is designed to display whatever ad details
 * @author   Created by Kevin.VAUCHER
 * @version  15.03.2021
 */

$title = "Détails";

ob_start();
?>
<div class="section background-white">
    <div class="line">
        <div class="margin">
            <a class="size-texte"><?=$article['inputNameAnnonce']; ?></a><br><br>
            <div class="row1">
                <img class="imgDetail"src="<?=$article['inputPictures']; ?>">
            </div>
            <div class="row2">
                <br><a class="size-texte2"><?=$article['inputAvailableDate']; ?></a><br><br>
                <a class="size-texte2"><?=$article['inputPrice']; ?> CHF</a><br><br>
                <a class="size-texte2"><?=$article['inputNPA']; ?></a>
                <a class="size-texte2"><?=$article['inputCity']; ?></a><br><br>
                <a class="size-texte2"><?=$article['inputAddress']; ?></a><br><br><br>
            </div>
            <div class="row1">
                <a class="size-texte2"><?=$article['inputDescription']; ?></a><br><br>
            </div>
            <div class="row2">
                <a href="mailto:<?=$article['Email']; ?>" class="submit-form button background-primary border-radius text-white">Envoyer un message à l'annonceur</a>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
