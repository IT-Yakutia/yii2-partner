<?php

namespace ityakutia\partner\widgets\partner;

use ityakutia\partner\models\Partner;
use yii\base\Widget;

class PartnerWidget extends Widget
{
    public function run()
    {
        $partners = Partner::find()->where(['is_publish' => 1])->orderBy(['sort' => SORT_ASC])->all();
        
        return $this->render('index', [
            'partners' => $partners,
        ]);
    }
}