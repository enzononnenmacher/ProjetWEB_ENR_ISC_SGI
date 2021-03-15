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

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
