<?php

use ityakutia\partner\widgets\partner\assets\PartnerAsset;

$assetBundle = PartnerAsset::register($this);

?>

<style>
    .owl-carousel .owl-stage {
        display: flex;
        align-items: flex-start;
    }
    .owl-carousel .owl-stage .owl-item a p {
        font-size: 10px;
    }
    .owl-carousel .owl-stage .owl-item a img {
        padding: 5px 40px;
    }
</style>

<section>
    <div class="container">
        <h3>Полезные ссылки</h3>
    </div>
    <div class="owl-carousel">
        <?php foreach ($partners as $key => $partner) { ?>
            <div>
                <a href="<?= $partner->link ?>" target="_blank">
                    <img src="<?= $partner->photo ?>" alt="<?= $partner->title ?>">
                    <p class="text-center"><?= $partner->title ?></p>
                </a>
            </div>
        <?php } ?>
    </div>
</section>


<?php

$script = <<< JS
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        rewind: true,
        margin: 10,
        responsiveClass: true,
        center: true,
        responsive:{
            0:{
                items:3,
                nav:false
            },
            500:{
                items:4,
                nav:false
            },
            600:{
                items:6,
                nav:false
            },
            1000:{
                items:7,
                nav:false,
                loop:true,
            },
            1200:{
                items:8,
                nav:false,
                loop:true,
            },
            1400:{
                items:9,
                nav:false,
                loop:true,
            },
            1600:{
                items:10,
                nav:false,
                loop:true,
            },
            1800:{
                items:11,
                nav:false,
                loop:true,
            }
        }
    });
  });
JS;

$this->registerJS($script, static::POS_READY);
?>