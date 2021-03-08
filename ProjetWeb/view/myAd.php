<?php

/**
 * @File : contact.php
 * @Brief : Displays contact page
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */


$title = 'my ads';

ob_start();
?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>