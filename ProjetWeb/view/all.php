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

                        <?php

                        for ($i = 0; $i < 100; $i++){
                            echo '<div class="s-12 m-6 l-3">
                            <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                <div class="image-hover-overlay background-primary">
                                    <div class="image-hover-overlay-content text-center padding-2x">
                                        <p>Dolestieuis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                            m.</p>
                                    </div>
                                </div>
                                <img src="../view/img/bio.png" alt="" title="Portfolio Image 1"/>
                            </div>
                        </div>
                        <div class="s-12 m-6 l-3">
                            <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                <div class="image-hover-overlay background-primary">
                                    <div class="image-hover-overlay-content text-center padding-2x">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                            molestie.</p>
                                    </div>
                                </div>
                                <img src="img/portfolio/thumb-09.jpg" alt="" title="Portfolio Image 2"/>
                            </div>
                        </div>';
                        }


                        ?>






                    </div>
                </div>
            </div>
        </article>
    </main>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>