<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moto".
 *
 * @property integer $id
 * @property integer $marca
 * @property integer $modelo
 * @property integer $cor
 */
class Moto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marca', 'modelo', 'cor'], 'required'],
            [['marca', 'modelo', 'cor'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'cor' => 'Cor',
        ];
    }
}
