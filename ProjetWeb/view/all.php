<?php

/**
 * @File : all.php
 * @Brief : Displays galllery
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Author : Updated by Ivan STOJILOVIC
 * @Version : 14-03-2021
 */


    $title = 'Annonces';

ob_start();
?>
    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        <article>
            <header class="section background-primary text-center">
                <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Annonces</h1>
            </header>
            <div class="section background-white">
                <div class="line">
                    <div class="margin">


                        <?php foreach($articles as $article) :?>
                            <div class="s-12 m-6 l-3">
                            <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                <img src="../view/img/bio.png" alt="" title="Image principale de l'annonce"/>
                            </div>
                        </div>
                            <div class="s-12 m-6 l-3">
                                <br><strong><?=$article['inputNameAnnonce']; ?></strong><br>
                                <?=$article['inputPrice']; ?> CHF<br>
                                <?=$article['inputCity']; ?><br>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </article>
    </main>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>