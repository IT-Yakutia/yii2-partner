<?php

namespace ityakutia\partner\tests\fixtures;

use ityakutia\partner\models\Partner;
use yii\test\ActiveFixture;

class PartnerFixture extends ActiveFixture
{
    public $modelClass = Partner::class;
    public $dataFile = '@ityakutia/partner/tests/_data/partner.php';
}