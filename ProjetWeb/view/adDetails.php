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

            <font size="7"><font ><?=$article['inputNameAnnonce']; ?></font></font><br>
            <div class="row1">
                <img class="img" src="view/img/appartement/1.jpg" alt="">
            </div>
            <div class="row2">
                <font size="6"><font ><?=$article['inputAvailableDate']; ?></font></font><br><br>
                <font size="6"><font ><?=$article['inputPrice']; ?> CHF</font></font><br><br>
                <font size="5"><font ><?=$article['inputNPA']; ?></font></font>
                <font size="5"><font ><?=$article['inputCity']; ?></font></font><br><br>
                <font size="5"><font ><?=$article['inputAddress']; ?></font></font><br><br>
            </div>
            <div>
                <font size="6"><font ><?=$article['inputDescription']; ?></font></font><br>

            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
