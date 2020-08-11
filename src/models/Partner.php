<?php

namespace ityakutia\partner\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use uraankhayayaal\sortable\behaviors\Sortable;

class Partner extends ActiveRecord
{
    public static function tableName()
    {
        return 'partner';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'sortable' => [
                'class' => Sortable::class,
                'query' => self::find(),
            ]
        ];
    }

    public function rules()
    {
        return [
            [['title', 'photo'], 'required'],
            [['sort', 'is_publish', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'photo'], 'string', 'max' => 255],
            [['link'], 'url'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'photo' => 'Фото',
            'link' => 'Ссылка',
            'sort' => 'Sort',
            'is_publish' => 'Опубликовать',
            'status' => 'Status',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }
}