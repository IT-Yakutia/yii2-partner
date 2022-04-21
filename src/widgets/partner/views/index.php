<?php

use ityakutia\partner\widgets\partner\assets\PartnerAsset;

$assetBundle = PartnerAsset::register($this);

?>


<section>
    <div class="container">
        <h3 class="text-center mb-3">Полезные ссылки</h3>
    </div>
    <div class="owl-carousel partner-owl-carousel">
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