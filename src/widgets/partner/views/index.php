<?php

use ityakutia\partner\widgets\partner\assets\PartnerAsset;

$assetBundle = PartnerAsset::register($this);

?>

<style>
    .owl-carousel .owl-stage {
        display: flex;
        align-items: center;
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
        margin: 50,
        responsiveClass: true,
        center: true,
        responsive:{
            0:{
                items:3,
                nav:false
            },
            600:{
                items:6,
                nav:false
            },
            1000:{
                items:8,
                nav:false,
                loop:true,
            }
        }
    });
  });
JS;

$this->registerJS($script, static::POS_READY);
?>