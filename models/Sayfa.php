<?php

namespace kouosl\feedreader\models;

use Yii;

/**
 * This is the model class for table "sayfa".
 *
 * @property integer $id
 * @property string $baslik
 * @property string $url
 */
class Sayfa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sayfa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baslik', 'url'], 'required'],
            [['baslik'], 'string', 'max' => 20],
            [['url'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'baslik' => 'Baslik',
            'url' => 'Url',
        ];
    }
}
