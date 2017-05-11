<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carro".
 *
 * @property integer $id
 * @property integer $ano
 * @property string $modelo
 * @property string $cor
 */
class Carro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ano', 'modelo', 'cor'], 'required'],
            [['ano'], 'integer'],
            [['modelo', 'cor'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ano' => 'Ano',
            'modelo' => 'Modelo',
            'cor' => 'Cor',
        ];
    }
}
