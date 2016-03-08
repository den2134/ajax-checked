<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "text".
 *
 * @property string $id
 * @property string $info
 * @property bool $isCheck
 */
class Text extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info'], 'required'],
            [['info'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'info' => 'Info',
        ];
    }
}
