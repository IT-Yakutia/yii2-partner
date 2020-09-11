<?php

use yii\db\Migration;

/**
 * Class m200911_103602_add_partner_role
 */
class m200911_103602_add_partner_role extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $partnerRedactor = $auth->getPermission('partner');
        if($partnerRedactor == null){
            $partnerRedactor = $auth->createPermission('partner');
            $partnerRedactor->description = 'Редактирование партнеров';

            $auth->add($partnerRedactor);

            $operator = $auth->getRole('operator');
            if($operator != null || $operator != false)
                $auth->addChild($operator,$partnerRedactor);
        }
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $partnerRedactor = $auth->getPermission('partner');
        if($partnerRedactor !== null)
            $auth->remove($partnerRedactor);
        
    }
}
