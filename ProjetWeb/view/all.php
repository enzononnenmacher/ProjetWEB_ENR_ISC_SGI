<?php

/**
 * @File : all.php
 * @Brief : Displays galllery
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */


$title = 'Gallery';

ob_start();
?>
    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        <article>
            <header class="section background-primary text-center">
                <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Gallery</h1>
            </header>
            <div class="section background-white">
                <div class="line">
                    <div class="margin">


                        <?php foreach($articles as $article) :?>
                            <div class="s-12 m-6 l-3">
                            <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                <div class="image-hover-overlay background-primary">

                                </div>
                                <img src="../view/img/bio.png" alt="" title="Portfolio Image 1"/>
                            </div>
                        </div>
                            <div class="s-12 m-6 l-3">
                            <div class="image-hover-overlay-content text-center padding-2x">
                                <?=$article['inputDescription']; ?>
                            </div>
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