<?php

/**
 * @File : home.php
 * @Brief : Displays homepage
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */


$title = 'home';

ob_start();
?>
<!-- MAIN -->
<main role="main">
    <!-- Main Carousel -->
    <section class="section background-dark">
        <div class="line">
            <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
                <div class="item">
                    <div class="s-12 center">
                        <img src="view/img/01-boxed.jpg" alt="">
                        <div class="carousel-content">
                            <div class="padding-2x">
                                <div class="s-12 m-12 l-8">
                                    <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">
                                        Appartement de colocation</p>
                                    <p class="text-white text-size-16 margin-bottom-40">Bon site de colocation.<br>Crois-moi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="s-12 center">
                        <img src="view/img/02-boxed.jpg" alt="">
                        <div class="carousel-content">
                            <div class="padding-2x">
                                <div class="s-12 m-12 l-8">
                                    <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">
                                        Appartement de colocation</p>
                                    <p class="text-white text-size-16 margin-bottom-30">Bon site de colocation.
                                        Crois-moi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1 -->
    <section class="section background-white">
        <div class="line">
            <div class="margin">
                <div class="s-12 m-12 l-4 margin-m-bottom">
                    <img class="margin-bottom" src="view/img/appartement/1.jpg" alt="">
                    <h2 class="text-thin">Bonne chambre</h2>
                    <h2 class="text-thin"><strong>200 CHF</strong></h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="index.php?action=adDetails">Read more</a>
                </div>
                <div class="s-12 m-12 l-4 margin-m-bottom">
                    <img class="margin-bottom" src="view/img/appartement/2.jpg" alt="">
                    <h2 class="text-thin">Grande salle de vie</h2>
                    <h2 class="text-thin"><strong>730 CHF</strong></h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="index.php?action=adDetails">Read more</a>
                </div>
                <div class="s-12 m-12 l-4 margin-m-bottom">
                    <img class="margin-bottom" src="view/img/appartement/3.jpg" alt="">
                    <h2 class="text-thin">Chambre avec grand lit</h2>
                    <h2 class="text-thin"><strong>390 CHF</strong></h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="index.php?action=adDetails">Read more</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
