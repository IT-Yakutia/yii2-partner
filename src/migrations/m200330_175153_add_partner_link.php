<?php

use yii\db\Migration;

/**
 * Class m200330_175153_add_partner_link
 */
class m200330_175153_add_partner_link extends Migration
{

    public function safeUp()
    {
        $this->addColumn('partner', 'link', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('partner', 'link');
    }
}
